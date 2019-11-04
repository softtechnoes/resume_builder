@extends('master')
@section('title')
{{Auth::user()->name}}
@stop
@section('content')
@push('css')
{{-- <link href="{{asset('plugins/select2-4.0.7/css/select2.min.css')}}" rel="stylesheet" /> --}}
<style>
  input[type=number]::-webkit-inner-spin-button, 
  input[type=number]::-webkit-outer-spin-button { 
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      margin: 0; 
  }
  .added_row {
    background-color: aliceblue;
    -moz-transition: all 1s ease-in;
    -webkit-transition: all 1s ease-in;
    -o-transition: all 1s ease-in;
    transition: all 1s ease-in;
  
  }
  /* .fa-close:before {
    content: '\00d7';
  } */
  </style>
@endpush


{{-- <nav class="navbar navbar-expand-lg bg-white fixed-top nav-down navbar-transparent" color-on-scroll="500">
        <div class="container">
          <div class="navbar-translate">
            <a class="navbar-brand" href="../index.html" rel="tooltip" title="Paper Kit 2 PRO" data-placement="bottom" target="_blank">
              Paper Kit 2 Pro
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" data-nav-image="../assets/img/blurred-image-1.jpg" data-color="orange">
            <ul class="navbar-nav ml-auto">
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
                  Components </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-danger">
                  <a href="../index.html" class="dropdown-item">
                    All Components
                  </a>
                  <a href="../presentation.html" class="dropdown-item">
                    Presentation
                  </a>
                  <a href="../docs/1.0/getting-started/introduction.html" class="dropdown-item">
                    Documentation
                  </a>
                </div>
              </li>
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" id="navbarDropdownMenuLink" data-toggle="dropdown">
                  Sections
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-danger" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" data-scroll="true" data-id="#headers" href="../sections.html#headers">
                    <i class="nc-icon nc-tile-56"></i> Headers
                  </a>
                  <a class="dropdown-item" data-scroll="true" data-id="#features" href="../sections.html#features">
                    <i class="nc-icon nc-settings"></i> Features
                  </a>
                  <a class="dropdown-item" data-scroll="true" data-id="#blogs" href="../sections.html#blogs">
                    <i class="nc-icon nc-bullet-list-67"></i> Blogs
                  </a>
                  <a class="dropdown-item" data-scroll="true" data-id="#teams" href="../sections.html#teams">
                    <i class="nc-icon nc-single-02"></i> Teams
                  </a>
                  <a class="dropdown-item" data-scroll="true" data-id="#projects" href="../sections.html#projects">
                    <i class="nc-icon nc-calendar-60"></i> Projects
                  </a>
                  <a class="dropdown-item" data-scroll="true" data-id="#pricing" href="../sections.html#pricing">
                    <i class="nc-icon nc-money-coins"></i> Pricing
                  </a>
                  <a class="dropdown-item" data-scroll="true" data-id="#testimonials" href="../sections.html#testimonials">
                    <i class="nc-icon nc-badge"></i> Testimonials
                  </a>
                  <a class="dropdown-item" data-scroll="true" data-id="#contact-us" href="../sections.html#contactus">
                    <i class="nc-icon nc-mobile"></i> Contact Us
                  </a>
                </div>
              </li>
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" id="navbarDropdownMenuLink1" data-toggle="dropdown">
                  Examples
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-danger" aria-labelledby="navbarDropdownMenuLink1">
                  <a class="dropdown-item" href="about-us.html">
                    <i class="nc-icon nc-bank"></i> About-us
                  </a>
                  <a class="dropdown-item" href="add-product.html">
                    <i class="nc-icon nc-basket"></i> Add Product
                  </a>
                  <a class="dropdown-item" href="blog-post.html">
                    <i class="nc-icon nc-badge"></i> Blog Post
                  </a>
                  <a class="dropdown-item" href="blog-posts.html">
                    <i class="nc-icon nc-bullet-list-67"></i> Blog Posts
                  </a>
                  <a class="dropdown-item" href="contact-us.html">
                    <i class="nc-icon nc-mobile"></i> Contact Us
                  </a>
                  <a class="dropdown-item" href="discover.html">
                    <i class="nc-icon nc-world-2"></i> Discover
                  </a>
                  <a class="dropdown-item" href="ecommerce.html">
                    <i class="nc-icon nc-send"></i> Ecommerce
                  </a>
                  <a class="dropdown-item" href="landing-page.html">
                    <i class="nc-icon nc-spaceship"></i> Landing Page
                  </a>
                  <a class="dropdown-item" href="login-page.html">
                    <i class="nc-icon nc-lock-circle-open"></i> Login Page
                  </a>
                  <a class="dropdown-item" href="product-page.html">
                    <i class="nc-icon nc-album-2"></i> Product Page
                  </a>
                  <a class="dropdown-item" href="profile-page.html">
                    <i class="nc-icon nc-single-02"></i> Profile Page
                  </a>
                  <a class="dropdown-item" href="register-page.html">
                    <i class="nc-icon nc-bookmark-2"></i> Register Page
                  </a>
                  <a class="dropdown-item" href="search-with-sidebar.html">
                    <i class="nc-icon nc-zoom-split"></i> Search Page
                  </a>
                  <a class="dropdown-item" href="settings.html">
                    <i class="nc-icon nc-settings-gear-65"></i> Settings Page
                  </a>
                  <a class="dropdown-item" href="twitter-redesign.html">
                    <i class="nc-icon nc-tie-bow"></i> Twitter
                  </a>
                </div>
              </li>
              <li class="nav-item">
                <a class="btn btn-round btn-danger" href="https://www.creative-tim.com/product/paper-kit-2-pro" target="_blank">
                  <i class="nc-icon nc-cart-simple"></i> Buy Now
                </a>
              </li>
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
      </nav> --}}
      <!-- End Navbar -->
      
      <div class="page-header page-header-small" style="background-image: url('../assets/img/sections/rodrigo-ardilha.jpg');">
        <div class="filter"></div>
      </div>
      <div class="wrapper">
        <div class="profile-content section">
          <div class="container">
            <div class="row">
              <div class="profile-picture">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                  <div class="fileinput-new img-no-padding">
                    <img src="../assets/img/faces/joe-gardner-2.jpg" alt="...">
                  </div>
                  <div class="name">
                    <h4 class="title text-center">{{Auth::user()->name}}
                      <br />
                      <small>{{Auth::user()->job}}</small>
                    </h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 ml-auto mr-auto text-center">
                <p>{!! Auth::user()->about !!} </p>
                <br />
                <button class="btn btn-outline-default btn-round"><i class="fa fa-cog"></i> Settings</button>
                <button class="btn btn-outline-default btn-round" id="start"><i class="fa fa-cog"></i> start</button>
              </div>
            </div>
            <br/>
            <div class="nav-tabs-navigation">
              <div class="nav-tabs-wrapper">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#about" role="tab">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#education" role="tab">Education</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#skills" role="tab">Skills</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#experience" role="tab">Experience</a>
                  </li>
                  
                </ul>
              </div>
            </div>
            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane active" id="profile" role="tabpanel">
                <div class="row">
                  <div class="col-md-6 ml-auto mr-auto">
                    <ul class="list-unstyled follows">
                      <li>
                        <div class="row">
                          <div class="col-md-2 col-3">
                            <img src="../assets/img/faces/clem-onojeghuo-3.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                          </div>
                          <div class="col-md-7 col-4">
                            <h6>Lincoln
                              <br/>
                              <small>Car Producer</small>
                            </h6>
                          </div>
                          <div class="col-md-3 col-2">
                            <div class="unfollow">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign"></span>
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <hr />
                      <li>
                        <div class="row">
                          <div class="col-md-2 col-3">
                            <img src="../assets/img/faces/erik-lucatero-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                          </div>
                          <div class="col-md-7 col-4">
                            <h6>Banks
                              <br />
                              <small>Singer</small>
                            </h6>
                          </div>
                          <div class="col-md-3 col-2">
                            <div class="unfollow">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign"></span>
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="tab-pane text-center" id="about" role="tabpanel">
                <h3 class="text-muted">Not following anyone yet :(</h3>
                <button class="btn btn-warning btn-round">Find artists</button>
              </div>
              <div class="tab-pane text-center" id="education" role="tabpanel">
                <h3 class="text-muted">Education</h3>
                <!-- Section Education -->
        <div class="section experience scrollspy" id="experience-section">
          <!-- Title -->
          <div class="row">
              <div class="col s12 m12 l12">
                  {{-- <h5 class="grey-text text-darken-2 left-align">Education</h5> --}}
              </div>
          </div>
          <!-- Education Items Items -->
          <div class="row">
            <div class="col-md-6">
              <div class="card" data-color="orange" data-background="color">
                <div class="card-body text-center">
                  <h3 class="card-category">
                    {{-- <i class="fa fa-dribbble" aria-hidden="true"></i> --}}
                    <i class='fa fa-book'></i> High School
                  </h3>
                  <h5 class="card-title">
                    <a href="#pablo">"Good Design Is as Little Design as Possible"</a>
                  </h5>
                  @if(count($high_school)!=0)
                    <p class="card-description">
                        <table class="table table-hover info_table">
                          <tr>
                            <td>School Name</td>
                            <td><span id="school_updated"></span><span id="school_fresh">{{ $high_school[0]['school_name'] }}</span></td>
                          </tr>
                          <tr>
                              <td>Board</td>
                              <?php 
                              $board_id=$high_school[0]['board_name'];
                              $board=App\EducationBoards::where('id',$board_id)->get()->toArray();
                              ?>
                              
                              <td><span id="board_updated"></span><span id=
                                board_fresh>{{ $board[0]['board_name'] }}</span></td>
                          </tr>
                          <tr>
                              <td>State</td>
                              <?php 
                              $state_id=$high_school[0]['state'];
                              $state_name=App\State::where('id',$state_id)->get()->toArray();
                              ?>
                              <td><span id="state_updated"></span><span id="state_fresh">{{ $state_name[0]['name'] }}</span></td>
                          </tr>
                          <tr>
                            
                            <td>Percentage</td>
                            <td><span id="percentage_updated"></span><span id="percentage_fresh">{{ $high_school[0]['percentage'] }}</span></td>
                          </tr>
                          <tr>
                            <td>Passing Year</td>
                            <td><span id="passing_year_updated"></span><span id="passing_year_fresh">{{ $high_school[0]['passing_year'] }}</span></td>
                          </tr>
                          <tr>
                            <td>School Address</td>
                            <td><span id="school_address_updated"></span><span id="school_address_fresh">{{ $high_school[0]['school_address'] }}</span></td>
                          </tr>
                        </table>
                    </p>
                    <div class="card-footer text-center">
                      <button type="button" class="btn btn-round btn-success" data-toggle="modal" data-target="#editHighSchool">
                          <i class="fa fa-edit"></i> Edit</button> 
                    </div>
                  @else
                    <div class="card-footer text-center">
                      <button type="button" class="btn btn-round btn-success" data-toggle="modal" data-target="#addHighSchool">
                          <i class="fa fa-plus"></i> Add High School</button> 
                    </div>
                  @endif
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card" data-color="purple" data-background="color">
                <div class="card-body text-center">
                  <h3 class="card-category">
                    {{-- <i class="fa fa-dribbble" aria-hidden="true"></i> --}}
                    <i class='fa fa-book'></i> Intermediate
                  </h3>
                  <h5 class="card-title">
                    <a href="#pablo">"Good Design Is as Little Design as Possible"</a>
                  </h5>
                  @if(count($intermediate)!=0)
                    <p class="card-description">
                        <table class="table table-hover info_table">
                          <tr>
                            <td>School Name</td>
                            <td>{{ $intermediate[0]['school_name'] }}</td>
                          </tr>
                          <tr>
                              <td>Board</td>
                              <td>{{ $intermediate[0]['board_name'] }}</td>
                          </tr>
                          <tr>
                              <td>State</td>
                              <td>{{ $intermediate[0]['state'] }}</td>
                          </tr>
                          <tr>
                            <td>Percentage</td>
                            <td>{{ $intermediate[0]['percentage'] }}</td>
                          </tr>
                          <tr>
                            <td>Passing Year</td>
                            <td>{{ $intermediate[0]['passing_year'] }}</td>
                          </tr>
                          <tr>
                            <td>Passing Year</td>
                            <td>{{ $intermediate[0]['school_address'] }}</td>
                          </tr>
                        </table>
                    </p>
                    <div class="card-footer text-center">
                      <button type="button" class="btn btn-round btn-success" data-toggle="modal" data-target="#editIntermediate"><i class="fa fa-edit"></i> Edit Intermediate</button>
                    </div>
                  @else
                    <div class="card-footer text-center">
                      <button type="button" class="btn btn-round btn-info" data-toggle="modal" data-target="#addIntermediate"><i class="fa fa-plus"></i> Add Intermediate</button>
                    </div>
                  @endif
                </div>
              </div>
            </div>
          </div>

          <!-- College Items -->
          <div class="row">
              <div class="col-md-6">
                <div class="card" data-color="purple" data-background="color">
                  <div class="card-body text-center">
                    <h3 class="card-category">
                      {{-- <i class="fa fa-dribbble" aria-hidden="true"></i> --}}
                      <i class='fa fa-graduation-cap'></i> Graduation
                    </h3>
                    <h5 class="card-title">
                      <a href="#pablo">"Good Design Is as Little Design as Possible"</a>
                    </h5>
                    @if(count($graduation)!=0)
                    <p class="card-description">
                        <table class="table table-hover info_table">
                          <tr>
                            <td>Course Name</td>
                            <td>{{ $graduation[0]['course_name'] }}</td>
                          </tr>
                          <tr>
                            <td>College Name</td>
                            <td>{{ $graduation[0]['college'] }}</td>
                          </tr>
                          <tr>
                              <td>University</td>
                              <td>{{ $graduation[0]['university'] }}</td>
                          </tr>
                          <tr>
                              <td>State</td>
                              <td>{{ $graduation[0]['state'] }}</td>
                          </tr>
                          <tr>
                            <td>Percentage</td>
                            <td>{{ $graduation[0]['percentage'] }}</td>
                          </tr>
                          <tr>
                            <td>Passing Year</td>
                            <td>{{ $graduation[0]['passing_year'] }}</td>
                          </tr>
                          <tr>
                            <td>From</td>
                            <td>{{ $graduation[0]['from'] }}</td>
                          </tr>
                          <tr>
                            <td>To</td>
                            <td>{{ $graduation[0]['to'] }}</td>
                          </tr>
                          <tr>
                            <td>College Address</td>
                            <td>{{ $graduation[0]['college_address'] }}</td>
                          </tr>
                          <tr>
                            <td>Specialization</td>
                            <td>{{ $graduation[0]['specialization'] }}</td>
                          </tr>
                        </table>
                    </p>
                    <div class="card-footer text-center">
                      {{-- <a href="#pablo" rel="tooltip" title="Bookmark" class="btn btn-outline-neutral btn-round btn-just-icon"><i class="fa fa-bookmark-o"></i></a> --}}
                      {{-- <a href="#pablo" class="btn btn-neutral btn-round"><i class="fa fa-edit"></i> Edit</a> --}}
                      <button type="button" class="btn btn-round btn-info" data-toggle="modal" data-target="#editGraduation">
                          <i class="fa fa-edit"></i> Edit</button> 
                    </div>
                    @else
                      <div class="card-footer text-center">
                        <button type="button" class="btn btn-round btn-success" data-toggle="modal" data-target="#addGraduation"><i class="fa fa-plus"></i>Add Graduation</button>
                      </div>
                    @endif
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card" data-color="orange" data-background="color">
                  <div class="card-body text-center">
                    <h3 class="card-category">
                      {{-- <i class="fa fa-dribbble" aria-hidden="true"></i> --}}
                      <i class='fa fa-graduation-cap'></i> Master
                    </h3>
                    <h5 class="card-title">
                      <a href="#pablo">"Good Design Is as Little Design as Possible"</a>
                    </h5>
                    @if(count($master)!=0)
                      <p class="card-description">
                          <table class="table table-hover info_table">
                              <tr>
                                <td>Course Name</td>
                                <td>{{ $master[0]['course_name'] }}</td>
                              </tr>
                              <tr>
                                <td>College Name</td>
                                <td>{{ $master[0]['college'] }}</td>
                              </tr>
                              <tr>
                                  <td>University</td>
                                  <td>{{ $master[0]['university'] }}</td>
                              </tr>
                              <tr>
                                  <td>State</td>
                                  <td>{{ $master[0]['state'] }}</td>
                              </tr>
                              <tr>
                                <td>Percentage</td>
                                <td>{{ $master[0]['percentage'] }}</td>
                              </tr>
                              <tr>
                                <td>Passing Year</td>
                                <td>{{ $master[0]['passing_year'] }}</td>
                              </tr>
                              <tr>
                                <td>From</td>
                                <td>{{ $master[0]['from'] }}</td>
                              </tr>
                              <tr>
                                <td>To</td>
                                <td>{{ $master[0]['to'] }}</td>
                              </tr>
                              <tr>
                                <td>College Address</td>
                                <td>{{ $master[0]['college_address'] }}</td>
                              </tr>
                              <tr>
                                <td>Specialization</td>
                                <td>{{ $master[0]['specialization'] }}</td>
                              </tr>
                            </table>
                      </p>
                      <div class="card-footer text-center">
                        <button type="button" class="btn btn-round btn-success" data-toggle="modal" data-target="#editMaster"><i class="fa fa-edit"></i> Edit</button>
                      </div>
                    @else
                      <div class="card-footer text-center">
                        <button type="button" class="btn btn-round btn-success" data-toggle="modal" data-target="#addMaster"><i class="fa fa-plus"></i>Add Masters</button>
                      </div>
                    @endif
                  </div>
                </div>
              </div>
          </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card" data-color="orange" data-background="color">
                      <div class="card-body text-center">
                        <h3 class="card-category">
                          {{-- <i class="fa fa-dribbble" aria-hidden="true"></i> --}}
                          <i class='fa fa-graduation-cap'></i> Diploma
                        </h3>
                        <h5 class="card-title">
                          <a href="#pablo">"Good Design Is as Little Design as Possible"</a>
                        </h5>
                        @if(count($diploma)!=0)
                          <p class="card-description">
                              <table class="table table-hover info_table">
                                  <tr>
                                    <td>Course Name</td>
                                    <td>{{ $diploma[0]['course_name'] }}</td>
                                  </tr>
                                  <tr>
                                    <td>College Name</td>
                                    <td>{{ $diploma[0]['college'] }}</td>
                                  </tr>
                                  <tr>
                                      <td>University</td>
                                      <td>{{ $diploma[0]['university'] }}</td>
                                  </tr>
                                  <tr>
                                      <td>State</td>
                                      <td>{{ $diploma[0]['state'] }}</td>
                                  </tr>
                                  <tr>
                                    <td>Percentage</td>
                                    <td>{{ $diploma[0]['percentage'] }}</td>
                                  </tr>
                                  <tr>
                                    <td>Passing Year</td>
                                    <td>{{ $diploma[0]['passing_year'] }}</td>
                                  </tr>
                                  <tr>
                                    <td>From</td>
                                    <td>{{ $diploma[0]['from'] }}</td>
                                  </tr>
                                  <tr>
                                    <td>To</td>
                                    <td>{{ $diploma[0]['to'] }}</td>
                                  </tr>
                                  <tr>
                                    <td>College Address</td>
                                    <td>{{ $diploma[0]['college_address'] }}</td>
                                  </tr>
                                  <tr>
                                    <td>Specialization</td>
                                    <td>{{ $diploma[0]['specialization'] }}</td>
                                  </tr>
                                </table>
                          </p>
                          <div class="card-footer text-center">
                            <button type="button" class="btn btn-round btn-success" data-toggle="modal" data-target="#editDiploma"><i class="fa fa-edit"></i> Edit Diploma</button>
                          </div>
                        @else
                          <div class="card-footer text-center">
                            <button type="button" class="btn btn-round btn-success" data-toggle="modal" data-target="#addDiploma"><i class="fa fa-plus"></i>Add Diploma</button>
                          </div>
                        @endif
                      </div>
                    </div>
                  </div>
                    
            </div>
      </div>
              </div>
              <div class="tab-pane text-center" id="skills" role="tabpanel">
                <h3 class="text-muted">Skills</h3>
                <button class="btn btn-warning btn-round">Find artists</button>
              </div>
              <div class="tab-pane text-center" id="experience" role="tabpanel">
                <h3 class="text-muted">Experience</h3>
                <button class="btn btn-warning btn-round">Find artists</button>
              </div>
              
            </div>
          </div>
        </div>
      </div>
      
      {{-- <footer class="footer    ">
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
      </footer> --}}

  <!-- Edit High School -->
  @if(count($high_school)!=0)
  <div class="modal fade" id="editHighSchool" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title text-center" id="exampleModalLabel">Add High School Details</h5>
        </div>
        <div class="modal-body"> 
          <div class="row">
            <div class="col-md-4">School Name</div>
            <div class="col-md-8"> 
              <div class="input-group">
              <input type="text" placeholder="School Name" id="school_name" class="form-control" value="{{ $high_school[0]['school_name'] }}">
              <input type="hidden" id="high_school_id" value="{{ $high_school[0]['id'] }}">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fa fa-book"></i></span>
                </div>
              </div>
            </div>
          </div><br>
          <div class="row">
          <div class="col-md-4">Board</div>
              <div class="col-md-8"> 
                <select class="form-control select2" style="width:100%" id="board">
                  @foreach ($boards as $board)
                    <option value='{{$board->id}}' 
                      @if($board->id==$high_school[0]['board_name']) 
                      {{'selected'}} 
                      @endif 
                      >{{$board->board_name}}</option>
                  @endforeach
                </select>
              </div>
          </div><br>
          <div class="row">
            <div class="col-md-4">State</div>
            <div class="col-md-8"> 
              <select class="form-control select2" style="width:100%" id="state">
                @foreach ($states_stable as $state)
                  <option value='{{$state->id}}' @if($state->id==$high_school[0]['state']) 
                    {{'selected'}} 
                    @endif >{{$state->name}}</option>
                @endforeach
              </select>
            </div>
          </div><br>
          <div class="row">
            <div class="col-md-4">Passing Year</div>
            <div class="col-md-8"> 
              <div class="input-group ui calendar" id="example8">
                <input type="text" class="form-control" id="passing_year" placeholder="Passing Year" value="{{ $high_school[0]['passing_year'] }}">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                </div>
              </div>
            </div>
          </div><br>
          <div class="row">
            <div class="col-md-4">Percentage</div>
            <div class="col-md-8"> 
              <div class="input-group">
                <input type="number" placeholder="Percentage" id="percentage" class="form-control" value="{{ $high_school[0]['percentage'] }}">
                
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fa fa-percent"></i></span>
                </div>
              </div>
            </div>
          </div><br>
          <div class="row">
            <div class="col-md-4">School Address</div>
            <div class="col-md-8"> 
              <div class="input-group">
                <input type="text" placeholder="School Address" id="school_address" class="form-control" value="{{ $high_school[0]['school_address'] }}">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="left-side">
            <button type="button" id="updateHighSchool" class="btn btn-default btn-link" data-dismiss="modal">Save</button>
          </div>
          <div class="divider"></div>
          <div class="right-side">
            <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
  </div>
</div>
  @else
    <div class="modal fade" id="addHighSchool" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h5 class="modal-title text-center" id="exampleModalLabel">Add High School Details</h5>
            </div>
            <div class="modal-body"> 
              <div class="row">
                <div class="col-md-4">School Name</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="School Name" id="school_name" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-book"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">Board</div>
                  <div class="col-md-8"> 
                    <select class="form-control select2" style="width:100%" id="board">
                      <option>Select Board</option>
                      @foreach ($boards as $board)
                        <option value='{{$board->id}}'>{{$board->board_name}}</option>
                      @endforeach
                    </select>
                  </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">State</div>
                <div class="col-md-8"> 
                  <select class="form-control select2" style="width:100%" id="state">
                    <option selected>Select State</option>
                    @foreach ($states_stable as $state)
                      <option value='{{$state->id}}'>{{$state->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">Passing Year</div>
                <div class="col-md-8"> 
                  <div class="input-group ui calendar" id="example8">
                    {{-- <div class="ui calendar" id="example8" > --}}
                      {{-- <div class="ui input right icon"> --}}
                        {{-- <i class="calendar icon"></i> --}}
                        <input type="text" class="form-control" id="passing_year" placeholder="Passing Year">
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                      {{-- </div> --}}
                    {{-- </div> --}}
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">Percentage</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="Percentage" id="percentage" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-percent"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">School Address</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="School Address" id="school_address" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <div class="left-side">
                <button type="button" id="saveHighSchool" class="btn btn-default btn-link" data-dismiss="modal">Save</button>
              </div>
              <div class="divider"></div>
              <div class="right-side">
                <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
      </div>
    </div>
  @endif

   <!-- Edit Intermediate -->
  @if(count($graduation)!=0)
    <div class="modal fade" id="editIntermediate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title text-center" id="exampleModalLabel">Edit Intermediate Details</h5>
          </div>
          <div class="modal-body"> 
            <div class="row">
              <div class="col-md-4">School Name</div>
              <div class="col-md-8"> 
                <div class="input-group">
                  <input type="text" placeholder="School Name" class="form-control" value="{{ $intermediate[0]['school_name'] }}">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-book"></i></span>
                  </div>
                </div>
              </div>
            </div><br>
            <div class="row">
              <div class="col-md-4">Board</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="Board Name" class="form-control" value="{{ $intermediate[0]['board_name'] }}">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-map"></i></span>
                    </div>
                  </div>
                </div>
            </div><br>
            <div class="row">
              <div class="col-md-4">State</div>
              <div class="col-md-8"> 
                <div class="input-group">
                  <input type="text" placeholder="State" class="form-control" value="{{ $intermediate[0]['state'] }}">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-book"></i></span>
                  </div>
                </div>
              </div>
            </div><br>
            <div class="row">
              <div class="col-md-4">Passing Year</div>
              <div class="col-md-8"> 
                <div class="input-group">
                  <input type="text" placeholder="Passing Year" class="form-control" value="{{ $intermediate[0]['passing_year'] }}">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                  </div>
                </div>
              </div>
            </div><br>
            <div class="row">
              <div class="col-md-4">Percentage</div>
              <div class="col-md-8"> 
                <div class="input-group">
                  <input type="text" placeholder="Percentage" class="form-control" value="{{ $intermediate[0]['percentage'] }}">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-percent"></i></span>
                  </div>
                </div>
              </div>
            </div><br>
            <div class="row">
              <div class="col-md-4">School Address</div>
              <div class="col-md-8"> 
                <div class="input-group">
                  <input type="text" placeholder="School Address" class="form-control" value="{{ $intermediate[0]['school_address'] }}">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="left-side">
              <button type="button" class="btn btn-default btn-link" data-dismiss="modal">Save</button>
            </div>
            <div class="divider"></div>
            <div class="right-side">
                <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  @else
    <div class="modal fade" id="addIntermediate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h5 class="modal-title text-center" id="exampleModalLabel">Edit Intermediate Details</h5>
            </div>
            <div class="modal-body"> 
              <div class="row">
                <div class="col-md-4">School Name</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="School Name" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-book"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">Board</div>
                  <div class="col-md-8"> 
                    <div class="input-group">
                      <input type="text" placeholder="Board Name" class="form-control">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-map"></i></span>
                      </div>
                    </div>
                  </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">State</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="State" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-book"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">Passing Year</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="Passing Year" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">Percentage</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="Percentage" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-percent"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">School Address</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="School Address" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <div class="left-side">
                <button type="button" class="btn btn-default btn-link" data-dismiss="modal">Save</button>
              </div>
              <div class="divider"></div>
              <div class="right-side">
                  <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </div>
    </div>
  @endif

   <!-- Edit Graduation -->
  @if(count($graduation)!=0)
    <div class="modal fade" id="editGraduation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h5 class="modal-title text-center" id="exampleModalLabel">Graduation</h5>
            </div>
            <div class="modal-body"> 
              <div class="row">
                <div class="col-md-4">Course Name</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="School Name" class="form-control" value="{{ $graduation[0]['course_name'] }}">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-book"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">College Name</div>
                  <div class="col-md-8"> 
                    <div class="input-group">
                      <input type="text" placeholder="Board Name" class="form-control" value="{{ $graduation[0]['college'] }}">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-university"></i></span>
                      </div>
                    </div>
                  </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">University</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="State" class="form-control" value="{{ $graduation[0]['university'] }}">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-university"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">State</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="State" class="form-control" value="{{ $graduation[0]['state'] }}">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-map"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">Passing Year</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="Passing Year" class="form-control" value="{{ $graduation[0]['passing_year'] }}">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">Percentage</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="Percentage" class="form-control" value="{{ $graduation[0]['percentage'] }}">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-percent"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                  <div class="col-md-4">From</div>
                  <div class="col-md-8"> 
                    <div class="input-group">
                      <input type="date" placeholder="State" class="form-control" value="{{ $graduation[0]['from'] }}">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                      </div>
                    </div>
                  </div>
                </div><br>
                <div class="row">
                    <div class="col-md-4">To</div>
                    <div class="col-md-8"> 
                      <div class="input-group">
                        <input type="date" placeholder="State" class="form-control" value="{{ $graduation[0]['to'] }}">
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                      </div>
                    </div>
                  </div><br>
              <div class="row">
                <div class="col-md-4">College Address</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="School Address" class="form-control" value="{{ $graduation[0]['college_address'] }}">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                  <div class="col-md-4">Specialization</div>
                  <div class="col-md-8"> 
                    <div class="input-group">
                      <input type="text" placeholder="State" class="form-control" value="{{ $graduation[0]['specialization'] }}">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-graduation-cap"></i></span>
                      </div>
                    </div>
                  </div>
                </div><br>
            </div>
            <div class="modal-footer">
              <div class="left-side">
                <button type="button" class="btn btn-default btn-link" data-dismiss="modal">Save</button>
              </div>
              <div class="divider"></div>
              <div class="right-side">
                <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
      </div>
    </div>
  @else
    <div class="modal fade" id="addGraduation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h5 class="modal-title text-center" id="exampleModalLabel">Add Graduation</h5>
            </div>
            <div class="modal-body"> 
              <div class="row">
                <div class="col-md-4">Course Name</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="School Name" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-book"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">College Name</div>
                  <div class="col-md-8"> 
                    <div class="input-group">
                      <input type="text" placeholder="Board Name" class="form-control">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-university"></i></span>
                      </div>
                    </div>
                  </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">University</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="State" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-university"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">State</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="State" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-map"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">Passing Year</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="Passing Year" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">Percentage</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="Percentage" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-percent"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                  <div class="col-md-4">From</div>
                  <div class="col-md-8"> 
                    <div class="input-group">
                      <input type="date" placeholder="State" class="form-control">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                      </div>
                    </div>
                  </div>
                </div><br>
                <div class="row">
                    <div class="col-md-4">To</div>
                    <div class="col-md-8"> 
                      <div class="input-group">
                        <input type="date" placeholder="State" class="form-control">
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                      </div>
                    </div>
                  </div><br>
              <div class="row">
                <div class="col-md-4">College Address</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="School Address" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                  <div class="col-md-4">Specialization</div>
                  <div class="col-md-8"> 
                    <div class="input-group">
                      <input type="text" placeholder="State" class="form-control">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-graduation-cap"></i></span>
                      </div>
                    </div>
                  </div>
                </div><br>
            </div>
            <div class="modal-footer">
              <div class="left-side">
                <button type="button" class="btn btn-default btn-link" data-dismiss="modal">Save</button>
              </div>
              <div class="divider"></div>
              <div class="right-side">
                  <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
      </div>
    </div>
  @endif

  <!-- Edit Master -->
  @if(count($master)!=0)
    <div class="modal fade" id="editMaster" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h5 class="modal-title text-center" id="exampleModalLabel">Master</h5>
            </div>
            <div class="modal-body"> 
              <div class="row">
                <div class="col-md-4">Course Name</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="School Name" class="form-control" value="{{ $master[0]['course_name'] }}">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-book"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">College Name</div>
                  <div class="col-md-8"> 
                    <div class="input-group">
                      <input type="text" placeholder="Board Name" class="form-control" value="{{ $master[0]['college'] }}">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-university"></i></span>
                      </div>
                    </div>
                  </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">University</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="State" class="form-control" value="{{ $master[0]['university'] }}">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-university"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">State</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="State" class="form-control" value="{{ $master[0]['state'] }}">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-map"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">Passing Year</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="Passing Year" class="form-control" value="{{ $master[0]['passing_year'] }}">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">Percentage</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="Percentage" class="form-control" value="{{ $master[0]['percentage'] }}">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-percent"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                  <div class="col-md-4">From</div>
                  <div class="col-md-8"> 
                    <div class="input-group">
                      <input type="date" placeholder="State" class="form-control" value="{{ $master[0]['from'] }}">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                      </div>
                    </div>
                  </div>
                </div><br>
                <div class="row">
                    <div class="col-md-4">To</div>
                    <div class="col-md-8"> 
                      <div class="input-group">
                        <input type="date" placeholder="State" class="form-control" value="{{ $master[0]['to'] }}">
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                      </div>
                    </div>
                  </div><br>
              <div class="row">
                <div class="col-md-4">College Address</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="School Address" class="form-control" value="{{ $master[0]['college_address'] }}">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                  <div class="col-md-4">Specialization</div>
                  <div class="col-md-8"> 
                    <div class="input-group">
                      <input type="text" placeholder="State" class="form-control" value="{{ $master[0]['specialization'] }}">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-graduation-cap"></i></span>
                      </div>
                    </div>
                  </div>
                </div><br>
            </div>
            <div class="modal-footer">
              <div class="left-side">
                <button type="button" class="btn btn-default btn-link" data-dismiss="modal">Save</button>
              </div>
              <div class="divider"></div>
              <div class="right-side">
                  <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
      </div>
    </div>
  @else
    <!-- Add Master -->
    <div class="modal fade" id="addMaster" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h5 class="modal-title text-center" id="exampleModalLabel">Add Master</h5>
            </div>
            <div class="modal-body"> 
              <div class="row">
                <div class="col-md-4">Course Name</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="Course Name" class="form-control" >
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-book"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">College Name</div>
                  <div class="col-md-8"> 
                    <div class="input-group">
                      <input type="text" placeholder="Board Name" class="form-control">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-university"></i></span>
                      </div>
                    </div>
                  </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">University</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="State" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-university"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">State</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="State" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-map"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">Passing Year</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="Passing Year" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">Percentage</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="Percentage" class="form-control" >
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-percent"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                  <div class="col-md-4">From</div>
                  <div class="col-md-8"> 
                    <div class="input-group">
                      <input type="date" placeholder="State" class="form-control">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                      </div>
                    </div>
                  </div>
                </div><br>
                <div class="row">
                    <div class="col-md-4">To</div>
                    <div class="col-md-8"> 
                      <div class="input-group">
                        <input type="date" placeholder="State" class="form-control">
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                      </div>
                    </div>
                  </div><br>
              <div class="row">
                <div class="col-md-4">College Address</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="School Address" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                  <div class="col-md-4">Specialization</div>
                  <div class="col-md-8"> 
                    <div class="input-group">
                      <input type="text" placeholder="State" class="form-control">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-graduation-cap"></i></span>
                      </div>
                    </div>
                  </div>
                </div><br>
            </div>
            <div class="modal-footer">
              <div class="left-side">
                <button type="button" class="btn btn-default btn-link" data-dismiss="modal">Save</button>
              </div>
              <div class="divider"></div>
              <div class="right-side">
                  <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
      </div>
    </div>
  @endif

  <!-- Edit Diploma -->
  @if(count($diploma)!=0)
    <div class="modal fade" id="editDiploma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h5 class="modal-title text-center" id="exampleModalLabel">Diploma</h5>
            </div>
            <div class="modal-body"> 
              <div class="row">
                <div class="col-md-4">Course Name</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="School Name" class="form-control" value="{{ $diploma[0]['course_name'] }}">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-book"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">College Name</div>
                  <div class="col-md-8"> 
                    <div class="input-group">
                      <input type="text" placeholder="Board Name" class="form-control" value="{{ $diploma[0]['college'] }}">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-university"></i></span>
                      </div>
                    </div>
                  </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">University</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="State" class="form-control" value="{{ $diploma[0]['university'] }}">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-university"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">State</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="State" class="form-control" value="{{ $diploma[0]['state'] }}">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-map"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">Passing Year</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="Passing Year" class="form-control" value="{{ $diploma[0]['passing_year'] }}">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">Percentage</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="Percentage" class="form-control" value="{{ $diploma[0]['percentage'] }}">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-percent"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                  <div class="col-md-4">From</div>
                  <div class="col-md-8"> 
                    <div class="input-group">
                      <input type="date" placeholder="State" class="form-control" value="{{ $diploma[0]['from'] }}">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                      </div>
                    </div>
                  </div>
                </div><br>
                <div class="row">
                    <div class="col-md-4">To</div>
                    <div class="col-md-8"> 
                      <div class="input-group">
                        <input type="date" placeholder="State" class="form-control" value="{{ $diploma[0]['to'] }}">
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                      </div>
                    </div>
                  </div><br>
              <div class="row">
                <div class="col-md-4">College Address</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="School Address" class="form-control" value="{{ $diploma[0]['college_address'] }}">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                  <div class="col-md-4">Specialization</div>
                  <div class="col-md-8"> 
                    <div class="input-group">
                      <input type="text" placeholder="State" class="form-control" value="{{ $diploma[0]['specialization'] }}">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-graduation-cap"></i></span>
                      </div>
                    </div>
                  </div>
                </div><br>
            </div>
            <div class="modal-footer">
              <div class="left-side">
                <button type="button" class="btn btn-default btn-link" data-dismiss="modal">Save</button>
              </div>
              <div class="divider"></div>
              <div class="right-side">
                  <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
      </div>
    </div>
  @else
    <!-- Add Diploma -->
    <div class="modal fade" id="addDiploma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h5 class="modal-title text-center" id="exampleModalLabel">Add Diploma</h5>
            </div>
            <div class="modal-body"> 
              <div class="row">
                <div class="col-md-4">Course Name</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="Course Name" class="form-control" >
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-book"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">College Name</div>
                  <div class="col-md-8"> 
                    <div class="input-group">
                      <input type="text" placeholder="Board Name" class="form-control">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-university"></i></span>
                      </div>
                    </div>
                  </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">University</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="State" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-university"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">State</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="State" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-map"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">Passing Year</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="Passing Year" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">Percentage</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="Percentage" class="form-control" >
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-percent"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                  <div class="col-md-4">From</div>
                  <div class="col-md-8"> 
                    <div class="input-group">
                      <input type="date" placeholder="State" class="form-control">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                      </div>
                    </div>
                  </div>
                </div><br>
                <div class="row">
                    <div class="col-md-4">To</div>
                    <div class="col-md-8"> 
                      <div class="input-group">
                        <input type="date" placeholder="State" class="form-control">
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                      </div>
                    </div>
                  </div><br>
              <div class="row">
                <div class="col-md-4">College Address</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="School Address" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                  <div class="col-md-4">Specialization</div>
                  <div class="col-md-8"> 
                    <div class="input-group">
                      <input type="text" placeholder="State" class="form-control">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-graduation-cap"></i></span>
                      </div>
                    </div>
                  </div>
                </div><br>
            </div>
            <div class="modal-footer">
              <div class="left-side">
                <button type="button" class="btn btn-default btn-link" data-dismiss="modal">Save</button>
              </div>
              <div class="divider"></div>
              <div class="right-side">
                  <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
      </div>
    </div>
  @endif

 <!-- small Warning modal -->
 <div class="modal fade" id="warning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-notice">
    <div class="modal-content">
      <div class="modal-header no-border-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body text-center">
        <p>You can't enter your percentage more than <strong>100</strong>. </p>
        <a href="#" class="btn btn-link btn-danger">Learn more</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link" data-dismiss="modal" aria-hidden="true">Okay</button>
      </div>
    </div>
  </div>
</div>
<!-- small Success modal -->
<div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-notice">
    <div class="modal-content">
      <div class="modal-header no-border-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body text-center">
        <i class="material-icons text-success" style="font-size:100px;">check_circle_outline</i>
        <h3 class="text-success">Success</h3>
        <p>Your records has been saved successfully. </p>
        <a href="#" class="btn btn-link btn-danger">Learn more</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link" data-dismiss="modal" aria-hidden="true">Okay</button>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
{{-- <script src="{{asset('plugins/select2-4.0.7/js/select2.full.min.js')}}"></script> --}}
<script>
    $("#saveHighSchool,#updateHighSchool").click(function(){ high_school_id

      var school_name = $("#school_name").val();
      var board = $("#board").val();
      var state = $("#state").val();
      var passing_year = $("#passing_year").val();
      var percentage = $("#percentage").val();
      var school_address = $("#school_address").val();
      var high_school_id=$("#high_school_id").val();
      var board_id=$("#board").val();
      var state_id=$("#state").val();
      // console.log(school_name+board+state+passing_year+school_address+percentage);
      $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
      });
      $.ajax({
        type:"GET",
        url:"{{url('add-high-school')}}",
        data:{
          'school_name': school_name,
          'board': board,
          'state': state,
          'passing_year': passing_year,
          'percentage': percentage,
          'school_address': school_address,
          'high_school_id': high_school_id,
          'board_id': board_id,
          'state_id': state_id,
        }, 
        success:function(data){ 
          console.log(data);
          $("#school_updated").html(data[0].school_name);
          $("#school_fresh").hide();
          $("#board_updated").html(data[1]);
          $("#board_fresh").hide();
          $("#state_updated").html(data[2]);
          $("#state_fresh").hide();
          $("#percentage_updated").html(data[0].percentage);
          $("#percentage_fresh").hide();
          $("#passing_year_updated").html(data[0].passing_year);
          $("#passing_year_fresh").hide();
          $("#school_address_updated").html(data[0].school_address);
          $("#school_address_fresh").hide();
          $("#success").modal('show');
        }
      });
    }); 
</script>
<script>
    $("#addAbout").click(function(){
      var about = $("#about").val();
      console.log(about);
      $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
      });
  
      $.ajax({
        type:"GET",
        url:"{{url('add-about')}}",
        data:{
          'about': about,
        }, 
      
        success:function(res){ 
          $("#descriptionModal").hide();
        }
      });
    }); 
</script>
<script>
$("#editAbout").click(function(){
    $('#descriptionModal').show();
});
$("#editAboutClose").click(function(){
    $('#descriptionModal').hide();
});
$("#addAboutModal").click(function(){
    $('#userinfoModal').show();
});
$("#addaboutModalClose").click(function(){
    $('#userinfoModal').hide();
});
$("#addProffessionalSkill").click(function(){
    $('#professionalSkill').show();
});
$("#addProffessionalSkillClose").click(function(){
    $('#professionalSkill').hide();
});

var percentage_old = $('#percentage').val();
$('#percentage').change(function(){
  var percentage = $('#percentage').val();
  console.log(percentage);
  if(percentage>100){
    $("#warning").modal('show');
    $('#percentage').val(percentage_old);
}
});

</script>

@endpush
