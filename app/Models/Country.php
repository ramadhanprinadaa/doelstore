<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';

    protected $fillable = [
        'name',
        'iso_code',
    ];

    public function shipment_rates()
    {
        return $this->hasMany(ShipmentRate::class, 'country_id');
    }
}