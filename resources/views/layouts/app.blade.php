
@extends('layouts.master')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title')</title>
<link rel="stylesheet" href="blog.css">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
                <style>


/* Style The Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
  height: -40px;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  transition: 0.5s;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 5px 16px;
  text-decoration: none;
  display: block;
  transition: 0.5s;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>
<link rel="stylesheet" href="{{ asset('index.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav style="width: 100%; box-sizing: border-box; position: fixed;top: 0;" class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a style="position: relative;" class="navbar-brand" href="{{ url('/') }}">
                    
                </a>

                <a style="position: relative;" class="navbar-brand" href="{{ url('/home') }}">
                    Accueil 
                </a>

                <a style="position: relative;" class="navbar-brand" href="{{ url('/posts') }}">
                    Discussions 
                </a>

                



                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __("Je m'identifie") }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __("Je m'enregistre") }}</a>
                                </li>
                            @endif
                        @else

                         <li style="position: fixed; left: 50%; top: 5px;" class="nav-item">
                                <a style="color: #fff; position: fixed; left: 0; font-size: 1em; border: 2px solid #ddd; border-radius: 5px; height: 40px; line-height: 20px; background-color: #0083d3;" class="nav-link" href="{{ route('post.create') }}">Publier</a>
                            </li>

                            
                            <li class="nav-item dropdown" style="position: fixed; right: 40px; top: 5px; z-index: 9999999999;">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <img src="/uploads/avatars/{{ auth()->user()->avatar}}"
                   style="width: 55px; height: 55px; position: absolute;top: -5px; right: -40px; border:5px solid #00f; border-top: 5px solid #f00; border-left: 5px solid orange; border-right: 5px solid #53ff06; border-radius: 50%;">
                    Bienvenue <span style="color: #000; font-weight: bold; font-size: 1.2em;">{{ Auth::user()->name }} </span><span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ url('profile') }}"
                                    >
                                        {{ __('Mon profile') }}
                                    </a>
                                    <hr>
                                    <a class="dropdown-item" href="{{ url('profile') }}"
                                    >
                                        En attente.. <span style="color: #fff;padding:5px; border:2px solid orange; font-weight: bold; background-color: #000; border-radius: 100px;">12</span>
                                    </a>
                                    <hr>


                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Se deconnecter') }}
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
  

</body>
</html>
