<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    protected $table        = 'user_skills';
    protected $fillable     = ['id','user_id','skills'];
}
