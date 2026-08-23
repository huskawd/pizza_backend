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
                'Unsupported product category'
            ),
        };
    }

    public function quantityFor(
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

    public function ensureWithinLimit(
        int $basketId,
        string $category,
        int $quantity,
        ?int $excludeItemId = null
    ): void {
        $limit = $this->limitFor($category);

        $currentQuantity = $this->quantityFor(
            $basketId,
            $category,
            $excludeItemId
        );

        if ($currentQuantity + $quantity > $limit) {
            throw new \DomainException('Basket category limit exceeded');
        }
    }
}
