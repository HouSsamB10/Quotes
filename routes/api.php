<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Models\Test;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('tests')->group(function () {
    Route::get('/', [TestController::class, 'index']);
    Route::post('/', [TestController::class, 'store']);
    Route::get('/{id}', [TestController::class, 'show']);
    Route::put('/{id}', [TestController::class, 'update']);
    Route::delete('/{id}', [TestController::class, 'destroy']);
});