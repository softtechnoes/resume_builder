<!--

 =========================================================
  Paper Kit 2 PRO - v2.3.0
 =========================================================

  Product Page: https://www.creative-tim.com/product/paper-kit-2-pro
  Copyright 2019 Creative Tim (https://www.creative-tim.com)

  Coded by Creative Tim

 =========================================================

  The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demos.creative-tim.com/paper-kit-2-pro/presentation.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Oct 2019 06:44:33 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/paper-kit-2-pro" />
  <!--  Social tags      -->
  <meta name="keywords" content="bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, paper, paper kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, premium bootstrap 4 ui kit, premium template, bootstrap 4 template">
  <meta name="description" content="Paper Kit 2 Pro is a premium Bootstrap 4 kit provided by Invision and Creative Tim. It is a beautiful cross-platform UI kit featuring over 1000 components, 34 sections and 11 example pages.">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Paper Kit 2 Pro by Creative Tim">
  <meta itemprop="description" content="Paper Kit 2 Pro is a premium Bootstrap 4 kit provided by Invision and Creative Tim. It is a beautiful cross-platform UI kit featuring over 1000 components, 34 sections and 11 example pages.">
  <meta itemprop="image" content="../../raw.githubusercontent.com/creativetimofficial/public-assets/master/paper-kit-2-pro-html/opt_pk2p_thumbnail.jpg">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Paper Kit 2 Pro by Creative Tim">
  <meta name="twitter:description" content="Paper Kit 2 Pro is a premium Bootstrap 4 kit provided by Invision and Creative Tim. It is a beautiful cross-platform UI kit featuring over 1000 components, 34 sections and 11 example pages.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="../../raw.githubusercontent.com/creativetimofficial/public-assets/master/paper-kit-2-pro-html/opt_pk2p_thumbnail.jpg">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Paper Kit 2 Pro by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="index.html" />
  <meta property="og:image" content="../../raw.githubusercontent.com/creativetimofficial/public-assets/master/paper-kit-2-pro-html/opt_pk2p_thumbnail.jpg" />
  <meta property="og:description" content="Paper Kit 2 Pro is a premium Bootstrap 4 kit provided by Invision and Creative Tim. It is a beautiful cross-platform UI kit featuring over 1000 components, 34 sections and 11 example pages." />
  <meta property="og:site_name" content="Creative Tim" />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-kit.mindc68.css?v=2.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
  <!-- Extra details for Live View on GitHub Pages -->

 
  {{-- <script language="JavaScript"  src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script> --}}
   <link rel="stylesheet" href="assets/css/materialize.css" />
   <link rel="stylesheet" href="assets/css/layout.css" />
   <link rel="stylesheet" href="assets/css/style.css" />

  {{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> --}}
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <link href="{{asset('plugins/select2-4.0.7/css/custom-select.css')}}" rel="stylesheet" type="text/css" />
  
  {{-- <link href="{{asset('plugins/notify/css/amaran.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('plugins/notify/css/animate.min.css')}}" rel="stylesheet" type="text/css" /> --}}

 {{-- Datepicker js ui --}}
  
  <link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />
  {{-- <script src="https://code.jquery.com/jquery-2.1.4.js"></script> --}}
  <script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
{{-- Notifications --}}
  <script src="plugins/notify/js/jquery.growl.js" type="text/javascript"></script>
  <link href="plugins/notify/css/jquery.growl.css" rel="stylesheet" type="text/css" />
  @stack('css')
</head>

<body class="presentation-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="index.html" rel="tooltip" title="Paper Kit 2 PRO" data-placement="bottom" target="_blank">
         
          <img src="user/images/logo-1.png" width="150" id="logo">
        </a> <!-- Paper Kit 2 Pro -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" data-nav-image="./assets/img/blurred-image-1.jpg" data-color="orange">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
              Components </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-danger">
              <a href="index.html" class="dropdown-item">
                All Components
              </a>
              <a href="presentation.html" class="dropdown-item">
                Presentation
              </a>
              <a href="docs/1.0/getting-started/introduction.html" class="dropdown-item">
                Documentation
              </a>
            </div>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" id="navbarDropdownMenuLink" data-toggle="dropdown">
              Sections
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-danger" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" data-scroll="true" data-id="#headers" href="sections.html#headers">
                <i class="nc-icon nc-tile-56"></i> Headers
              </a>
              <a class="dropdown-item" data-scroll="true" data-id="#features" href="sections.html#features">
                <i class="nc-icon nc-settings"></i> Features
              </a>
              <a class="dropdown-item" data-scroll="true" data-id="#blogs" href="sections.html#blogs">
                <i class="nc-icon nc-bullet-list-67"></i> Blogs
              </a>
              <a class="dropdown-item" data-scroll="true" data-id="#teams" href="sections.html#teams">
                <i class="nc-icon nc-single-02"></i> Teams
              </a>
              <a class="dropdown-item" data-scroll="true" data-id="#projects" href="sections.html#projects">
                <i class="nc-icon nc-calendar-60"></i> Projects
              </a>
              <a class="dropdown-item" data-scroll="true" data-id="#pricing" href="sections.html#pricing">
                <i class="nc-icon nc-money-coins"></i> Pricing
              </a>
              <a class="dropdown-item" data-scroll="true" data-id="#testimonials" href="sections.html#testimonials">
                <i class="nc-icon nc-badge"></i> Testimonials
              </a>
              <a class="dropdown-item" data-scroll="true" data-id="#contact-us" href="sections.html#contactus">
                <i class="nc-icon nc-mobile"></i> Contact Us
              </a>
            </div>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" id="navbarDropdownMenuLink1" data-toggle="dropdown">
              Examples
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-danger" aria-labelledby="navbarDropdownMenuLink1">
              <a class="dropdown-item" href="examples/about-us.html">
                <i class="nc-icon nc-bank"></i> About-us
              </a>
              <a class="dropdown-item" href="examples/add-product.html">
                <i class="nc-icon nc-basket"></i> Add Product
              </a>
              <a class="dropdown-item" href="examples/blog-post.html">
                <i class="nc-icon nc-badge"></i> Blog Post
              </a>
              <a class="dropdown-item" href="examples/blog-posts.html">
                <i class="nc-icon nc-bullet-list-67"></i> Blog Posts
              </a>
              <a class="dropdown-item" href="examples/contact-us.html">
                <i class="nc-icon nc-mobile"></i> Contact Us
              </a>
              <a class="dropdown-item" href="examples/discover.html">
                <i class="nc-icon nc-world-2"></i> Discover
              </a>
              <a class="dropdown-item" href="examples/ecommerce.html">
                <i class="nc-icon nc-send"></i> Ecommerce
              </a>
              <a class="dropdown-item" href="examples/landing-page.html">
                <i class="nc-icon nc-spaceship"></i> Landing Page
              </a>
              <a class="dropdown-item" href="examples/login-page.html">
                <i class="nc-icon nc-lock-circle-open"></i> Login Page
              </a>
              <a class="dropdown-item" href="examples/product-page.html">
                <i class="nc-icon nc-album-2"></i> Product Page
              </a>
              <a class="dropdown-item" href="examples/profile-page.html">
                <i class="nc-icon nc-single-02"></i> Profile Page
              </a>
              <a class="dropdown-item" href="examples/register-page.html">
                <i class="nc-icon nc-bookmark-2"></i> Register Page
              </a>
              <a class="dropdown-item" href="examples/search-with-sidebar.html">
                <i class="nc-icon nc-zoom-split"></i> Search Page
              </a>
              <a class="dropdown-item" href="examples/settings.html">
                <i class="nc-icon nc-settings-gear-65"></i> Settings Page
              </a>
              <a class="dropdown-item" href="examples/twitter-redesign.html">
                <i class="nc-icon nc-tie-bow"></i> Twitter
              </a>
            </div>
          </li>
          @if (Auth::user())
            <li class="nav-item dropdown">
              <a class="btn btn-just-icon btn-warning  " data-toggle="dropdown">
                <i class="nc-icon nc-sound-wave"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-right dropdown-notification">
                <li class="no-notification">
                  You're all clear!
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="btn btn-just-icon btn-danger  " data-toggle="dropdown">
                <i class="nc-icon nc-email-85"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-right dropdown-wide dropdown-notification">
                <li class="dropdown-header">
                  You have 7 unread notifications
                </li>
                <li>
                  <ul class="dropdown-notification-list scroll-area">
                    <a href="#paper-kit" class="notification-item">
                      <div class="notification-text">
                        <span class="badge badge-pill badge-success"><i class="nc-icon nc-chat-33"></i></span>
                        <span class="message">
                          <b>Patrick</b> mentioned you in a comment.</span>
                        <br>
                        <span class="time">20min ago</span>
                        <button class="btn btn-just-icon read-notification btn-round">
                          <i class="nc-icon nc-check-2"></i>
                        </button>
                      </div>
                    </a>
                    <a href="#paper-kit" class="notification-item">
                      <div class="notification-text">
                        <span class="badge badge-pill badge-info"><i class="nc-icon nc-alert-circle-i"></i></span>
                        <span class="message">Our privacy policy changed!</span>
                        <br>
                        <span class="time">1day ago</span>
                      </div>
                    </a>
                    <a href="#paper-kit" class="notification-item">
                      <div class="notification-text">
                        <span class="badge badge-pill badge-warning"><i class="nc-icon nc-ambulance"></i></span>
                        <span class="message">Please confirm your email address.</span>
                        <br>
                        <span class="time">2days ago</span>
                      </div>
                    </a>
                    <a href="#paper-kit" class="notification-item">
                      <div class="notification-text">
                        <span class="badge badge-pill badge-primary"><i class="nc-icon nc-paper"></i></span>
                        <span class="message">Have you thought about marketing?</span>
                        <br>
                        <span class="time">3days ago</span>
                      </div>
                    </a>
                  </ul>
                </li>
                <!--      end scroll area -->
                <li class="dropdown-footer">
                  <ul class="dropdown-footer-menu">
                    <li>
                      <a href="#paper-kit">Mark all as read</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="#paper-kit" class="nav-link navbar-brand" data-toggle="dropdown" width="30" height="30">
                <div class="profile-photo-small">
                  <img src="{!! Auth::user()->image !!}" class="img-circle img-responsive img-no-padding" alt="{!! Auth::user()->name !!}">
                </div>
              </a>
              <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
                <div class="dropdown-header">Action</div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#paper-kit"><i class="fa fa-user"></i> Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#paper-kit"><i class="fa fa-gear"></i> Settings</a>
                <div class="dropdown-divider"></div>
                
                <a class="dropdown-item" href="/logout">
                  <i class="fa fa-sign-out"></i> Logout
                </a>
              </ul>
            </li>
          @else
            <a class="btn btn-round btn-danger" href="/login">
              <i class="fa fa-sign-in"></i> Login
            </a>
          @endif
           
          <!-- <li class="nav-item">
					<a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">
						<i class="fab fa-twitter"></i>
						<p class="hidden-lg-up">Twitter</p>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
						<i class="fab fa-facebook-square"></i>
						<p class="hidden-lg-up">Facebook</p>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
						<i class="fab fa-instagram"></i>
						<p class="hidden-lg-up">Instagram</p>
					</a>
				</li> -->
        </ul>
      </div>
    </div>
  </nav>
 @yield('content')
  <footer class="footer footer-black  footer-white ">
    <div class="container">
      <div class="row">
        <nav class="footer-nav">
          <ul>
            <li>
              <a href="https://www.creative-tim.com/" target="_blank">Creative Tim</a>
            </li>
            <li>
              <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>
            </li>
            <li>
              <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>
            </li>
          </ul>
        </nav>
        <div class="credits ml-auto">
          <span class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
          </span>
        </div>
      </div>
    </div>
  </footer>

  
  <!--   Core JS Files   -->

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

  <!--  Plugin for presentation page - isometric cards  -->
  <script src="assets/js/plugins/presentation-page/main.js"></script>
  <!-- Sharrre libray -->
  <script src="assets/demo/jquery.sharrre.js"></script>
  <script src="{{asset('plugins/custom-select/custom-select.min.js')}}" type="text/javascript"></script>

  {{-- <script src="{{asset('plugins/notify/jquery.amaran.js')}}" type="text/javascript"></script>
  <script src="{{asset('plugins/notify/jquery.amaran.min.js')}}" type="text/javascript"></script> --}}
 <script>
 jQuery(document).ready(function() {
     $(".select2").select2();
 });
//  $('#start').on('click',function(){
//     $.amaran({
//         'message'   :'My positioning example.',
//         'position'  :'bottom right'
// });
// });
//  Datepicker

      $('#example1').calendar();
      $('#example2').calendar({
        type: 'date'
      });
      $('#example3').calendar({
        type: 'time'
      });
      $('#rangestart').calendar({
        type: 'date',
        endCalendar: $('#rangeend')
      });
      $('#rangeend').calendar({
        type: 'date',
        startCalendar: $('#rangestart')
      });
      $('#example4').calendar({
        startMode: 'year'
      });
      $('#example5').calendar();
      $('#example6').calendar({
        ampm: false,
        type: 'time'
      });
      $('#example7').calendar({
        type: 'month'
      });
      $('#example8').calendar({
        type: 'year'
      });
      $('#example9').calendar();
      $('#example10').calendar({
        on: 'hover'
      });
      var today = new Date();
      $('#example11').calendar({
        minDate: new Date(today.getFullYear(), today.getMonth(), today.getDate() - 5),
        maxDate: new Date(today.getFullYear(), today.getMonth(), today.getDate() + 5)
      });
      $('#example12').calendar({
        monthFirst: false
      });
      $('#example13').calendar({
        monthFirst: false,
        formatter: {
          date: function (date, settings) {
            if (!date) return '';
            var day = date.getDate();
            var month = date.getMonth() + 1;
            var year = date.getFullYear();
            return day + '/' + month + '/' + year;
          }
        }
      });
      $('#example14').calendar({
        inline: true
      });
      $('#example15').calendar();
      $('#inter').calendar({
        type: 'year'
      });
      $('#grad_pass').calendar({
        type: 'year'
      });
      $('#master_pass').calendar({
        type: 'year'
      });
      $('#diploma_pass').calendar({
        type: 'year'
      });
    
 </script>
 @stack('scripts')
  <script>
    
    var size=$(window).width();
    if(size<975){
      $('#navbar').animate({ height: '96px', },.5,'linear');
      $(".navbar-translate").css("margin-top", "-11px");
    }
    else{
      window.onscroll = function() {scrollFunction()};
      function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
          $('#navbar').animate({ height: '70px', },.5,'linear');     
          
        } else {
          $('#navbar').animate({ padding: "40px" },.5,'linear');
        }
      }
    }
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    });
  </script>
</body>
</html>
