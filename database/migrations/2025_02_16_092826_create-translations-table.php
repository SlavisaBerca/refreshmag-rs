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
        Schema::create('translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('attributable_id');
            $table->string('attributable_type');
            $table->bigInteger('language_id');
            $table->string('name');
            $table->string('title');
            $table->string('subtitle');
            $table->string('short_desrciption');
            $table->longText('description_one');
            $table->longText('description_tow');
            $table->longText('description_three');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('translations');
    }
};
