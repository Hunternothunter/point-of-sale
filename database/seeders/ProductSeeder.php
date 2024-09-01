<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Laptop',
                'price' => 999.99,
                'stock' => 50,
                'description' => 'High-performance laptop with 16GB RAM and 512GB SSD.',
            ],
            [
                'name' => 'Smartphone',
                'price' => 699.99,
                'stock' => 100,
                'description' => 'Latest model with a stunning display and powerful camera.',
            ],
            [
                'name' => 'Wireless Mouse',
                'price' => 29.99,
                'stock' => 200,
                'description' => 'Ergonomic wireless mouse with long battery life.',
            ],
            [
                'name' => 'Bluetooth Headphones',
                'price' => 89.99,
                'stock' => 75,
                'description' => 'Noise-cancelling Bluetooth headphones with high-quality sound.',
            ],
            [
                'name' => 'Keyboard',
                'price' => 49.99,
                'stock' => 120,
                'description' => 'Mechanical keyboard with customizable backlighting.',
            ],
        ]);
    }
}
