<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    private function actingAsAdmin(): void
    {
        $admin = User::factory()->create([
            'role' => 'admin',
        ]);

        $this->actingAs($admin, 'api');
    }

    public function test_can_get_products(): void // список продуктов
    {
        Product::factory()->count(3)->create();

        $response = $this->getJson('/api/products');

        $response->assertOk();
        $response->assertJsonCount(3, 'data');
    }

    public function test_returns_empty_products_list_when_no_products_exist(): void // пустой список
    {
        $response = $this->getJson('/api/products');

        $response->assertOk();
        $response->assertJsonCount(0, 'data');
    }

    public function test_can_get_single_product(): void // существующий продукт
    {
        $product = Product::factory()->create();

        $response = $this->getJson("/api/products/{$product->id}");

        $response->assertOk();
        $response->assertJsonPath('data.id', $product->id);
    }

    public function test_returns_404_for_non_existing_product(): void // несуществующий продукт
    {
        $this->actingAsAdmin();
        $response = $this->getJson('/api/products/999999');

        $response->assertNotFound();
    }

    public function test_can_create_product(): void // продукт с валидными данными
    {
        $this->actingAsAdmin();
        $data = [
            'name' => 'Margherita',
            'description' => 'Classic pizza',
            'price' => 500,
            'weight' => 450,
            'category' => 'pizza',
        ];

        $response = $this->postJson('/api/products', $data);

        $response->assertCreated();

        $response->assertJsonPath('data.name', 'Margherita');

        $this->assertDatabaseHas('products', [
            'name' => 'Margherita',
            'price' => 500,
        ]);
    }

    public function test_cannot_create_product_with_invalid_data(): void // продук с невалидными данными
    {
        $this->actingAsAdmin();
        $data = [
            'name' => '',
            'description' => '',
            'price' => 0,
            'weight' => 0,
            'category' => '',
        ];

        $response = $this->postJson('/api/products', $data);

        $response->assertUnprocessable();

        $response->assertJsonValidationErrors([
            'name',
            'price',
            'weight',
            'category',
        ]);

        $this->assertDatabaseCount('products', 0);
    }

    public function test_can_update_product(): void // обновление существующего продукта
    {
        $this->actingAsAdmin();
        $product = Product::factory()->create();

        $data = [
            'name' => 'Updated Pizza',
            'description' => 'Updated description',
            'price' => 700,
            'weight' => 500,
            'category' => 'pizza',
        ];

        $response = $this->patchJson("/api/products/{$product->id}", $data);

        $response->assertOk();

        $response->assertJsonPath('data.name', 'Updated Pizza');

        $this->assertDatabaseHas('products', [
            'id' => $product->id,
            'name' => 'Updated Pizza',
            'price' => 700,
        ]);
    }

    public function test_returns_404_when_updating_non_existing_product(): void // обновление несуществующего проекта
    {
        $this->actingAsAdmin();
        $data = [
            'name' => 'Updated Pizza',
            'description' => 'Updated description',
            'price' => 700,
            'weight' => 500,
            'category' => 'pizza',
        ];

        $response = $this->patchJson('/api/products/999999', $data);

        $response->assertNotFound();
    }

    public function test_can_delete_product(): void // удаление существующего проекта
    {
        $this->actingAsAdmin();
        $product = Product::factory()->create();

        $response = $this->deleteJson("/api/products/{$product->id}");

        $response->assertNoContent();

        $this->assertDatabaseMissing('products', [
            'id' => $product->id,
        ]);
    }

    public function test_returns_404_when_deleting_non_existing_product(): void // удаление несуществующего проекта
    {
        $this->actingAsAdmin();
        $response = $this->deleteJson('/api/products/999999');

        $response->assertNotFound();
    }
}
