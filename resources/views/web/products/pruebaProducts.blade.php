    <div class="products">
        @foreach($products as $product)
            <div class="product">
                <h3>{{ $product->name }}</h3>
                <img src="{{ $product->image }}" width="200">

                <div class="product-description">
                    <p>{{ $product->description}}</p>
                </div>
                
                <div class="product-inf">
                    <p>${{ number_format($product->price,2) }}</p>
                    <a href="">Añadir a la cesta</a> 
                </div>

            </div>
        @endforeach
    </div>