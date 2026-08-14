<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $adminPassword = 'admin123';

        User::updateOrCreate(
            ['email' => 'admin@pizza.local'],
            [
                'name' => 'Admin',
                'password' => Hash::make($adminPassword),
                'role' => 'admin',
            ]
        );
    }
}
