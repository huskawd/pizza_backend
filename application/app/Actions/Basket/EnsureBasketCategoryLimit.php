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
        $limit = ProductCategory::from(value: $category)->basketLimit();

        $currentQuantity = $this->quantityFor(
            basketId: $basketId,
            category: $category,
            excludeItemId: $excludeItemId
        );

        if ($currentQuantity + $quantity > $limit) {
            throw new \DomainException(
                message: 'Basket category limit exceeded'
            );
        }
    }

    private function quantityFor(
        int $basketId,
        string $category,
        ?int $excludeItemId = null
    ): int {
        $query = BasketItem::query()
            ->where(column: 'basket_id', operator: $basketId)
            ->whereHas(relation: 'product', callback: function ($query) use ($category) {
                $query->where(column: 'category', operator: $category);
            });

        if ($excludeItemId !== null) {
            $query->where(column: 'id', operator: '!=', value: $excludeItemId);
        }

        return (int) $query->sum('quantity');
    }
}
