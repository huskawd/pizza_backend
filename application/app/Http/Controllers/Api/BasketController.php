<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use Illuminate\Http\JsonResponse;
use App\Models\BasketItem;
use Illuminate\Http\Request;
use App\Services\BasketService;
use App\Models\Product;
use App\Http\Requests\AddBasketItemRequest;

class BasketController extends Controller
{
    public function index(): JsonResponse
    {
        $basket = Basket::firstOrCreate([
            'user_id' => auth('api')->id(),
        ]);

        $basket->load('items.product');

        return response()->json([
            'data' => $basket,
        ]);
    }

    public function store(
        AddBasketItemRequest $request,
        BasketService $basketService
    ): JsonResponse
    {
        $data = $request->validated();

        $basket = Basket::firstOrCreate([
            'user_id' => auth('api')->id(),
        ]);

        $product = Product::findOrFail($data['product_id']);

        try {
            $item = $basketService->addItem(
                $basket,
                $product,
                $data['quantity']
            );
        } catch (\DomainException $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
            ], 422);
        }

        return response()->json([
            'data' => $item->load('product'),
        ]);
    }
}
