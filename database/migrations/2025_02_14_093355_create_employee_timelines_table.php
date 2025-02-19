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
        Schema::create('employee_timelines', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('employee_id');
            $table->string('start_at');
            $table->string('end_at')->nullable();
            $table->string('date');
            $table->tinyInteger('hours_in_day');
            $table->enum('type',['regular','oncall'])->default('regular');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_timelines');
    }
};
