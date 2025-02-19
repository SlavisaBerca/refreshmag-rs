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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('RefreshMag|Srbija');
            $table->string('logo')->default('logo.png');
            $table->string('icon')->default('icon.png');
            $table->string('main_email')->default('office@refreshmag.rs');
            $table->string('main_phone')->default('0754338560');
            $table->longText('meta_tags')->nullable();
            $table->longText('meta_description')->nullable();
            $table->tinyInteger('maintenance_mode')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_settings');
    }
};
