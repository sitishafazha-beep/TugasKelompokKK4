<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Buat Admin
        User::create([
            'name' => 'Admin Velato',
            'email' => 'AdminGanteng2221@gmail.com',
            'password' => Hash::make('AdminGantengTR1979'),
            'role' => 'admin',
        ]);

        // Buat Customer
        User::create([
            'name' => 'Customer Velato',
            'email' => 'khalifahlabuhtimotor@gmail.com',
            'password' => Hash::make('KhalifahBaret112'),
            'role' => 'customer',
        ]);
    }
}