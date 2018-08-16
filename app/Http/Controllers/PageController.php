<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getSearch(Request $Request)
    {
    	$product=Product::where('name','like',)
    }
}
