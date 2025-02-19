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
        Schema::create('accomplishes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('activity_id');
            $table->bigInteger('target_id');
            $table->bigInteger('calculation_type')->default('1');
            $table->float('accomplish_value');
            $table->string('period');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accomplishes');
    }
};
