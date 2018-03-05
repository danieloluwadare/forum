<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">
    <title>Happy World Meal Gate</title>
    <meta name="description" content="Material Style Theme">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.gif') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ asset('assets/css/preload.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.light-blue-500.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/width-boxed.min.css') }}" id="ms-boxed" disabled="">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!--[if lt IE 9]>
    <script src="{{ asset('assets/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('assets/js/respond.min.js') }}"></script>
    <![endif]-->

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
    </style>
</head>
<body>
<div id="app">

    <div id="ms-preload" class="ms-preload">
        <div id="status">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <div class="sb-site-container">

        <header class="ms-header ms-header-primary">
            <div class="container container-full">
                <div class="ms-title">
                    <a href="{{url('/')}}">
                        <img src="{{ asset('assets/img/pagelogo.jpg') }}" class="img-responsive" style="max-height:100px;" alt="">
                        <!-- <span class="ms-logo animated zoomInDown animation-delay-5">M</span>
                        <h1 class="animated fadeInRight animation-delay-6">Material
                          <span>Style</span>
                        </h1> -->
                    </a>
                </div>
                <div class="header-right">
                    <a href="{{url('/faq')}}" target="" class="btn-circle btn-twitter">
                        <i class="fa fa-question"></i>
                    </a>
                    <div class="share-menu">

                        <ul class="share-menu-list">

                            <li class="animated fadeInRight animation-delay-3">
                                <a href="https://plus.google.com/u/0/101013428607986449943" target="_blank" class="btn-circle btn-google">
                                    <i class="zmdi zmdi-google"></i>
                                </a>
                            </li>
                            <li class="animated fadeInRight animation-delay-2">
                                <a href="https://www.facebook.com/happyworldmealgate/" target="_blank" class="btn-circle btn-facebook">
                                    <i class="zmdi zmdi-facebook"></i>
                                </a>
                            </li>
                            <li class="animated fadeInRight animation-delay-1">
                                <a href="https://twitter.com/HappyWorldMeal" target="_blank" class="btn-circle btn-twitter">
                                    <i class="zmdi zmdi-twitter"></i>
                                </a>
                            </li>
                        </ul>
                        <a href="javascript:void(0)" class="btn-circle btn-circle-primary animated zoomInDown animation-delay-7">
                            <i class="zmdi zmdi-share"></i>
                        </a>
                    </div>
                    <a href="javascript:void(0)" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8" data-toggle="modal" data-target="#ms-account-modal">
                        <i class="zmdi zmdi-account"></i>
                    </a>
                    <form class="search-form animated zoomInDown animation-delay-9">
                        <input id="search-box" type="text" class="search-input" placeholder="Search..." name="q"  style="" />
                        <label for="search-box">
                            <i class="zmdi zmdi-search" style="color: #FF5722;"></i>
                        </label>
                    </form>
                    <a href="javascript:void(0)" class="btn-ms-menu btn-circle btn-circle-primary sb-toggle-left animated zoomInDown animation-delay-10">
                        <i class="zmdi zmdi-menu"></i>
                    </a>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-static-top yamm ms-navbar ms-navbar-primary">
            <div class="container container-full">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img src="{{ asset('assets/img/logo-150.jpg') }}" class="img-responsive" style="max-height:60px;" alt="">
                        </span>
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown active">
                            <a href="{{url('/')}}" class="dropdown-toggle animated fadeIn animation-delay-4" data-toggle="" data-hover="" data-name="home">Home

                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="{{url('/about')}}" class="dropdown-toggle animated fadeIn animation-delay-5" data-toggle="" data-hover="" data-name="page">About
                            </a>
                        </li>
                        <li class="dropdown yamm-fw">
                            <a href="{{url('/compensation')}}" class="dropdown-toggle animated fadeIn animation-delay-6" data-toggle="" data-hover="" role="button" aria-haspopup="true" aria-expanded="false" data-name="component">Compensation Plan
                                <!-- <i class="zmdi zmdi-chevron-down"></i> -->
                            </a>
                        </li>

                        {{--<!--   @if(!Auth::user())--}}
                        {{--<li class="dropdown">--}}
                        {{--<a href="{{url('/login')}}" class=" animated fadeIn animation-delay-8" role="button" aria-haspopup="true" aria-expanded="false" data-name="Login">Login--}}
                        {{--<i class="zmdi zmdi-chevron-down"></i>--}}
                        {{--</a>--}}
                        {{--</li>--}}
                        {{--@else--}}
                        {{--<li class="dropdown">--}}
                        {{--<a href="{{ route('logout') }}" class=" animated fadeIn animation-delay-8" role="button" aria-haspopup="true" aria-expanded="false" onclick="event.preventDefault();                                                     document.getElementById('logout-form').submit();" data-name="Logout">Logout--}}
                        {{--<i class="zmdi zmdi-chevron-down"></i>--}}
                        {{--</a>--}}
                        {{--</li>--}}
                        {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--</form>--}}
                        {{--@endif -->--}}

                        <li class="dropdown">
                            <a href="{{url('/contact')}}" class="dropdown-toggle animated  aria-expanded="false" data-name="ecommerce">Contact
                            <!--  <i class="zmdi zmdi-chevron-down"></i> -->
                            </a>
                        </li>
                        <!-- <li class="btn-navbar-menu"><a href="javascript:void(0)" class="sb-toggle-left"><i class="zmdi zmdi-menu"></i></a></li> -->

                        <li class="dropdown">
                            <a href="{{url('/faq')}}" class="dropdown-toggle animated  aria-expanded="false" data-name="ecommerce">FAQ
                            <!--  <i class="zmdi zmdi-chevron-down"></i> -->
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="https://blog.happyworldmealgate.org" class="dropdown-toggle animated  aria-expanded="false" data-name="ecommerce">News
                            <!--  <i class="zmdi zmdi-chevron-down"></i> -->
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="{{url('gallery')}}" class="dropdown-toggle animated  aria-expanded="false" data-name="ecommerce">Gallery
                            <!--  <i class="zmdi zmdi-chevron-down"></i> -->
                            </a>
                        </li>

                        <li><a href="{{url('/thread')}}">Forum</a></li>

                        {{--<li class="dropdown">--}}
                        {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#">Channel select--}}
                        {{--<span class="caret"></span></a>--}}
                        {{--<ul class="dropdown-menu">--}}
                        {{--@foreach($channels as $channel)--}}
                        {{--<li><a href="/thread/{{$channel->slug}}">{{$channel->name}}</a></li>--}}
                        {{--@endforeach--}}
                        {{--</ul>--}}
                        {{--</li>--}}

                        {{--<li class="dropdown">--}}
                            {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#">All Threads--}}
                                {{--<span class="caret"></span></a>--}}
                            {{--<ul class="dropdown-menu">--}}

                                {{--<li><a href="{{url('/thread')}}">Forum</a></li>--}}
                                {{--<li><a href="/thread?popular=1">Popular Thread</a></li>--}}
                                {{--@if(auth()->check())--}}
                                    {{--<li><a href="/thread?by={{auth()->user()->name}}">My Threads</a></li>--}}
                                {{--@endif--}}
                                {{--<li class="dropdown-submenu">--}}
                                    {{--<a class="test" tabindex="-1" href="#">New dropdown <span class="caret"></span></a>--}}
                                    {{--<ul class="dropdown-menu">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-md-4">--}}
                                                {{--<li><a tabindex="-1" href="#">1st level dropdown</a></li>--}}
                                            {{--</div>--}}

                                            {{--<div class="col-md-4">--}}
                                                {{--<li><a tabindex="-1" href="#">2nd level dropdown</a></li>--}}
                                            {{--</div>--}}

                                            {{--<div class="col-md-4">--}}
                                                {{--<li><a tabindex="-1" href="#">2nd level dropdown</a></li>--}}
                                            {{--</div>--}}

                                            {{--<li><a tabindex="-1" href="#">2nd level dropdown</a></li>--}}
                                            {{--<li><a tabindex="-1" href="#">2nd level dropdown</a></li>--}}
                                        {{--</div>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li class="dropdown-submenu">--}}
                                {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#">Channel select--}}
                                {{--<span class="caret"></span></a>--}}
                                {{--<ul class="dropdown-menu">--}}
                                {{--@foreach($channels as $channel)--}}
                                {{--<li><a href="/thread/{{$channel->slug}}">{{$channel->name}}</a></li>--}}
                                {{--@endforeach--}}
                                {{--</ul>--}}
                                {{--</li>--}}

                            </ul>
                        </li>



                        {{--<li class="dropdown yamm-fw">--}}
                        {{--<a href="{{url('/thread')}}" class="dropdown-toggle animated fadeIn animation-delay-6" data-toggle="" data-hover="" role="button" aria-haspopup="true" aria-expanded="false" data-name="component">Forum--}}
                        {{--<!-- <i class="zmdi zmdi-chevron-down"></i> -->--}}
                        {{--</a>--}}
                        {{--<ul class="dropdown-menu" role="menu">--}}
                        {{--<li class="active">irhirhih</li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}

                        <li class="pull-right">
                            <ul class="nav navbar-nav navbar-right">
                                <!-- Authentication Links -->
                                @if (Auth::guest())
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Join Now</a></li>
                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <!-- <span class="caret"></span> -->
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
                                            <li><a href="{{ route('home') }}">Back Office</a></li>
                                            {{--<li><a href="/thread/create">New Thread</a></li>--}}
                                            {{--<li><a href="/profiles/{{Auth::user()->name}}">My profiles</a></li>--}}
                                        </ul>
                                    </li>
                                @endif
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- navbar-collapse collapse -->
                <a href="javascript:void(0)" class="sb-toggle-left btn-navbar-menu">
                    <i class="zmdi zmdi-menu"></i>
                </a>
            </div>
            <!-- container -->
        </nav>


        <!-- main content -->

        @yield('content')
        <example></example>
        <!-- main content ends -->

        <div class="container mt-6"><!--
        <h2 class="text-center color-primary mb-4">Gallery</h2> -->
            <div class="owl-dots"></div>
            <div class="owl-carousel owl-theme">

                <!-- thumbs -->
                <div class="card animation-delay-6">
                    <div class="withripple zoom-img">
                        <a href="javascript:void()">
                            <img src="assets/img/thumbs/image8-thumb.jpg" alt="..." class="img-responsive">
                        </a>
                    </div>
                    <!-- <div class="card-block">
                      <h3 class="color-primary">Thumbnail label</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
                      <p class="text-right">
                        <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                          <i class="zmdi zmdi-collection-image-o"></i> View More</a>
                      </p>
                    </div> -->
                </div>
                <div class="card card-dark-inverse animation-delay-8">
                    <div class="withripple zoom-img">
                        <a href="javascript:void()">
                            <img src="assets/img/thumbs/image3-thumb.jpg" alt="..." class="img-responsive">
                        </a>
                    </div>
                    <!-- <div class="card-block">
                      <h3 class="">Thumbnail label</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
                      <p class="text-right">
                        <a href="javascript:void()" class="btn btn-info btn-raised text-right" role="button">
                          <i class="zmdi zmdi-collection-image-o"></i> View More</a>
                      </p>
                    </div> -->
                </div>
                <div class="card animation-delay-10">
                    <div class="withripple zoom-img">
                        <a href="javascript:void()">
                            <img src="assets/img/thumbs/image2-thumb.jpg" alt="..." class="img-responsive">
                        </a>
                    </div>
                    <!-- <div class="card-block">
                      <h3 class="color-primary">Thumbnail label</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
                      <p class="text-right">
                        <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                          <i class="zmdi zmdi-collection-image-o"></i> View More</a>
                      </p>
                    </div> -->
                </div>
                <div class="card animation-delay-6">
                    <div class="withripple zoom-img">
                        <a href="javascript:void()">
                            <img src="assets/img/thumbs/image1-thumb.jpg" alt="..." class="img-responsive">
                        </a>
                    </div>
                    <!-- <div class="card-block">
                      <h3 class="color-primary">Thumbnail label</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
                      <p class="text-right">
                        <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                          <i class="zmdi zmdi-collection-image-o"></i> View More</a>
                      </p>
                    </div> -->
                </div>
                <div class="card card-dark-inverse animation-delay-8">
                    <div class="withripple zoom-img">
                        <a href="javascript:void()">
                            <img src="assets/img/thumbs/image6-thumb.jpg" alt="..." class="img-responsive">
                        </a>
                    </div>
                    <!-- <div class="card-block">
                      <h3 class="">Thumbnail label</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
                      <p class="text-right">
                        <a href="javascript:void()" class="btn btn-info btn-raised text-right" role="button">
                          <i class="zmdi zmdi-collection-image-o"></i> View More</a>
                      </p>
                    </div> -->
                </div>
                <div class="card animation-delay-10">
                    <div class="withripple zoom-img">
                        <a href="javascript:void()">
                            <img src="assets/img/thumbs/image5-thumb.jpg" alt="..." class="img-responsive">
                        </a>
                    </div>
                    <!--  <div class="card-block">
                       <h3 class="color-primary">Thumbnail label</h3>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
                       <p class="text-right">
                         <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                           <i class="zmdi zmdi-collection-image-o"></i> View More</a>
                       </p>
                     </div> -->
                </div>
                <div class="card animation-delay-6">
                    <div class="withripple zoom-img">
                        <a href="javascript:void()">
                            <img src="assets/img/thumbs/image7-thumb.jpg" alt="..." class="img-responsive">
                        </a>
                    </div>
                    <!-- <div class="card-block">
                      <h3 class="color-primary">Thumbnail label</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
                      <p class="text-right">
                        <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                          <i class="zmdi zmdi-collection-image-o"></i> View More</a>
                      </p>
                    </div> -->
                </div>
                <div class="card card-dark-inverse animation-delay-8">
                    <div class="withripple zoom-img">
                        <a href="javascript:void()">
                            <img src="assets/img/thumbs/image4-thumb.jpg" alt="..." class="img-responsive">
                        </a>
                    </div>
                    <!-- <div class="card-block">
                      <h3 class="">Thumbnail label</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
                      <p class="text-right">
                        <a href="javascript:void()" class="btn btn-info btn-raised text-right" role="button">
                          <i class="zmdi zmdi-collection-image-o"></i> View More</a>
                      </p>
                    </div> -->
                </div>
                <div class="card animation-delay-10">
                    <div class="withripple zoom-img">
                        <a href="javascript:void()">
                            <img src="assets/img/thumbs/image2-thumb.jpg" alt="..." class="img-responsive">
                        </a>
                    </div>
                    <!-- <div class="card-block">
                      <h3 class="color-primary">Thumbnail label</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
                      <p class="text-right">
                        <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                          <i class="zmdi zmdi-collection-image-o"></i> View More</a>
                      </p>
                    </div> -->
                </div>
            </div>
        </div>

        <aside class="ms-footbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 ms-footer-col">
                        <div class="ms-footbar-block">
                            <h3 class="ms-footbar-title">Quick Naviations</h3>
                            <ul class="list-unstyled ms-icon-list three_cols">
                                <li>
                                    <a href="{{url('/')}}">
                                        <i class="zmdi zmdi-home"></i> Home</a>
                                </li>
                                <li>
                                    <a href="https://blog.happyworldmealgate.com">
                                        <i class="zmdi zmdi-edit"></i> Blog</a>
                                </li>
                                <li>
                                    <a href="{{url('/register')}}">
                                        <i class="zmdi zmdi-accounts-add"></i> Join</a>
                                </li>
                                <li>
                                    <a href="{{url('/login')}}">
                                        <i class="zmdi zmdi-lock-open"></i> Login</a>
                                </li>
                                <li>
                                    <a href="{{url('/compensation')}}">
                                        <i class="zmdi zmdi-money-box"></i> plan</a>
                                </li>
                                <li>
                                    <a href="{{url('home')}}">
                                        <i class="zmdi zmdi-case"></i> Account</a>
                                </li>
                                <li>
                                    <a href="{{url('/contact')}}">
                                        <i class="zmdi zmdi-smartphone-iphone"></i> Call</a>
                                </li>
                                <li>
                                    <a href="{{url('/faq')}}">
                                        <i class="fa fa-question"></i> FAQ</a>
                                </li>
                                <li>
                                    <a href="{{url('/contact')}}">
                                        <i class="zmdi zmdi-email"></i> Contact</a>
                                </li>
                            </ul>
                        </div>

                        <form>
                        </form>
                        <div class="ms-footbar-block">
                            <h3 class="ms-footbar-title">Newsletters</h3>
                            <p class="">Be the first to get our latest news on Seminars, centres, events and updates</p>
                            <form>
                                <div class="form-group label-floating mt-2 mb-1">
                                    <div class="input-group ms-input-subscribe">
                                        <label class="control-label" for="ms-subscribe">
                                            <i class="zmdi zmdi-email"></i> Email Adress</label>
                                        <input type="email" id="ms-subscribe" class="form-control"> </div>
                                </div>
                                <button class="ms-subscribre-btn" type="button">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-7 ms-footer-col ms-footer-alt-color">
                        <div class="ms-footbar-block">
                            <h3 class="ms-footbar-title text-center mb-2">Latest News</h3>
                            <div class="ms-footer-media">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <a href="javascript:void(0)">
                                            <img class="media-object media-object-circle" src="{{ asset('assets/img/dodo.jpg') }}" alt="..."></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <a href="javascript:void(0)">Food collection Starts from the 11:00 am every friday - saturday</a>
                                        </h4>
                                        <div class="media-footer">
                        <span>
                          <i class="zmdi zmdi-time color-info-light"></i> May 6, 2017</span>
                                            <span>
                          <i class="zmdi zmdi-folder-outline color-warning-light"></i>
                          <a href="javascript:void(0)">Food</a>
                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <a href="javascript:void(0)">
                                            <img class="media-object media-object-circle" src="{{ asset('assets/img/dodo.jpg') }}" alt="..."> </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <a href="javascript:void(0)">You can now select food Items Online from your account</a>
                                        </h4>
                                        <div class="media-footer">
                        <span>
                          <i class="zmdi zmdi-time color-info-light"></i> Feb. 14, 2017</span>
                                            <span>
                          <i class="zmdi zmdi-folder-outline color-warning-light"></i>
                          <a href="javascript:void(0)">Account</a>
                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <a href="javascript:void(0)">
                                            <img class="media-object media-object-circle" src="{{ asset('assets/img/dodo.jpg') }}" alt="..."> </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <a href="javascript:void(0)">Please, update your profile with working phone number or email and profile picture</a>
                                        </h4>
                                        <div class="media-footer">
                        <span>
                          <i class="zmdi zmdi-time color-info-light"></i> Jan. 12, 2017</span>
                                            <span>
                          <i class="zmdi zmdi-folder-outline color-warning-light"></i>
                          <a href="javascript:void(0)">Accounts</a>
                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-5 ms-footer-col ms-footer-text-right">
                        <div class="ms-footbar-block">
                            <center>
                                <div class="ms-footbar-title">
                                    <img src="{{ asset('assets/img/logo-landscape-footer-small.png') }}" class="center img-responsive">
                                </div>
                            </center>

                            <address class="no-mb">
                                <p>
                                    <i class="color-danger-light zmdi zmdi-pin mr-1"></i> 81 Adeniji Jones,</p>
                                <p>
                                    <i class="color-warning-light zmdi zmdi-map mr-1"></i> Ikeja, Lagos</p>
                                <p>
                                    <i class="color-info-light zmdi zmdi-email mr-1"></i>
                                    <a href="mailto:joe@example.com">info@happyworldmealate.com</a>
                                </p>
                                <p>
                                    <i class="color-royal-light zmdi zmdi-phone mr-1"></i>(+234)809 183 0700 </p>
                                <p>
                                    <i class="color-success-light fa fa-fax mr-1"></i>(+234)811 002 0644 </p>
                            </address>
                        </div>
                        <div class="ms-footbar-block">
                            <h3 class="ms-footbar-title">Connect with us</h3>
                            <div class="ms-footbar-social">
                                <a href="https://www.facebook.com/happyworldmealgate/" target="_blank" class="btn-circle btn-facebook">
                                    <i class="zmdi zmdi-facebook"></i>
                                </a>
                                <a href="https://twitter.com/HappyWorldMeal" target="_blank" class="btn-circle btn-twitter">
                                    <i class="zmdi zmdi-twitter"></i>
                                </a>
                                <a href="https://www.youtube.com/channel/UCnZ0Dcq0yPblAzn0ASoRbQA" target="_blank" class="btn-circle btn-youtube">
                                    <i class="zmdi zmdi-youtube"></i>
                                </a>
                                <br>
                                <a href="https://plus.google.com/u/0/101013428607986449943" target="_blank" class="btn-circle btn-google">
                                    <i class="zmdi zmdi-google"></i>
                                </a>
                                <a href="javascript:void(0)" class="btn-circle btn-instagram">
                                    <i class="zmdi zmdi-instagram"></i>
                                </a>
                                <a href="javascript:void(0)" class="btn-circle btn-github">
                                    <i class="zmdi zmdi-pinterest"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <footer class="ms-footer">
            <div class="container">
                <p>Copyright &copy; Happy World Meal Gate 2017 &nbsp <a href="">Privacy and Policy</a> &nbsp <a href="">Terms And Condition</a> </p>
            </div>
        </footer>
        <div class="btn-back-top">
            <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
                <i class="zmdi zmdi-long-arrow-up"></i>
            </a>
        </div>
    </div>
    <!--side menu bar starts***sb-site-container -->
    <div class="ms-slidebar sb-slidebar sb-left sb-momentum-scrolling sb-style-overlay">
        <header class="ms-slidebar-header">
            <div class="ms-slidebar-login">
                <a href="{{url('/login')}}" class="">
                    <i class="zmdi zmdi-lock-open"></i> Login</a>
                <a href="{{url('/register')}}" class="withripple">
                    <i class="zmdi zmdi-account-add"></i> Join Now</a>
            </div>
            <div class="ms-slidebar-title">
                <form class="search-form">
                    <input id="search-box-slidebar" type="text" class="search-input" placeholder="Search..." name="q" />
                    <label for="search-box-slidebar">
                        <i class="zmdi zmdi-search"></i>
                    </label>
                </form>
                <a href="javascript:void(0)" class="btn-ms-menu btn-circle btn-circle-primary sb-toggle-left animated zoomInDown animation-delay-10">
                    <i class="zmdi zmdi-menu" style="color: #fff"></i>
                </a>
            </div>
        </header>
        <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
            <li class="panel" role="tab" id="sch1">
                <a class="collapsed" role="button" data-toggle="" data-parent="#slidebar-menu" href="{{url('/')}}" aria-expanded="false" aria-controls="sc1">
                    <i class="zmdi zmdi-home"></i> Home </a>
            </li>
            <li class="panel" role="tab" id="sch2">
                <a class="collapsed" role="button" data-toggle="" data-parent="#slidebar-menu" href="{{url('/about')}}" aria-expanded="false" aria-controls="sc2">
                    <i class="fa fa-group"></i> About </a>
            </li>
            <li class="panel" role="tab" id="sch4">
                <a class="collapsed" role="button" data-toggle="" data-parent="#slidebar-menu" href="{{url('/compensation')}}" aria-expanded="false" aria-controls="sc4">
                    <i class="zmdi zmdi-money"></i> Compensation Plan </a>
            </li><!--
        <li class="panel" role="tab" id="sch5">
          <a class="collapsed" role="button" data-toggle="" data-parent="#slidebar-menu" href="{{url('/')}}" aria-expanded="false" aria-controls="sc5">
            <i class="zmdi zmdi-shopping-basket"></i> Join </a>
        </li> -->
            <li class="panel" role="tab" id="sch6">
                <a class="collapsed" role="button" data-toggle="" data-parent="#slidebar-menu" href="{{url('/login')}}" aria-expanded="false" aria-controls="sc6">
                    <i class="fa fa-send"></i> Login </a>
            </li>
            <li>
                <a class="link" href="{{url('/contact')}}">
                    <i class="zmdi zmdi-smartphone-iphone"></i> Contact</a>
            </li>

            <li>
                <a class="link" href="{{url('/faq')}}">
                    <i class="fa fa-question"></i> FAQ</a>
            </li>
            <li>
                <a class="link" href="https://blog.happyworldmealgate.org">
                    <i class="zmdi zmdi-menu"></i> News</a>
            </li>

            <li>
                <a class="link" href="{{url('/gallery')}}">
                    <i class="zmdi zmdi-menu"></i> Gallery</a>
            </li>
        </ul>
        <div class="ms-slidebar-social ms-slidebar-block">
            <h4 class="ms-slidebar-block-title">Connect with us</h4>
            <div class="ms-slidebar-social">
                <a href="https://www.facebook.com/happyworldmealgate/" class="btn-circle btn-circle-raised btn-facebook">
                    <i class="zmdi zmdi-facebook"></i>
                    <span class="badge badge-pink">12</span>
                    <div class="ripple-container"></div>
                </a>
                <a href="https://twitter.com/HappyWorldMeal" class="btn-circle btn-circle-raised btn-twitter">
                    <i class="zmdi zmdi-twitter"></i>
                    <span class="badge badge-pink">4</span>
                    <div class="ripple-container"></div>
                </a>
                <a href="https://plus.google.com/u/0/101013428607986449943" class="btn-circle btn-circle-raised btn-google">
                    <i class="zmdi zmdi-google"></i>
                    <div class="ripple-container"></div>
                </a>
                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-instagram">
                    <i class="zmdi zmdi-instagram"></i>
                    <div class="ripple-container"></div>
                </a>
            </div>
        </div>
    </div>
    <!-- side bar ends -->
</div>
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/plugins.min.js') }}"></script>
<script src="{{ asset('assets/js/app.min.js') }}"></script>
{{--<script src="{{ asset('assets/js/configurator.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/index.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/portfolio.js') }}"></script>--}}
{{--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>--}}




<script type="text/javascript">
    $("#quantity").on('change keyup paste blur', function() {
        var am = $(this).val() * 6400;
        var amount = 'NGN' + am.toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
        $('#amount').show().html('Amount: ' + amount)
    });
</script>

<script>
    $(document).ready(function(){
        $('.dropdown-submenu a.test').on("click", function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });
</script>

<script type="text/javascript">
    $( function() {
        $( "#datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: '-100:'+(new Date).getFullYear()
        });
    } );
</script>

{{--<script src='../js/app.js'></script>--}}
</body>
</html>