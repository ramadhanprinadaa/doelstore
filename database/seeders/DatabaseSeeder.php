<?php

namespace Database\Seeders;

use App\Models\SaleExpense;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ProductSeeder::class,
            SaleSeeder::class,
            ListingSeeder::class,
            StockSeeder::class,
            CountrySeeder::class,
            ShipmentRateSeeder::class,
            SaleExpenseSeeder::class,
        ]);
    }
}