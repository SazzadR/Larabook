<?php

namespace App;

use App\Presenter\PresentableTrait;
use Auth;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use PresentableTrait;

    protected $table = 'comments';

    protected $fillable = ['status_id', 'user_id', 'body'];

    protected $presenter = 'App\Presenter\CommentPresenter';

    public static function boot()
    {
        parent::boot();

        static::creating(function ($comment) {
            $comment->user_id = Auth::user()->id;
        });
    }

    public function status()
    {
        return $this->belongsTo('App\Status', 'status_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
