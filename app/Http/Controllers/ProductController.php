<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;
use App\Category;

class ProductController extends Controller
{
	var $brands;
    var $categories;
    var $products;
	public function __construct() {
        $this->brands = Brand::all(array('name'));
        $this->categories = Category::all(array('name'));
        $this->products = Product::all(array('id','name','price', 'image_url'));
    }
    public function products()
    {
        // $products = DB::table('products')->paginate(9);
        $products=Product::paginate(6);
    	 return view('products',['products' => $products]);

    }
    public function product_details($id) {
        $product = Product::find($id);
        return view('product_details', array('product' => $product, 'title' => $product->name,'description' => '','page' => 'products', 'brands' => $this->brands, 'categories' => $this->categories, 'products' => $this->products));
    }
     public function category_product()
    {
        // $products = DB::table('products')->paginate(9);
        $products=Product::paginate(6);
         return view('category_products',['products' => $products]);

    }
}
