@extends ('web.master')

@section('title', 'Cart')

@section('content')

    <h2>{{$user->name}}'s Cart</h2>
    <hr class="my-4">

    <div>
        @foreach ($products as $product) 

            <div class="cart">
                <div>

                    <a href={{ URL::action('ViewController@product', $product->id) }}>

                        <div class="cart-1">
                            <img src="{{ asset('static/images/products/' . $product->id . '.png') }}" class="img-fluid img-cart" alt="...">                        </div>
                        <div  class="cart-2">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <p class="card-text">{{$product->description}}</p>
                        </div>
                    </a>

                </div>
            </div>
            <hr class="my-4">
        @endforeach
    </div>


@stop