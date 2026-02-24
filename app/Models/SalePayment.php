<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SalePayment extends Model
{
    use HasFactory;

    protected $table = 'sale_payments';

    protected $fillable = [
        'sale_id',
        'payment_date',
        'gross_usd',
        'payout_fee_usd',
        'exchange_rate',
        'gross_idr',
        'net_income_idr',
    ];

    public function sale()
    {
        return $this->belongsTo(Sale::class, 'sale_id');
    }
}