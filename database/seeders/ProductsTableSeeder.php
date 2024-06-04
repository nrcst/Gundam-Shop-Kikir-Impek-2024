<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => 'Gundam Model Kit',
                'description' => 'This is a Gundam model kit',
                'image' => 'https://via.placeholder.com/200x200.png?text=Gundam',
                'price' => 19.99,
                'discount' => 10,
                'category' => 'Gundam',
            ],
            // Add more sample data as needed
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}