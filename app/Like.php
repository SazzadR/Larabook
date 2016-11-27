<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'likes';

    protected $fillable = ['status_id', 'user_id'];
}
