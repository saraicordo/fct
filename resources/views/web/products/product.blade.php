@extends ('web.master')

@section('title', 'NombreProducto')

@section('content')

    <h2>{{$product->name}}</h2>
    <hr class="my-4" style="max-width: 700px; margin-left:0;">
    <div class="card mb-3" style="max-width: 700px; padding: 50px;">
        <div class="row no-gutters">
            <div class="col-md-5">
                <img src="{{ asset('static/images/products/' . $product->id . '.png') }}" class="card-img img-fluid" alt="...">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title">Description</h5>
                    <p class="card-text">{{$product->description}}</p>
                    <span class="price-tag">{{ number_format($product->price / 100, 2) }} €</span>
                    <small class="text-muted float-right">
                        

                        <a href="/cart/{{$product->id}}">Add to cart <i class="fas fa-cart-plus"></i></a>
                    </small>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-4" style="max-width: 700px; margin-left:0;">
@stop
