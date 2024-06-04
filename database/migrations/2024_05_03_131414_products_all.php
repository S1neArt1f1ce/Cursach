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
        //
        Schema::dropIfExists('products_all');
        Schema::create('products_all', function (Blueprint $table) {
            $table->id()->primary();
            $table->tinyText('name');
            $table->text('smalldesc');
            $table->text('desc');
            $table->float('price');
            $table->bigInteger('seller_id')->unsigned();
            $table->foreign('seller_id')->references('id')->on('all_users');
            $table->enum('product_type', ['food', 'tool', 'cleaning']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('products_all');
    }
};
