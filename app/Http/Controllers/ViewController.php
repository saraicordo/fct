<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\User;


class ViewController extends Controller
{
    public $carrito = 0;

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

        $product = product::find($id);
          
        if(!$product) {

                abort(404);
        }
        $cart = session()->get('cart');

        if(!$cart) {

            $cart = [
                $id => [
                    "name" => $product->name,
                    "qty" => 1,
                    "price" => $product->price,
                ]
                ];

                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Product added to cart successfully');
        }

        if(isset($cart[$id])) {
               $cart[$id]['qty']++;
               session()->put('cart', $cart);
               return redirect()->back()->with('success', 'Product added to cart successfully');
        } 

        $cart[$id] = [
            "name"=> $product->name,
            "qty"=>1,
            "price"=> $product->price,

        ];

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully');

    }

        

       /* $this->carrito++;

        $products = Product::where('user_id', '1')->get();
        $cart = [];
        $product = Product::findOrFail($id);
        
        $cart['productos'] = array();
        $cart['total'] = 0;

        /*if(isset($_SESSION['cart'])) {
            $cart['total']++;
            $cart = $_SESSION['cart'];
        } else $_SESSION['cart'] = $cart;
        
        //dd($_SESSION['cart']);*/
        
    
        /*if($id != null) {
            $qty = 1;
            $price = $product->price * $qty;
        
            $cart['productos'][] = array('producto'=>$product, 'qty'=>$qty,'price'=>$price);
            $cart['total'] = $price; 
        }
        //$_SESSION['cart'] = $cart;

        return view('web.shop.cart', [
            'categories' => Category::all(),
            'products' => $products,
            'user' => User::find(1),
            'cart' => $cart  
        ]);*/

        
        

    public function cart() {

        $cart['productos']= array();
        $cart['total'] = 0; 

        return view('web.shop.cart', [
            'categories' => Category::all(),
            'user' => User::find(1),
            'cart' => $cart  
            
        ]);
    }
}
