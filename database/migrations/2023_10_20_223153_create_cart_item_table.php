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
        Schema::create('cart_itens', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned();
            $table->double('price');
            $table->integer('amount');
            $table->bigInteger('product_store_id')->unsigned();
            $table->foreign('product_store_id')->references('id')->on('product_stores');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->index('id');

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_itens');
    }
};
