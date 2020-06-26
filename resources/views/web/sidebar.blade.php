<div class="sidebar">
    <div class="logo"><img src="{{ url('static/images/logo.png') }}" class="img-fluid"></div>
    <ul class="nav flex-column">
        <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
        <li class="nav-item">
            <a class="nav-link dropdown-toggle flecha" href="#">Categories</a>
            <ul class="nav_desplegable flex-column">
                @foreach ($categories as $category)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::action('ViewController@category', $category->id) }}">{{$category->name}}</a>
                    </li>
                @endforeach
           </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="/about">About us</a></li>
        <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="/fairtrade">Fairtrade</a></li>
    </ul>

    <div class="social-nets">
        <ul><i class="fab fa-twitter"></i></ul>
        <ul><i class="fab fa-facebook"></i></ul>
        <ul><i class="fab fa-instagram"></i></ul>
    </div>

    <script>
        $(document).ready(function(){
            $('.flecha').click(function(){
                $('.nav_desplegable').slideToggle("slow");
            });
        });
    </script>
</div>
