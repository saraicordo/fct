<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Products

class ProductController extends Controller
{
    public function getShowProduct(){
        $products = Product::orderBy('id', 'desc')->paginate(25);
        $data = ['products' => $products];
        return view('web.products', $data);
    }

    public function getAddProduct(){
        return view()
    }
}
