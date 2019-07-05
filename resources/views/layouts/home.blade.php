<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>stock-exchange</title>
    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body id="home" class="homepage">

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <div class="dropdown">
                           <li class="scroll @if (Request::url() == url('/home')) {{'active'}} @endif"><a href="{{url('/home') }}">Home</a></li>
                           <div class="dropdown-content">

                            <li id="" class="scroll @if (Request::url() == url('/stock')) {{'active'}} @endif"><a href="{{url('/stock') }}">Stocks</a></li>

                            <li id="" class="scroll @if (Request::url() == url('/forex')) {{'active'}} @endif"><a href="{{url('/forex') }}">Forex</a></li>

                            
                            <li id="" class="scroll @if (Request::url() == url('/cryptocurrencies')) {{'active'}} @endif"><a href="{{url('/cryptocurrencies') }}">Cryptocurrencies</a></li>

                            <li id="" class="scroll @if (Request::url() == url('/assets')) {{'active'}} @endif""><a href="{{url('/assets') }}">Assets</a></li>
                       </div>
                   </div>

                   <div class="dropdown">
                        <li id="" class="scroll @if (Request::url() == url('/options')) {{'active'}} @endif"><a href="{{url('/options') }}">For-Traders</a></li>
                    <div class="dropdown-content">
                        <li id="" class="scroll @if (Request::url() == url('/news')) {{'active'}} @endif""><a href="{{url('/news') }}">News-Feed</a></li>

                        <li id="" class="scroll  @if (Request::url() == url('/collection')) {{'active'}} @endif"><a href="{{url('/collection') }}">Stock-Collections</a></li>

                        <li id="" class="scroll"><a href="{{url('/industries') }}">Industries</a></li>

                        <li id="" class="scroll  @if (Request::url() == url('/turnaments')) {{'active'}} @endif"><a href="{{url('/turnaments') }}">Turnaments</a></li>

                        <li id="" class="scroll  @if (Request::url() == url('/historical')) {{'active'}} @endif"><a href="{{url('/historical') }}">Historical-Quotes</a></li>
                     </div>
                 </div>
                 <div class="dropdown">
                        <li id="" class="scroll @if (Request::url() == url('/commodities')) {{'active'}} @endif""><a href="{{url('/commodities') }}">About-Us</a></li>
                        <div class="dropdown-content">
                        <li id="" class="scroll @if (Request::url() == url('/video')) {{'active'}} @endif""><a href="{{url('/video') }}">Video-Tutorials</a></li>

                        <li class="scroll @if (Request::url() == url('/calenders')) {{'active'}} @endif"><a href="{{url('/calenders') }}">Calenders</a></li>

                        <li class="scroll @if (Request::url() == url('/help')) {{'active'}} @endif"><a href="{{url('/help') }}">Help</a></li>

                        <li class="scroll @if (Request::url() == url('/download')) {{'active'}} @endif"><a href="{{url('/download') }}">Download-App</a></li>

                        <li class="scroll @if (Request::url() == url('/trading-hours-and-fees')) {{'active'}} @endif"><a href="{{url('/trading-hours-and-fees') }}">Trading Hours & Fees</a></li>

                        <li class="scroll @if (Request::url() == url('/payment-methods')) {{'active'}} @endif"><a href="{{url('/payment-methods') }}">Deposite & Withdrwals</a></li>
                    </div>
                </div>   

                <div class="dropdown">
                        <li id="" class="scroll @if (Request::url() == url('/commodities')) {{'active'}} @endif""><a href="{{url('/commodities') }}">More</a></li>
                        <div class="dropdown-content">

                        <li id="" class="scroll @if (Request::url() == url('/figures')) {{'active'}} @endif""><a href="{{url('/figures') }}">IQ Options In Figures</a></li>

                        <li class="scroll @if (Request::url() == url('/press')) {{'active'}} @endif"><a href="{{url('/press') }}">IQ Options In Press</a></li>

                        <li class="scroll @if (Request::url() == url('/awards')) {{'active'}} @endif"><a href="{{url('/awards') }}">Awards</a></li>

                        <li class="scroll @if (Request::url() == url('/careers')) {{'active'}} @endif"><a href="{{url('/careers') }}">Careers</a></li>

                        <li class="scroll @if (Request::url() == url('/charity')) {{'active'}} @endif"><a href="{{url('/charity') }}">Charitable Foundation</a></li>
                    </div>
                </div>  

                <div class="dropdown">
                        <li id="" class="scroll @if (Request::url() == url('/contact')) {{'active'}} @endif""><a href="{{url('/contact') }}">Contact-Us</a></li>
                        <div class="dropdown-content">
                        <!-- <li id="" class="scroll @if (Request::url() == url('/etfs')) {{'active'}} @endif""><a href="{{url('/etfs') }}">ETFs</a></li>
                        <li class="scroll @if (Request::url() == url('/contact')) {{'active'}} @endif"><a href="{{url('/contact') }}">Contact</a></li> -->
                    </div>
                </div>                       
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="{{url('/register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                      <li><a href="{{url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

   

       @section("home")
        @show

         @section("welcome")
        @show

        @section("contact")
        @show

        @section("stock")

        @show

        @section("options")

        @show

        @section("forex")
        @show


        @section("cryptocurrencies")
        @show

        @section("news")
        @show

        @section("assets")
        @show

        @section("collection")
        @show

        @section("industries")
        @show
        @section("turnaments")
        @show
        @section("historical")
        @show
        @section("video")
        @show
        @section("calender")
        @show


    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2019 Backstage.
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>