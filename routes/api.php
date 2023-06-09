<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::controller(AuthController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
});
Route::apiResource('app-setting', SettingController::class);
Route::get('languages', [SettingController::class, 'languages']);

Route::middleware('auth:sanctum')->group( function () {
    Route::get('me', [UserController::class, 'me']);
    Route::post('logout', [AuthController::class, 'logout']);

//    Route::apiResource('users', UserController::class);
    Route::apiResource('posts', PostController::class);
});
