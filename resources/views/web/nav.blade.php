<div class="navbar">
    <div class="logo_responsive">
        <img src="{{ url('static/images/logo.png') }}" class="img-fluid">
    </div>

    <div class="d-flex flex-row">
        <form class="form-inline p-2 ">
            <input class="buscador" type="search" placeholder="Search" aria-label="Search">
            <button type="submit"><i class="fas fa-search"></i></button>
        </form>
        <div class="d-flex flex-row">
            <div class="p-2 justify-content-end ml-5">
                <a href="{{ URL::action('ViewController@cart', '1') }}">
                    <i class=" fas fa-shopping-cart icon-cart"></i>
                </a>
            </div>
            <div class="p-0 mr-0">
                @if (Route::has('login'))
                    <div>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @auth
                                    <a href="{{ url('/logout') }}" class="dropdown-item">Cerrar sesión</a>
                                @else
                                    <a href="{{ route('login') }}" class="dropdown-item">Login</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="dropdown-item">Register</a>
                                    @endif
                                @endauth
                            </div>
                        </li>
                    </div>
                @endif
            </div>
        </div>
    </div>

    @include('web.menu_responsive')
</div>
