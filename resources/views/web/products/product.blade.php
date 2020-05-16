@extends ('web.master')

@section('title', 'NombreProducto')

@section('content')

    <h2>{{$product->name}}</h2>
    <hr class="my-4" style="max-width: 700px; margin-left:0;">
    <div class="card mb-3" style="max-width: 700px; padding: 50px;">
        <div class="row no-gutters">
            <div class="col-md-5">
                <img src="{{ url('static/images/collar.jpg') }}" class="card-img img-fluid" alt="...">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title">Description</h5>
                    <p class="card-text">{{$product->description}}</p>
                    <p class="card-text"><small class="text-muted">Add to cart</small></p>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-4" style="max-width: 700px; margin-left:0;">
@stop
