<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pappu Saha | Portfolio Website</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('dynamic_webpage/css/style.css') }}">
    <link rel="icon" href="{{ asset('dynamic_webpage/img/pappuback2.jpg') }}">
</head>

<body>

    <div class="container-fluid">
        <!-- header section start -->
        <header class="stickyMenu">
            <div class="menuSectionContainer">
                <div class="menuSectionContainerStart">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            <a class="navbar-brand headerLogo" href="#"><img
                                    src="{{ asset('dynamic_webpage/img/logo2.JPG') }}" alt="" width="200px"
                                    height="50px" class=""></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon text-dark"><span class="text-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                            fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                        </svg>
                                    </span><span>

                            </button>
                            <div class="collapse navbar-collapse text-dark menuListdesign " id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page"
                                            href="{{ route('clientPage') }}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link aboutMeMenu" href="#aboutSectionContainerId">About me</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#serviceSectionForMenuId">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#skillsSectionContainerId">Skills</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#portfolioSectionContainerId">Portfolio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#certificationSectionContainerId">Certification</a>
                                    </li>
                                   

                                    <div class="nav-item ContactNowButton">
                                        <a class="nav-link contactPara"
                                            href="#contactSectionContainerId">Contact
                                            Now</a>
                                    </div>

                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>



        <section>
            <div class="sectionContainer">
                <div class="sectionStart">
                    <div class="row">
                        <div class="col-lg-7 col-sm-12 sectionLeftContainer">
                            <div class="introMyRight position-absolute ms-5 mt-lg-5 mt-sm-2">
                                <p class="text-info introMyRighttext">Hlw! <span class="text-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                            fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
                                            <path
                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path
                                                d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z" />
                                        </svg>
                                    </span> </p>
                                <p class="text-light introMyRighttext">My name is <span
                                        class="fst-italic text-info">Pappu
                                        Saha</span></p>
                            </div>


                            <div class="objective">
                                <p class="objective_para"><sup><i class="fa-solid fa-quote-left quaIcon"></i></sup>
                                    Independent, reliable and friendly person and work hard to achieve goals. To work in
                                    the creative department of different level of IT company as a Full-Stack web
                                    developer and grow rapidly with increasing responsibilities <sup><i
                                            class="fa-solid fa-quote-right quaIcon"></i></sup> </p>
                            </div>


                            <div class="downloadCv">
                                <a target="_blank" class="CvbuttonPara" id="CvButton"
                                    href="{{ route('pappu_saha_cv') }}">See CV</a>
                            </div>

                            <div class="text p-5">

                                <div class="wrapper">

                                    <div class="static_text">
                                        I'm
                                    </div>
                                    <ul class="dynamic_text">
                                        <li><span>A Full-Stack Web Developer</span></li>
                                        <li><span>A Php Developer</span></li>
                                        <li><span>A Laravel Developer</span></li>
                                        <li><span>A Freeelancer</span></li>



                                    </ul>
                                </div>

                            </div>
                        </div>


                        <div class="col-lg-5 d-sm-none d-lg-block">
                            <div class="sectionRightMyIntroContainer">

                                <div class="sectionRightMyIntroStart">

                                    <div class="myImage1Div">
                                        <img src="{{ asset('dynamic_webpage/img/pappuback3.jpg') }}" alt=""
                                            width="100%" height="400px" class="sectionRightImg01">

                                    </div>


                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="myImage1Div2">
                                                <img src="{{ asset('dynamic_webpage/img/pappuProfile.jpg') }}"
                                                    alt="" width="200px" height="200px"
                                                    class="rounded-circle myImage2">

                                            </div>
                                        </div>


                                        <div class="col-lg-6 myIntroDiv">

                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="bd-highlight">

                                                    <div class="">
                                                        <h2 class="myintroDivHeading">Pappu Saha</h2>
                                                    </div>

                                                </div>



                                                <div class="bd-highlight">

                                                    <div class="d-flex flex-row bd-highlight socialIconDiv mt-2">
                                                        <div class="bd-highlight facebookIconDiv me-3">

                                                            <a href="https://www.facebook.com/profile.php?id=100009393546290"
                                                                target="_blank"><span><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="28" height="28"
                                                                        fill="currentColor" class="bi bi-facebook"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                                                    </svg></span></a>

                                                        </div>


                                                        <div class="bd-highlight linkedinIconDiv me-3">

                                                            <a href="https://www.linkedin.com/in/pappu-saha-3535071ab/"
                                                                target="_blank"><span><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="28" height="28"
                                                                        fill="currentColor" class="bi bi-linkedin"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                                                    </svg></span></a>

                                                        </div>


                                                        <div class="bd-highlight twitterIconDiv me-3">

                                                            <a href="https://github.com/pappu2020"
                                                                target="_blank"><span><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="28" height="28"
                                                                        fill="currentColor" class="bi bi-github"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                                                    </svg></span></a>

                                                        </div>


                                                        <div class="bd-highlight mailIconDiv me-3">

                                                            <button class="btn" data-bs-toggle="tooltip"
                                                                data-bs-placment="right"
                                                                title="sahapappu018@gmail.com"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="28"
                                                                    height="28" fill="currentColor"
                                                                    class="bi bi-envelope" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                                                </svg></button>

                                                        </div>


                                                        <div class="bd-highlight phoneIconDiv me-3">

                                                            <button class="btn" data-bs-toggle="tooltip"
                                                                data-bs-placment="right" title="01851719389"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="25"
                                                                    height="25" fill="currentColor"
                                                                    class="bi bi-telephone-inbound"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0zm-12.2 1.182a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                                </svg></button>

                                                        </div>




                                                    </div>

                                                </div>


                                                <div class="introPart">
                                                    <p class="introPartHeading fs-5">Intro</p>
                                                    <p><span><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z" />
                                                                <path
                                                                    d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z" />
                                                            </svg></span> &nbsp Studied Computer Science and Engineering
                                                        at American International University-Bangladesh </p>

                                                    <p><span><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z" />
                                                                <path
                                                                    d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z" />
                                                            </svg></span> &nbsp Went to Chittagong Collegiate School and
                                                        College </p>

                                                    <p><span><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                                            </svg></span> &nbsp Lives in Dhaka, Bangladesh </p>

                                                    <p><span><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                                            </svg></span> &nbsp From Chittagong</p>

                                                    <p><span><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd"
                                                                    d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                                                            </svg></span> &nbsp Single</p>





                                                </div>


                                            </div>


                                        </div>
                                    </div>










                                </div>

                            </div>

                        </div>


                    </div>
                </div>
            </div>


        </section>












        <!-- about Section Start -->

        <div class="aboutSectionContainer" id="aboutSectionContainerId">
            <div class="aboutSectionStart">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="aboutSectionLeft" id="aboutSectionLeftId">

                            <div class="d-flex flex-row bd-highlight">
                                <div class="bd-highlight aboutLeftDesign1">
                                    <h4>5</h4>
                                    <h4>Project Complete</h4>

                                </div>

                                <div class="bd-highlight aboutLeftDesign2">
                                    <h4>6</h4>
                                    <h4>Creative Design</h4>

                                </div>


                            </div>


                            <div class="d-flex flex-row bd-highlight">
                                <div class="bd-highlight aboutLeftDesign3">
                                    <h4>7</h4>
                                    <h4>University Project</h4>

                                </div>

                                <div class="bd-highlight aboutLeftDesign4">
                                    <h4>9</h4>
                                    <h4>Course Certification</h4>

                                </div>


                            </div>

                        </div>
                    </div>



                    <div class="col-lg-6 col-sm-12">
                        <div class="aboutSectionRight" id="aboutSectionRightId">

                            <h5 class="aboutRightSecHeading">About</h5>
                            <p class="aboutRightSecParaHeading">A few words</p>
                            <p class="aboutRightSecParaHeading">about me...</p>
                            <p class="aboutRightSecPara">Hi, my name is Pappu Saha. I was born in 1998 in the village
                                of
                                Singa in the Narail district.I live in Dhaka, Bangladesh. Recently, I completed
                                graduation
                                in the department of Computer Science at American International University-Bangladesh
                                (AIUB). To work in the creative department of different level of IT company and
                                freelancing
                                sites as a Full-Stack Web Developer of Bangladesh and abroad and grow rapidly with
                                increasing responsibilities.</p>

                            {{-- <button class="btn btn-outline-light cvButton">Download CV</button> --}}

                        </div>
                    </div>
                </div>

            </div>
        </div>







        <!-- service Section Start -->


        <div class="serviceSectionContainer" id="serviceSectionForMenuId">
            <div class="serviceSectionStart">
                <div class="serviceSectionHeading">
                    <h3 class="HeadingStyleAll text-decoration-underline">Education Background</h3>

                </div>

                <div class="row eduCationInfo">

                    <div class="col-lg-5 col-sm-12">

                        <div class="card myEduCard">
                            <div class="card-header">
                                <h4><span><svg xmlns="http://www.w3.org/2000/svg" width="29" height="29"
                                            fill="currentColor" class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z" />
                                            <path
                                                d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z" />
                                        </svg></span> &nbsp; BACHELOR OF SCIENCE (B.SC)</h4>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">American International
                                    University-Bangladesh (AIUB)</h5>
                                <h6 class="card-title">Bachelor of Science in Computer
                                    Science & Engineering</h6>
                                <p class="card-text">
                                <ul class="list-group">
                                    <li class="list-group-item">Location: Dhaka</li>
                                    <li class="list-group-item">Duration: 4 Year(2018-2022)
                                    </li>
                                    <li class="list-group-item">Year of the Graduation: 2022
                                    </li>
                                </ul>
                                </p>
                                <div class="websiteLinkDiv">
									<a href="https://www.aiub.edu/" class="websiteLinkPara" target="_blank">Website
                                    link</a>
								</div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-5 col-sm-12">

                        <div class="card myEduCard">
                            <div class="card-header">
                                <h4><span><svg xmlns="http://www.w3.org/2000/svg" width="29" height="29"
                                            fill="currentColor" class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z" />
                                            <path
                                                d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z" />
                                        </svg></span> &nbsp;Professional Web Development</h4>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Creative It Institute</h5>
								
                                <h6 class="card-title">Web Development</h6>
                                <p class="card-text">
                                <ul class="list-group">
                                    <li class="list-group-item">Location: Dhaka</li>
                                    <li class="list-group-item">Duration: 6 Month
                                    </li>
                                    <li class="list-group-item">Year Of Completed : 2023</li>
                                </ul>
                                </p>
								<div class="websiteLinkDiv mt-5">
                                <a href="https://www.creativeitinstitute.com/" class="websiteLinkPara"
                                    target="_blank">Website link</a>
								</div>
                            </div>
                        </div>



                    </div>

                    <div class="col-lg-5 col-sm-12 mt-5">

                        <div class="card myEduCard">
                            <div class="card-header">
                                <h4><span><svg xmlns="http://www.w3.org/2000/svg" width="29" height="29"
                                            fill="currentColor" class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z" />
                                            <path
                                                d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z" />
                                        </svg></span> &nbsp;Higher Secondary Certificate (HSC)</h4>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">BAF Shaheen School & College,
                                    Chattogram</h5>
                                <h6 class="card-title">Science</h6>
                                <p class="card-text">
                                <ul class="list-group">
                                    <li class="list-group-item">Location: Chittagong</li>
                                    <li class="list-group-item">Duration: 2 Year(2015-2017)
                                    </li>
                                    <li class="list-group-item">Year of the passed:2017</li>
                                </ul>
                                </p>
								<div class="websiteLinkDiv">
                                <a href="https://bafsc.edu.bd/" class="websiteLinkPara" target="_blank">Website
                                    link</a>
								</div>
                            </div>
                        </div>



                    </div>

                    <div class="col-lg-5 col-sm-12 mt-5 ">

                        <div class="card myEduCard">
                            <div class="card-header">
                                <h4><span><svg xmlns="http://www.w3.org/2000/svg" width="29" height="29"
                                            fill="currentColor" class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z" />
                                            <path
                                                d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z" />
                                        </svg></span> &nbsp;Secondary School Certificate (SSC)</h4>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Chattogram Collegiate School and
                                    College</h5>
                                <h6 class="card-title">Science</h6>
                                <p class="card-text">
                                <ul class="list-group">
                                    <li class="list-group-item">Location: Chittagong</li>
                                    <li class="list-group-item">Duration: 2 Year(2013-2015)
                                    </li>
                                    <li class="list-group-item">Year of the passed:2015</li>
                                </ul>
                                </p>
								<div class="websiteLinkDiv">
                                <a href="https://ctgcs.edu.bd/" class="websiteLinkPara" target="_blank">Website
                                    link</a>
								</div>
                            </div>
                        </div>

                    </div>

                </div>





            </div>
        </div>



        <!-- Skills Section Start -->

        <div class="skillsSectionContainer" id="skillsSectionContainerId">
            <div class="skillsSectionStart">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 skillsSecLeft">
                        <div class="skillsHeadingDiv">
                            <h3 class="HeadingStyleAll">Skills</h3>
                            <h3 class="HeadingStyleAll">& Educational Background</h3>
                        </div>

                        <div class="skillsParaHeadingDiv">
                            <p class="skillsParaHeading">I have the following programming language skills and web
                                developer skills that will help me to have a good attractive responsive website and do
                                the rest. </p>
                        </div>

                        <div class="SkillswrittingStart">
                            <div class="MyskillsHeading">
                                <h2 class="skillsIconHeadingAfter"><span class="skillsIconHeading rounded-circle"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="34" height="34"
                                            fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                            <path
                                                d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                            <path
                                                d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                                        </svg></span>&nbsp &nbsp Technical Skills</h2>
                            </div>

                            <div class="mySkillsIntro">
                                <p class="mySkillsIntropara">In order to present any work well, it is important to have
                                    the skills of that work. The more skill you have, the more perfect the work will be.
                                    I am always trying to improve my skills on all the following topics.</p>
                            </div>

                            <div class="skillsProgress">




                                <div class="d-flex flex-row bd-highlight mt-4">
                                    <div
                                        class=" bd-highlight skillsLeftHeadingDiv skillsLeftHeadingDiv1 rounded-circle">
                                    </div>
                                    <div class=" bd-highlight skillsLeftHeading skillsLeftHeading1">
                                        <h6>HTML5 & CSS3</h6>

                                    </div>

                                </div>



                                <div class="ProgressBar">
                                    <div class="progress bg-dark mt-3 myProgressBar" id="progressBar1">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                            role="progressbar" style="width: 75%;" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100">75%</div>
                                    </div>

                                </div>


                                <div class="d-flex flex-row bd-highlight mt-4">
                                    <div class=" bd-highlight skillsLeftHeadingDiv rounded-circle"></div>
                                    <div class=" bd-highlight skillsLeftHeading">
                                        <h6>Bootstrap5</h6>

                                    </div>

                                </div>



                                <div class="ProgressBar">
                                    <div class="progress bg-dark mt-3 myProgressBar" id="progressBar2">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                            role="progressbar" style="width: 80%;" aria-valuenow="80"
                                            aria-valuemin="0" aria-valuemax="100">80%</div>
                                    </div>

                                </div>


                                <div class="d-flex flex-row bd-highlight mt-4">
                                    <div class=" bd-highlight skillsLeftHeadingDiv rounded-circle"></div>
                                    <div class=" bd-highlight skillsLeftHeading">
                                        <h6>JavaScript & jquery </h6>

                                    </div>

                                </div>



                                <div class="ProgressBar">
                                    <div class="progress bg-dark mt-3 myProgressBar" id="progressBar3">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                            role="progressbar" style="width: 70%;" aria-valuenow="70"
                                            aria-valuemin="0" aria-valuemax="100">70%</div>
                                    </div>

                                </div>


                                <div class="d-flex flex-row bd-highlight mt-4">
                                    <div class=" bd-highlight skillsLeftHeadingDiv rounded-circle"></div>
                                    <div class=" bd-highlight skillsLeftHeading">
                                        <h6>MySql</h6>

                                    </div>

                                </div>



                                <div class="ProgressBar">
                                    <div class="progress bg-dark mt-3 myProgressBar" id="progressBar4">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                            role="progressbar" style="width: 70%;" aria-valuenow="70"
                                            aria-valuemin="0" aria-valuemax="100">70%</div>
                                    </div>

                                </div>

                                <div class="d-flex flex-row bd-highlight mt-4">
                                    <div class=" bd-highlight skillsLeftHeadingDiv rounded-circle"></div>
                                    <div class=" bd-highlight skillsLeftHeading">
                                        <h6>Php & Laravel</h6>

                                    </div>

                                </div>



                                <div class="ProgressBar">
                                    <div class="progress bg-dark mt-3 myProgressBar" id="progressBar5">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                            role="progressbar" style="width: 75%;" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100">75%</div>
                                    </div>

                                </div>






                                <div class="d-flex flex-row bd-highlight mt-4">
                                    <div class=" bd-highlight skillsLeftHeadingDiv rounded-circle"></div>
                                    <div class=" bd-highlight skillsLeftHeading">
                                        <h6>Java/C#/C++</h6>

                                    </div>

                                </div>



                                <div class="ProgressBar">
                                    <div class="progress bg-dark mt-3 myProgressBar" id="progressBar6">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                            role="progressbar" style="width: 78%;" aria-valuenow="78"
                                            aria-valuemin="0" aria-valuemax="100">78%</div>
                                    </div>

                                </div>









                            </div>
                        </div>





                    </div>





                    <div class="col-lg-6 col-sm-12 skillsSectionRight mt-lg-4 mt-sm-5 mb-sm-5 mb-lg-0">
                        <div class="skillsSectionRightStart">

                            <div class="SkillsRightHeadingDiv mb-3 ms-5 ms-sm-0">
                                <div class="skillsRightHeading">
                                    <h3 class="HeadingStyleAll">Professional Skills</h3>
                                </div>
                            </div>
                            <div class="row mt-5 designForSmallDevices">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="d-flex flex-column bd-highlight communicationDiv">
                                        <div class="bd-highlight CommunicationStyleDiv">


                                            <div class="skillsCircleAnim">
                                                <div class="outerCircleAnim">
                                                    <div class="innerCircleAnim">
                                                        <div id="numberCircleAnimCommunication">

                                                        </div>
                                                    </div>
                                                </div>

                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px"
                                                    height="160px" class="skillsCircleSvg">
                                                    <defs>
                                                        <linearGradient id="GradientColor">
                                                            <stop offset="0%" stop-color="#e91e63" />
                                                            <stop offset="100%" stop-color="#673ab7" />
                                                        </linearGradient>
                                                    </defs>
                                                    <circle cx="80" cy="80" r="70"
                                                        stroke-linecap="round" class="MyCircleSkills" />
                                                </svg>


                                            </div>




                                        </div>

                                        <div class="bd-highlight AllCircleBottomHeading1">Communication</div>

                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="d-flex flex-column bd-highlight communicationDiv">
                                        <div class="bd-highlight CommunicationStyleDiv">


                                            <div class="skillsCircleAnim">
                                                <div class="outerCircleAnim">
                                                    <div class="innerCircleAnim">
                                                        <div id="numberCircleAnimTeamWork">

                                                        </div>
                                                    </div>
                                                </div>

                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px"
                                                    height="160px" class="skillsCircleSvg">
                                                    <defs>
                                                        <linearGradient id="GradientColor">
                                                            <stop offset="0%" stop-color="#e91e63" />
                                                            <stop offset="100%" stop-color="#673ab7" />
                                                        </linearGradient>
                                                    </defs>
                                                    <circle cx="80" cy="80" r="70"
                                                        stroke-linecap="round" class="MyCircleSkillsteamWork" />
                                                </svg>


                                            </div>




                                        </div>

                                        <div class="bd-highlight AllCircleBottomHeading2 ">Team Work</div>

                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="d-flex flex-column bd-highlight communicationDiv">
                                        <div class="bd-highlight CommunicationStyleDiv">


                                            <div class="skillsCircleAnim">
                                                <div class="outerCircleAnim">
                                                    <div class="innerCircleAnim">
                                                        <div id="numberCircleAnimProject">

                                                        </div>
                                                    </div>
                                                </div>

                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px"
                                                    height="160px" class="skillsCircleSvg">
                                                    <defs>
                                                        <linearGradient id="GradientColor">
                                                            <stop offset="0%" stop-color="#e91e63" />
                                                            <stop offset="100%" stop-color="#673ab7" />
                                                        </linearGradient>
                                                    </defs>
                                                    <circle cx="80" cy="80" r="70"
                                                        stroke-linecap="round" class="MyCircleSkillsProject" />
                                                </svg>


                                            </div>




                                        </div>

                                        <div class="bd-highlight AllCircleBottomHeading3">Project Management</div>

                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="d-flex flex-column bd-highlight communicationDiv">
                                        <div class="bd-highlight CommunicationStyleDiv">


                                            <div class="skillsCircleAnim">
                                                <div class="outerCircleAnim">
                                                    <div class="innerCircleAnim">
                                                        <div id="numberCircleAnimCreativity">

                                                        </div>
                                                    </div>
                                                </div>

                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px"
                                                    height="160px" class="skillsCircleSvg">
                                                    <defs>
                                                        <linearGradient id="GradientColor">
                                                            <stop offset="0%" stop-color="#e91e63" />
                                                            <stop offset="100%" stop-color="#673ab7" />
                                                        </linearGradient>
                                                    </defs>
                                                    <circle cx="80" cy="80" r="70"
                                                        stroke-linecap="round" class="MyCircleSkillsCreativity" />
                                                </svg>


                                            </div>




                                        </div>

                                        <div class="bd-highlight AllCircleBottomHeading4">Creativity</div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>




                </div>
            </div>
        </div>



        <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>Portfolio Showcase</span>
                            <h2 class="recentWorkHeading">My Recent Best Works</h2>
                        </div>
                    </div>
                </div>
                <div class="row">



                    @foreach ($AllrecentData as $recentData)
                        <div class="col-lg-4 col-md-6 pitem myRecentWorkDiv">
                            <div class="speaker-box">
                                <div class="speaker-thumb">
                                    <img src="{{ asset('uploads/recentWork') }}/{{ $recentData->recentImage }}"
                                        alt="img">
                                </div>
                                <div class="speaker-overlay recentViewDiv">
                                    <span>
                                        <h6 class="recentTitle">{{ $recentData->recentTitle }}</h6>
                                    </span>
                                    <h4 class="recentSubTitle">{{ $recentData->recentSubTitle }}</h4>
                                    <a href="{{ route('singleRecentWorkPage', $recentData->id) }}"
                                        class="arrow-btn">More information
                                        <span></span></a>
                                    <a href="{{ route('singleRecentWorkPage', $recentData->id) }}"
                                        class="arrow-btn d-block mt-3">View Live
                                        <span></span></a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>










        <div class="certificationSectionContainer" id="certificationSectionContainerId">
            <div class="certificationSectionStart">

                <div class="certificationHeadingDiv">
                    <h1 class="certificationHeading HeadingStyleAll">Certification</h1>
                </div>


                <div class="row">
                    <div class="col-lg-10 col-sm-12 MyCertication">


                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                                    aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                                    aria-label="Slide 5"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"
                                    aria-label="Slide 6"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6"
                                    aria-label="Slide 7"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7"
                                    aria-label="Slide 8"></button>

                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('dynamic_webpage/img/cer6.png') }}"
                                        class="d-block w-100 myCerticateImage" alt="">
                                    <div class="carousel-caption ">

                                        <a href="https://coursera.org/share/37ee17559f35b5b03a25da442228de0c"
                                            class="btn btn-primary text-decoration-none text-white"
                                            target="_blank">Visit</a>

                                    </div>
                                </div>


                                <div class="carousel-item ">
                                    <img src="{{ asset('dynamic_webpage/img/cer2.png') }}"
                                        class="d-block w-100 myCerticateImage" alt="">
                                    <div class="carousel-caption">

                                        <a href="https://coursera.org/share/f839f0de9850f1d6198610e9b040c7cb"
                                            class="btn btn-primary text-decoration-none text-white"
                                            target="_blank">Visit</a>

                                    </div>
                                </div>


                                <div class="carousel-item ">
                                    <img src="{{ asset('dynamic_webpage/img/cer4.png') }}"
                                        class="d-block w-100 myCerticateImage" alt="">
                                    <div class="carousel-caption">

                                        <a href="https://coursera.org/share/f1430c35689771b0b1fb2b90cc96a063"
                                            class="btn btn-primary text-decoration-none text-white"
                                            target="_blank">Visit</a>

                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="{{ asset('dynamic_webpage/img/cer5.png') }}"
                                        class="d-block w-100 myCerticateImage" alt="">
                                    <div class="carousel-caption">

                                        <a href="https://coursera.org/share/0f83d143ab7fda856b2203e98a355576"
                                            class="btn btn-primary text-decoration-none text-white"
                                            target="_blank">Visit</a>

                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="{{ asset('dynamic_webpage/img/cer3.png') }}"
                                        class="d-block w-100 myCerticateImage" alt="">
                                    <div class="carousel-caption">

                                        <a href="https://coursera.org/share/0f83d143ab7fda856b2203e98a355576"
                                            class="btn btn-primary text-decoration-none text-white"
                                            target="_blank">Visit</a>

                                    </div>
                                </div>


                                <div class="carousel-item ">
                                    <img src="{{ asset('dynamic_webpage/img/cer1.png') }}"
                                        class="d-block w-100 myCerticateImage" alt="">
                                    <div class="carousel-caption ">

                                        <a href="https://10minuteschool.com/certificate/6206335b2de0b"
                                            class="btn btn-primary text-decoration-none text-white"
                                            target="_blank">Visit</a>

                                    </div>
                                </div>


                                <div class="carousel-item ">
                                    <img src="{{ asset('dynamic_webpage/img/cer9.png') }}"
                                        class="d-block w-100 myCerticateImage" alt="">
                                    <div class="carousel-caption ">

                                        <a href="https://10minuteschool.com/certificate/6127cb7becca2"
                                            class="btn btn-primary text-decoration-none text-white"
                                            target="_blank">Visit</a>

                                    </div>
                                </div>


                                <div class="carousel-item ">
                                    <img src="{{ asset('dynamic_webpage/img/cer7.png') }}"
                                        class="d-block w-100 myCerticateImage" alt="">
                                    <div class="carousel-caption ">

                                        <a href="https://coursera.org/share/0193f47819a1f7cc35f9da3fef56a920"
                                            class="btn btn-primary text-decoration-none text-white"
                                            target="_blank">Visit</a>

                                    </div>
                                </div>




                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="text-dark" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="35" height="35" fill="currentColor"
                                        class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                    </svg></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="text-dark" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="35" height="35" fill="currentColor"
                                        class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                    </svg></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>











                    </div>
                </div>
            </div>
        </div>








        <div class="contactSectionContainer" id="contactSectionContainerId">
            <div class="contactSectionStart">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="MyContact">
                            <div class="myFormDiv">
                                <h5 class="contactHeading1">Contact</h5>
                                <h3 class="contactHeading2">Get in touch</h3>
                                <p class="contactPara1">If you think I would be good for your job, please contact me. I
                                    am waiting for you <svg xmlns="http://www.w3.org/2000/svg" width="19"
                                        height="19" fill="currentColor" class="bi bi-emoji-smile"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path
                                            d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z" />
                                    </svg></p>

                                <form action="" class="myForm">
                                    <div class="d-flex flex-row">
                                        <div class=" bd-highlight">

                                            <label for="name" class="form-label label1 ">Name</label>
                                            <input type="text" class="form-control myInput input1 w-75"
                                                placeholder="Enter the name">

                                        </div>
                                        <div class="bd-highlight">
                                            <label for="email" class="form-label label2">Email</label>
                                            <input type="email" class="form-control myInput input2 w-100"
                                                placeholder="Enter The valid email">

                                        </div>

                                    </div>

                                    <div class="address mt-3">
                                        <label for="address" class="form-label label1">Address</label>
                                        <input type="text" class="form-control myInput w-50"
                                            placeholder="Enter your present address">
                                    </div>

                                    <div class="message mt-3">
                                        <label for="msg" class="form-label label1">Message</label>
                                        <textarea rows="3" cols="80" class="d-block form-control myInput w-50"></textarea>
                                    </div>

                                </form>


                                <div class="sendMessage">
                                    <button class="btn rounded-pill btn-light">
                                        <div class="d-flex flex-row bd-highlight">
                                            <div class="p-2 p-sm-2 bd-highlight rounded-circle mailIcon">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" fill="currentColor" class="bi bi-envelope"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                                    </svg></span>
                                            </div>
                                            <div class="p-2  p-sm-1 bd-highlight text-dark mt-lg-2 mt-sm-2">
                                                <h6>Send Message</h6>
                                            </div>

                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>








        <!-- Footer Section Start -->

        <footer>
            <div class="footerSectionContainer">
                <div class="footerSectionStart">
                    <div class="d-flex justify-content-around bd-highlight">
                        <div class="p-2 bd-highlight">&copy 2022 Pappu saha.All Right Reserves</div>
                        <div class="p-2 bd-highlight"><img src="{{ asset('dynamic_webpage/img/logo2.JPG') }}"
                                alt="" width="85px" height="35px">
                            <a target="_blank" href="https://pappusaha.dev/Portfolio">pappusaha.dev</a>
                        </div>
                        <div class="p-2 bd-highlight">Made by <span class="text-danger">Pappu Saha</span></div>
                    </div>
                </div>
            </div>
        </footer>










































    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="{{ asset('dynamic_webpage/js/index.js') }}"></script>
    <script src="https://kit.fontawesome.com/c6ddf9ac45.js" crossorigin="anonymous"></script>

</body>

</html>
