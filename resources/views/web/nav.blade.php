    <div class="navbar d-flex flex-row-reverse bd-highlight">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/') }}" class="p-2 bd-highlight">Home</a>
                        <a href="{{ url('/logout') }}" class="p-2 bd-highlight">Cerrar sesión</a>

                    @else
                        <a href="{{ route('login') }}" class="p-2 bd-highlight">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    </div>