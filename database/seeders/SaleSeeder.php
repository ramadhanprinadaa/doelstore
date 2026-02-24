<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sale;
use App\Models\Product;
use App\Models\User;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = User::where('role', 'admin')->get();
        $investors = User::where('role', 'investor')->get();
        $products = Product::all();

        $sales = [
            [
                'investor_id' => $investors->random()->id,
                'admin_id' => $admins->random()->id,
                'sale_number_ebay' => '123456789',
                'order_date' => '2023-01-01',
                'buyer_name' => 'John Doe',
                'funding_type' => 'investor',
                'status' => 'active',
            ],
            [
                'investor_id' => $investors->random()->id,
                'admin_id' => $admins->random()->id,
                'sale_number_ebay' => '123456789',
                'order_date' => '2023-01-01',
                'buyer_name' => 'Doe',
                'funding_type' => 'investor',
                'status' => 'active',
            ],
            [
                'admin_id' => $admins->random()->id,
                'sale_number_ebay' => '123456789',
                'order_date' => '2023-01-01',
                'buyer_name' => 'Doe',
                'funding_type' => 'store',
                'status' => 'active',
            ],
        ];

        foreach ($sales as $key => $value) {
            $sale = Sale::create($value);

            $sale->products()->attach(
                $products->random(rand(1, 2))->pluck('id')->toArray()
            );
        }
    }
}