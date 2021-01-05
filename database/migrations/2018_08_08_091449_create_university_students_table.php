<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniversityStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('university_students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('gender',20);
            $table->date('birth_date');
            $table->string('citizenship');
            $table->year('year_admitted');
            $table->year('year_completed');
            $table->string('index_number');
            $table->string('form_4_index_number');
            $table->string('form_6_index_number');
            $table->string('diploma_index_number');
            $table->integer('degree_programme')->unsigned()->index()->nullable();
            $table->string('score');
            $table->double('gpa',8,2);
            $table->integer('user_id')->unsigned()->index()->nullable();
            $table->integer('university_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('degree_programme')->references('id')->on('faculties')->onDelete('cascade');
            $table->foreign('university_id')->references('id')->on('universities')->onDelete('cascade');
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
        Schema::dropIfExists('university_students');
    }
}
