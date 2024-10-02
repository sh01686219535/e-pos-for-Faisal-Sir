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
        Schema::create('item_prices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item_info_id'); 
            $table->foreign('item_info_id')->references('id')->on('item_infos')->onDelete('cascade'); 
            $table->unsignedBigInteger('item_cost_id'); 
            $table->foreign('item_cost_id')->references('id')->on('item_cost_infos')->onDelete('cascade');
            $table->string('item_price'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_prices');
    }
};
