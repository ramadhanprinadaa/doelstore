<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\User;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::where('role', 'admin')->inRandomOrder()->first();
        $products = [
            [
                'admin_id' => $admin->id,
                'name' => 'Product 1',
                'brand' => 'Brand 1',
                'part_number' => 'PN 1',
                'vehicle_type' => 'Vehicle 1',
                'weight' => 100,
                'purchase_price' => 100000.00,
                'purchase_link' => 'https://example.com/product1',
            ],

            [
                'admin_id' => $admin->id,
                'name' => 'Product 2',
                'brand' => 'Brand 2',
                'part_number' => 'PN 2',
                'vehicle_type' => 'Vehicle 2',
                'weight' => 200,
                'purchase_price' => 200000.00,
                'purchase_link' => 'https://example.com/product2',
            ],
            
            [
                'admin_id' => $admin->id,
                'name' => 'Product 3',
                'brand' => 'Brand 3',
                'part_number' => 'PN 3',
                'vehicle_type' => 'Vehicle 3',
                'weight' => 300,
                'purchase_price' => 300000.00,
                'purchase_link' => 'https://example.com/product3',
            ],
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}