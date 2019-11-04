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
	{{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> --}}
	
	<!-- CSS -->
	{{-- <link rel="stylesheet" href="user/css/materialize.css" />
	<link rel="stylesheet" href="user/css/layout.css" />
	<link rel="stylesheet" href="user/css/magnific-popup.css" />
	<link rel="stylesheet" href="user/css/animate.css" />
	<link rel="stylesheet" href="user/css/ionicons.css" />

	<link href="plugins/summernote/summernote.css" rel="stylesheet"> --}}
	{{-- <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>  --}}
	{{-- <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>  --}}
	{{-- <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet" defer> --}}
	{{-- <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js" defer></script> --}}
	{{-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> --}}
	
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	{{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="assets/css/paper-kit.mindc68.css?v=2.3.0" rel="stylesheet" /> --}}
	{{-- <link rel="stylesheet" href="user/css/materialize.css" />
	<link rel="stylesheet" href="user/css/layout.css" /> --}}
	
	<!-- Favicon -->
	{{-- <link rel="shortcut icon" href="user/images/favicons/favicon.ico"> --}}

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link href="../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<!-- CSS Files -->
	{{-- <link href="assets/css/bootstrap.min.css" rel="stylesheet" /> --}}
	<link href="assets/css/paper-kit.mindc68.css?v=2.3.0" rel="stylesheet" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	{{-- <link href="assets/demo/demo.css" rel="stylesheet" /> --}}

	
	
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
		{{-- <header>

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

		</header> --}}

		@yield('content')

	</div>
	
	<!-- jQuery Scripts -->
	{{-- <script src="user/js/jquery.min.js"></script>
	<script src="user/js/materialize.js"></script>
	<script src="user/js/jquery.validate.js"></script>
	<script src="user/js/magnific-popup.js"></script> --}}

	<!-- Google map api -->
	{{-- <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script> --}}
	
	<!-- Main Scripts -->
	{{-- <script src="user/js/main.js"></script> --}}
	<!-- Animate Scripts -->

	{{-- <script src="assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script> --}}
	
	<!--   Core JS Files   -->
	<script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
	<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
	<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
	<script src="assets/js/plugins/bootstrap-switch.js"></script>
	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
	<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
	<script src="assets/js/plugins/moment.min.js"></script>
	<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
	<script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
	<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
	<script src="assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
	<!--	Plugin for Datetimepicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
	<script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
	<!--  Vertical nav - dots -->
	<!--  Photoswipe files -->
	<script src="assets/js/plugins/photo_swipe/photoswipe.min.js"></script>
	<script src="assets/js/plugins/photo_swipe/photoswipe-ui-default.min.js"></script>
	<script src="assets/js/plugins/photo_swipe/init-gallery.js"></script>
	<!--  for Jasny fileupload -->
	<script src="assets/js/plugins/jasny-bootstrap.min.js"></script>
	<!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
	<script src="assets/js/paper-kit.mindc68.js?v=2.3.0" type="text/javascript"></script>
	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
	<!--  Plugin for presentation page - isometric cards  -->
	<script src="assets/js/plugins/presentation-page/main.js"></script>
	<script>
	  $(document).ready(function() {
  
		if ($("#datetimepicker").length != 0) {
		  $('#datetimepicker').datetimepicker({
			icons: {
			  time: "fa fa-clock-o",
			  date: "fa fa-calendar",
			  up: "fa fa-chevron-up",
			  down: "fa fa-chevron-down",
			  previous: 'fa fa-chevron-left',
			  next: 'fa fa-chevron-right',
			  today: 'fa fa-screenshot',
			  clear: 'fa fa-trash',
			  close: 'fa fa-remove'
			}
		  });
		}
	  });
  
	  function scrollToDownload() {
  
		if ($('.section-download').length != 0) {
		  $("html, body").animate({
			scrollTop: $('.section-download').offset().top
		  }, 1000);
		}
	  }
	</script>
	<!-- Sharrre libray -->
	<script src="assets/demo/jquery.sharrre.js"></script>
	<script>
	  $(document).ready(function() {
  
		// Facebook Pixel Code Don't Delete
		! function(f, b, e, v, n, t, s) {
		  if (f.fbq) return;
		  n = f.fbq = function() {
			n.callMethod ?
			  n.callMethod.apply(n, arguments) : n.queue.push(arguments)
		  };
		  if (!f._fbq) f._fbq = n;
		  n.push = n;
		  n.loaded = !0;
		  n.version = '2.0';
		  n.queue = [];
		  t = b.createElement(e);
		  t.async = !0;
		  t.src = v;
		  s = b.getElementsByTagName(e)[0];
		  s.parentNode.insertBefore(t, s)
		}(window,
		  document, 'script', '../../connect.facebook.net/en_US/fbevents.js');
  
		try {
		  fbq('init', '111649226022273');
		  fbq('track', "PageView");
  
		} catch (err) {
		  console.log('Facebook Track Error:', err);
		}
  
	  });
	</script>
	<noscript>
	  <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
	</noscript>
	<script>
	  $(document).ready(function() {
  
		$sidebar = $('.sidebar');
		$sidebar_img_container = $sidebar.find('.sidebar-background');
  
		$full_page = $('.full-page');
  
		$sidebar_responsive = $('body > .navbar-collapse');
		sidebar_mini_active = true;
  
		window_width = $(window).width();
  
		fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();
  
		// if( window_width > 767 && fixed_plugin_open == 'Dashboard' ){
		//     if($('.fixed-plugin .dropdown').hasClass('show-dropdown')){
		//         $('.fixed-plugin .dropdown').addClass('show');
		//     }
		//
		// }
  
		$('.fixed-plugin a').click(function(event) {
		  // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
		  if ($(this).hasClass('switch-trigger')) {
			if (event.stopPropagation) {
			  event.stopPropagation();
			} else if (window.event) {
			  window.event.cancelBubble = true;
			}
		  }
		});
  
		$('.fixed-plugin .active-color span').click(function() {
		  $full_page_background = $('.full-page-background');
  
		  $(this).siblings().removeClass('active');
		  $(this).addClass('active');
  
		  var new_color = $(this).data('color');
  
		  if ($sidebar.length != 0) {
			$sidebar.attr('data-active-color', new_color);
		  }
  
		  if ($full_page.length != 0) {
			$full_page.attr('data-active-color', new_color);
		  }
  
		  if ($sidebar_responsive.length != 0) {
			$sidebar_responsive.attr('data-active-color', new_color);
		  }
		});
  
		$('.fixed-plugin .background-color span').click(function() {
		  $(this).siblings().removeClass('active');
		  $(this).addClass('active');
  
		  var new_color = $(this).data('color');
  
		  if ($sidebar.length != 0) {
			$sidebar.attr('data-color', new_color);
		  }
  
		  if ($full_page.length != 0) {
			$full_page.attr('filter-color', new_color);
		  }
  
		  if ($sidebar_responsive.length != 0) {
			$sidebar_responsive.attr('data-color', new_color);
		  }
		});
  
		$('.fixed-plugin .img-holder').click(function() {
		  $full_page_background = $('.full-page-background');
  
		  $(this).parent('li').siblings().removeClass('active');
		  $(this).parent('li').addClass('active');
  
  
		  var new_image = $(this).find("img").attr('src');
  
		  if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
			$sidebar_img_container.fadeOut('fast', function() {
			  $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
			  $sidebar_img_container.fadeIn('fast');
			});
		  }
  
		  if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
			var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
  
			$full_page_background.fadeOut('fast', function() {
			  $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
			  $full_page_background.fadeIn('fast');
			});
		  }
  
		  if ($('.switch-sidebar-image input:checked').length == 0) {
			var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
			var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
  
			$sidebar_img_container.css('background-image', 'url("' + new_image + '")');
			$full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
		  }
  
		  if ($sidebar_responsive.length != 0) {
			$sidebar_responsive.css('background-image', 'url("' + new_image + '")');
		  }
		});
  
		$('.switch-sidebar-image input').on("switchChange.bootstrapSwitch", function() {
		  $full_page_background = $('.full-page-background');
  
		  $input = $(this);
  
		  if ($input.is(':checked')) {
			if ($sidebar_img_container.length != 0) {
			  $sidebar_img_container.fadeIn('fast');
			  $sidebar.attr('data-image', '#');
			}
  
			if ($full_page_background.length != 0) {
			  $full_page_background.fadeIn('fast');
			  $full_page.attr('data-image', '#');
			}
  
			background_image = true;
		  } else {
			if ($sidebar_img_container.length != 0) {
			  $sidebar.removeAttr('data-image');
			  $sidebar_img_container.fadeOut('fast');
			}
  
			if ($full_page_background.length != 0) {
			  $full_page.removeAttr('data-image', '#');
			  $full_page_background.fadeOut('fast');
			}
  
			background_image = false;
		  }
		});
  
  
		$('.switch-mini input').on("switchChange.bootstrapSwitch", function() {
		  $body = $('body');
  
		  $input = $(this);
  
		  if (paperDashboard.misc.sidebar_mini_active == true) {
			$('body').removeClass('sidebar-mini');
			paperDashboard.misc.sidebar_mini_active = false;
  
			$('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();
  
		  } else {
  
			$('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');
  
			setTimeout(function() {
			  $('body').addClass('sidebar-mini');
  
			  paperDashboard.misc.sidebar_mini_active = true;
			}, 300);
		  }
  
		  // we simulate the window Resize so the charts will get updated in realtime.
		  var simulateWindowResize = setInterval(function() {
			window.dispatchEvent(new Event('resize'));
		  }, 180);
  
		  // we stop the simulation of Window Resize after the animations are completed
		  setTimeout(function() {
			clearInterval(simulateWindowResize);
		  }, 1000);
  
		});
  
	  });
	</script>

</body>

<!-- Mirrored from beshley.com/matecard/theme_colors/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Sep 2019 08:57:17 GMT -->
</html>