<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVariabledataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_variabledata', function (Blueprint $table) {
            $table->increments('stdno');
            $table->integer('caleder');
            $table->string('work');
            $table->integer('Salary');
            $table->string('Approvpd');
            $table->string('AppraudSud');
            $table->string('Reslt');
            $table->string('StudentStatus');
            $table->string('FinancialAdoption');

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
        Schema::dropIfExists('_variabledata');
    }
}
