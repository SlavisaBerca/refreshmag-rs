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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('icon')->nullable();
            $table->string('photo')->nullable();
            $table->bigInteger('postition');
            $table->enum('type',['single','with_childs','mega'])->default('single');
            $table->tinyInteger('show_in_tab')->default('0');
            $table->tinyInteger('show_in_popular')->default('0');
            $table->tinyInteger('show_in_featured')->default('0');
            $table->tinyInteger('show_in_last')->default('0');
            $table->tinyInteger('status')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
