<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'day_name', 
    ];
}
