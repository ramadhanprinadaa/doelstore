<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stock;
use App\Models\Product;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();

        $stocks = [
            [
                'product_id' => $products->random()->id,
                'quantity' => rand(1, 100),
                'purchase_date' => now(),
                'purchase_price' => rand(1, 100000000),
                'status' => 'ready',
            ],
            
            [
                'product_id' => $products->random()->id,
                'quantity' => rand(1, 100),
                'purchase_date' => now(),
                'purchase_price' => rand(1, 100000000),
                'status' => 'ready',
            ],

            [
                'product_id' => $products->random()->id,
                'quantity' => rand(1, 100),
                'purchase_date' => now(),
                'purchase_price' => rand(1, 100000000),
                'status' => 'ready',
            ],

            [
                'product_id' => $products->random()->id,
                'quantity' => rand(1, 100),
                'purchase_date' => now(),
                'purchase_price' => rand(1, 100000000),
                'status' => 'ready',
            ],
        ];

        foreach ($stocks as $key => $value) {
            Stock::create($value);
        }
    }
}