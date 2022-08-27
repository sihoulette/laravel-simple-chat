<?php

namespace App\Http\Controllers\Api\v1\Message;

use App\Http\Controllers\Controller;
use App\Services\Message\MessageService;
use Illuminate\Http\JsonResponse;

/**
 * Class MessageController
 *
 * @package App\Http\Controllers\Api\Message
 */
final class MessageController extends Controller
{
    /**
     * @var MessageService $service
     */
    protected MessageService $service;

    /**
     * MessageController constructor.
     *
     * @param MessageService $service
     */
    public function __construct(MessageService $service)
    {
        $this->service = $service;
    }


}
