<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\Listing;

class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = User::where('role', 'admin')->get();
        $products = Product::all();

        $listings = [
            [
                'admin_id' => $admins->random()->id,
                'product_id' => $products->random()->id,
                'shipment_rates_id' => 1,
                'estimated_shipment_cost' => 10.00,
                'estimated_total_cost' => 10.00,
                'estimated_ebay_price' => 40.00,
                'estimated_margin' => 200000.00,
                'status' => 'active',
            ],
            [
                'admin_id' => $admins->random()->id,
                'product_id' => $products->random()->id,
                'shipment_rates_id' => 2,
                'estimated_shipment_cost' => 10.00,
                'estimated_total_cost' => 10.00,
                'estimated_ebay_price' => 40.00,
                'estimated_margin' => 200000.00,
                'status' => 'active',
            ],
            [
                'admin_id' => $admins->random()->id,
                'product_id' => $products->random()->id,
                'shipment_rates_id' => 2,
                'estimated_shipment_cost' => 10.00,
                'estimated_total_cost' => 10.00,
                'estimated_ebay_price' => 40.00,
                'estimated_margin' => 200000.00,
                'status' => 'active',
            ],
        ];

        foreach ($listings as $key => $value) {
            Listing::create($value);
        }
    }
}