<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{
    public function search(Request $request)
    {
    	// $find_string = $request->get('find_string');
    	$product=Product::where('name','like','%' .$request->get('find_string').'%')->get();
    	// foreach ($product as $i) {
    	// 	echo $i->name;
    	// 	# code...
    	// }
        return view('search',compact('product'));
    }
}
