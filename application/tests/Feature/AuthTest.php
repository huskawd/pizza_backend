<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    private function productData(): array
    {
        return [
            'name' => 'Test Pizza',
            'description' => 'Test description',
            'price' => 500,
            'weight' => 300,
            'category' => 'pizza',
        ];
    }

    public function test_guest_cannot_create_product(): void
    {
        $response = $this->postJson('/api/products', $this->productData());

        $response->assertUnauthorized();
    }

    public function test_guest_user_cannot_create_product(): void
    {
        $user = User::factory()->create([
            'role' => 'guest',
        ]);

        $this->actingAs($user, 'api');

        $response = $this->postJson('/api/products', $this->productData());

        $response->assertForbidden();
    }

    public function test_admin_can_create_product(): void
    {
        $user = User::factory()->create([
            'role' => 'admin',
        ]);

        $this->actingAs($user, 'api');

        $response = $this->postJson('/api/products', $this->productData());

        $response->assertCreated();

        $this->assertDatabaseHas('products', [
            'name' => 'Test Pizza',
        ]);
    }
}
