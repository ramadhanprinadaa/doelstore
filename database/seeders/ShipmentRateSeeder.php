<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ShipmentRate;

class ShipmentRateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shipmentRates = [
          [
            'country_id' => 1,
            'shipment_type' => 'Standard',
            'weight_min' => 10,
            'weight_max' => 200,
            'cost' => 194000.00,
          ],
            
          [
            'country_id' => 1,
            'shipment_type' => 'Expedited',
            'weight_min' => 10,
            'weight_max' => 200,
            'cost' => 545000.00,
          ],

          [
            'country_id' => 2,
            'shipment_type' => 'Economy',
            'weight_min' => 10,
            'weight_max' => 200,
            'cost' => 194000.00,
          ],
            
          [
            'country_id' => 2,
            'shipment_type' => 'Expedited',
            'weight_min' => 10,
            'weight_max' => 200,
            'cost' => 545000.00,
          ],
        ];

        foreach ($shipmentRates as $key => $value) {
            ShipmentRate::create($value);
        }
    }
}