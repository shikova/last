<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('street_address');

            $table->integer('city_id')->nullable()->unsigned()->index();
            $table->foreign('city_id')->references('id')->on('cities')->onUpdate('cascade')->onDelete('set null');

            $table->integer('zip_code_id')->nullable()->unsigned()->index();
            $table->foreign('zip_code_id')->references('id')->on('zip_codes')->onUpdate('cascade')->onDelete('set null');


            $table->double('latitude');
            $table->double('longitude');
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
        Schema::dropIfExists('addresses');
    }
}
