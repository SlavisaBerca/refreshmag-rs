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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('company_identity')->nullable();
            $table->string('company_registration')->nullable();
            $table->string('administrator_name')->nullable();
            $table->string('responsable_person')->nullable();
            $table->string('official_email_address')->nullable();
            $table->string('official_phone_number')->nullable();
            $table->string('contact_email_address')->nullable();
            $table->string('contact_phone_number')->nullable();
            $table->string('country');
            $table->string('state');
            $table->string('city')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('street_name')->nullable();
            $table->string('street_number')->nullable();
            $table->string('block')->nullable();
            $table->string('entrance')->nullable();
            $table->string('floor')->nullable();
            $table->string('door')->nullable();
            $table->string('expires_at')->nullable();
            $table->tinyInteger('is_approved')->default(0);         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
