<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BasketController;
use App\Http\Controllers\Api\OrderController;

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

Route::middleware('auth:api')->patch(
    '/basket/items/{item}',
    [BasketController::class, 'update']
);

Route::middleware('auth:api')->delete(
    '/basket/items/{item}',
    [BasketController::class, 'destroy']
);

Route::middleware('auth:api')->post(
    '/orders',
    [OrderController::class, 'store']
);

Route::middleware('auth:api')->patch(
    '/orders/{order}/status',
    [OrderController::class, 'updateStatus']
);
