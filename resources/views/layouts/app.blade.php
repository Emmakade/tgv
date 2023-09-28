<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tayonik Global Venture') }}</title>
    <meta name="description" content="Tayonik Global Venture (TGV) is a multi-venture that help in providing the service of data subscription, cable subscription, airtime topup, utilities payment to users.">

    <!-- Favicons -->
    <!--<link href="img/favicon.png" rel="icon">
    <link href="img/favicon.png" rel="shortcut icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <link rel="canonical" href="https://tayonikglobalventure.com">

    <!-- css -->
    <link href="{{asset('/custom/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/custom/plugins/flexslider/flexslider.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('/custom/css/style.css')}}" rel="stylesheet">
    <link id="t-colors" href="{{asset('/custom/skins/blue.css')}}" rel="stylesheet">
</head>
<body>
    
    <div id="wrapper">
        <!-- start header -->
        <header>
            <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/"><img src="{{asset('/custom/img/logo.png')}}" alt="Tayonik global venture logo" width="199" height="52" /></a>
                    </div>
                    <div class="navbar-collapse collapse ">
                        <ul class="nav navbar-nav">
                            
                            <li class="active"><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="/contact">Contact</a></li>
                            @guest
                                <li><a href="{{ route('login') }}">Login</a></li>
                                @if (Route::has('register'))
                                    <li>
                                        <a href="{{ route('register') }}">Register</a>
                                    </li>
                                @endif
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Services <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/data-plan">Buy Data</a></li>
                                        <li><a href="/airtime-to-cash">Convert Airtime</a></li>
                                        <li><a href="/topup">Mobile Topup</a></li>
                                        <li><a href="/cable-subscription">Cable Subscription</a></li>
                                        <li><a href="/history">History</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Wallet ({{ Auth::user()->wallet }}) <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown">Fund Wallet</a>
                                            <ul class="dropdown-menu">
                                                <li><a title="Fund your wallet with paystack" href="/paystack">Paystack</a></li>
                                                <li><a title="Fund your wallet with flutterwave" href="/flutterwave">Flutterwave</a></li>
                                                <li><a title="Fund your wallet with monnify" href="/monnify">Monnify</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/wallet-transfer">Wallet to wallet</a></li>
                                        <li><a href="/payment-history">Payment History</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">{{ Auth::user()->name }} <span class="caret"></span> <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/profile">View Profile</a></li>
                                    </ul>
                                    <li><a href="{{ route('logout') }}" 
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">{{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" 
                                        action="{{ route('logout') }}" method="POST" 
                                        style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </li>
                                @if(auth()->user()->hasAnyRole("moderator|admin"))
                                    <li><a href="/admin">Admin</a></li>
                                @endif
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->

        <main class="py-4">
            @yield('content')
        </main>
        <footer>
            <div id="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="copyright">
                                <p>&copy; <abbr title="Tayonik Global Venture">TGV</abbr> - All Right Reserved</p>
                                
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="social-network">
                                <li><a href="https://www.facebook.com/TayonikTGV" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.twitter.com/TayonikV" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/Tayonikglobal" data-placement="top" title="instagram"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
   
    <script src="{{asset('/custom/js/jquery.min.js')}}"></script>
    <script src="{{asset('/custom/js/modernizr.custom.js')}}"></script>
    <script src="{{asset('/custom/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('/custom/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/custom/plugins/flexslider/jquery.flexslider-min.js')}}"></script>
    <script src="{{asset('/custom/plugins/flexslider/flexslider.config.js')}}"></script>
    <!--<script src="{{asset('/custom/js/uisearch.js')}}"></script>-->
    <script src="{{asset('/custom/js/jquery.appear.js')}}"></script>
    <script src="{{asset('/custom/js/stellar.js')}}"></script>
    <script src="{{asset('/custom/js/classie.js')}}"></script>
    <script src="{{asset('/custom/js/jquery.cubeportfolio.min.js')}}"></script> 
    <script src="{{asset('/custom/js/google-code-prettify/prettify.js')}}"></script>
    <script src="{{asset('/custom/js/animate.js')}}"></script>
    <script src="{{asset('/custom/js/custom.js')}}"></script>
</body>
</html>
