<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    
    protected $table        = 'user_experiences';
    protected $fillable     = ['id','user_id','company','role','from','to','city','description','sallery'];
}
