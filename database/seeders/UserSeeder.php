<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create(
            [
                'name' => 'Test User',
                'username' => 'user',
                'email' => 'user@example.com',
                'password' => bcrypt('user123'),
            ],

        );
        User::factory()->create(
            [
                'name' => 'Staff User',
                'username' => 'Staff',
                'email' => 'staff@example.com',
                'password' => bcrypt('staf123'),
            ],

        );
        User::factory()->create(
            [
                'name' => 'Super Admin',
                'username' => 'admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('admin123'),
                'role_user' => 1,
            ],

        );
    }
}
