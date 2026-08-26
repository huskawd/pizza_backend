<?php

namespace App\Services;

use App\Models\Basket;
use App\Models\Order;
use App\Models\OrderItem;

class OrderItemService
{
    public function createFromBasket(Order $order, Basket $basket): void
    {
        foreach ($basket->items as $basketItem) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $basketItem->product->id,
                'product_name' => $basketItem->product->name,
                'price' => $basketItem->product->price,
                'quantity' => $basketItem->quantity,
            ]);
        }
    }
}
