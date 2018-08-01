<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="categories";
    public $timestamp=true;
    public function CategoryPost()
    {
    	return $this->hasMany('App\CategoryPost','category_id','id');
    }
    public function CategoryProduct()
    {
    	return $this->hasMany('App\CategoryProduct','category_id','id');
    }
    public function Post()
    {
    	return $this->belongstoMany('App\Post','post_id','category_id');
    }
    public function Product()
    {
    	return $this->belongstoMany('App\Product','product_id','category_id');
    }

}
