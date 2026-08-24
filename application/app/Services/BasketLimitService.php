<?php

namespace App\Services;

use App\Models\BasketItem;

class BasketLimitService
{
    public function limitFor(string $category): int
    {
        return match ($category) {
            'pizza' => 10,
            'drink' => 20,
            default => throw new \InvalidArgumentException(
                message: 'Unsupported product category'
            ),
        };
    }

    public function quantityFor(
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

    public function ensureWithinLimit(
        int $basketId,
        string $category,
        int $quantity,
        ?int $excludeItemId = null
    ): void {
        $limit = $this->limitFor(category: $category);

        $currentQuantity = $this->quantityFor(
            basketId: $basketId,
            category: $category,
            excludeItemId: $excludeItemId
        );

        if ($currentQuantity + $quantity > $limit) {
            throw new \DomainException(message: 'Basket category limit exceeded');
        }
    }
}
