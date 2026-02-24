<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SaleShipment extends Model
{

    use HasFactory;

    protected $table = 'sale_shipments';

    protected $fillable = [
        'sale_id',
        'shipment_date',
        'delivery_date',
        'tracking_number',
        'destination_country',
        'shipment_type',
        'actual_weight',
        'status',
        'item_status'
    ];

    public function sale()
    {
        return $this->belongsTo(Sale::class, 'sale_id');
    }
}