<?php

namespace App\Services;

use App\Models\Basket;
use App\Models\BasketItem;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class BasketService
{
    public function addItem(
        Basket $basket,
        Product $product,
        int $quantity
    ): BasketItem {
        return DB::transaction(function () use ($basket, $product, $quantity) {
            $lockedBasket = Basket::query()
                ->whereKey($basket->id)
                ->lockForUpdate()
                ->firstOrFail();

            $limit = match ($product->category) {
                'pizza' => 10,
                'drink' => 20,
                default => throw new \InvalidArgumentException('Unsupported product category'),
            };

            $currentQuantity = BasketItem::query()
                ->where('basket_id', $lockedBasket->id)
                ->whereHas('product', function ($query) use ($product) {
                    $query->where('category', $product->category);
                })
                ->sum('quantity');

            if ($currentQuantity + $quantity > $limit) {
                throw new \DomainException('Basket category limit exceeded');
            }

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
}
