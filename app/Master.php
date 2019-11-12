<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    protected $table        = 'master';
    protected $fillable     = ['id','user_id','course_name','university','college','state','from','to','passing_year','percentage','college_address','specialization'];
}
