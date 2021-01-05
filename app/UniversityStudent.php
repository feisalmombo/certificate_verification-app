<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UniversityStudent extends Model
{
    //
    protected $fillable=[
        'first_name', 'middle_name', 'last_name', 'gender', 'year_admitted', 'year_completed', 'index_number', 'form_4_index_number', 'form_6_index_number', 'diploma_index_number',
         'degree_programme', 'score', 'user_id','birth_date','citizenship','gpa'
    ];
}
