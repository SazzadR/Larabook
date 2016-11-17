<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Presenter\PresentableTrait;

class Status extends Model
{
    use Presentabletrait;

    protected $table = 'statuses';

    protected $fillable = ['body'];

    protected $presenter = 'App\Presenter\StatusPresenter';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
