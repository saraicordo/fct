@extends ('web.master')

@section('content')
    <h1 class="main-title">¡Bienvenidos!</h1>
  <p class="lead">En esta página puede encontrar productos únicos e inigualables que no podrá encontrar en ningún otro lado.</p>
  <hr class="my-4">
  <p class="d-none d-md-block">Vea algunos de nuestros últimos productos de sus artesanos locales.</p>

    <h4 class="d-block d-md-none">Vea algunos de nuestros últimos productos de sus artesanos locales.</h4>
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
     <p> El Comercio Justo es un sistema comercial solidario y alternativo al convencional que persigue el desarrollo de los pueblos y la lucha contra la pobreza. Se basa en: Condiciones laborales y salarios adecuados para los productores, que les permitan vivir con dignidad. Sin explotación laboral infantil.
    </p>


    <script>
        $('.carousel').carousel({
            interval: 3000
        })
    </script>
@stop
