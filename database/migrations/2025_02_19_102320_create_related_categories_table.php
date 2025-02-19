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
        Schema::create('related_categories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('attributable_id');
            $table->string('attributable_type');
            $table->bigInteger('related_category_id');
            $table->bigInteger('related_to_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('related_categories');
    }
};
