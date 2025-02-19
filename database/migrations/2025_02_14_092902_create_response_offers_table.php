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
        Schema::create('response_offers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('request_offer_id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email_address');
            $table->string('phone_number');
            $table->string('company_name')->nullable();
            $table->string('subject')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('response_offers');
    }
};
