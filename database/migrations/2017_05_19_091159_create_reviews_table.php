<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reviewer_id')->unsigned()->index();
            $table->foreign('reviewer_id')->references('id')->on('users');

            $table->integer('reviewed_id')->unsigned()->index();
            $table->foreign('reviewed_id')->references('id')->on('users');

            $table->string('message');
            $table->enum('rating',[1,2,3,4,5])->nullable();
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
        Schema::dropIfExists('reviews');
    }
}
