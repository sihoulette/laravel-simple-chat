<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Services\Auth\PassportService;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Http\JsonResponse;

/**
 * Class PassportController
 *
 * @package App\Http\Controllers\Api\Auth
 */
final class PassportController extends Controller
{
    /**
     * @var PassportService $service
     */
    protected PassportService $service;

    /**
     * PassportController constructor.
     *
     * @param PassportService $service
     */
    public function __construct(PassportService $service)
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
}
