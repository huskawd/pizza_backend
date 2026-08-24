<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OrderTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @return array<string, string>
     */
    private function deliveryAddress(): array
    {
        return [
            'delivery_region' => 'Donetsk region',
            'delivery_city' => 'Donetsk',
            'delivery_street' => 'Pushkina',
            'delivery_house' => '10',
            'delivery_entrance' => '2',
            'delivery_apartment' => '15',
            'delivery_postcode' => '125609',
        ];
    }

    public function test_user_can_create_order_from_basket(): void
    {
        $user = User::factory()->create(attributes: [
            'role' => 'guest',
        ]);

        $this->actingAs($user, 'api');

        $product = Product::factory()->create(attributes: [
            'price' => 500,
            'category' => 'pizza',
        ]);

        $this->postJson('/api/basket/items', [
            'product_id' => $product->id,
            'quantity' => 2,
        ])->assertOk();

        $response = $this->postJson(
            '/api/orders',
            $this->deliveryAddress()
        );

        $response
            ->assertCreated()
            ->assertJsonPath(path: 'data.status', expect: 'created')
            ->assertJsonPath(path: 'data.total_price', expect: 1000);

        $this->assertDatabaseHas('order_items', [
            'product_id' => $product->id,
            'product_name' => $product->name,
            'price' => 500,
            'quantity' => 2,
        ]);
    }

    public function test_cannot_create_order_with_empty_basket(): void
    {
        $user = User::factory()->create(attributes: [
            'role' => 'guest',
        ]);

        $this->actingAs($user, 'api');

        $this->getJson('/api/basket')->assertOk();

        $response = $this->postJson(
            '/api/orders',
            $this->deliveryAddress()
        );

        $response
            ->assertStatus(status: 422)
            ->assertJson(value: [
                'message' => 'Basket is empty',
            ]);
    }
}
