@extends ('web.master')

@section('title', 'Home')

@section('content')

  <h1 class="display-4">Good prices </h1>
  <p class="lead">On this page you can find unique and unmatched products that you will not be able to find anywhere else.</p>
  <hr class="my-4">

  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>

  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>


  <div id="carouselExampleCaptions" class="carousel" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="static/images/logo.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First<picture></picture></h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="static/images/logo.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="static/images/logo.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Thrid</h5>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


@stop