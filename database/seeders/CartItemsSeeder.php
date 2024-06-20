<?php

namespace Database\Seeders;

use App\Models\CartItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Example: Create 10 cart items for user with ID 1
        for ($i = 1; $i <= 10; $i++) {
            CartItem::create([
                'user_id' => 3,
                'product_id' => $i, // Assuming you have products with IDs 1 to 10
                'quantity' => rand(1, 5), // Random quantity between 1 and 5
                'price' => rand(100, 1000)
            ]);
        }
    }
}
