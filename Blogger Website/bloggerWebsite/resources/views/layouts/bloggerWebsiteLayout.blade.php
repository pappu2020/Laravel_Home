<!doctype html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- favicon -->
    <link rel="icon" sizes="16x16" href="assets/img/favicon.png">

    <!-- Title -->Stay Connected
    <title> Oredoo - Personal Blog HTML Template </title>

    <!-- CSS Plugins -->
    <link rel="stylesheet" href="{{ asset('blogger_asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('blogger_asset/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('blogger_asset/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('blogger_asset/css/fontawesome.css') }}">

    <!-- main style -->
    <link rel="stylesheet" href="{{ asset('blogger_asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('blogger_asset/css/custom.css') }}">









    <style>
        .signInbutton {
            margin-left: 10px;
        }

        .img {
            margin-top: 18px;
        }

        .userName {
            margin-top: 15px;
        }

        .myDropDown {
            margin-left: 15px;
            margin-top: 22px;
        }
    </style>
</head>

<body>
    <!--loading -->
    <div class="loader">
        <div class="loader-element"></div>
    </div>

    <!-- Header-->
    <header class="header navbar-expand-lg fixed-top ">
        <div class="container-fluid ">
            <div class="header-area ">
                <!--logo-->
                <div class="logo">
                    <a href="index.html">
                        <img src="assets/img/logo/logo-dark.png" alt="" class="logo-dark">
                        <img src="assets/img/logo/logo-white.png" alt="" class="logo-white">
                    </a>
                </div>
                <div class="header-navbar">
                    <nav class="navbar">
                        <!--navbar-collapse-->
                        <div class="collapse navbar-collapse" id="main_nav">
                            <ul class="navbar-nav ">
                                <li class="nav-item ">
                                    <a class="nav-link active" href="{{ route('homePage') }}"> Home </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('bloggerSiteblogPage') }}"> Blogs </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('bloggerSiteauthorPage') }}"> Authors </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html"> About </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html"> Contact </a>
                                </li>
                            </ul>
                        </div>
                        <!--/-->
                    </nav>
                </div>

                <!--header-right-->
                <div class="header-right ">
                    <!--theme-switch-->
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox" />
                            <span class="slider round ">
                                <i class="lar la-sun icon-light"></i>
                                <i class="lar la-moon icon-dark"></i>
                            </span>
                        </label>
                    </div>

                    <!--search-icon-->
                    <div class="search-icon">
                        <i class="las la-search"></i>
                    </div>
                    <!--button-subscribe-->
                    {{-- <div class="botton-sub">
                        <a href="{{route("register")}}" class="btn-subscribe">Become a Author</a>
                    
                    
                    </div> <div class="botton-sub signInbutton">
                        <a href="{{route("register")}}" class="btn-subscribe">Become a Member</a>
                    </div> --}}

                    {{-- <div class="botton-sub signInbutton">
                        <a href="{{route("login")}}" class="btn-subscribe btn-success">Sign In</a>
                    </div> --}}


                    <div class="dropdown">

                        @auth('generaluserLogin')
                            <div class="userInfo mt-3">
                                <div class="d-flex flex-row bd-highlight mb-3">
                                    <div class="p-2 bd-highlight">

                                        <div class="img">


                                            @if (Auth::guard('generaluserLogin')->user()->photo == null)
                                                <img width="50px" height="50px" class="mx-auto d-block"
                                                    src="{{ Avatar::create(Auth::guard('generaluserLogin')->user()->name)->toBase64() }}" />
                                            @else
                                                <a href=""><img id="profileImageView" src="{{asset("uploads/genUserProfile")}}/{{Auth::guard('generaluserLogin')->user()->photo}}" width="50px"
                                                        height="50px" alt="" /></a>
                                            @endif




                                        </div>
                                    </div>
                                    <div class="p-2 bd-highlight userName">

                                        <h4> {{ Auth::guard('generaluserLogin')->user()->name }}</h4>
                                        <p class="fw-bold"> {{ Auth::guard('generaluserLogin')->user()->email }}</p
                                            class="fw-bold">



                                    </div>



                                    <div class="p-2 bd-highlight myDropDown">

                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('profilePage') }}">Profile</a>
                                                <a class="dropdown-item" href="{{ route('generalUserLogout') }}">Log
                                                    out</a>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        @else
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-expanded="false">
                                Sign Up
                            </button>
                        @endauth




                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('register') }}">Beacome a Author</a>
                            <a class="dropdown-item" href="{{ route('generalUserSignUpPage') }}">Become a Member</a>

                        </div>
                    </div>


                    <!--navbar-toggler-->
                    {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button> --}}
                </div>
            </div>
        </div>
    </header>


    @yield('content')



    <!--footer-->
    <div class="footer">
        <div class="footer-area">
            <div class="footer-area-content">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-3">
                            <div class="menu">
                                <h6>Menu</h6>
                                <ul>
                                    <li><a href="#">Homepage</a></li>
                                    <li><a href="#">about us</a></li>
                                    <li><a href="#">contact us</a></li>
                                    <li><a href="#">privarcy</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--newslatter-->
                        <div class="col-md-6">
                            <div class="newslettre">
                                <div class="newslettre-info">
                                    <h3>Subscribe To OurNewsletter</h3>
                                    <p>Sign up for free and be the first to get notified about new posts.</p>
                                </div>

                                <form action="#" class="newslettre-form">
                                    <div class="form-flex">
                                        <div class="form-group">
                                            <input type="email" class="form-control"
                                                placeholder="Your Email Adress" required="required">
                                        </div>
                                        <button class="submit-btn" type="submit">
                                            <i class="fas fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--/-->
                        <div class="col-md-3">
                            <div class="menu">
                                <h6>Follow us</h6>
                                <ul>
                                    <li><a href="#">facebook</a></li>
                                    <li><a href="#">instagram</a></li>
                                    <li><a href="#">youtube</a></li>
                                    <li><a href="#">twitter</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer-copyright-->
            <div class="footer-area-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright">
                                <p>© 2022, AssiaGroupe, All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/-->
        </div>
    </div>

    <!--Back-to-top-->
    <div class="back">
        <a href="#" class="back-top">
            <i class="las la-long-arrow-alt-up"></i>
        </a>
    </div>

    <!--Search-form-->
    <div class="search">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-10 m-auto">
                    <div class="search-width">
                        <button type="button" class="close">
                            <i class="far fa-times"></i>
                        </button>
                        <form class="search-form">

                            <input type="search" id="search_input" value="{{ @$_GET['q'] }}"
                                placeholder="What are you looking for?">
                            <button type="button" class="search-btn" id="search_btn"> search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('blogger_asset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('blogger_asset/js/popper.min.js') }}"></script>
    <script src="{{ asset('blogger_asset/js/bootstrap.min.js') }}"></script>


    <!-- JS Plugins  -->
    <script src="{{ asset('blogger_asset/js/theia-sticky-sidebar.js') }}"></script>
    <script src="{{ asset('blogger_asset/js/ajax-contact.js') }}"></script>
    <script src="{{ asset('blogger_asset/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('blogger_asset/js/switch.js') }}"></script>
    <script src="{{ asset('blogger_asset/js/jquery.marquee.js') }}"></script>


    <!-- JS main  -->
    <script src="{{ asset('blogger_asset/js/main.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>





    @yield('javascript')





    {{-- search --}}

    <script>
        $("#search_btn").click(function() {
            var searchValue = $("#search_input").val();


            var link = "{{ route('searchpage') }}" + "?q=" + searchValue;
            window.location.href = link;
        });
    </script>

























    @if (session('insertSuccess'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'You created Your Account successfully!!.',
            })
        </script>
    @endif


    @if (session('generalUserLoginsuccess'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'You are Logged In!!.',
            })
        </script>
    @endif


    @if (session('New_pass_update_success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'Your password Changed Successfully!!!',
            })
        </script>
    @endif



</body>

</html>
