<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
public function run(): void
{
    \App\Models\Menu::create([
        'category_id' => 1, // Pastikan ID ini ada di tabel categories
        'name' => 'Matcha Velvet',
        'description' => 'Perpaduan creamy vanilla dan premium matcha dari Kyoto.',
        'price' => 35000,
        'stock' => 50, // Tambahkan ini agar tidak error
        'image' => 'https://images.unsplash.com/photo-1505394033343-431693360fbd?q=80&w=500'
    ]);

    \App\Models\Menu::create([
        'category_id' => 1,
        'name' => 'Mango Sorbet',
        'description' => 'Kesegaran mangga asli yang meledak di mulut.',
        'price' => 32000,
        'stock' => 30,
        'image' => 'https://images.unsplash.com/photo-1543339308-43e59d6b73a6?q=80&w=500'
    ]);
}
}