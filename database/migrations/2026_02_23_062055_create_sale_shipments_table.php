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
        Schema::create('sale_shipments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sale_id')->constrained('sales')->cascadeOnDelete();
            $table->date('shipment_date');
            $table->date('delivery_date');
            $table->string('tracking_number')->nullable();
            $table->string('destination_country');
            $table->string('shipment_type');
            $table->integer('actual_weight');
            $table->string('status')->default('process');
            $table->string('item_status')->default('success');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_shipments');
    }
};