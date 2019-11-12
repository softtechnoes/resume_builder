<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graduation extends Model
{
    protected $table        = 'graduation';
    protected $fillable     = ['id','user_id','university','college','state','from','to','passing_year','percentage','college_address','course_name','specialization'];
}
