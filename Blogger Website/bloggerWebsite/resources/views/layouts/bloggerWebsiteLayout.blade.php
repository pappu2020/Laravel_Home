<!doctype html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- favicon -->
    <link rel="icon" sizes="16x16" href="assets/img/favicon.png">


    <title> Helping Hand || Blogger </title>

    <!-- CSS Plugins -->
    <link rel="stylesheet" href="{{ asset('blogger_asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('blogger_asset/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('blogger_asset/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('blogger_asset/css/fontawesome.css') }}">

    <!-- main style -->
    <link rel="stylesheet" href="{{ asset('blogger_asset/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('dashboard_asset/images/logo.png') }}" />









    <style>
        .signInbutton {
            margin-left: 10px;
        }

        .img {
            margin-top: 10px;
        }

        .myProfileImg {
            width: 50px;
            height: 70px;
        }


        .userName {
            margin-top: 15px;
        }



        .myDropDown {
            margin-left: 15px;
            margin-top: 22px;
        }

        .socialIcon {
            margin-left: 80px;
        }



        @media (min-width: 300px) and (max-width: 575px) {
            .img {
                /* margin-top: 10px;
                margin-left: 5px; */
                display: none;
            }

            /* .myProfileImg {
                width: 400px;
                height: 40px;
            } */

            .userName {
                /* margin-top: 15px; */
                display: none;

            }

            /* .myUserName {
                font-size: 15px;
                margin-left: 5px;
            }

            .myUserEmail {
                font-size: 10px;
                margin-left: 5px;
            } */

            .myDropDown {
                margin-left: -5px;
                margin-top: 5px;
            }

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
                    <a href="https://www.logodesign.net/image/hand-pencil-on-color-splashes-2784ld">

                        <img src="{{ asset('dashboard_asset/images/logo.png') }}" alt="">
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
                                                <img class="myProfileImg"
                                                    src="{{ Avatar::create(Auth::guard('generaluserLogin')->user()->name)->toBase64() }}" />
                                            @else
                                                <a href=""><img id="profileImageView"
                                                        src="{{ asset('uploads/genUserProfile') }}/{{ Auth::guard('generaluserLogin')->user()->photo }}"
                                                        class="myProfileImg" alt="" /></a>
                                            @endif




                                        </div>
                                    </div>
                                    <div class="p-2 bd-highlight userName">

                                        <h4 class="myUserName"> {{ Auth::guard('generaluserLogin')->user()->name }}</h4>
                                        <p class="fw-bold myUserEmail">
                                            {{ Auth::guard('generaluserLogin')->user()->email }}</p class="fw-bold">



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
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
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
                                    <li><a href="{{ route('homePage') }}">Homepage</a></li>
                                    <li><a href="{{ route('bloggerSiteauthorPage') }}">Author</a></li>
                                    <li><a href="{{ route('bloggerSiteblogPage') }}">Blogs</a></li>
                                    <li><a href="{{ route('login') }}">Became a author</a></li>
                                    <li><a href="{{ route('generalUserSignInPage') }}">Became a Member</a></li>
                                    <li><a href="#">Upcoming events</a></li>
                                    <li><a href="#">career</a></li>
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

                                <form action="{{ route('insertNewsletter') }}" class="newslettre-form">
                                    @csrf
                                    <div class="form-flex">
                                        <div class="form-group">
                                            <input type="email" class="form-control"
                                                placeholder="Your Email Adress" required="required"
                                                name="newsletter">
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


                                <div class="d-flex flex-row bd-highlight socialIcon">
                                    <div class="p-2 bd-highlight text-light"><a href="#"><span><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                    fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                                </svg></span></a></div>
                                    <div class="p-2 bd-highlight text-light"><a href="#"><span><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                    fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                                </svg></span></a></div>
                                    <div class="p-2 bd-highlight text-light"><a href="#"><span><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                    fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                                    <path
                                                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                                </svg></span></a></div>
                                    <div class="p-2 bd-highlight text-light"><a href="#"><span><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                    fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                                </svg></span></a></div>
                                </div>





                            </div>











                        </div>















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
                        <p>Backend Developed by Pappu Saha</p>
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




    @if (session('newsletter'))
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
                title: 'Sent Success!!'
            })
        </script>
    @endif


    @if (session('pass_update_success'))
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
                title: 'Password Changed Successfully!!'
            })
        </script>
    @endif




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
