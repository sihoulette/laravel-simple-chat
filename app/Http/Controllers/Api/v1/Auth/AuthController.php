<?php

namespace App\Http\Controllers\Api\v1\Auth;

use App\Services\Auth\AuthService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class AuthController
 *
 * @package App\Http\Controllers\Api\Auth
 */
final class AuthController extends Controller
{
    /**
     * @var AuthService $service
     */
    protected AuthService $service;

    /**
     * OAuthController constructor.
     *
     * @param AuthService $service
     */
    public function __construct(AuthService $service)
    {
        $this->service = $service;
    }

    /**
     * Handle an incoming registration request.
     *
     * @param RegisterRequest $request
     *
     * @return JsonResponse
     * @author sihoullete
     */
    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        $resp = $this->service->register($data);

        return response()->json($resp, $resp['success'] ? 200 : 401);
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param LoginRequest $request
     *
     * @return JsonResponse
     * @author sihoullete
     */
    public function login(LoginRequest $request)
    {
        $data = $request->only(['email', 'password']);
        $resp = $this->service->login($data);

        return response()->json($resp, $resp['success'] ? 200 : 401);
    }

    /**
     * Handle an incoming refresh token request.
     *
     * @param Request $request
     *
     * @return JsonResponse
     * @author sihoullete
     */
    public function refresh(Request $request)
    {
        $data = $request->only('refresh_token');
        $resp = $this->service->refresh($data);

        return response()->json($resp, $resp['success'] ? 200 : 401);
    }
}
