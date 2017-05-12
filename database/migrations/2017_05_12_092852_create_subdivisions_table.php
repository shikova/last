<?php use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubdivisionsTable extends Migration
{
    /** * Run the migrations. * * @return void */
    public function up()
    {
        Schema::create('subdivisions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    /** * Reverse the migrations. * * @return void */
    public function down()
    {
        Schema::dropIfExists('subdivisions');
    }
}