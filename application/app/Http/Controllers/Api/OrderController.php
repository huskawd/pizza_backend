<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateOrderRequest;
use App\Services\OrderService;
use Illuminate\Http\JsonResponse;
use App\Enums\OrderStatus;
use App\Models\Order;
use App\Services\OrderStatusService;
use App\Http\Requests\UpdateOrderStatusRequest;

class OrderController extends Controller
{
    public function store(
        CreateOrderRequest $request,
        OrderService $orderService
    ): JsonResponse {
        try {
            $order = $orderService->createOrder(
                auth('api')->user(),
                $request->validated()
            );
        } catch (\DomainException $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
            ], 422);
        }

        return response()->json([
            'data' => $order,
        ], 201);
    }
    public function updateStatus(
        UpdateOrderStatusRequest $request,
        Order $order,
        OrderStatusService $orderStatusService
    ): JsonResponse {
        try {
            $order = $orderStatusService->changeStatus(
                $order,
                OrderStatus::from($request->validated('status'))
            );
        } catch (\DomainException $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
            ], 422);
        }

        return response()->json([
            'data' => $order,
        ]);
    }
}
