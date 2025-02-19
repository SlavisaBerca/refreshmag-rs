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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('currency_id')->nullable();
            $table->string('customer_id');
            $table->string('order_number')->nullable();
            $table->json('cart');
            $table->float('value');
            $table->float('tax_value')->default('0');
            $table->float('original_total');
            $table->float('currency_total')->nullable();
            $table->enum('order_status',['pending','packed','shipped','delivered','completed','returned'])->default('pending');
            $table->enum('order_payment_status',['pending','paid','returned'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
