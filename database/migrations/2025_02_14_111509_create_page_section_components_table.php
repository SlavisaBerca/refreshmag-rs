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
        Schema::create('page_section_components', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('page_section_id');
            $table->string('title')->nulllable();
            $table->longText('content')->nullable();
            $table->string('photo')->nullable();
            $table->json('slider')->nullable();
            $table->string('file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_section_components');
    }
};
