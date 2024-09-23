<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Contracts\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create an admin user
        $adminUser = User::firstOrCreate([
            'email' => 'admin@example.com',  // You can change this email
        ], [
            'name' => 'Admin User',  // Change this to the name you want
            'password' => Hash::make('password'),  // Set a secure password
        ]);

        // Assign the admin role to the user
        $adminUser->assignRole('admin');
    }
}