<?php

namespace App;
use App\Subject;
use App\Day;
use App\Hall;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    
    public $table = 'timetables';

    protected $fillable = [
        'user_id', 'subject_id','day_id','hall_id', 'lecturer_group_id', 'time_from', 'time_to', 
    ];

    public function hall(){
        return $this->belongsTo('App\Hall', 'hall_id');
    }

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    public function day(){
        return $this->belongsTo(Day::class);
    }
}
