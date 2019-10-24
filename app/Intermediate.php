<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intermediate extends Model
{
    protected $table        = 'intermediate';
    protected $fillable     = ['id','user_id','board_name','state','passing_year','percentage','school_name','school_address'];
}
