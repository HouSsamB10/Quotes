<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\QuoteController;
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

Route::prefix('auth')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
});

Route::prefix('quotes')->group(function () {
    Route::get('/', [QuoteController::class, 'index']);
    Route::get('/{id}', [QuoteController::class, 'show']);
    Route::post('/', [QuoteController::class, 'store']);
    Route::put('/{id}', [QuoteController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);

    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::post('/', [UserController::class, 'store']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);

    Route::post('/logout', [AuthController::class, 'logout']);
});


Route::middleware('auth:sanctum')->group( function () {





});
