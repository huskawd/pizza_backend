<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @return array<string, string>
     */
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

        User::factory()->create(attributes: [
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'guest',
        ]);

        $response = $this->postJson('/api/auth/login', [
            'email' => $data['email'],
            'password' => $data['password'],
        ]);

        $response->assertOk();
        $response->assertJsonStructure(structure: [
            'token',
        ]);
    }

    public function test_user_can_logout(): void
    {
        $data = $this->userData();

        User::factory()->create(attributes: [
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'guest',
        ]);

        $loginResponse = $this->postJson('/api/auth/login', [
            'email' => $data['email'],
            'password' => $data['password'],
        ]);

        $token = $loginResponse->json(key: 'token');

        $response = $this
            ->withHeader('Authorization', 'Bearer ' . $token)
            ->postJson('/api/auth/logout');

        $response->assertOk();

        $response->assertJson(value: [
            'message' => 'Successfully logged out',
        ]);
    }

}
