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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->constrained('users');
            $table->foreignId('product_id')->constrained('products');
            $table->foreignId('shipment_rates_id')->constrained('products');
            $table->decimal('estimated_shipment_cost', 15, 2);
            $table->decimal('estimated_total_cost', 15, 2);
            $table->decimal('estimated_ebay_price', 15, 2);
            $table->decimal('estimated_margin', 15, 2);
            $table->enum('status', ['active', 'draft'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};