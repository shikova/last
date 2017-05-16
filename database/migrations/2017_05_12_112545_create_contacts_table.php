<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pro_id')->nullable()->unsigned()->index();
            $table->foreign('pro_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');

            $table->integer('address_id')->nullable()->unsigned()->index();
            $table->foreign('address_id')->references('id')->on('addresses')->onUpdate('cascade')->onDelete('set null');

//            $table->integer('speciality_id')->nullable()->unsigned()->index();
//            $table->foreign('speciality_id')->references('id')->on('specialities')->onUpdate('cascade')->onDelete('set null');
            $table->string("phone");
            $table->string('fax');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('about');
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
        Schema::dropIfExists('contacts');
    }
}
