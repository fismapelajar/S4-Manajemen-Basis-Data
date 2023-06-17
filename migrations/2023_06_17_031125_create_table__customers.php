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
        Schema::create('Customers', function (Blueprint $table) {
            $table->increments('CustomerID');
            $table->string('CompanyName');
            $table->string('ContactName');
            $table->string('ContactTitle');
            $table->string('Address');
            $table->string('City');
            $table->string('Region');
            $table->string('PostalCode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Customers');
    }
};
