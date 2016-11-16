<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Presenter\PresentableTrait;

class User extends Authenticatable
{
    use Notifiable;
    use PresentableTrait;

    protected $presenter = 'App\Presenter\ViewPresenter';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function statuses()
    {
        return $this->hasMany(Status::class);
    }
}
