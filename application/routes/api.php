<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BasketController;

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{product}', [ProductController::class, 'show']);

Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);

Route::middleware('auth:api')->post(
    '/auth/logout',
    [AuthController::class, 'logout']
);

Route::middleware(['auth:api', 'admin'])->group(callback: function () {
    Route::post('/products', [ProductController::class, 'store']);
    Route::patch('/products/{product}', [ProductController::class, 'update']);
    Route::delete('/products/{product}', [ProductController::class, 'destroy']);
});

Route::middleware('auth:api')->get(
    '/basket',
    [BasketController::class, 'index']
);

Route::middleware('auth:api')->post(
    '/basket/items',
    [BasketController::class, 'store']
);
