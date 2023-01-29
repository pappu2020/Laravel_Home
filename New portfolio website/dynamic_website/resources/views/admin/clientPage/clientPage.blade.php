<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:27:43 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kufa - Personal Portfolio HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png"> --}}
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
    <link rel="icon" href="{{ asset('dynamic_webpage/img/icon/pappusahaIcon.png') }}">
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
                                <a href="{{ route('clientPage') }}" class="navbar-brand logo-sticky-none"><img
                                        width="170px" height="100px"
                                        src="{{ asset('dynamic_webpage/img/logo/new.png') }}" alt=""></a>
                                <a href="index.html" class="navbar-brand s-logo-none"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarNav">
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
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



            @foreach ($AllcontactData as $contactData)
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>{{ $contactData->contact_address }}</h4>

                    </div>
                    <div class="contact-list mb-30">
                        <h4>{{ $contactData->contact_phone_num }}</h4>

                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p>{{ $contactData->contact_email }}</p>
                    </div>
                </div>
            @endforeach



            <div class="social-icon-right mt-20">
                @foreach ($homeAllSocialDataClient as $homeSocialDataClient)
                    <a href="{{ $homeSocialDataClient->homeSocialaddress }}"><i
                            class="{{ $homeSocialDataClient->homeSocialIcon }}"></i></a>
                @endforeach

            </div>





        </div>
        <div class="offcanvas-overly"></div>
        <!-- offcanvas-end -->
    </header>
    <!-- header-end -->

    <!-- main-area -->
    <main>

        <!-- banner-area -->
        <section id="home" class="banner-area banner-bg fix">
            <div class="container">

                @foreach ($homeAllDataClient as $homeDataClient)
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am {{ $homeDataClient->home_name }}
                                </h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s">{{ $homeDataClient->home_description }}
                                </p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                    <ul>
                                        {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li> --}}


                                        @foreach ($homeAllSocialDataClient as $homeSocialDataClient)
                                            <li><a target="_blank"
                                                    href="{{ $homeSocialDataClient->homeSocialaddress }}"><i
                                                        class="{{ $homeSocialDataClient->homeSocialIcon }}"></i></a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <a href="#portfolio" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                                <a href="{{route("display_pdf")}}" target="_blank" class="btn wow fadeInUp" data-wow-delay="1s">SEE CV</a>
                               
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img width="750px"
                                    src="{{ asset('uploads/homeSection') }}/{{ $homeDataClient->home_image }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="banner-shape"><img src="{{ asset('dynamic_webpage/img/shape/dot_circle.png') }}"
                    class="rotateme" alt="img"></div>
        </section>
        <!-- banner-area-end -->

        <!-- about-area-->
        <section id="about" class="about-area primary-bg pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        @foreach ($AllaboutSecDescriptionData as $aboutSecDescriptionData)
                            <div class="about-img">
                                <img src="{{ asset('uploads/aboutSection') }}/{{ $aboutSecDescriptionData->aboutImage }}"
                                    title="me-01" alt="me-01">

                            </div>
                    </div>
                    <div class="col-lg-6 pr-90">
                        <div class="section-title mb-25">
                            <span>Introduction</span>
                            <h2>About Me</h2>
                        </div>
                        <div class="about-content">



                            <p>{{ $aboutSecDescriptionData->aboutSection_description }}</p>
                            @endforeach
                            <h3>Education:</h3>
                        </div>
                        <!-- Education Item -->



                        @foreach ($AllaboutSecData as $aboutSecData)
                            <div class="education">
                                <div class="year">{{ $aboutSecData->about_Exam_year }}</div>
                                <div class="line"></div>
                                <div class="location">
                                    <span>{{ $aboutSecData->about_Exam_name }}</span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s"
                                                data-wow-duration="2s" role="progressbar"
                                                style="width: {{ $aboutSecData->about_Exam_result }}%;"
                                                aria-valuenow="{{ $aboutSecData->about_Exam_result }}"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach





                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- Services-area -->
        <section id="service" class="services-area pt-120 pb-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">

                            <h2>My Teachnical and Soft Skills</h2>
                        </div>
                    </div>
                </div>
                <div class="row">



                    @foreach ($AllServiceSectionData as $ServiceSectionData)
                        <div class="col-lg-4 col-md-6">
                            <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">

                                <i class="{{ $ServiceSectionData->service_icon }}"></i>
                                <h3>{{ $ServiceSectionData->service_title }}</h3>
                                <p>
                                    {{ $ServiceSectionData->service_description }}
                                </p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- Services-area-end -->

        <!-- Portfolios-area -->
        <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>Portfolio Showcase</span>
                            <h2>My Recent Best Works</h2>
                        </div>
                    </div>
                </div>
                <div class="row">


                    @foreach ($AllrecentData as $recentData)
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
                                <div class="speaker-thumb">
                                    <img src="{{ asset('uploads/recentWork') }}/{{ $recentData->recentImage }}"
                                        alt="img">
                                </div>
                                <div class="speaker-overlay mt-3">
                                    <span>{{ $recentData->recentTitle }}</span>
                                    <h4><a class="mt-3"
                                            href="{{ route('singleRecentWorkPage', $recentData->id) }}">{{ $recentData->recentSubTitle }}</a>
                                    </h4>
                                    <a href="{{ route('singleRecentWorkPage', $recentData->id) }}"
                                        class="arrow-btn">More information
                                        <span></span></a>
                                    <a href="https://e-commerce.pappusaha.dev/" target="_blank"
                                        class="arrow-btn d-block mt-1">View Live
                                        <span></span></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- services-area-end -->


        <!-- fact-area -->
        <section class="fact-area">
            <div class="container">
                <div class="fact-wrap">
                    <div class="row justify-content-between">



                        @foreach ($AllrecentWorkData as $key => $recentWorkData)
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="{{ $recentWorkData->recentNumberIcon }}"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count">{{ $recentWorkData->recentNumber }}</span></h2>
                                        <span>{{ $recentWorkData->recentNumberTitle }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
        <!-- fact-area-end -->

        <!-- testimonial-area -->
        <section class="testimonial-area primary-bg pt-115 pb-115">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>testimonial</span>
                            <h2>happy customer quotes</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-10">
                        <div class="testimonial-active">


                            @foreach ($AllcustomerData as $customerData)
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img class="rounded-circle" width="200px" height="200px"
                                            src="{{ asset('uploads/customerSection') }}/{{ $customerData->customerImage }}"
                                            alt="img">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span> {{ $customerData->customer_description }}<span>”</span>
                                        </h4>
                                        <div class="testi-avatar-info">
                                            <h5>{{ $customerData->customerTitle }}</h5>
                                            <span>{{ $customerData->customerPosition }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->

        <!-- brand-area -->
        {{-- <div class="barnd-area pt-100 pb-100">
            <div class="container">
                <div class="row brand-active">
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/brand_img01.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/brand_img02.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/brand_img03.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/brand_img04.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/brand_img05.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/brand_img03.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- brand-area-end -->

        <!-- contact-area -->
        <section id="contact" class="contact-area primary-bg pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title mb-20">
                            <span>information</span>
                            <h2>Contact Information</h2>
                        </div>
                        <div class="contact-content">


                            @foreach ($AllcontactData as $contactData)
                                <h5>OFFICE IN <span>{{ $contactData->contact_country_name }}</span></h5>

                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address
                                                :</span>{{ $contactData->contact_address }}</li>
                                        <li><i class="fas fa-headphones"></i><span>Phone
                                                :</span>{{ $contactData->contact_phone_num }}</li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail
                                                :</span>{{ $contactData->contact_email }}</li>
                                    </ul>
                                </div>
                            @endforeach



                        </div>
                    </div>
                    <div class="col-lg-6">
                        @if (session('conactFormSendSuccess'))
                            <div class="alert alert-success">{{ session('conactFormSendSuccess') }}</div>
                        @endif
                        <div class="contact-form">
                            <form action="{{ route('contactMeFormInsert') }}" method="post">
                                @csrf
                                <input type="text" placeholder="Enter your name" name="contactFormName">
                                @error('contactFormName')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="email" placeholder="Enter your email" name="contactFormEmail">

                                @error('contactFormEmail')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <textarea name="contactFormMsg" id="message" placeholder="your message *"></textarea>
                                @error('contactFormMsg')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <button class="btn" type="submit">SEND</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer -->
    <footer>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="copyright-text text-center">
                            <p>Copyright© <span>Kufa</span> | All Rights Reserved || Backend developer by Pappu Saha</p>
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
