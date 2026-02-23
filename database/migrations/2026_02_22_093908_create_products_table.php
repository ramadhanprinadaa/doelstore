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
        Schema::create('products', function (Blueprint $table) {
            $table->id()->unique();
            $table->foreignId('admin_id')->constrained('users');
            $table->string('name');
            $table->string('brand');
            $table->string('part_number');
            $table->string('vehicle_type');
            $table->integer('weight');
            $table->decimal('purchase_price', 15, 2);
            $table->string('purchase_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};