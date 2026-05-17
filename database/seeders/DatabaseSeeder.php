<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

public function run(): void {
    \App\Models\Category::create([
        'name' => 'Ice Cream',
        'slug' => 'ice-cream' 
    ]);
    
    \App\Models\Category::create([
        'name' => 'Drink',
        'slug' => 'drink'
    ]);
    \App\Models\User::create([
        'name' => 'Admin Velato',
        'email' => 'AdminGanteng2221@gmail.com',
        'password' => bcrypt('AdminGantengTR1979'), 
        'role' => 'admin'
    ]);

        \App\Models\User::create([
        'name' => 'Customer Velato',
        'email' => 'Khalifahjatuhdarimotor@gmail.com',
        'password' => bcrypt('khalifahminusbaret5546'), 
        'role' => 'customer'
    ]);

    $this->call([ MenuSeeder::class ]);
}
}
