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
	<link rel="stylesheet" href="{{asset("dynamic_webpage/css/style.css")}}">
	<link rel="icon" href="{{asset("dynamic_webpage/img/pappuback2.jpg")}}">
</head>

<body>

	<div class="container-fluid">
		<!-- header section start -->
		<header class="stickyMenu">
			<div class="menuSectionContainer">
				<div class="menuSectionContainerStart">
					<nav class="navbar navbar-expand-lg">
						<div class="container-fluid">
							<a class="navbar-brand headerLogo" href="#"><img src="{{asset("dynamic_webpage/img/logo2.JPG")}}" alt="" width="200px"
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
										<a class="nav-link active" aria-current="page" href="{{route("clientPage")}}">Home</a>
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
									<li class="nav-item">
										<a class="nav-link" href="#contactSectionContainerId">Contact</a>
									</li>

									<li class="nav-item ContactNowButton">
										<a class="nav-link btn btn-primary  text-white"
											href="#contactSectionContainerId">Contact
											Now</a>
									</li>

								</ul>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</header>

        <body>
            @yield("content")
       


        <footer>
			<div class="footerSectionContainer">
				<div class="footerSectionStart">
					<div class="d-flex justify-content-around bd-highlight">
						<div class="p-2 bd-highlight">&copy 2022 Pappu saha.All Right Reserves</div>
						<div class="p-2 bd-highlight"><img src="img/logo2.JPG" alt="" width="85px" height="35px">
							<a target="_blank" href="https://pappusaha.dev/Portfolio">pappusaha.dev</a></div>
						<div class="p-2 bd-highlight">Made by <span class="text-danger">Pappu Saha</span></div>
					</div>
				</div>
			</div>
		</footer>










































	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>

	<script src="{{asset("dynamic_webpage/js/index.js")}}"></script>
	<script src="https://kit.fontawesome.com/c6ddf9ac45.js" crossorigin="anonymous"></script>


</body>

</html>