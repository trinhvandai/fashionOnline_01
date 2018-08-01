<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    protected $table="category_products";
    public $timestamp=true;
    public function Category()
    {
    	return $this->belongsTo('App\Category','category_id','id');
    }
    public function Product()
    {
    	return $this->belongsTo('App\Product','product_id','id');
    }
}
