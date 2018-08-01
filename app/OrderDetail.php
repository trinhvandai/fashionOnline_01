<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table="order_details";
    public $timestamp=true;
    public function Order()
    {
    	return $this->belongsTo('App\Order','order_id','id');
    }
    public function Product()
    {
    	return $this->belongsTo('App\Product','product_id','id');
    }
}
