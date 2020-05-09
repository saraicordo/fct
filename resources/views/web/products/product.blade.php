@extends ('web.master')

@section('title', 'NombreProducto')

@section('content')

    <h2>Nombre producto</h2>
    <hr class="my-4" style="max-width: 700px; margin-left:0;">

    <div class="card mb-3" style="max-width: 700px; padding: 50px;">
        <div class="row no-gutters">
            <div class="col-md-5">
                <img src="{{ url('static/images/collar.jpg') }}" class="card-img img-fluid" alt="...">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Añadir a la cesta</small></p>
                </div>
            </div>
        </div>
    </div>

     <hr class="my-4" style="max-width: 700px; margin-left:0;">
@stop