<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table="products";
    public $timestamp=true;
    public function Comment()
    {
    	return $this->morphMany('App\Comment','Object');
    }
    public function Order()
    {
    	return $this->belongstoMany('App\Order','order_id','product_id');
    }
    public function Category()
    {
    	return $this->belongstoMany('App\Category','category_id','product_id');
    }
    public function Brand()
    {
    	return $this->belongsTo('App\Brand','brand_id','id');
    }
}
