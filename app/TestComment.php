<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;

class TestComment extends Model

{
    use Commentable;
    protected $table        = 'my_comments';

    protected $fillable     = ['id','user_id'];

}
