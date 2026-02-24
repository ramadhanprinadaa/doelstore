<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SaleExpense extends Model
{

    use HasFactory;

    protected $table = 'sale_expenses';    

    protected$fillable = [
        'sale_id',
        'item_cost',
        'shipment_cost',
        'handling_cost',
        'ojol_cost',
        'additional_cost',
    ];

    public function sale()
    {
        return $this->belongsTo(Sale::class, 'sale_id');
    }
}