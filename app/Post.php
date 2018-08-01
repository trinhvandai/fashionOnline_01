<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table="posts";
    public $timestamp=true;
    public function Comment()
    {
    	return $this->morphMany('App\Comment','Object');
    }
    public function User()
    {
    	return $this->belongsTo('App\User','user_id','id');
    }
    public function Category()
    {
    	return $this->belongstoMany('App\Category','category_id','post_id');
    }
}
