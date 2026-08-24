<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddBasketItemRequest;
use App\Http\Requests\UpdateBasketItemRequest;
use App\Models\Basket;
use App\Models\BasketItem;
use App\Models\Product;
use App\Services\BasketService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class BasketController extends Controller
{
    public function index(): JsonResponse
    {
        $basket = Basket::firstOrCreate([
            'user_id' => auth(guard: 'api')->id(),
        ]);

        $basket->load('items.product');

        return response()->json([
            'data' => $basket,
        ]);
    }

    public function store(
        AddBasketItemRequest $request,
        BasketService $basketService
    ): JsonResponse {
        $data = $request->validated();

        $basket = Basket::firstOrCreate([
            'user_id' => auth(guard: 'api')->id(),
        ]);

        $product = Product::findOrFail($data['product_id']);

        try {
            $item = $basketService->addItem(
                basket: $basket,
                product: $product,
                quantity: $data['quantity']
            );
        } catch (\DomainException $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
            ], 422);
        }

        return response()->json([
            'data' => $item->load(relations: 'product'),
        ]);
    }

    public function update(
        UpdateBasketItemRequest $request,
        BasketItem $item,
        BasketService $basketService
    ): JsonResponse {
        $data = $request->validated();

        try {
            $item = $basketService->updateItem(
                item: $item,
                quantity: $data['quantity']
            );
        } catch (\DomainException $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
            ], 422);
        }

        return response()->json([
            'data' => $item->load(relations: 'product'),
        ]);
    }

    public function destroy(BasketItem $item): Response
    {
        $item->delete();

        return response()->noContent();
    }
}
