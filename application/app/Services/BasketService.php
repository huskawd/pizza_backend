<?php

namespace App\Services;

use App\Models\Basket;
use App\Models\BasketItem;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Actions\Basket\EnsureBasketCategoryLimit;

class BasketService
{
    public function __construct(
        private EnsureBasketCategoryLimit $ensureBasketCategoryLimit
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

            $this->ensureBasketCategoryLimit->execute(
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
            $lockedBasket = Basket::query()
                ->with(relations: 'items.product')
                ->whereKey(id: $item->basket_id)
                ->lockForUpdate()
                ->firstOrFail();

            $lockedItem = $lockedBasket->items
                ->where('id', $item->id)
                ->firstOrFail();

            $this->ensureBasketCategoryLimit->execute(
                basketId: $lockedBasket->id,
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
