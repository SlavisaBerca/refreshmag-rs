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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('assigned_by');
            $table->bigInteger('assigned_to')->nullable();
            $table->bigInteger('assigned_to_department')->nullable();
            $table->longText('problem_description');
            $table->longText('solution_description')->nullable();
            $table->bigInteger('resolved_by')->nullable();
            $table->bigInteger('resolved_by_department')->nullable();
            $table->enum('priority',['low','middle','high','blocker'])->default('low');
            $table->integer('reassigned')->default('0');
            $table->enum('status',['waiting','todo','verifiying','resolved'])->default('waiting');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
