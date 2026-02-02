<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin user
        User::factory()->create([
            'name' => 'Admin DR-PHARMA',
            'email' => 'admin@drpharma.ci',
            'phone' => '+2250700000000',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'email_verified_at' => now(),
        ]);

        // Test customer
        User::factory()->create([
            'name' => 'Client Test',
            'email' => 'client@drpharma.ci',
            'phone' => '+2250700000001',
            'password' => Hash::make('password'),
            'role' => 'customer',
            'email_verified_at' => now(),
        ]);

        // Additional test users
        User::factory(5)->customer()->create();
    }
}
