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
                'image' => 'https://cdn.discordapp.com/attachments/1020217287871053865/1247471127601741866/20240604_111406.jpg?ex=6660ce45&is=665f7cc5&hm=835425482db7b4bdd407b11ec6efd926ec0a71b2c2c6756a2af6679a3c1205aa&',
                'price' => 19.99,
                'discount' => 10,
                'category' => 'Gundam',
                'preorder' => false,
                'stock' => 10
            ],
            [
                'name' => 'RG Unicorn Gundam', 
                'description' => 'A highly detailed and articulated model.', 
                'image' => 'unicorn_gundam.png', 
                'price' => 659200, 
                'discount' => 10, 
                'category' => 'Gundam', 
                'preorder' => false, 
                'stock' => 20
            ],
            [
                'name' => 'HG EZ8', 
                'description' => 'A classic Gundam model kit.', 
                'image' => 'hg_ez8.png', 
                'price' => 399000, 
                'discount' => 0, 
                'category' => 'Gundam', 
                'preorder' => false, 
                'stock' => 15
            ],
            // Add more sample data as needed
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}