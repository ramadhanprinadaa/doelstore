<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    
    use HasFactory;
    
    protected $table = 'products';

    protected $fillable = [
        'name',
        'brand',
        'part_number',
        'vehicle_type',
        'weight',
        'purchase_price',
        'purchase_link',
    ];

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

    public function sales()
    {
        return $this->belongsToMany(Sale::class, 'product_sale', 'product_id', 'sale_id');
    }

    public function listings()
    {
        return $this->belongsTo(Listing::class, 'product_id');
    }

    public function stocks()
    {
        return $this->hasMany(Stock::class, 'product_id');
    }
}