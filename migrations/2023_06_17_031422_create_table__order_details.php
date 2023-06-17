<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Order_details', function (Blueprint $table) {
            $table->unsignedInteger('OrderID');
            $table->unsignedInteger('ProductID');
            $table->decimal('UnitPrice', 10, 2);
            $table->integer('Quantity');
            $table->decimal('Discount', 4, 2);
            $table->timestamps();

            $table->foreign('OrderID')->references('OrderID')->on('orders');
            $table->foreign('ProductID')->references('ProductID')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Order_details');
    }
};
