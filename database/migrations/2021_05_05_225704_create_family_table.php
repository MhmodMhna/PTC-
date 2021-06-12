<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family', function (Blueprint $table) {
            $table->increments('stdno');
            $table->integer('caleder');
            $table->string('BrName');
            $table->integer('Age');
            $table->string('levalace');
            $table->string('work');
            $table->integer('salary');
            $table->string('HelpfulValue');
            $table->string('nots');
            $table->string('HealthStatusid');
            $table->string('TypeDisabilityid');
            $table->string('Doc');
            $table->string('Kindshiplint');
            $table->string('workPlace');
            $table->string('idrvo');
            $table->string('Guardian');

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
        Schema::dropIfExists('family');
    }
}
