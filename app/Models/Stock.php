<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Product;

class Stock extends Model
{
    use HasFactory;
    
    protected $table = 'stocks';

    protected $fillable = [
        'product_id',
        'quantity',
        'purchase_date',
        'purchase_price',
        'status'
    ];
    
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}