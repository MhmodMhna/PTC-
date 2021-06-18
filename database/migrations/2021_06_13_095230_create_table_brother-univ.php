<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBrotherUniv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brother-univ', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('bro_name');
            $table->string('bro_college');
            $table->string('bro_level');
            $table->string('bro_get_help');
            $table->string('bro_aid')->nullable();
                $table->string('bro_notes')->nullable();
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
        Schema::dropIfExists('brother-univ');
    }
}
