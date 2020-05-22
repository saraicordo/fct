@extends ('web.master')

@section('title', 'Cart')

@section('content')

    <h2>{{$user->name}}'s Cart</h2>
    <hr class="my-4">


        @foreach ($products as $product) 
        
            <div class="cart" href={{ URL::action('ViewController@product', $product->id) }}>

                <div class="cart-1">
                    <img src="{{ asset('static/images/products/' . $product->id . '.png') }}" class="img-fluid img-cart" alt="...">                        </div>
                <div  class="cart-2">                    
                    <div>
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">{{$product->description}}</p>
                    </div>
                    <div>
                        <span class="price-tag">{{ number_format($product->price / 100, 2) }} €</span>
                    </div>
                </div>
            </div>         
            <hr class="my-4">
        @endforeach

        <div class="cart-subtotal">
            <div class="cart-subtotal-1">
                <h3>Subtotal</h3>
            </div>
            <div class="cart-subtotal-2">
                <span class="price-tag">{{ number_format($product->price / 100, 2) }} €</span>
                <button type="button" class="btn btn-success">Tramitar pedido</button>
            </div>
        </div>



@stop