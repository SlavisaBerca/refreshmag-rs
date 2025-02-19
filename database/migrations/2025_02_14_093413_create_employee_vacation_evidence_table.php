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
        Schema::create('employee_vacation_evidence', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('employee_id');
            $table->string('start_date');
            $table->string('end_date');
            $table->integer('total_days');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_vacation_evidence');
    }
};
