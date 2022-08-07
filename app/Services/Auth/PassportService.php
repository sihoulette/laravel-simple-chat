<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

/**
 * Class PassportService
 *
 * @package App\Services\Auth
 */
final class PassportService
{
    /**
     * @param array $data
     *
     * @return array
     * @author sihoullete
     */
    public function register(array $data = []): array
    {
        $data['password'] = Hash::make($data['password']);

        DB::beginTransaction();
        try {
            $resp['success'] = true;
            $user = User::create($data);
            event(new Registered($user));
            $resp['user'] = $user;
            $resp['accessToken'] = $user->createToken('Laravel9PassportAuth')
                ->accessToken;
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            $resp['success'] = false;
            $resp['exception'] = $e->getMessage();
        }

        return $resp;
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
            $resp['success'] = true;
            $resp['user'] = auth()->user();
            $resp['token'] = $resp['user']->createToken('Laravel9PassportAuth')
                ->accessToken;
        } else {
            $resp['error'] = 'Unauthorised';
        }

        return $resp;
    }
}
