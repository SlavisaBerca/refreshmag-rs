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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('customer_phone');
            $table->string('company_identity')->unique();
            $table->string('company_registration')->unique();
            $table->string('country')->nullable();
            $table->string('state');
            $table->string('province')->nullable();
            $table->string('city');
            $table->string('zip_code');
            $table->string('street_name')->nullable();
            $table->string('street_number')->nullable();
            $table->string('block')->nullable();
            $table->string('entrance')->nullable();
            $table->integer('floor')->nullable();
            $table->string('door')->nullable();
            $table->float('deposit_ammount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
