@extends ('web.master')

@section('title', 'Cart')

@section('content')

    <h2>SA Cart</h2>
    <hr class="my-4">
    

      

        @foreach ($cart['productos'] as $unproducto) 
      

              
                
                    <div class="cart-2">
                        <h5 class="card-title">1 x {{$unproducto['producto']->name}}</h5>
                    </div>
                    
                    <div class="cart-1">
                        <span class="price-tag">{{ number_format($unproducto['producto']->price / 100, 2) }} €</span>
                    </div>
                  
                
                    
            <hr class="my-4">
           
        @endforeach


        <div class="cart-subtotal">
            <div class="cart-subtotal-1">
                <h3>Subtotal</h3>
            </div>
            <div class="cart-subtotal-2">
                <span class="price-tag">{{ number_format($cart['total'] / 100, 2) }} €</span>
                <button type="button" class="btn btn-warning"><a href="https://www.paypal.com/es/webapps/mpp/home">Tramitar pedido</a></button>
            </div>
        </div>



@stop