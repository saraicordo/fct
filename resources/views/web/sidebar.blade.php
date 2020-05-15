<div class="sidebar">

    <div class="logo">
        <img src="{{ url('static/images/logo.png') }}" class="img-fluid">
    </div>

    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
        </li>

        <li class="nav-item">
            <a class="nav-link dropdown-toggle flecha" href="#">Categories</a>
            <ul class="nav_desplegable flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#">Category 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Category 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Category 3</a>
                </li>
            </ul>
        </li>
      
        <li class="nav-item">
            <a class="nav-link" href="#">About us</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
        </li>

        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        
    </ul>

    <div class="social-nets">
        <ul><i class="fab fa-twitter"></i></ul>
        <ul><i class="fab fa-facebook"></i></ul>
        <ul><i class="fab fa-instagram"></i></ul>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.flecha').click(function(){
            $('.nav_desplegable').slideToggle("slow");
        });
    });
</script>