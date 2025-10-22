<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        // If a users table exists with 'role' column, seed a default admin
        if (!\Schema::hasTable('users')) {
            return;
        }
        $userModel = app(\App\Models\User::class);
        $attributes = [
            'name' => 'Langzy Admin',
            'password' => Hash::make('password123'),
            'role' => 'a',
        ];
        $userModel->query()->updateOrCreate(
            ['email' => 'admin@langzy.co'],
            $attributes
        );
    }
}


