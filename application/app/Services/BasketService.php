<?php

namespace App\Services;

use App\Models\Basket;
use App\Models\BasketItem;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class BasketService
{
    public function __construct(
        private BasketLimitService $basketLimitService
    ) {
    }

    public function addItem(
        Basket $basket,
        Product $product,
        int $quantity
    ): BasketItem {
        return DB::transaction(function () use ($basket, $product, $quantity) {
            $lockedBasket = Basket::query()
                ->whereKey(id: $basket->id)
                ->lockForUpdate()
                ->firstOrFail();

            $this->basketLimitService->ensureWithinLimit(
                basketId: $lockedBasket->id,
                category: $product->category,
                quantity: $quantity
            );

            $item = BasketItem::firstOrCreate(
                [
                    'basket_id' => $lockedBasket->id,
                    'product_id' => $product->id,
                ],
                [
                    'quantity' => 0,
                ]
            );

            $item->increment('quantity', $quantity);

            return $item->refresh();
        });
    }

    public function updateItem(
        BasketItem $item,
        int $quantity
    ): BasketItem {
        return DB::transaction(function () use ($item, $quantity) {
            $lockedItem = BasketItem::query()
                ->with(relations: 'product')
                ->whereKey(id: $item->id)
                ->lockForUpdate()
                ->firstOrFail();

            $this->basketLimitService->ensureWithinLimit(
                basketId: $lockedItem->basket_id,
                category: $lockedItem->product->category,
                quantity: $quantity,
                excludeItemId: $lockedItem->id
            );

            $lockedItem->update([
                'quantity' => $quantity,
            ]);

            return $lockedItem->refresh();
        });
    }
}
