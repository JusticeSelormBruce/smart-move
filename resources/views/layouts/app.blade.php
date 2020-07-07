<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Smart Move</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('boostrap/css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
</head>
<style>
  a{
      text-decoration: none!important;
      color: black!important;
  }
  ul,li{
      list-style: none!important
  }
</style>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
            Smart Move
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                   @if(Auth::check())
                            <ul>
                                <ul>
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle  text-success" href="#" role="button"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                        <form action="/search-anything" method="post" >
                            @csrf
                        <div class="form-group">
                            <div class="row">

                                <div class="input-group-sm  ml-5"> <input type="text" class="form-control" name="search" required  placeholder="search for anything">
                        </div>

                          <div class="ml-2">    <button class="btn btn-primary btn-sm"><span class="mx-2 text-light">serach</span></button></div>

                       </div>
                        </div>
                        </form>


                            </ul>


                   @else
                   <ul class="navbar-nav ml-auto pt-1">
                       {{-- <li><a href="">About</a></li>
                       <li><a href="" class="mx-2 ">Contact</a></li> --}}
                       <li><a href="/login">Login</a></li>
                       <li><a href="/register" class="mx-2 ">Register</a></li>
                       <li>
                        <form action="/search-anything" method="post" >
                            @csrf
                        <div class="form-group">
                            <div class="row">

                                <div class="input-group-sm  ml-5"> <input type="text" class="form-control" name="search" required  placeholder="company name here">
                        </div>

                          <div class="ml-2">    <button class="btn btn-primary btn-sm"><span class="mx-2 text-light">serach</span></button></div>

                       </div>
                        </div>
                        </form>
                    </li>
                </ul>
                   @endif
                </div>
            </div>
        </nav>

        <main >
            @yield('content')
        </main>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('boostrap/js/jquery.js')}}"></script>
    <script src="{{asset('boostrap/js/bootstrap.js')}}"></script>
   <script>
       $('#myLightbox').lightbox(options)
   </script>

</body>
</html>
