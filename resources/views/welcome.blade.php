<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Innovation and Development</title>

        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}"/>

        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="{{asset('front/css/style.css')}}"/>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        <!-- Header -->
        <header id="header" class="transparent-nav">
            <div class="container">

                <div class="navbar-header">
                    <!-- Logo -->
                    <div class="navbar-brand">
                        <a class="logo" href="{{route('/')}}">
                            <img src="{{URL::to('front/img/icon.png')}}" alt="logo" style="width:150px;">
                        </a>
                    </div>
                    <!-- /Logo -->

                    <!-- Mobile toggle -->
                    <button class="navbar-toggle">
                        <span></span>
                    </button>
                    <!-- /Mobile toggle -->
                </div>

                <!-- Navigation -->
                <nav id="nav">
                    <ul class="main-menu nav navbar-nav navbar-right">
                        <li><a href="{{route('/')}}">Home</a></li>
                        <li><a href="{{route('our.team')}}">Our Team</a></li>
                        <li><a href="{{route('all.course')}}">Courses</a></li>
                        <li><a href="{{route('blog')}}">Blog</a></li>
                        <li><a href="{{route('contact.us')}}">Contact</a></li>
                    </ul>
                </nav>
                <!-- /Navigation -->

            </div>
        </header>
        <!-- /Header -->
        <!-- About -->
       @yield('content')
        <!-- /Contact CTA -->

        <!-- Footer -->
        <footer id="footer" class="section">

            <!-- container -->
            <div class="container">

                <!-- row -->
                <div class="row">

                    <!-- footer logo -->
                    <div class="col-md-6">
                        <div class="footer-logo">
                            <a class="logo" href="index.html">
                                <img src="{{URL::to('front/img/icon.png')}}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <!-- footer logo -->

                    <!-- footer nav -->
                    <div class="col-md-6">
                        <ul class="footer-nav">
                        <li><a href="{{route('/')}}">Home</a></li>
                        <li><a href="{{route('our.team')}}">Our Team</a></li>
                        <li><a href="{{route('all.course')}}">Courses</a></li>
                        <li><a href="{{route('blog')}}">Blog</a></li>
                        <li><a href="{{route('contact.us')}}">Contact</a></li>
                        </ul>
                    </div>
                    <!-- /footer nav -->

                </div>
                <!-- /row -->

                <div id="bottom-footer" class="row">

                    <!-- social -->
                    <div class="col-md-4 col-md-push-8">
                        <ul class="footer-social">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <!-- /social -->

                    <!-- copyright -->
                    <div class="col-md-8 col-md-pull-4">
                        <div class="footer-copyright">
                            <span>&copy; Copyright 2018. All Rights Reserved. | Innovation and development Institute <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="">(Innovation) </a></span>
                        </div>
                    </div>
                    <!-- /copyright -->

                </div>
                <!-- row -->

            </div>
            <!-- /container -->

        </footer>
        <!-- /Footer -->

        <!-- preloader -->
        <div id='preloader'><div class='preloader'></div></div>
        <!-- /preloader -->


        <!-- jQuery Plugins -->
        <script type="text/javascript" src="{{asset('front/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/js/main.js')}}"></script>

    </body>
</html>
