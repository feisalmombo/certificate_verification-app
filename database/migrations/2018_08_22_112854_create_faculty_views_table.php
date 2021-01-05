<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultyViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
  
        \DB::statement("CREATE VIEW faculty_views 
                AS 
        SELECT faculties.id,faculties.faculty_code,faculties.faculty_name,universities.name
        from faculties INNER JOIN universities 
       WHERE faculties.university_id=universities.id");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faculty_views');
    }
}
