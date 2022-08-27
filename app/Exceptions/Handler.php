<?php

namespace App\Exceptions;

use Throwable;
use Psr\Log\LogLevel;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

/**
 * Class Handler
 */
class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<Throwable>, LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * @param           $request
     * @param Throwable $e
     *
     * @return JsonResponse|Response|SymfonyResponse
     * @throws Throwable
     */
    public function render($request, Throwable $e)
    {
        // This will replace our 404 response with
        if ($e->getCode() === 404) {
            return response()->json([
                'error' => 'Resource not found'
            ], 404);
        }

        return parent::render($request, $e);
    }
}
