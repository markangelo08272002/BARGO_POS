<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::OrderBy('id','ASC')->paginate(10);
        return view('products.display',[
            'products' => $products
        ]); 
    }
}
