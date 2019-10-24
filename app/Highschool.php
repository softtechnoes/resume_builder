<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Highschool extends Model
{
    protected $table        = 'high_school';
    protected $fillable     = ['id','user_id','board_name','state','passing_year','percentage','school_name','school_address'];
}
