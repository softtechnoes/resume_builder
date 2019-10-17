<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from beshley.com/matecard/theme_colors/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Sep 2019 08:57:07 GMT -->
<head>
	
	<!-- Basic -->
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>@yield('title')</title>
	<meta name="description" content="mateCard - Materialize vCard/CV/Resume HTML Template" />
	<meta name="keywords" content="vcard, responsive, resume, jquery, css3, bootstrap, Material CV, portfolio" />
	<meta name="author" content="beshleyua" />
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	
	<!-- Load Fonts -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	<!-- CSS -->
	<link rel="stylesheet" href="user/css/materialize.css" />
	<link rel="stylesheet" href="user/css/layout.css" />
	<link rel="stylesheet" href="user/css/magnific-popup.css" />
	<link rel="stylesheet" href="user/css/animate.css" />
	<link rel="stylesheet" href="user/css/ionicons.css" />



	
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="user/images/favicons/favicon.ico">
	
</head>

<body>
	
	<!-- Page -->
	<div class="page" id="home-section">

		<!-- Preloader -->
		<div class="preloader">
			<div class="centrize full-width">
				<div class="vertical-center">
					<div class="preloader-wrapper spinner big active">
						<div class="spinner-layer spinner-blue">
							<div class="circle-clipper left">
								<div class="circle"></div>
							</div>
							<div class="gap-patch">
								<div class="circle"></div>
							</div>
							<div class="circle-clipper right">
								<div class="circle"></div>
							</div>
						</div>
						<div class="spinner-layer spinner-red">
							<div class="circle-clipper left">
								<div class="circle"></div>
							</div>
							<div class="gap-patch">
								<div class="circle"></div>
							</div>
							<div class="circle-clipper right">
								<div class="circle"></div>
							</div>
						</div>
						<div class="spinner-layer spinner-green">
							<div class="circle-clipper left">
								<div class="circle"></div>
							</div>
							<div class="gap-patch">
								<div class="circle"></div>
							</div>
							<div class="circle-clipper right">
								<div class="circle"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header -->
		<header>

			<!-- SideNav -->
			<ul class="side-nav fixed" id="nav-mobile">
				<li class="curent">
					<div class="userView">
	  					<div class="background">
	  						<img src="user/images/slide-bg.jpg" alt="" />
	  					</div>
	  					<img class="avatar circle" src="user/images/man.png" alt="" />
	  					<div class="white-text name">{{ Auth::user()->name }}</div>
	  					<div class="white-text email">{{ Auth::user()->email }}</div>
	  					<div class="social">
							<a href="{{ Auth::user()->facebook_url }}" target="blank"><i class="ion ion-social-facebook"></i></a>
							<a href="{{ Auth::user()->instagram_url }}" target="blank"><i class="ion ion-social-instagram"></i></a>
							<a href="{{ Auth::user()->twitter_url }}" target="blank"><i class="ion ion-social-twitter"></i></a>
							<a href="{{ Auth::user()->linkedin_url }}" target="blank"><i class="ion ion-social-linkedin"></i></a>
						</div>
					</div>
				</li>
				<li class="active">
					<a href="#started-section" class="waves-effect waves-light">
						<i class="material-icons">home</i>Home
					</a>
				</li>
				<li>
					<a href="#started-section" class="waves-effect waves-light">
						<i class="material-icons">home</i>Comments
					</a>
				</li>
				<li>
					<a href="#about-section" class="waves-effect waves-light">
						<i class="material-icons">person_pin</i>About
					</a>
				</li>
				<li>
					<a href="#experience-section" class="waves-effect waves-light">
						<i class="material-icons">assignment</i>Resume
					</a>
				</li>
				<li>
					<a href="#service-section" class="waves-effect waves-light">
						<i class="material-icons">settings</i>Services
					</a>
				</li>
				<li>
					<a href="#works-section" class=" waves-effect waves-light">
						<i class="material-icons">work</i>Portfolio
					</a>
				</li>
				<li>
					<a href="#pricing-section" class="waves-effect waves-light">
						<i class="material-icons">view_carousel</i>Pricing
					</a>
				</li>
				<li>
					<a href="#blog-section" class="waves-effect waves-light">
						<i class="material-icons">library_books</i>Blog
					</a>
				</li>
				<li>
					<a href="#contact-section" class="waves-effect waves-light">
						<i class="material-icons">phone</i>Contact
					</a>
                </li>
                <li>
					<a href="#contact-section" class="waves-effect waves-light">
						<i class="ion-log-out">log-out</i>Logout
					</a>
				</li>
			</ul>

			<!-- Top menu -->
			<nav class="top-menu">
				<div class="nav-wrapper">
					<ul>
						<li>
							<a href="#" data-activates="nav-mobile" class="menu-btn"><i class="material-icons">menu</i></a>
						</li>
						<!--<li class="right">
							<a href="#"><i class="material-icons">arrow_back</i></a>
						</li>-->
					</ul>
				</div>
			</nav>

		</header>

		@yield('content')

	</div>
	
	<!-- jQuery Scripts -->
	<script src="user/js/jquery.min.js"></script>
	<script src="user/js/materialize.js"></script>
	<script src="user/js/jquery.validate.js"></script>
	<script src="user/js/magnific-popup.js"></script>

	<!-- Google map api -->
	<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
	
	<!-- Main Scripts -->
	<script src="user/js/main.js"></script>
	
</body>

<!-- Mirrored from beshley.com/matecard/theme_colors/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Sep 2019 08:57:17 GMT -->
</html>