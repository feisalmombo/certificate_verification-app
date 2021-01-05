<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id')->unsigned()->index()->nullable();
            $table->integer('university_student_id')->unsigned()->index()->nullable();
            $table->integer('semester');
            $table->string('grade');
            $table->year('year_studied');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('university_student_id')->references('id')->on('university_students')->onDelete('cascade');
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
        Schema::dropIfExists('course_results');
    }
}
