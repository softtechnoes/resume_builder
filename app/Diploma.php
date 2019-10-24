<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diploma extends Model
{
    protected $table        = 'diploma';
    protected $fillable     = ['id','user_id','university','college','state','from','to','passing_year','percentage','college_address'];
}
