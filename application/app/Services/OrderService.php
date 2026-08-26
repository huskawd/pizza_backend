<?php

namespace App\Services;

use App\Models\Basket;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Exceptions\EmptyBasketException;
use App\Enums\OrderStatus;
use App\Enums\DeliveryType;

class OrderService
{
    public function __construct(
        private OrderItemService $orderItemService
    ) {
    }
    /**
     * @param array<string, mixed> $data
     */
    public function createOrder(User $user, array $data): Order
    {
        return DB::transaction(function () use ($user, $data) {
            $basket = Basket::query()
                ->with(relations: 'items.product')
                ->where(column: 'user_id', operator: $user->id)
                ->lockForUpdate()
                ->first();
            if ($basket === null || $basket->items->isEmpty()) {
                throw new EmptyBasketException();
            }

            $totalPrice = $basket->items->sum(
                fn ($item) => $item->product->price * $item->quantity
            );

            $order = Order::create([
                'user_id' => $user->id,
                'status' => OrderStatus::CREATED,
                'total_price' => $totalPrice,

                'delivery_region' => $data['delivery_region'],
                'delivery_city' => $data['delivery_city'],
                'delivery_street' => $data['delivery_street'],
                'delivery_house' => $data['delivery_house'],
                'delivery_entrance' => $data['delivery_entrance'] ?? null,
                'delivery_apartment' => $data['delivery_apartment'] ?? null,
                'delivery_postcode' => $data['delivery_postcode'],
                'delivery_type' => DeliveryType::from(value: $data['delivery_type']),
            ]);
            $this->orderItemService->createFromBasket(order: $order, basket: $basket);

            $basket->items()->delete();

            return $order->load('items');
        });
    }
}
