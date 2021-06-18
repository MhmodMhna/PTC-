<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableParentDate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent-date', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('parents_name');
            $table->string('per_relation');
            $table->integer('idpare_no');
            $table->string('health');
            $table->string('pare_work');
            $table->string('pare_salaly')->nullable();
            $table->string('parework_plase')->nullable();
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
        Schema::dropIfExists('parent-date');
    }
}
