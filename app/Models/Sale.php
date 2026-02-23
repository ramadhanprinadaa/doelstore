<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Sale extends Model
{
    protected $fillable = [
        'sale_number_ebay',
        'order_date',
        'buyer_name',
        'funding_type',
        'status',
        'investor_id',
        'admin_id',
    ];

    public function investor()
    {
        return $this->belongsTo(User::class, 'investor_id');
    }

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
    
    public function products(){
        return $this->belongsToMany(Product::class);
    }
}