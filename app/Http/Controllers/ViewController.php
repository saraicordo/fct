<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Resources\User;
use App\Product;


class ViewController extends Controller
{
    public function index() {
        return view('web.index', ['categories' => Category::all()]);
    }

    public function products() {
        return view('web.products.products', [
            'categories' => Category::all(),
            'products' => Product::all(),
        ]);
    }

    public function product($id) {
        $product = Product::findOrFail($id);

        return view('web.products.product', [
            'categories' => Category::all(),
            'product' => $product,
        ]);
    }

    public function category($id) {
        $category = Category::findOrFail($id);

        return view('web.categories.category', [
            'products' => Product::where('category_id', $id)->get(),
            'categories' => Category::all(),
            'category' => $category,
        ]);
    }

    public function about() {
        return view('web.about', [
            'categories' => Category::all(),
        ]);
    }

    public function contact() {
        return view('web.contact', [
            'categories' => Category::all(),
        ]);
    }
}
