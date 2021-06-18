<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableStudentInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student-info', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('stud_name');
            $table->integer('stud_id');
            $table->integer('acadmic_id');
            $table->string('specialty');
            $table->string('semester');
            $table->string('semester_year');
            $table->integer('fees_sem');
            $table->integer('acc_fee');
            $table->string('gender');
            $table->string('social_stud');
            $table->string('adrress');
            $table->integer('tel');
            $table->string('help');
            $table->string('ware_help')->nullable();
            $table->string('college_loan');
            $table->integer('member_loan')->nullable();
            $table->string('student_work');
            $table->string('student_salary')->nullable();

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
        Schema::dropIfExists('student-info');
    }
}
