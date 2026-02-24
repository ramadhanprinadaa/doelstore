<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Country;

class ShipmentRate extends Model
{
    use HasFactory;

    protected $table = 'shipment_rates';

    protected $fillable = [
        'country_id',
        'shipment_type',
        'weight_min',
        'weight_max',
        'cost',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function listings()
    {
        return $this->hasMany(Listing::class, 'shipment_rates_id');
    }
}