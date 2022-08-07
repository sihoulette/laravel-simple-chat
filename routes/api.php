<?php

use App\Http\Controllers\Api\Auth;
use Illuminate\Support\Facades\Route;

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

# Auth routes
Route::group(['prefix' => 'auth', 'as' => 'api.auth.'], function () {
    Route::put('register', [Auth\PassportController::class, 'register'])
        ->name('register');
    Route::post('login', [Auth\PassportController::class, 'login'])
        ->name('login');
});
