<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NobleUI Responsive Bootstrap 4 Dashboard Template</title>
    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('dashboard_asset/css/vendors/core/core.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- end plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('dashboard_asset/fonts/feather-font/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_asset/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('dashboard_asset/css/demo_1/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('dashboard_asset/images/favicon.png') }}" />








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
            margin-left: 20px;

        }

        .myDropDown {
            margin-left: 15px;
            margin-top: 22px;
        }

        .mynav {
            margin-right: 300px;
        }

        .logout {
            margin-top: 25px;
            margin-left: 20px;
        }

        .mymodel {
            margin-top: 300px;
            z-index: -1;
        }
    </style>
</head>

<body>



    <header class="header navbar-expand-lg fixed-top">
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
                                <li class="nav-item mynav">
                                    <a class="nav-link" href="contact.html"> Contact </a>
                                </li>
                            </ul>
                        </div>
                        <!--/-->
                    </nav>
                </div>

                <!--header-right-->
                <div class="header-right ">


                    <div class="dropdown">

                        @auth('generaluserLogin')
                            <div class="userInfo mt-3">
                                <div class="d-flex flex-row bd-highlight">
                                    <div class=" bd-highlight">

                                        <div class="img">


                                            @if (Auth::guard('generaluserLogin')->user()->photo == null)
                                                <img width="50px" height="50px" class=" d-block"
                                                    src="{{ Avatar::create(Auth::guard('generaluserLogin')->user()->name)->toBase64() }}" />
                                            @else
                                                <a href=""><img id="profileImageView" src="{{asset("uploads/genUserProfile")}}/{{Auth::guard('generaluserLogin')->user()->photo}}" width="50px"
                                                        height="50px" alt="" /></a>
                                            @endif




                                        </div>
                                    </div>
                                    <div class="bd-highlight userName">

                                        <h4> {{ Auth::guard('generaluserLogin')->user()->name }}</h4>
                                        <p class="fw-bold"> {{ Auth::guard('generaluserLogin')->user()->email }}</p
                                            class="fw-bold">



                                    </div>


                                  


                                    <div class="bd-highlight ">


                                        <div class="logout">
                                            <a href="{{ route('generalUserLogout') }}" class="btn btn-danger">Log Out</a>
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









    <div class="main-wrapper">

        <!-- partial:../../partials/_sidebar.html -->


        <!-- partial -->

        <div class="page-wrapper">



            <div class="page-content">

                <div class="profile-page tx-13">
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="profile-header">
                                <div class="cover">
                                    <div class="gray-shade"></div>
                                    <figure>
                                        {{-- <img src="https://via.placeholder.com/1148x272" class="img-fluid"
                                            alt="profile cover"> --}}

                                             @if (Auth::guard('generaluserLogin')->user()->coverphoto == null)
                                                <img src="https://via.placeholder.com/1148x272" class="img-fluid"
                                            alt="profile cover">
                                            @else
                                                <a href=""><img width="1148px" height="272px" id="profileImageView"
                                                        src="{{asset("uploads/genUserProfile")}}/{{Auth::guard('generaluserLogin')->user()->coverphoto}}" alt="" /></a>
                                            @endif
                                    </figure>
                                    <div class="cover-body d-flex justify-content-between align-items-center">
                                        <div>
                                            {{-- <img class="profile-pic" src="https://via.placeholder.com/100x100"
                                                alt="profile"> --}}




                                            @if (Auth::guard('generaluserLogin')->user()->photo == null)
                                                <img class="profile-pic"
                                                    src="{{ Avatar::create(Auth::guard('generaluserLogin')->user()->name)->toBase64() }}" />
                                            @else
                                                <a href=""><img class="profile-pic" id="profileImageView"
                                                        src="{{asset("uploads/genUserProfile")}}/{{Auth::guard('generaluserLogin')->user()->photo}}" alt="" /></a>
                                            @endif






                                            <span
                                                class="profile-name">{{ Auth::guard('generaluserLogin')->user()->name }}</span>
                                        </div>
                                        <div class="">
                                            <a href="{{ route('generalUserProfileEditPage') }}"
                                                class="btn btn-primary btn-icon-text btn-edit-profile">
                                                <i data-feather="edit" class="btn-icon-prepend"></i> Edit profile
                                            </a>







                                        </div>
                                    </div>
                                </div>
                                <div class="header-links">
                                    <ul class="links d-flex align-items-center mt-3 mt-md-0">
                                        <li class="header-link-item d-flex align-items-center active">
                                            <i class="mr-1 icon-md" data-feather="columns"></i>
                                            <a class="pt-1px d-none d-md-block" href="#">Timeline</a>
                                        </li>
                                        <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                                            <i class="mr-1 icon-md" data-feather="user"></i>
                                            <a class="pt-1px d-none d-md-block" href="#">About</a>
                                        </li>
                                        <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                                            <i class="mr-1 icon-md" data-feather="users"></i>
                                            <a class="pt-1px d-none d-md-block" href="#">Friends <span
                                                    class="text-muted tx-12">3,765</span></a>
                                        </li>
                                        <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                                            <i class="mr-1 icon-md" data-feather="image"></i>
                                            <a class="pt-1px d-none d-md-block" href="#">Photos</a>
                                        </li>
                                        <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                                            <i class="mr-1 icon-md" data-feather="video"></i>
                                            <a class="pt-1px d-none d-md-block" href="#">Videos</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row profile-body">
                        <!-- left wrapper start -->
                        <div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
                            <div class="card rounded">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <h6 class="card-title mb-0">About</h6>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="dropdownMenuButton"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="icon-lg text-muted pb-3px"
                                                    data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                        data-feather="edit-2" class="icon-sm mr-2"></i> <span
                                                        class="">Edit</span></a>
                                                <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                        data-feather="git-branch" class="icon-sm mr-2"></i> <span
                                                        class="">Update</span></a>
                                                <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                        data-feather="eye" class="icon-sm mr-2"></i> <span
                                                        class="">View all</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Hi! I'm Amiah the Senior UI Designer at NobleUI. We hope you enjoy the design and
                                        quality of Social. </p>
                                    <div class="mt-3">
                                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">Joined:</label>
                                        <p class="text-muted">November 15, 2015</p>
                                    </div>
                                    <div class="mt-3">
                                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">Lives:</label>
                                        <p class="text-muted">New York, USA</p>
                                    </div>
                                    <div class="mt-3">
                                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">Email:</label>
                                        <p class="text-muted">me@nobleui.com</p>
                                    </div>
                                    <div class="mt-3">
                                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">Website:</label>
                                        <p class="text-muted">www.nobleui.com</p>
                                    </div>
                                    <div class="mt-3 d-flex social-links">
                                        <a href="javascript:;"
                                            class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon github">
                                            <i data-feather="github" data-toggle="tooltip"
                                                title="github.com/nobleui"></i>
                                        </a>
                                        <a href="javascript:;"
                                            class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon twitter">
                                            <i data-feather="twitter" data-toggle="tooltip"
                                                title="twitter.com/nobleui"></i>
                                        </a>
                                        <a href="javascript:;"
                                            class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon instagram">
                                            <i data-feather="instagram" data-toggle="tooltip"
                                                title="instagram.com/nobleui"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- left wrapper end -->
                        <!-- middle wrapper start -->
                        <div class="col-md-8 col-xl-6 middle-wrapper">
                            <div class="row">
                                <div class="col-md-12 grid-margin">
                                    <div class="card rounded">
                                        <div class="card-header">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <img class="img-xs rounded-circle"
                                                        src="https://via.placeholder.com/37x37" alt="">
                                                    <div class="ml-2">
                                                        <p>Mike Popescu</p>
                                                        <p class="tx-11 text-muted">1 min ago </p>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn p-0" type="button" id="dropdownMenuButton2"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="icon-lg pb-3px" data-feather="more-horizontal"></i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                        <a class="dropdown-item d-flex align-items-center"
                                                            href="#"><i data-feather="meh"
                                                                class="icon-sm mr-2"></i> <span
                                                                class="">Unfollow</span></a>
                                                        <a class="dropdown-item d-flex align-items-center"
                                                            href="#"><i data-feather="corner-right-up"
                                                                class="icon-sm mr-2"></i> <span class="">Go to
                                                                post</span></a>
                                                        <a class="dropdown-item d-flex align-items-center"
                                                            href="#"><i data-feather="share-2"
                                                                class="icon-sm mr-2"></i> <span
                                                                class="">Share</span></a>
                                                        <a class="dropdown-item d-flex align-items-center"
                                                            href="#"><i data-feather="copy"
                                                                class="icon-sm mr-2"></i> <span class="">Copy
                                                                link</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="mb-3 tx-14">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Accusamus minima delectus nemo unde quae recusandae assumenda.</p>
                                            <img class="img-fluid" src="https://via.placeholder.com/513x342"
                                                alt="">
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex post-actions">
                                                <a href="javascript:;"
                                                    class="d-flex align-items-center text-muted mr-4">
                                                    <i class="icon-md" data-feather="heart"></i>
                                                    <p class="d-none d-md-block ml-2">Like</p>
                                                </a>
                                                <a href="javascript:;"
                                                    class="d-flex align-items-center text-muted mr-4">
                                                    <i class="icon-md" data-feather="message-square"></i>
                                                    <p class="d-none d-md-block ml-2">Comment</p>
                                                </a>
                                                <a href="javascript:;" class="d-flex align-items-center text-muted">
                                                    <i class="icon-md" data-feather="share"></i>
                                                    <p class="d-none d-md-block ml-2">Share</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card rounded">
                                        <div class="card-header">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <img class="img-xs rounded-circle"
                                                        src="https://via.placeholder.com/37x37" alt="">
                                                    <div class="ml-2">
                                                        <p>Mike Popescu</p>
                                                        <p class="tx-11 text-muted">5 min ago</p>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn p-0" type="button" id="dropdownMenuButton3"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="icon-lg pb-3px" data-feather="more-horizontal"></i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                                        <a class="dropdown-item d-flex align-items-center"
                                                            href="#"><i data-feather="meh"
                                                                class="icon-sm mr-2"></i> <span
                                                                class="">Unfollow</span></a>
                                                        <a class="dropdown-item d-flex align-items-center"
                                                            href="#"><i data-feather="corner-right-up"
                                                                class="icon-sm mr-2"></i> <span class="">Go to
                                                                post</span></a>
                                                        <a class="dropdown-item d-flex align-items-center"
                                                            href="#"><i data-feather="share-2"
                                                                class="icon-sm mr-2"></i> <span
                                                                class="">Share</span></a>
                                                        <a class="dropdown-item d-flex align-items-center"
                                                            href="#"><i data-feather="copy"
                                                                class="icon-sm mr-2"></i> <span class="">Copy
                                                                link</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="mb-3 tx-14">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p>
                                            <img class="img-fluid" src="https://via.placeholder.com/513x342"
                                                alt="">
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex post-actions">
                                                <a href="javascript:;"
                                                    class="d-flex align-items-center text-muted mr-4">
                                                    <i class="icon-md" data-feather="heart"></i>
                                                    <p class="d-none d-md-block ml-2">Like</p>
                                                </a>
                                                <a href="javascript:;"
                                                    class="d-flex align-items-center text-muted mr-4">
                                                    <i class="icon-md" data-feather="message-square"></i>
                                                    <p class="d-none d-md-block ml-2">Comment</p>
                                                </a>
                                                <a href="javascript:;" class="d-flex align-items-center text-muted">
                                                    <i class="icon-md" data-feather="share"></i>
                                                    <p class="d-none d-md-block ml-2">Share</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- middle wrapper end -->
                        <!-- right wrapper start -->
                        <div class="d-none d-xl-block col-xl-3 right-wrapper">
                            <div class="row">
                                <div class="col-md-12 grid-margin">
                                    <div class="card rounded">
                                        <div class="card-body">
                                            <h6 class="card-title">latest photos</h6>
                                            <div class="latest-photos">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <figure>
                                                            <img class="img-fluid"
                                                                src="https://via.placeholder.com/67x67"
                                                                alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <figure>
                                                            <img class="img-fluid"
                                                                src="https://via.placeholder.com/67x67"
                                                                alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <figure>
                                                            <img class="img-fluid"
                                                                src="https://via.placeholder.com/67x67"
                                                                alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <figure>
                                                            <img class="img-fluid"
                                                                src="https://via.placeholder.com/67x67"
                                                                alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <figure>
                                                            <img class="img-fluid"
                                                                src="https://via.placeholder.com/67x67"
                                                                alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <figure>
                                                            <img class="img-fluid"
                                                                src="https://via.placeholder.com/67x67"
                                                                alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <figure class="mb-0">
                                                            <img class="img-fluid"
                                                                src="https://via.placeholder.com/67x67"
                                                                alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <figure class="mb-0">
                                                            <img class="img-fluid"
                                                                src="https://via.placeholder.com/67x67"
                                                                alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <figure class="mb-0">
                                                            <img class="img-fluid"
                                                                src="https://via.placeholder.com/67x67"
                                                                alt="">
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 grid-margin">
                                    <div class="card rounded">
                                        <div class="card-body">
                                            <h6 class="card-title">suggestions for you</h6>
                                            <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                                <div class="d-flex align-items-center hover-pointer">
                                                    <img class="img-xs rounded-circle"
                                                        src="https://via.placeholder.com/37x37" alt="">
                                                    <div class="ml-2">
                                                        <p>Mike Popescu</p>
                                                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                                                    </div>
                                                </div>
                                                <button class="btn btn-icon"><i data-feather="user-plus"
                                                        data-toggle="tooltip" title="Connect"></i></button>
                                            </div>
                                            <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                                <div class="d-flex align-items-center hover-pointer">
                                                    <img class="img-xs rounded-circle"
                                                        src="https://via.placeholder.com/37x37" alt="">
                                                    <div class="ml-2">
                                                        <p>Mike Popescu</p>
                                                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                                                    </div>
                                                </div>
                                                <button class="btn btn-icon"><i data-feather="user-plus"
                                                        data-toggle="tooltip" title="Connect"></i></button>
                                            </div>
                                            <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                                <div class="d-flex align-items-center hover-pointer">
                                                    <img class="img-xs rounded-circle"
                                                        src="https://via.placeholder.com/37x37" alt="">
                                                    <div class="ml-2">
                                                        <p>Mike Popescu</p>
                                                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                                                    </div>
                                                </div>
                                                <button class="btn btn-icon"><i data-feather="user-plus"
                                                        data-toggle="tooltip" title="Connect"></i></button>
                                            </div>
                                            <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                                <div class="d-flex align-items-center hover-pointer">
                                                    <img class="img-xs rounded-circle"
                                                        src="https://via.placeholder.com/37x37" alt="">
                                                    <div class="ml-2">
                                                        <p>Mike Popescu</p>
                                                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                                                    </div>
                                                </div>
                                                <button class="btn btn-icon"><i data-feather="user-plus"
                                                        data-toggle="tooltip" title="Connect"></i></button>
                                            </div>
                                            <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                                <div class="d-flex align-items-center hover-pointer">
                                                    <img class="img-xs rounded-circle"
                                                        src="https://via.placeholder.com/37x37" alt="">
                                                    <div class="ml-2">
                                                        <p>Mike Popescu</p>
                                                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                                                    </div>
                                                </div>
                                                <button class="btn btn-icon"><i data-feather="user-plus"
                                                        data-toggle="tooltip" title="Connect"></i></button>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center hover-pointer">
                                                    <img class="img-xs rounded-circle"
                                                        src="https://via.placeholder.com/37x37" alt="">
                                                    <div class="ml-2">
                                                        <p>Mike Popescu</p>
                                                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                                                    </div>
                                                </div>
                                                <button class="btn btn-icon"><i data-feather="user-plus"
                                                        data-toggle="tooltip" title="Connect"></i></button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- right wrapper end -->
                    </div>
                </div>

            </div>



        </div>
    </div>

    <!-- core:js -->
    <script src="{{ asset('dashboard_asset/vendors/core/core.js') }}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- end plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('dashboard_asset/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('dashboard_asset/js/template.js') }}"></script>
    <!-- endinject -->
    <!-- custom js for this page -->
    <!-- end custom js for this page -->











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
</body>

</html>
