<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;

class AuthTest extends TestCase
{
    use RefreshDatabase;
    private function userData(): array
    {
        return [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'phone' => '+79991234567',
            'password' => 'password123',
        ];
    }

    public function test_user_can_register(): void
    {
        $response = $this->postJson('/api/auth/register', $this->userData());

        $response->assertOk();

        $this->assertDatabaseHas('users', [
            'email' => 'test@example.com',
            'phone' => '+79991234567',
            'role' => 'guest',
        ]);
    }

    public function test_user_can_login(): void
    {
        $data = $this->userData();

        User::factory()->create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'guest',
        ]);

        $response = $this->postJson('/api/auth/login', [
            'email' => $data['email'],
            'password' => $data['password'],
        ]);

        $response->assertOk();
        $response->assertJsonStructure([
            'token',
        ]);
    }

    public function test_user_can_logout(): void
    {
        $user = User::factory()->create([
            'role' => 'guest',
        ]);

        $this->actingAs($user, 'api');

        $response = $this->postJson('/api/auth/logout');

        $response->assertOk();
        $response->assertJson([
            'message' => 'Successfully logged out',
        ]);
    }

}
