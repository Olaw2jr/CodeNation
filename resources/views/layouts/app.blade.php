<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light mb-5">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{url('/images/brand/bootstrap-solid.svg')}}" width="30" height="30" class="d-inline-block align-top" alt="">
                        {{ config('app.name', 'CodeNation') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#CodeNation" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <div class="collapse navbar-collapse " id="CodeNation">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item {{ (Request::is('/') ? 'active' : '') }}">
                                <a class="nav-link" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item dropdown {{ (Request::is('post') ? 'active' : '') }}">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Hire Freelancers
                                </a>
                                <div class="dropdown-menu mr-4" aria-labelledby="navbarDropdown">
                                    <p class="dropdown-item mb-0 text-uppercase font-weight-bold">Find Freelancers</p>
                                    <a class="dropdown-item" href="{{ url('/post/project') }}">Post A Project</a>
                                    <a class="dropdown-item" href="{{ url('/post/contest') }}">Post A Contest</a>
                                    <a class="dropdown-item" href="{{ url('/post/local-job') }}">Post A Local Job</a>
                                    <div class="dropdown-divider"></div>
                                    <p class="dropdown-item mb-0 text-uppercase font-weight-bold">Discover</p>
                                    <a class="dropdown-item" href="{{ url('/discover/showcase') }}">ShowCase</a>
                                    <a class="dropdown-item" href="{{ url('/discover/directory') }}">Browse Directory</a>
                                    <a class="dropdown-item" href="{{ url('/discover/community') }}">Community</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown {{ (Request::is('browse') ? 'active' : '') }}">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Find Work
                                </a>
                                <div class="dropdown-menu mr-4" aria-labelledby="navbarDropdown">
                                    <p class="dropdown-item mb-0 text-uppercase font-weight-bold">Find Work</p>
                                    <a class="dropdown-item" href="{{ url('browse/project') }}">Browse Projects</a>
                                    <a class="dropdown-item" href="{{ url('browse/contest') }}">Browse Contest</a>
                                    <a class="dropdown-item" href="{{ url('browse/categories') }}">Browse Categories</a>
                                </div>
                            </li>
                            <li class="nav-item {{ (Request::is('how-it-works') ? 'active' : '') }}">
                                <a class="nav-link" href="{{ url('/how-it-works') }}">How it Works</a>
                            </li>
                            <li class="nav-item {{ (Request::is('pricing') ? 'active' : '') }}">
                                <a class="nav-link" href="{{ url('pricing') }}">Pricing</a>
                            </li>
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                                <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                            @else
                                <li class="nav-item dropdown">
                                    <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="scale-up" role="button">
                                        <span class="avatar avatar-online">
                                        {{--  <img src="{{ url('/images/bPd_2Ldo_400x400.jpg') }}" class="rounded-circle border d-inline-block align-top" style="height: 30px" >  --}}
                                        <img src="{{ Auth::user()->gravatar }}" class="rounded-circle border d-inline-block align-top" style="height: 30px" >
                                        <i></i>
                                        </span>
                                    </a>
                                    <div class="dropdown-menu" role="menu">
                                        <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Billing</a>
                                        <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
                                        <div class="dropdown-divider" role="presentation"></div>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <i class="icon wb-power" aria-hidden="true"></i> Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-0">
                @yield('content')
            </main>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
