<?php

namespace App\Console\Commands;

use App\Models\Basket;
use App\Models\Product;
use App\Services\BasketService;
use Illuminate\Console\Command;

class AddBasketItemCommand extends Command
{
    protected $signature = 'basket:add-test {basket} {product} {quantity}';

    protected $description = 'Add item to basket for concurrency test';

    public function handle(BasketService $basketService): int
    {
        $basket = Basket::findOrFail($this->argument('basket'));
        $product = Product::findOrFail($this->argument('product'));
        $quantity = (int) $this->argument('quantity');

        try {
            $basketService->addItem($basket, $product, $quantity);

            return self::SUCCESS;
        } catch (\DomainException) {
            return self::FAILURE;
        }
    }
}
