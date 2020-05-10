@extends ('web.master')

@section('title', 'NombreCategoría')

@section('content')

    <h2>Nombre categoría</h2>
    <hr class="my-4">
        
    <div class="row row-cols-1 row-cols-md-3">

        <div class="col mb-4">
            <div class="card .h-100">

                <a href="{{ url('product') }}">

                    <div class="card-img">
                        <img src="{{ url('static/images/logo.png') }}" class="img-fluid, card-img-top" alt="...">
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </a>

                <div class="card-footer">
                    <small class="text-muted">Añadir a la cesta</small>
                </div>

            </div>
        </div>

        <div class="col mb-4">
            <div class="card">
                <div class="card-img">
                    <img src="{{ url('static/images/collar.jpg') }}" class="img-fluid, card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Añadir a la cesta</small>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
                <div class="card-img">
                    <img src="{{ url('static/images/collar.jpg') }}" class="img-fluid, card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Añadir a la cesta</small>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-4">

@stop