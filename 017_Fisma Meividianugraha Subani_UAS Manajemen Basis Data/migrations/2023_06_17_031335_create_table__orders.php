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
        Schema::create('Orders', function (Blueprint $table) {
            $table->increments('OrderID');
            $table->unsignedInteger('CustomerID');
            $table->unsignedInteger('EmployeeID');
            $table->date('OrderDate');
            $table->date('RequiredDate');
            $table->date('ShippedDate');
            $table->unsignedInteger('ShipVia');
            $table->decimal('Freight', 10, 2);
            $table->string('ShipName');
            $table->string('ShipAddress');
            $table->string('ShipCity');
            $table->string('ShipRegion');
            $table->string('ShipPostalCode');
            $table->string('ShipCountry');
            $table->timestamps();

            $table->foreign('CustomerID')->references('CustomerID')->on('customers');
            $table->foreign('EmployeeID')->references('EmployeeID')->on('employees');
            $table->foreign('ShipVia')->references('ShipperID')->on('shippers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Orders');
    }
};
