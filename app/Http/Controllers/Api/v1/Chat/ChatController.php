<?php

namespace App\Http\Controllers\Api\v1\Chat;

use App\Http\Controllers\Controller;
use App\Services\Chat\ChatService;
use Illuminate\Http\JsonResponse;

/**
 * Class ChatController
 *
 * @package App\Http\Controllers\Api\Chat
 */
final class ChatController extends Controller
{
    /**
     * @var ChatService $service
     */
    protected ChatService $service;

    /**
     * ChatController constructor.
     *
     * @param ChatService $service
     */
    public function __construct(ChatService $service)
    {
        $this->service = $service;
    }


}
