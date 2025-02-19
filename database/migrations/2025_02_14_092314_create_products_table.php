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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id');
            $table->bigInteger('sub_category_id')->nullable();
            $table->bigInteger('child_category_id')->nullable();
            $table->enum('type',['physical','digital','licence','affiliate','discount_subscription','vendor_subscription'])->default('physical');
            $table->string('download_link')->unique();
            $table->string('licence_link')->unique();
            $table->string('affiliate_link')->unique();
            $table->string('name');
            $table->string('label')->nullable();
            $table->string('label2')->nullable();
            $table->string('photo')->nullable();
            $table->string('thumbnail')->nullable();
            $table->float('price');
            $table->float('sale_price')->nullable();
            $table->float('vendor_price')->nullable();
            $table->bigInteger('vendor_id')->nullable();
            $table->json('brands')->nullable();
            $table->json('attributes')->nullable();
            $table->json('colors')->nullable();
            $table->json('sizes')->nullable();
            $table->longText('description_one')->nullable();
            $table->longText('description_two')->nullable();
            $table->json('tehnical_details')->nullable();
            $table->bigInteger('views')->default(0);
            $table->bigInteger('sales')->default(0);
            $table->tinyInteger('allow_comments')->default('0'); 
            $table->tinyInteger('allow_ratings')->default('0'); 
            $table->tinyInteger('allow_affiliate_link')->default('0'); 
            $table->string('promotion_time')->nullable();
            $table->string('valability_time')->nullable();
            $table->longText('meta_tags')->nullable();
            $table->integer('barcode')->nullable();
            $table->string('qr_code')->nullable();
            $table->longText('meta_description')->nullable();
            $table->tinyInteger('status')->default('0');          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
