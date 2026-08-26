<?php

namespace App\Enums;

enum ProductCategory: string
{
    case PIZZA = 'pizza';
    case DRINK = 'drink';

    public function basketLimit(): int
    {
        return match ($this) {
            self::PIZZA => 10,
            self::DRINK => 20,
        };
    }
}
