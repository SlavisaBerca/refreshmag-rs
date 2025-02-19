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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('currency_id')->nullable();
            $table->string('customer_id');
            $table->string('order_id')->nullable();
            $table->float('value');
            $table->float('tax_value')->default('0');
            $table->float('original_total');
            $table->float('currency_total')->nullable();
            $table->enum('invoice_type',['proform','fiscal'])->default('proform');
            $table->enum('invoice_payment_status',['pending','paid'])->default('pending');
            $table->string('invoice_payment_deadline')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
