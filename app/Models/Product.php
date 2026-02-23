<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Product extends Model
{
    protected $fillable = [
        'name',
        'brand',
        'part_number',
        'vehicle_type',
        'weight',
        'purchase_price',
        'purchase_link',
        'admin_id'
    ];

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

    public function sales()
    {
        return $this->belongsToMany(Sale::class);
    }
}