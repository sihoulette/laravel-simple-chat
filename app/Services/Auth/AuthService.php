<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Contracts\OAuth\OAuthTokenGenerator;
use Illuminate\Http\Client\Response as ClientResponse;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;
use Illuminate\Support\Facades\Http;

/**
 * Class AuthService
 *
 * @package App\Services\Auth
 */
final class AuthService implements OAuthTokenGenerator
{
    /**
     * @param array $data
     *
     * @return array
     * @author sihoullete
     */
    public function register(array $data = []): array
    {
        $clientData['username'] = $data['email'];
        $clientData['password'] = $data['password'];

        DB::beginTransaction();
        try {
            $resp['success'] = true;
            $data['password'] = Hash::make($data['password']);
            $user = User::create($data);
            event(new Registered($user));
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            $resp['success'] = false;
            $resp['exception'] = $e->getMessage();
        }

        // Attempt login user
        $login = $this->login($clientData);

        return $login['success'] ? $login : $resp;
    }

    /**
     * @param array $data
     *
     * @return array
     * @author sihoullete
     */
    public function login(array $data = []): array
    {
        $resp['success'] = false;
        if (auth()->attempt($data)) {
            $clientData['username'] = $data['email'];
            $clientData['password'] = $data['password'];

            $clientResp = $this->generateTokens($clientData, OAuthTokenGenerator::BY_PASSWORD);
            switch ($clientResp->status()) {
                case SymfonyResponse::HTTP_OK :
                    $resp['success'] = true;
                    $resp['user'] = auth()->user();
                    $resp['token'] = $clientResp->object();
                    break;
                case SymfonyResponse::HTTP_UNAUTHORIZED :
                    $resp['error'] = 'Invalid client';
                    break;
            }
        } else {
            $resp['error'] = 'Unauthorised';
        }

        return $resp;
    }

    /**
     * @param array $data
     *
     * @return array
     * @author sihoullete
     */
    public function refresh(array $data = []): array
    {
        $resp['success'] = false;
        $clientData['refresh_token'] = $data['refresh_token'] ?? null;

        $clientResp = $this->generateTokens($clientData, OAuthTokenGenerator::BY_REFRESH);
        switch ($clientResp->status()) {
            case SymfonyResponse::HTTP_OK :
                $resp['success'] = true;
                $resp['token'] = $clientResp->object();
                break;
            case SymfonyResponse::HTTP_UNAUTHORIZED :
                $resp['error'] = 'Unauthorised';
                break;
        }

        return $resp;
    }

    /**
     * @param array  $data
     * @param string $type
     *
     * @return ClientResponse
     * @author sihoullete
     */
    public function generateTokens(array $data, string $type): ClientResponse
    {
        $data = array_merge($data, $this->getPassportClientData(), ['grant_type' => $type, 'scope' => '']);

        return Http::asForm()->post(route('api.v1.passport.token'), $data);
    }

    /**
     * @return array
     * @author sihoullete
     */
    private function getPassportClientData(): array
    {
        $passportClientData = [
            'client_id' => config('passport.password_grant_client.id'),
            'client_secret' => config('passport.password_grant_client.secret'),
        ];

        $clientExists = DB::table('oauth_clients')
            ->where('id', $passportClientData['client_id'])
            ->where('revoked', false)
            ->exists();
        if (!$clientExists) {
            $passClient = DB::table('oauth_clients')
                ->where('password_client', true)
                ->where('revoked', false)
                ->first();
            if ($passClient) {
                $passportClientData['client_id'] = $passClient->id;
                $passportClientData['client_secret'] = $passClient->secret;
            }
        }

        return $passportClientData;
    }
}
