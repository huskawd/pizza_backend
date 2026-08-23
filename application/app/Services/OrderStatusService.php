<?php

namespace App\Services;

use App\Enums\OrderStatus;
use App\Models\Order;

class OrderStatusService
{
    private const ALLOWED_TRANSITIONS = [
        'created' => [
            OrderStatus::PAID,
            OrderStatus::CANCELLED,
        ],
        'paid' => [
            OrderStatus::IN_PROGRESS,
            OrderStatus::CANCELLED,
        ],
        'in_progress' => [
            OrderStatus::DELIVERING,
            OrderStatus::CANCELLED,
        ],
        'delivering' => [
            OrderStatus::COMPLETED,
        ],
        'completed' => [],
        'cancelled' => [],
    ];

    public function changeStatus(
        Order $order,
        OrderStatus $newStatus
    ): Order {
        $currentStatus = $order->status;

        if (!in_array(
            $newStatus,
            self::ALLOWED_TRANSITIONS[$currentStatus->value],
            true
        )) {
            throw new \DomainException(
                'Invalid order status transition'
            );
        }

        $order->update([
            'status' => $newStatus,
        ]);

        return $order->refresh();
    }
}
