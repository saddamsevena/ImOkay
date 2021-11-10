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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('article/css/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('article/css/showarticle.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('article/css/article.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('article/js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('article/nicepage.js') }}" defer=""></script>
    <style>
      body {
        background-color: #ededed;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
      }
      a {
        text-decoration: none;
        color: inherit;
      }
      a:hover {
        color: inherit;
        transition: inherit;
      }
      .nav {
        color: #ededed;
        font-size: 15px;
        transition: color .15s;
      }
      .nav:hover {
        color: #F2E03F;
      }
      footer {
        margin-top: auto;
      }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="/">
                    <img src="{{ asset('images/Logo_NoBG.png') }}" alt="Logo I'm Okay!" height=50>
                </a>
                <!-- kalo blm login pake ini -->
                
                    @guest
                    <a class="navbar-brand" href="{{ url('/') }}">Beranda</a>
                    <a class="navbar-brand" href="#">Self-Healing Program</a>
                    <a class="navbar-brand" href="#">Quick Test</a>
                    <a class="navbar-brand" href="{{ url('/artikel') }}">Artikel</a>
                    <div class="navbar-right nav navbar-nav">
                        @if (Route::has('login'))
                            <a class="navbar-brand navbar-right" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @endif

                        @if (Route::has('register'))
                        <a class="navbar-brand navbar-right" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                
                    </div>
                    <!-- kalo udah login pake ini -->
                    @else
                    <a class="navbar-brand" href="{{ url('/home') }}">Beranda</a>
                    <a class="navbar-brand" href="#">Self-Healing Program</a>
                    <!--<a class="navbar-brand" href="#">Quick Test</a>-->
                    <a class="navbar-brand" href="{{ url('/artikel') }}">Artikel</a>
                    <div class="dropdown show">
                    <a class="navbar-brand" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" type="button">
                    {{ Auth::user()->name }}<i class="fa fa-user-circle mx-2" style="font-size: 25px;"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form></li>
                    </ul>
                </div>
            </div>
            @endguest
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer class="footer text-white bg-dark">
        <div class="container">
            <footer class="row row-cols-5 py-3 my-3">
                <div class="col">
                    <a href="{{ url('/home') }}" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                        <img src="{{ asset('images/Logo_NoBG.png') }}" alt="logo" height="200" srcset="">
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
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-1">
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
    </body>
</html>