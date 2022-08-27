<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1 as Api;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'v1', 'as' => 'api.v1.',], static function () {
    # Auth routes
    Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
        Route::post('register', [Api\Auth\AuthController::class, 'register'])
            ->name('register');
        Route::post('login', [Api\Auth\AuthController::class, 'login'])
            ->name('login');
        Route::post('refresh', [Api\Auth\AuthController::class, 'refresh'])
            ->name('refresh');
        Route::post('logout', [Api\Auth\AuthController::class, 'logout'])
            ->middleware('auth:api')
            ->name('logout');
    });

    # Authenticated group
    Route::group(['middleware' => 'auth:api'], static function () {
        # Chat routes
        Route::group(['prefix' => 'chat', 'as' => 'chat.'], static function () {
            Route::get('list', [Api\Chat\ChatController::class, 'list'])
                ->name('list');
            Route::get('show/{id}', [Api\Chat\ChatController::class, 'show'])
                ->name('show');
            Route::post('delete', [Api\Chat\ChatController::class, 'delete'])
                ->name('delete');
        });
        # Message routes
        Route::group(['prefix' => 'message', 'as' => 'message.'], static function () {
            Route::post('push', [Api\Message\MessageController::class, 'push'])
                ->name('push');
            Route::post('update', [Api\Message\MessageController::class, 'update'])
                ->name('update');
            Route::post('delete', [Api\Message\MessageController::class, 'delete'])
                ->name('delete');
        });
    });
});
