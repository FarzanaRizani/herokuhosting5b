<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
   
    protected $fillable = [
        'subject_code', 'subject_name', 'lecturer_name'
    ];
}
