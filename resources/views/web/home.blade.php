@extends ('web.master')

@section('content')
    <h1 class="main-title">Welcome!</h1>
  <p class="lead">On this page you can find unique and unmatched products that you will not be able to find anywhere else.</p>
  <hr class="my-4">
  <p class="d-none d-md-block">Check out some of our latest products from your local artisans.</p>

    <h4 class="d-block d-md-none">Check out our products</h4>
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

    <br><br>
     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris elementum consequat orci, nec iaculis nulla feugiat quis. Mauris ultrices justo et magna posuere, nec facilisis lorem tincidunt. Aenean lectus sapien, sagittis ut sodales egestas, bibendum a massa. Fusce bibendum condimentum dui, quis finibus felis congue in. Donec mauris orci, vulputate a nibh sed, dapibus euismod enim. Donec eu tincidunt ex. Quisque tempor lobortis ipsum id gravida. Aliquam feugiat faucibus dolor, sed vestibulum lorem lobortis non. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus consectetur interdum neque, eu mollis lacus hendrerit ac. Integer nunc neque, egestas in dolor nec, malesuada porta sem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec scelerisque erat sed mollis faucibus.
    </p>


    <script>
        $('.carousel').carousel({
            interval: 3000
        })
    </script>
@stop
