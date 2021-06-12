<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaldataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_personaldata', function (Blueprint $table) {
            $table->increments('Stdno');
            $table->string('Stdname');
            $table->integer('Stdid');
            $table->integer('Stdspeeid');
            $table->integer('Genderid');
            $table->integer('Stntasid');
            $table->string('Addres');
            $table->integer('Jawno');
            $table->integer('Telno');
            $table->integer('Calender');
            $table->string('Addresstat');
            
            $table->string('Addrescity');
            $table->string('Brounivcant');
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
        Schema::dropIfExists('_personaldata');
    }
}
