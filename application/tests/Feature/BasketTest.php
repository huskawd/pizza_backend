<?php

namespace Tests\Feature;

use App\Models\Basket;
use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BasketTest extends TestCase
{
    use RefreshDatabase;

    private function actingAsUser(): User
    {
        $user = User::factory()->create([
            'role' => 'guest',
        ]);

        $this->actingAs($user, 'api');

        return $user;
    }

    public function test_user_can_add_product_to_basket(): void
    {
        $user = $this->actingAsUser();

        $product = Product::factory()->create([
            'category' => 'pizza',
        ]);

        $response = $this->postJson('/api/basket/items', [
            'product_id' => $product->id,
            'quantity' => 2,
        ]);

        $response->assertOk();

        $basket = Basket::where('user_id', $user->id)->firstOrFail();

        $this->assertDatabaseHas('basket_items', [
            'basket_id' => $basket->id,
            'product_id' => $product->id,
            'quantity' => 2,
        ]);
    }

    public function test_cannot_exceed_pizza_limit(): void
    {
        $this->actingAsUser();

        $product = Product::factory()->create([
            'category' => 'pizza',
        ]);

        $this->postJson('/api/basket/items', [
            'product_id' => $product->id,
            'quantity' => 10,
        ])->assertOk();

        $this->postJson('/api/basket/items', [
            'product_id' => $product->id,
            'quantity' => 1,
        ])
            ->assertStatus(422)
            ->assertJson([
                'message' => 'Basket category limit exceeded',
            ]);
    }
}
