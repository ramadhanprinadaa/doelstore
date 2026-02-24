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
        Schema::create('sale_expenses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sale_id')->constrained('sales')->cascadeOnDelete();
            $table->decimal('item_cost', 15, 2);
            $table->decimal('shipment_cost', 15, 2);
            $table->decimal('handling_cost', 15, 2);
            $table->decimal('ojol_cost', 15, 2);
            $table->decimal('additional_cost', 15, 2);
            $table->decimal('total_cost', 15, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_expenses');
    }
};