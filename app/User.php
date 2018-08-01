<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public $timestamp=true;
    public function Post()
    {
        return $this->hasMany('App\Post','user_id','id');
    }
    public function Order()
    {
        return $this->hasMany('App\Order','user_id','id');
    }
    public function Comment()
    {
        return $this->hasMany('App\Comment','user_id','id');
    }
}
