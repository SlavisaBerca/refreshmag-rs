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
        Schema::create('app_csses', function (Blueprint $table) {
            $table->id();
            $table->string('header_top_bg')->nullable();
            $table->string('header_top_color')->nullable();
            $table->string('header_middle_bg')->nullable();
            $table->string('header_middle_color')->nullable();
            $table->string('header_bottom_bg')->nullable();
            $table->string('header_bottom_color')->nullable();
            $table->string('cat_menu_bg')->nullable();
            $table->string('cat_menu_color')->nullable();
            $table->string('footer_bg')->nullable();
            $table->string('footer_color')->nullable();
            $table->string('copyright_bg')->nullable();
            $table->string('copyright_color')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_csses');
    }
};
