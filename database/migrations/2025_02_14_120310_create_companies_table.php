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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('identity')->unique();
            $table->string('registration')->unique();
            $table->string('email');
            $table->string('phone');
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
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
