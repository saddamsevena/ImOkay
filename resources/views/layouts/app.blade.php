<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-black shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    <img src="https://i.ibb.co/SPQyCnJ/logo-imokay.png" alt="logo" width="60" srcset="">
                </a>
                
                <a class="navbar-brand" href="{{ url('/artikel') }}">
                    Self-Healing Program
                </a>
                
                <a class="navbar-brand" href="{{ url('/artikel') }}">
                    Quick Test
                </a>
                
                <a class="navbar-brand" href="{{ url('/artikel') }}">
                    Artikel
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" style="allign-items: flex-end" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="/login">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>   
</body>

<footer class="footer text-white bg-black">
        <div class="container">
            <footer class="row row-cols-5 py-3 my-3 border-top">
                <div class="col">
                    <a href="{{ url('/home') }}" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                        <img src="https://i.ibb.co/SPQyCnJ/logo-imokay.png" alt="logo" height="200" srcset="">
                    </a>
                </div>

                <div class="col">

                </div>

                <div class="col">
                
                </div>

                <div class="col">
                    <h5>Help & Support</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Cara Penggunaan</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Section 2</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Section 3</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Section 4</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Section 5</a></li>
                    </ul>
                </div>

                <div class="col">
                    <h5>About Us</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Tentang Kami</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Kontak Kami</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Section 3</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Section 4</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Section 5</a></li>
                    </ul>
                </div>
            </footer>
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-1 border-top">
                <div class="col-md-4 d-flex align-items-center">
                <span class="text-muted">Hak Cipta © 2021 I'm Okay!</span>
                </div>

                <ul class="nav col-md-3 justify-content-first list-unstyled d-flex bg-white" style="border-radius: 5px">
                <li class="ms-3"><span class="text-muted">Follow us On : </span></li>
                <li class="ms-3"><a class="text-muted" href="#"><img src="https://i.ibb.co/7GqBGkJ/twitter.png" alt="Twitter" width="20"></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><img src="https://i.ibb.co/h7yX5z3/instagram.png" alt="Instagram" width="20"></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
                </ul>
            </footer>
        </div>
    </footer>
</html>