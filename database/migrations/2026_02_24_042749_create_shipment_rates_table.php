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
        Schema::create('shipment_rates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->constrained();
            $table->string('shipment_type');
            $table->integer('weight_min');
            $table->integer('weight_max');
            $table->decimal('cost', 15, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipment_rates');
    }
};