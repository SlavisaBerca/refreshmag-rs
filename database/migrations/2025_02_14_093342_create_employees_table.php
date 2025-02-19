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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('birth_identification_number');
            $table->string('id_series')->nullable();
            $table->string('id_number');
            $table->string('id_photo')->nullable();
            $table->string('country');
            $table->string('state');
            $table->string('province');
            $table->string('city');
            $table->string('zip_code');
            $table->string('street_name')->nullable();
            $table->string('street_number')->nullable();
            $table->string('block')->nullable();
            $table->string('floor')->nullable();
            $table->string('door')->nullable();
            $table->bigInteger('company_department_id')->nullable();
            $table->string('position_name')->nullable();
            $table->longText('job_description')->nullable();
            $table->text('salary_ammount')->nullable();
            $table->string('contract_start_date');
            $table->string('contract_number');
            $table->string('contract_file')->nullable();
            $table->string('medical_examinaion_file')->nullable();
            $table->enum('contract_type',['temporarry','permanent','extern'])->default('temporarry');
            $table->string('total_leave_days')->default('0');
            $table->tinyInteger('allowed_on_call')->default(0);
            $table->string('contract_end_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
