<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{Auth::guard("generaluserLogin")->user()->name}} || Helping Hand</title>
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
    <link rel="shortcut icon" href="{{asset("dashboard_asset/images/logo.png")}}" />








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
            margin-top: 6px;

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

        .quote{
            margin-top: -15px;
        }

        .mypost{
            margin-bottom: 15px;
            box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
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
                                                <a href=""><img id="profileImageView"
                                                        src="{{ asset('uploads/genUserProfile') }}/{{ Auth::guard('generaluserLogin')->user()->photo }}"
                                                        width="50px" height="50px" alt="" /></a>
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
                                            <a href=""><img width="1148px" height="272px"
                                                    id="profileImageView"
                                                    src="{{ asset('uploads/genUserProfile') }}/{{ Auth::guard('generaluserLogin')->user()->coverphoto }}"
                                                    alt="" /></a>
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
                                                        src="{{ asset('uploads/genUserProfile') }}/{{ Auth::guard('generaluserLogin')->user()->photo }}"
                                                        alt="" /></a>
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
                                            <i class="mr-1 icon-md" data-feather="message-circle"></i>
                                            <a class="pt-1px d-none d-md-block" href="#">Comments <span
                                                    class="text-muted tx-12">{{$allCommentPost->count()}}</span></a>
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
                                    <p> {{ Auth::guard('generaluserLogin')->user()->about }}</p>
                                    <div class="mt-3">
                                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">Joined:</label>
                                        <p class="text-muted">
                                            {{ Auth::guard('generaluserLogin')->user()->created_at->diffForHumans() }}
                                        </p>
                                    </div>
                                    <div class="mt-3">
                                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">Lives:</label>
                                        <p class="text-muted">
                                            {{ Auth::guard('generaluserLogin')->user()->address == null ? 'Not Give yet' : Auth::guard('generaluserLogin')->user()->address }}
                                        </p>
                                    </div>
                                    <div class="mt-3">
                                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">Email:</label>
                                        <p class="text-muted">{{ Auth::guard('generaluserLogin')->user()->email }}</p>
                                    </div>
                                    {{-- <div class="mt-3">
                                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">Website:</label>
                                        <p class="text-muted">www.nobleui.com</p>
                                    </div> --}}
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


                        <div class="col-md-8 col-xl-7  middle-wrapper">




                            @forelse ($allCommentPost as $CommentPost)
                                <div class="card mypost">
                                    <h5 class="card-header">



                                        @forelse (App\Models\bloggerPostModel::where("id",$CommentPost->post_id)->get() as $blogInfo)
                                            <img src="{{ asset('uploads/blogerPost') }}/{{ $blogInfo->featured_img }}" alt="" width="100px" height="100px"><p class="p-3 d-inline">{{ $blogInfo->title }}</p>


                                    </h5>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $blogInfo->rel_to_users->name }} <p
                                                class="float-right"><span
                                                    class="badge badge-primary">{{ $CommentPost->created_at->diffForHumans() }}</span>
                                            </p>
                                        </h5>
                                        <p class="card-text">
                                        <blockquote class="blockquote">
                                            <p class="mb-0"><span ><svg class="quote" xmlns="http://www.w3.org/2000/svg"
                                                        width="26" height="26" fill="currentColor"
                                                        class="bi bi-quote" viewBox="0 0 16 16">
                                                        <path
                                                            d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z" />
                                                    </svg></span>{{ $CommentPost->commment }}
                                            </p>
                                        </blockquote>
                                        </p>
                                        <a href="{{ route('bloggerDetailsPage', $blogInfo->slug) }}" class="btn btn-primary">Go to post</a>
                                    </div>
                                </div>

                            @empty
                            @endforelse
                        @empty
                            @endforelse






                        </div>

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
