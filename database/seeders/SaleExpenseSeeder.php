<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SaleExpense;

class SaleExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $saleExpenses = [
            [
                'sale_id' => 1,
                'item_cost'=> 100000.00,
                'shipment_cost'=> 194000.00,
                'handling_cost' => 0.00,
                'ojol_cost' => 27000.00,
                'additional_cost' => 0.00,
                'total_cost' => 0.00
            ],
            [
                'sale_id' => 2,
                'item_cost'=> 200000.00,
                'shipment_cost'=> 194000.00,
                'handling_cost' => 0.00,
                'ojol_cost' => 27000.00,
                'additional_cost' => 0.00,
                'total_cost' => 0.00
            ],
            [
                'sale_id' => 3,
                'item_cost'=> 300000.00,
                'shipment_cost'=> 194000.00,
                'handling_cost' => 0.00,
                'ojol_cost' => 27000.00,
                'additional_cost' => 0.00,
                'total_cost' => 0.00
            ],
        ];

        foreach ($saleExpenses as $key => $value) {
            SaleExpense::create($value);
        }
    }
}