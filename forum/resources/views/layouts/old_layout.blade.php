<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Happy World| Tickets</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <style type="text/css">
        .btn
        {
            border: 1px solid #f25f43;
        }
        .level
        {
            display: flex;
            align-items: center;
        }
        .flex
        {
            flex: 1;
        }

        [v-cloak]{display: none;}
    </style>

    <!-- Scripts -->
    <script>
        window.App = {!! json_encode([
            'csrfToken' => csrf_token(),
            'user'=>Auth::user(),
            'signedIn'=> auth()->check(),
        ]) !!};
    </script>
    <script>
        var baseurl="{{url('/')}}/";
    </script>
</head>
<body style="background-color: #fff;">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style="background-color: #fff !important; border-color: #fff !important;">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <!-- {{ config('app.name', 'Laravel') }} -->
                       <img src='{{asset('assets/img/logo.png') }}'  style="width: 50%;"  >
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Browse <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{url('/thread')}}">All Threads</a></li>
                                <li><a href="{{url('/')}}/thread?popular=1">Popular Threads</a></li>
                                <li><a href="{{url('/')}}/thread?unanswered=1">Unanswered Threads</a></li>
                                @if(auth()->check())
                                    <li><a href="{{url('/')}}/thread?by={{auth()->user()->name}}">My Threads</a></li>
                                @endif
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Channels <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                @foreach($channels as $channel)
                                    <li><a href="{{url('/')}}/thread/{{$channel->slug}}">{{$channel->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <user-notifications></user-notifications>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <li><a href="{{url('/')}}/thread/create">New Thread</a></li>
                                    <li><a href="{{url('/')}}/profiles/{{Auth::user()->name}}">My profile</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
