<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFamilyInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family-info', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('fam_name');
            $table->string('fam_relation');
            $table->string('fam_age');
            $table->string('fam_level');
            $table->string('fam_work');
            $table->string('fam_salary')->nullable();
            $table->string('fam_aid')->nullable();
            $table->string('fam_nots')->nullable();
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
        Schema::dropIfExists('family-info');
    }
}
