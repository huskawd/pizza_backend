<?php

namespace Tests\Feature;

use App\Models\Basket;
use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\BasketItem;

class BasketTest extends TestCase
{
    use RefreshDatabase;

    private function actingAsUser(): User
    {
        $user = User::factory()->create(attributes: [
            'role' => 'guest',
        ]);

        $this->actingAs($user, 'api');

        return $user;
    }

    public function test_user_can_add_product_to_basket(): void
    {
        $user = $this->actingAsUser();

        $product = Product::factory()->create(attributes: [
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

        $product = Product::factory()->create(attributes: [
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
            ->assertStatus(status: 422)
            ->assertJson(value: [
                'message' => 'Basket category limit exceeded',
            ]);
    }

    public function test_user_cannot_update_another_users_basket_item(): void
    {
        $owner = User::factory()->create(attributes: [
            'role' => 'guest',
        ]);

        $attacker = User::factory()->create(attributes: [
            'role' => 'guest',
        ]);

        $basket = Basket::create([
            'user_id' => $owner->id,
        ]);

        $product = Product::factory()->create(attributes: [
            'category' => 'pizza',
        ]);

        $item = BasketItem::create([
            'basket_id' => $basket->id,
            'product_id' => $product->id,
            'quantity' => 2,
        ]);

        $this->actingAs($attacker, 'api');

        $response = $this->patchJson(
            "/api/basket/items/{$item->id}",
            [
                'quantity' => 5,
            ]
        );

        $response->assertForbidden();

        $this->assertDatabaseHas('basket_items', [
            'id' => $item->id,
            'quantity' => 2,
        ]);
    }

    public function test_basket_is_created_for_user(): void
    {
        $user = $this->actingAsUser();

        $this->getJson('/api/basket')
            ->assertOk();

        $this->assertDatabaseHas('baskets', [
            'user_id' => $user->id,
        ]);
    }

    public function test_user_can_update_basket_item(): void
    {
        $user = $this->actingAsUser();

        $product = Product::factory()->create([
            'category' => 'pizza',
        ]);

        $this->postJson('/api/basket/items', [
            'product_id' => $product->id,
            'quantity' => 2,
        ])->assertOk();

        $item = BasketItem::query()->firstOrFail();

        $this->patchJson("/api/basket/items/{$item->id}", [
            'quantity' => 5,
        ])->assertOk();

        $this->assertDatabaseHas('basket_items', [
            'id' => $item->id,
            'quantity' => 5,
        ]);
    }
}
