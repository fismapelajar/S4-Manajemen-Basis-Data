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
        Schema::create('Products', function (Blueprint $table) {
            $table->increments('ProductID');
            $table->string('ProductName');
            $table->unsignedInteger('SupplierID');
            $table->unsignedInteger('CategoryID');
            $table->string('QuantityPerUnit');
            $table->decimal('UnitPrice', 10, 2);
            $table->integer('UnitsInStock');
            $table->integer('UnitsOnOrder');
            $table->integer('ReorderLevel');
            $table->tinyInteger('Discontinued');
            $table->timestamps();

            $table->foreign('SupplierID')->references('SupplierID')->on('suppliers');
            $table->foreign('CategoryID')->references('CategoryID')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Products');
    }
};
