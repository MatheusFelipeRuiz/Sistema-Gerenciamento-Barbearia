<nav class='navbar bg-dark navbar-expand-md' data-bs-theme="dark">
    <div class='container'>
        <a class='navbar-brand' href='{{ url('/') }}'>
            <img src='{{ asset('img/logo-ademir-cortes.png') }}' alt='Logo' width='40' height='40' class='d-inline-block align-text-top'>
        </a>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent'
            aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='{{ __('Toggle navigation') }}'>
            <span class='navbar-toggler-icon'></span>
        </button>

        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
            <!-- Right Side Of Navbar -->
            <ul class='navbar-nav ms-auto'>
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class='nav-item btn btn-primary me-2 p-0'>
                            <a class='nav-link text-light' href='{{ route('login') }}' role="button">
                                {{ __('Login') }}
                            </a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class='nav-item btn btn-success p-0'>
                            <a class='nav-link text-light' href='{{ route('register') }}'>{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('services.index') }}">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Agendamentos</a>
                    </li>
                    <li class='nav-item dropdown'>
                        <a id='navbarDropdown' class='nav-link dropdown-toggle' href='#' role='button'
                            data-bs-toggle='dropdown' aria-haspopup='true' aria-expanded='false' v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class='dropdown-menu dropdown-menu-end' aria-labelledby='navbarDropdown'>
                            <a class='dropdown-item' href='{{ route('logout') }}'
                                onclick='event.preventDefault();
                                             document.getElementById('logout-form').submit();'>
                                {{ __('Logout') }}
                            </a>

                            <form id='logout-form' action='{{ route('logout') }}' method='POST' class='d-none'>
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
