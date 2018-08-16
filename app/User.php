<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
<<<<<<< HEAD
    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];
=======
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
>>>>>>> 67dd67153f16cdc53dfcdfaa1e04f3dfabe55f93

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
<<<<<<< HEAD
    'remember_token',
    ];
    public $timestamp = true;
    
=======
        'remember_token',
    ];
    public $timestamp = true;

>>>>>>> 67dd67153f16cdc53dfcdfaa1e04f3dfabe55f93
    public function post()
    {
        return $this->hasMany('App\Post', 'user_id', 'id');
    }

    public function order()
    {
        return $this->hasMany('App\Order', 'user_id', 'id');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment', 'user_id', 'id');
    }
}
