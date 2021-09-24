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
    <!-- Lobster Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/mtr.ico') }}" type="image/x-icon">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="header-link display-6 font-lobster" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse row" id="navbarSupportedContent">
                    <!-- Navi -->
                    <div class="d-flex justify-content-end">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item"> <a class="nav-link @if(Route::currentRouteName() == 'home') active @endif" aria-current="page" href="{{ route('home') }}">Home</a></li>
                            <li class="nav-item"> <a class="nav-link @if(Route::currentRouteName() == 'projects') active @endif" href="{{ route('projects') }}">Projects</a></li>
                            <li class="nav-item"> <a class="nav-link @if(Route::currentRouteName() == 'blog') active @endif" href="{{ route('blog') }}">Blog</a></li>
                            <li class="nav-item"> <a class="nav-link @if(Route::currentRouteName() == 'contacts') active @endif" href="{{ route('contacts') }}">Contacts</a></li>
                            @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    Loguot
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>   
                            </div>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="container-fluid bg-light text-dark">
            
            <div class="container py-4">
                <hr class="text-dark">
                <div class="row py-5">
                    <div class="col text-center mt-5">
                        <div class="display-6 font-lobster">
                            Make it Beautiful, Keep it Simple.
                        </div>
                    </div>
                </div>
                <div class="row py-4 expand-row">
                    <div class="col-md-6 py-2">
                        <div class="d-flex justify-content-md-end justify-content-center">
                            <button class="btn btn-dark long-btn" onclick="document.getElementById('contact-me-link').click();">
                                <a id='contact-me-link' class="link" href="{{ route('contacts') }}"></a>
                                <strong>Contanct Me</strong>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6 py-2">
                        <div class="d-flex justify-content-md-start justify-content-center">
                            <button class="btn btn-gold long-btn">
                                <strong>Hire Me</strong>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row py-4">
                    <div class="col">
                        <hr class="text-dark">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 py-2 text-center">
                        <ul class="list-unstyled d-sm-flex justify-content-center justify-content-md-start">
                            <li class="px-4 py-2 py-md-0"><a class="footer-link" href="{{ route('home') }}"><strong>Home</strong></a></li>
                            <li class="px-4 py-2 py-md-0"><a class="footer-link" href="{{ route('projects') }}"><strong>Projects</strong></a></li>
                            <li class="px-4 py-2 py-md-0"><a class="footer-link" href="{{ route('blog') }}"><strong>Blog</strong></a></li>
                            <li class="px-4 py-2 py-md-0"><a class="footer-link" href="{{ route('contacts') }}"><strong>Contacts</strong></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 py-2">
                        <ul class="list-unstyled d-flex justify-content-center justify-content-md-end">
                            <li class="px-1">
                                <a href="https://github.com/Mahmoud217TR" class="px-2 footer-link" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                      <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                    </svg>
                                </a>
                            </li>
                            <li class="px-1">
                                <a href="https://www.linkedin.com/in/mahmoud-mahmoud-ab8708183" class="px-2 footer-link" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                      <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                    </svg>
                                </a>
                            </li>
                            <li class="px-1">
                                <a href="https://www.facebook.com/mahmoud.mahmoud.927758" class="px-2 footer-link" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
