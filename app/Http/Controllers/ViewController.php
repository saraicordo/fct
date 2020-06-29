<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\User;


class ViewController extends Controller

{



    public function index() {
        return view('web.home', [
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
            'user' => User::find(1),
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
    public function fairtrade() {
        return view('web.fairtrade', [
            'categories' => Category::all(),
        ]);
    }

    public function addtocart($id=null) {
       
        $products = Product::where('user_id', '1')->get();

        $product = product::find($id);
          
        if(!$product) {

                abort(404);
        }
        
        $cart = session()->get('cart');

        if(!$cart) {

            $cart['productos'] = array();
            $cart['total'] = 0;
            
            $qty = 1;
            $price = $product->price * $qty;
        
            $cart['productos'][$product->id] = array('producto'=>$product, 'qty'=>$qty,'price'=>$product->price);
            $cart['total'] = $price;
            
            

            /*$cart = [
                $id => [
                    "name" => $product->name,
                    "qty" => 1,
                    "price" => $product->price,
                ]
                ];*/

                
        } else {

            if(isset($cart['productos'][$product->id])) {
                $cart['productos'][$product->id]['qty']++;
                
            } else {
                $cart['productos'][$product->id] = array('producto'=>$product, 'qty'=>1,'price'=>$product->price);
            }

            $cart['total'] += $product->price;
            
            
        
        } 

        session()->put('cart', $cart);

      

        return view('web.shop.cart', [
            'categories' => Category::all(),
            'products' => $products,
            'user' => User::find(1),
            'cart' => $cart 
        ]);
    


    }

        


        
        

    public function cart() {

        $cart = session()->get('cart');

        if(!$cart) {
            $cart['productos']= array();
            $cart['total'] = 0; 
        } 

        return view('web.shop.cart', [
            'categories' => Category::all(),
            'user' => User::find(1),
            'cart' => $cart  
            
        ]);
    }

    public function removecart($id=null) {
       
        $cart = session()->get('cart');  

        if(isset($cart['productos'][$id])) {

            $price = $cart['productos'][$id]['producto']->price*$cart['productos'][$id]['qty'];
            unset($cart['productos'][$id]);
            $cart['total'] -= $price;
            session()->put('cart', $cart);
            
        } 

        return view('web.shop.cart', [
            'categories' => Category::all(),
            'user' => User::find(1),
            'cart' => $cart  
            
        ]);
        

    }
}
