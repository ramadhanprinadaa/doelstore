<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sale extends Model
{

    use HasFactory;

    protected $table = 'sales';

    protected $fillable = [
        'admin_id',
        'investor_id',
        'product_id',
        'sale_number_ebay',
        'order_date',
        'buyer_name',
        'funding_type',
        'status',
    ];

    public function investor()
    {
        return $this->belongsTo(User::class, 'investor_id');
    }

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'sale_product', 'sale_id', 'product_id');
    }

    public function sale_expense()
    {
        return $this->hasOne(SaleExpense::class, 'sale_id');
    }

    public function sale_payment()
    {
        return $this->hasOne(SalePayment::class, 'sale_id');
    }

    public function sale_shipment()
    {
        return $this->hasOne(SaleShipment::class, 'sale_id');
    }
}