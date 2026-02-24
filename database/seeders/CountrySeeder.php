<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            [
                'name' => 'United States',
                'iso_code' => 'USA',
            ],
            
            [
                'name' => 'Canada',
                'iso_code' => 'CAN',
            ],
            
            [
                'name' => 'Japan',
                'iso_code' => 'JPN',
            ],
        ];

        foreach ($countries as $key => $value) {
            Country::create($value);
        }
    }
}