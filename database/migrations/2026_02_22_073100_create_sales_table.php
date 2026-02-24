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
        Schema::create('sales', function (Blueprint $table) {
            $table->id()->unique(); // sale_number_internal
            $table->foreignId('investor_id')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('admin_id')->constrained('users');
            $table->string('sale_number_ebay');
            $table->date('order_date');
            $table->string('buyer_name');
            $table->enum('funding_type', ['store', 'investor'])->default('store');
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};