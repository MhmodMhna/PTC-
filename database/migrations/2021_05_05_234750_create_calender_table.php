<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalenderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calender', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Caleder');
            $table->string('Calederno');
            $table->integer('Calederid');
            $table->integer('SemeleYers');
            $table->string('SemestrStatus');


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
        Schema::dropIfExists('calender');
    }
}
