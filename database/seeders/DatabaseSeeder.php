<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Customer::insert([
            [
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan@example.com',
                'phone' => '0917-123-4567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Maria Santos',
                'email' => 'maria@example.com',
                'phone' => '0921-987-6543',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Pedro Penduko',
                'email' => 'pedro@example.com',
                'phone' => '0905-555-1234',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Maria Clara',
                'email' => 'maria.clara@example.com',
                'phone' => '0923-777-8888',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Juan Tamad',
                'email' => 'juan.tamad@example.com',
                'phone' => '0912-333-4444',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        User::insert([
            [
                'username' => 'admin',
                'full_name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => bcrypt('admin123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'juan',
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan.user@example.com',
                'password' => bcrypt('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'maria',
                'full_name' => 'Maria Santos',
                'email' => 'maria.user@example.com',
                'password' => bcrypt('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'pedro',
                'full_name' => 'Pedro Penduko',
                'email' => 'pedro.user@example.com',
                'password' => bcrypt('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'maria2',
                'full_name' => 'Maria Clara',
                'email' => 'maria2@example.com',
                'password' => bcrypt('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
