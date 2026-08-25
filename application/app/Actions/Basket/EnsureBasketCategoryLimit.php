<?php

namespace App\Actions\Basket;

use App\Enums\ProductCategory;
use App\Models\BasketItem;

class EnsureBasketCategoryLimit
{
    public function execute(
        int $basketId,
        string $category,
        int $quantity,
        ?int $excludeItemId = null
    ): void {
        $limit = ProductCategory::from($category)->basketLimit();

        $currentQuantity = $this->quantityFor(
            basketId: $basketId,
            category: $category,
            excludeItemId: $excludeItemId
        );

        if ($currentQuantity + $quantity > $limit) {
            throw new \DomainException(
                'Basket category limit exceeded'
            );
        }
    }

    private function quantityFor(
        int $basketId,
        string $category,
        ?int $excludeItemId = null
    ): int {
        $query = BasketItem::query()
            ->where('basket_id', $basketId)
            ->whereHas('product', function ($query) use ($category) {
                $query->where('category', $category);
            });

        if ($excludeItemId !== null) {
            $query->where('id', '!=', $excludeItemId);
        }

        return (int) $query->sum('quantity');
    }
}
