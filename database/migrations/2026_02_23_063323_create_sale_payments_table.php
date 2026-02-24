<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sale_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sale_id')->constrained('sales')->cascadeOnDelete();
            $table->date('payment_date');
            $table->decimal('gross_usd', 15, 2);
            $table->decimal('gross_idr', 15, 2);
            $table->decimal('payout_fee_usd', 15, 2);
            $table->decimal('exchange_rate', 15, 2);
            $table->decimal('net_income_idr', 15, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_payments');
    }
};