@extends ('web.master')

@section('content')
    <h1 class="main-title">Welcome!</h1>
    <hr class="my-4">
    <h4 class="d-block d-md-none">Check out our products</h4>
    <h5 class="d-none d-md-block">Check out some of our latest products from your local artisans.</h5>
    <br>
    <div id="productsCarousel" class="carousel slide m-auto products-carousel" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($products as $i => $product) 
                <div class="carousel-item {{$i === 0 ? 'active' : ''}}">
                    <a href={{ URL::action('ViewController@product', $product->id) }}>
                        <img
                            class="d-block img-fluid carousel-image hover-shadow"
                            src="{{ asset('static/images/products/' . $product->id . '.png') }}"
                            alt="{{$product->name}}"
                        >
                        <div class="d-none d-md-block mt-3">
                            <h5 class="text-center">{{$product->name}}</h5>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#productsCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#productsCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <script>
        $('.carousel').carousel({
            interval: 3000
        })
    </script>
@stop
