<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:27:43 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kufa - Personal Portfolio HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('dynamic_webpage/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dynamic_webpage/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dynamic_webpage/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('dynamic_webpage/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dynamic_webpage/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('dynamic_webpage/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('dynamic_webpage/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('dynamic_webpage/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('dynamic_webpage/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dynamic_webpage/css/responsive.css') }}">
</head>

<body class="theme-bg">

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- header-start -->
    <header>
        <div id="header-sticky" class="transparent-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg">
                                <a href="{{route("clientPage")}}" class="navbar-brand logo-sticky-none"><img width="170px" height="100px" src="{{asset("dynamic_webpage/img/logo/new.png")}}" alt=""></a>
                                <a href="index.html" class="navbar-brand s-logo-none"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarNav">
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item "><a class="nav-link" href="{{route("clientPage")}}">Home</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{route("clientPage")}}">about</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{route("clientPage")}}">service</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{route("clientPage")}}">portfolio</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{route("clientPage")}}">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="header-btn">
                                    <a href="#" class="off-canvas-menu menu-tigger"><i
                                            class="flaticon-menu"></i></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- offcanvas-start -->
        <div class="extra-info">
            <div class="close-icon menu-close">
                <button>
                    <i class="far fa-window-close"></i>
                </button>
            </div>
            <div class="logo-side mb-30">
                <a href="index-2.html">
                   <h2>Pappu Saha</h2>
                </a>
            </div>
           
           
           
            @foreach (App\Models\contactMeModel::all() as $contactData)
                
            
            <div class="side-info mb-30">
                <div class="contact-list mb-30">
                    <h4>{{$contactData -> contact_address}}</h4>
                    
                </div>
                <div class="contact-list mb-30">
                    <h4>{{$contactData -> contact_phone_num}}</h4>
                    
                </div>
                <div class="contact-list mb-30">
                    <h4>Email Address</h4>
                    <p>{{$contactData -> contact_email}}</p>
                </div>
            </div>
            @endforeach
            
            
            
            <div class="social-icon-right mt-20">
                @foreach (App\Models\homeSecSocialModel::all()  as $homeSocialDataClient)
                <a href="{{$homeSocialDataClient->homeSocialaddress}}"><i class="{{$homeSocialDataClient->homeSocialIcon}}"></i></a>
                 @endforeach

            </div>
        
        
        
        
        
        </div>
        <div class="offcanvas-overly"></div>
        <!-- offcanvas-end -->
    </header>
    <!-- header-end -->

    <!-- main-area -->
    @yield("content")
    <!-- main-area-end -->

    <!-- footer -->
    <footer>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="copyright-text text-center">
                            <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->





    <!-- JS here -->
    <script src="{{ asset('dynamic_webpage/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('dynamic_webpage/js/popper.min.js') }}"></script>
    <script src="{{ asset('dynamic_webpage/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dynamic_webpage/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('dynamic_webpage/js/one-page-nav-min.js') }}"></script>
    <script src="{{ asset('dynamic_webpage/js/slick.min.js') }}"></script>
    <script src="{{ asset('dynamic_webpage/js/ajax-form.js') }}"></script>
    <script src="{{ asset('dynamic_webpage/js/wow.min.js') }}"></script>
    <script src="{{ asset('dynamic_webpage/js/aos.js') }}"></script>
    <script src="{{ asset('dynamic_webpage/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('dynamic_webpage/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('dynamic_webpage/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('dynamic_webpage/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('dynamic_webpage/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('dynamic_webpage/js/plugins.js') }}"></script>
    <script src="{{ asset('dynamic_webpage/js/main.js') }}"></script>
    <script src="https://kit.fontawesome.com/ecd7a02304.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/707368be08.js" crossorigin="anonymous"></script>
    
</body>

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:28:17 GMT -->

</html>
