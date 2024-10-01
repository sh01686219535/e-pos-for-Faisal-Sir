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
        Schema::create('item_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id'); 
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade'); 
            $table->unsignedBigInteger('sub_category_id'); 
            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->unsignedBigInteger('color_id');
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
            $table->unsignedBigInteger('size_id');
            $table->foreign('size_id')->references('id')->on('sizes')->onDelete('cascade');
            $table->string('name');
            $table->string('code');
            $table->unsignedBigInteger('supplier_id');
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
            $table->string('description')->nullable();
            $table->text('image')->nullable();
            $table->text('multiple_image')->nullable();
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_infos');
    }
};
