<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrothersuniversiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_brothersuniversi', function (Blueprint $table) {
            $table->increments('stdno');
            $table->integer('caleder');
            $table->string('Name');
            $table->string('Univid');
            $table->string('Level');
            $table->string('aid');
            $table->string('nots');
            $table->string('Doc');

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
        Schema::dropIfExists('_brothersuniversi');
    }
}
