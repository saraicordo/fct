@extends ('web.master')

@section('title', "{{$category->name}}")

@section('content')
    <h2>{{$category->name}}</h2>
    <hr class="my-4">
    <div class="row row-cols-1 row-cols-md-3">
        @foreach ($products as $product)
            <div class="col col-md-6 mb-4">
                <div class="card .h-100 hover-shadow">
                    <a href={{ URL::action('ViewController@product', $product->id) }}>
                        <img src="{{ asset('static/images/products/' . $product->id . '.png') }}" class="img-fluid, card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <p class="card-text">{{ textPreview($product->description, 70) }}</p>
                        </div>
                    </a>
                    <div class="card-footer mt-2 mt-lg-4">
                        <span class="price-tag">{{ number_format($product->price / 100, 2) }} €</span>
                        <small class="text-muted float-right">
                            <a href="/cart/{{$product->id}}">Add to cart<i class="fas fa-cart-plus"></i></a>
    
                        </small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <hr class="my-4">

    @php
        function textPreview($text, $numChars) {
            if (strlen($text) < $numChars) {
                return $text;
            }
            return substr($text, 0, $numChars) . '...';
        }
    @endphp
@stop
