    <div class="navbar d-flex  bd-highlight">

    <form class="form-inline">
        <input class="buscador" type="search" placeholder="Search" aria-label="Search">
        <button type="submit"><i class="fas fa-search"></i></button>
    </form>


            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/logout') }}" class="p-2 bd-highlight">Cerrar sesión</a>
                    @else
                        <a href="{{ route('login') }}" class="p-2 bd-highlight">Login</a>

                        <svg class="bi bi-person-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                        </svg>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>

                            <svg class="bi bi-person-square" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M14 1H2a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 001-1V2a1 1 0 00-1-1zM2 0a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2H2z" clip-rule="evenodd"/>
                                <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                            </svg>
                        @endif
                    @endauth
                </div>
            @endif

        @include('web.menu_responsive')

    </div>
    </div>