<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{
    public function find(Request $Request)
    {
    	$product=Product::where('name','like','%' .$Request->get('q').'%')->get();
    	return response()->json($product);
    }
}
