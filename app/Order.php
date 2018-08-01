<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table="orders";
    public $timestamp=true;
    public function User()
    {
    	return $this->belongsTo('App\User','user_id','id');
    }
    public function OrderDetail()
    {
    	return $this->hasMany('App\OrderDetail','order_id','id');
    }
    public function Product()
    {
    	return $this->belongstoMany('App\Product','product_id','order_id');
    }
}
