<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;

    protected $table = 'listings';

    protected $fillable = [
        'admin_id',
        'product_id',
        'shipment_rates_id',
        'estimated_shipment_cost',
        'estimated_total_cost',
        'estimated_ebay_price',
        'estimated_margin',
        'status',
    ];

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    public function shipment_rates()
    {
        return $this->belongsTo(ShipmentRate::class, 'shipment_rates_id');
    }
}