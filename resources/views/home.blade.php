@extends('master_user')

@section('content')
<main>

    <!-- Container -->
    <div class="container scrollspy" id="started-section">

        <!-- Section About -->
        <div class="section started">

            <!-- Profile -->
            <div class="card profile">
                <div class="card-image" style="background-image: url(user/images/user-profile-bg.jpg);"></div>
                <div class="card-content">
                    <div class="row">
                        <div class="col s12 m5 l6">
                            <figure class="card-profile-image">
                                <img class="circle z-depth-1 responsive-img" src="images/avatar.jpg" alt="" />
                            </figure>
                            <div class="card-profile-desc">
                                <h4 class="card-title grey-text text-darken-4">Sean Stevenson</h4>
                                <p class="medium-small grey-text">Front-end Developer</p>
                            </div>
                        </div>
                        <div class="col s4 m3 l2 center-align">
                            <h4 class="card-title grey-text text-darken-4">96%</h4>
                            <p class="medium-small grey-text">Jobs Completed</p>
                        </div>
                        <div class="col s4 m2 l2 center-align">
                            <h4 class="card-title grey-text text-darken-4">10</h4>
                            <p class="medium-small grey-text">Years Experience</p>
                        </div>
                        <div class="col s4 m2 l2 center-align">
                            <h4 class="card-title grey-text text-darken-4">$25</h4>
                            <p class="medium-small grey-text">USD/hr</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats -->
            <div class="stats">
                <div class="row">
                    <div class="col s12 m6 l3">
                        <div class="card green darken-2">
                            <div class="card-content white-text center-align">
                                <p class="card-title"><i class="material-icons">recent_actors</i> 480+</p>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card cyan darken-2">
                            <div class="card-content white-text center-align">
                                <p class="card-title"><i class="material-icons">done_all</i> 400+</p>
                                <p>Complated Projects</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card red darken-2">
                            <div class="card-content white-text center-align">
                                <p class="card-title"><i class="material-icons">code</i> 100 000+</p>
                                <p>Lines of code</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card amber darken-2">
                            <div class="card-content white-text center-align">
                                <p class="card-title"><i class="material-icons">supervisor_account</i> 1000+</p>
                                <p>Followers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Section About -->
        <div class="section about scrollspy" id="about-section">

            <!-- Title -->
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 class="grey-text text-darken-2 left-align">About Me</h5>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="card-panel">
                        <div class="text-box">
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.
                            </p>
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            </p>
                        </div>
                        <div class="bts">
                            <a href="#" class="btn waves-effect waves-light">Download CV</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <ul class="collection collection-info z-depth-1">
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s6 m5 l5 grey-text darken-1">
                                    <i class="material-icons">perm_identity</i> Age:
                                </div>
                                <div class="col s6 m7 l7 grey-text text-darken-4 right-align">22 Years</div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s6 m5 l5 grey-text darken-1">
                                    <i class="material-icons">work</i> Job:
                                </div>
                                <div class="col s6 m7 l7 grey-text text-darken-4 right-align">Freelancer</div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s6 m5 l5 grey-text darken-1">
                                    <i class="material-icons">location_on</i> Citizenship:
                                </div>
                                <div class="col s6 m7 l7 grey-text text-darken-4 right-align">United States</div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s6 m5 l5 grey-text darken-1">
                                    <i class="material-icons">business</i> Address:
                                </div>
                                <div class="col s6 m7 l7 grey-text text-darken-4 right-align">358 W Jefferson St, Bensenville</div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col s12 m12 l6">
                    <ul class="collection collection-info z-depth-1">
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s8 m5 l5 grey-text darken-1">
                                    <i class="material-icons">invert_colors</i> Cups of coffee:
                                </div>
                                <div class="col s4 m7 l7 grey-text text-darken-4 right-align">20.000</div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s8 m5 l5 grey-text darken-1">
                                    <i class="material-icons">language</i> Countries Visited:
                                </div>
                                <div class="col s4 m7 l7 grey-text text-darken-4 right-align">28</div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s8 m5 l5 grey-text darken-1">
                                    <i class="material-icons">stars</i> Awards Won:
                                </div>
                                <div class="col s4 m7 l7 grey-text text-darken-4 right-align">16</div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s8 m5 l5 grey-text darken-1">
                                    <i class="material-icons">album</i> Albumes Listened:
                                </div>
                                <div class="col s4 m7 l7 grey-text text-darken-4 right-align">80</div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col s12 m12 l6">
                    <ul class="collection collection-skills z-depth-1">
                        <li class="collection-item avatar">
                            <i class="material-icons circle green darken-2">person</i>
                            <div class="title">Professional Skills</div>
                            <p>Sed ut perspiciatis</p>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s6 m4 l4">
                                    <div class="title">UI/UX Design</div>
                                </div>
                                <div class="col s6 m8 l8">
                                    <div class="progress green lighten-5">
                                        <div class="determinate green darken-2" style="width: 70%"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s6 m4 l4">
                                    <div class="title">Web Delevopment</div>
                                </div>
                                <div class="col s6 m8 l8">
                                    <div class="progress green lighten-5">
                                        <div class="determinate green darken-2" style="width: 90%"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s6 m4 l4">
                                    <div class="title">Mobile Application</div>
                                </div>
                                <div class="col s6 m8 l8">
                                    <div class="progress green lighten-5">
                                        <div class="determinate green darken-2" style="width: 80%"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s6 m4 l4">
                                    <div class="title">Writing</div>
                                </div>
                                <div class="col s6 m8 l8">
                                    <div class="progress green lighten-5">
                                        <div class="determinate green darken-2" style="width: 65%"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s6 m4 l4">
                                    <div class="title">Photography</div>
                                </div>
                                <div class="col s6 m8 l8">
                                    <div class="progress green lighten-5">
                                        <div class="determinate green darken-2" style="width: 70%"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col s12 m12 l6">
                    <ul class="collection collection-skills z-depth-1">
                        <li class="collection-item avatar">
                            <i class="material-icons circle red darken-2">forum</i>
                            <div class="title">Personal Skills</div>
                            <p>Sed ut perspiciatis</p>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s6 m4 l4">
                                    <div class="title">Communication</div>
                                </div>
                                <div class="col s6 m8 l8">
                                    <div class="progress red lighten-5">
                                        <div class="determinate red darken-2" style="width: 80%"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s6 m4 l4">
                                    <div class="title">Team Work</div>
                                </div>
                                <div class="col s6 m8 l8">
                                    <div class="progress red lighten-5">
                                        <div class="determinate red darken-2" style="width: 90%"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s6 m4 l4">
                                    <div class="title">Leadership</div>
                                </div>
                                <div class="col s6 m8 l8">
                                    <div class="progress red lighten-5">
                                        <div class="determinate red darken-2" style="width: 65%"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s6 m4 l4">
                                    <div class="title">Creativity</div>
                                </div>
                                <div class="col s6 m8 l8">
                                    <div class="progress red lighten-5">
                                        <div class="determinate red darken-2" style="width: 75%"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s6 m4 l4">
                                    <div class="title">Language</div>
                                </div>
                                <div class="col s6 m8 l8">
                                    <div class="progress red lighten-5">
                                        <div class="determinate red darken-2" style="width: 80%"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- Section Resume -->
        <div class="section experience scrollspy" id="experience-section">

            <!-- Title -->
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 class="grey-text text-darken-2 left-align">Experience & Education</h5>
                </div>
            </div>

            <!-- Resume Items -->
            <div class="row">
                <div class="col s12 m12 l6">
                    <ul class="collection collection-resume z-depth-1">
                        <li class="collection-item avatar">
                            <i class="material-icons circle green darken-2">assignment</i>
                            <span class="ultra-small red-text darken-2 right">PRESENT</span>
                            <div class="title">Facebook Inc.</div>
                            <span class="tag red darken-2">Art Director</span>
                        </li>
                        <li class="collection-item">
                            <p>
                                Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem an, cule dicta iriure at. Ubique maluisset vel te, his dico vituperata ut. Pro ei phaedrum maluisset. Ex audire suavitate has, ei quodsi tacimates sapientem sed, pri zril ubique ut. Lorem ipsum dolor sit amet, in quodsi.
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col s12 m12 l6">
                    <ul class="collection collection-resume z-depth-1">
                        <li class="collection-item avatar">
                            <i class="material-icons circle green darken-2">assignment</i>
                            <span class="ultra-small red-text darken-2 right">2014-2016</span>
                            <div class="title">Google Inc.</div>
                            <span class="tag red darken-2">Front-end Developer</span>
                        </li>
                        <li class="collection-item">
                            <p>
                                Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem an, cule dicta iriure at. Ubique maluisset vel te, his dico vituperata ut. Pro ei phaedrum maluisset. Ex audire suavitate has, ei quodsi tacimates sapientem sed, pri zril ubique ut. Lorem ipsum dolor sit amet, in quodsi.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l6">
                    <ul class="collection collection-resume z-depth-1">
                        <li class="collection-item avatar">
                            <i class="material-icons circle green darken-2">assignment</i>
                            <span class="ultra-small red-text darken-2 right">2012-2014</span>
                            <div class="title">Abc Inc.</div>
                            <span class="tag red darken-2">Senior Developer</span>
                        </li>
                        <li class="collection-item">
                            <p>
                                Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem an, cule dicta iriure at. Ubique maluisset vel te, his dico vituperata ut. Pro ei phaedrum maluisset. Ex audire suavitate has, ei quodsi tacimates sapientem sed, pri zril ubique ut. Lorem ipsum dolor sit amet, in quodsi.
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col s12 m12 l6">
                    <ul class="collection collection-resume z-depth-1">
                        <li class="collection-item avatar">
                            <i class="material-icons circle green darken-2">assignment</i>
                            <span class="ultra-small red-text darken-2 right">2009-2012</span>
                            <div class="title">Freelancer</div>
                            <span class="tag red darken-2">Senior Developer</span>
                        </li>
                        <li class="collection-item">
                            <p>
                                Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem an, cule dicta iriure at. Ubique maluisset vel te, his dico vituperata ut. Pro ei phaedrum maluisset. Ex audire suavitate has, ei quodsi tacimates sapientem sed, pri zril ubique ut. Lorem ipsum dolor sit amet, in quodsi.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l6">
                    <ul class="collection collection-resume z-depth-1">
                        <li class="collection-item avatar">
                            <i class="material-icons circle red darken-2">school</i>
                            <span class="ultra-small red-text darken-2 right">2008-2009</span>
                            <div class="title">Front-end Course</div>
                            <span class="tag red darken-2">London</span>
                        </li>
                        <li class="collection-item">
                            <p>
                                Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem an, cule dicta iriure at. Ubique maluisset vel te, his dico vituperata ut. Pro ei phaedrum maluisset. Ex audire suavitate has, ei quodsi tacimates sapientem sed, pri zril ubique ut. Lorem ipsum dolor sit amet, in quodsi.
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col s12 m12 l6">
                    <ul class="collection collection-resume z-depth-1">
                        <li class="collection-item avatar">
                            <i class="material-icons circle red darken-2">school</i>
                            <span class="ultra-small red-text darken-2 right">2005-2008</span>
                            <div class="title">Art University</div>
                            <span class="tag red darken-2">New York</span>
                        </li>
                        <li class="collection-item">
                            <p>
                                Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem an, cule dicta iriure at. Ubique maluisset vel te, his dico vituperata ut. Pro ei phaedrum maluisset. Ex audire suavitate has, ei quodsi tacimates sapientem sed, pri zril ubique ut. Lorem ipsum dolor sit amet, in quodsi.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- Service -->
        <div class="section service scrollspy" id="service-section">
            
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 class="left-align">Services</h5>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m12 l6">
                    <div class="card horizontal">
                        <div class="card-image green darken-2">
                            <i class="material-icons circle darken-2">dashboard</i>
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <div class="title">UI/UX Design</div>
                            </div>
                            <div class="card-action">
                                <p>I am a very simple card. I am good at containing small bits of information.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card horizontal">
                        <div class="card-image cyan darken-2">
                            <i class="material-icons circle darken-2">web</i>
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <div class="title">Web Application</div>
                            </div>
                            <div class="card-action">
                                <p>I am a very simple card. I am good at containing small bits of information.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l6">
                    <div class="card horizontal">
                        <div class="card-image red darken-2">
                            <i class="material-icons circle darken-2">android</i>
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <div class="title">Android Application</div>
                            </div>
                            <div class="card-action">
                                <p>I am a very simple card. I am good at containing small bits of information.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card horizontal">
                        <div class="card-image amber darken-2">
                            <i class="material-icons circle darken-2">smartphone</i>
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <div class="title">Mobile Design</div>
                            </div>
                            <div class="card-action">
                                <p>I am a very simple card. I am good at containing small bits of information.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l6">
                    <div class="card horizontal">
                        <div class="card-image blue darken-2">
                            <i class="material-icons circle darken-2">create</i>
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <div class="title">Writing</div>
                            </div>
                            <div class="card-action">
                                <p>I am a very simple card. I am good at containing small bits of information.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card horizontal">
                        <div class="card-image purple darken-2">
                            <i class="material-icons circle darken-2">photo_camera</i>
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <div class="title">Photography</div>
                            </div>
                            <div class="card-action">
                                <p>I am a very simple card. I am good at containing small bits of information.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio -->
        <div class="section works scrollspy" id="works-section">

            <!-- Title -->
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 class="grey-text text-darken-2 left-align">Portfolio</h5>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m12 l12">
                    <ul class="tabs filter z-depth-1">
                        <li class="tab"><a class="active" data-filter=".all">All</a></li>
                        <li class="tab"><a data-filter=".mockups">Mockups</a></li>
                        <li class="tab"><a data-filter=".graphics">Graphics</a></li>
                        <li class="tab"><a data-filter=".icons">Icons</a></li>
                        <li class="tab"><a data-filter=".ui">UI Kits</a></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m6 l4">
                    <div class="card work-item mockups all">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="#popup-1" class="activator"><img src="user/images/works/work1.jpg" alt="" /></a>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title grey-text text-darken-4">
                                <a href="#popup-1" class="activator">
                                    <span>Realistic Business Cards MockUp</span>
                                    <i class="material-icons right">more_vert</i>
                                </a>
                            </h3>
                            <span class="category blue-text text-darken-2">Mockups</span>
                        </div>
                        <div id="popup-1" class="popup-box mfp-fade mfp-hide">
                            <div class="content">
                                <div class="image">
                                    <img src="user/images/works/work1.jpg" alt="">
                                </div>
                                <div class="desc">
                                    <div class="category">Mockups</div>
                                    <h4>Realistic Business Cards MockUp</h4>
                                    <p>
                                        Here’s a new b-cards mock-up with several business cards scattered across the scene. The PSD file allows you 
                                        to easily. Here’s a new b-cards mock-up with several business cards scattered across the scene.
                                    </p>
                                    <a href="#" class="btn waves-effect waves-light">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l4">
                    <div class="card work-item graphics all">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="#popup-2" class="activator"><img src="user/images/works/work3.jpg" alt="" /></a>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title grey-text text-darken-4">
                                <a href="#popup-2" class="activator">
                                    <span>The Mountainbiker Freebie PSD</span>
                                    <i class="material-icons right">more_vert</i>
                                </a>
                            </h3>
                            <span class="category blue-text text-darken-2">Graphics</span>
                        </div>
                        <div id="popup-2" class="popup-box mfp-fade mfp-hide">
                            <div class="content">
                                <div class="image">
                                    <img src="user/images/works/work3.jpg" alt="">
                                </div>
                                <div class="desc">
                                    <div class="category">Graphic</div>
                                    <h4>The Mountainbiker Freebie</h4>
                                    <p>
                                        The freebie of the day is a logo design kit with an original theme that will help you create 
                                        stunning mountain bike related logos in just minutes.
                                    </p>
                                    <a href="#" class="btn waves-effect waves-light">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l4">
                    <div class="card work-item mockups all">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="#popup-3" class="activator"><img src="user/images/works/work2.jpg" alt="" /></a>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title grey-text text-darken-4">
                                <a href="#popup-3" class="activator">
                                    <span>Notebook MockUp PSD</span>
                                    <i class="material-icons right">more_vert</i>
                                </a>
                            </h3>
                            <span class="category blue-text text-darken-2">Mockups</span>
                        </div>
                        <div id="popup-3" class="popup-box mfp-fade mfp-hide">
                            <div class="content">
                                <div class="image">
                                    <img src="user/images/works/work2.jpg" alt="">
                                </div>
                                <div class="desc">
                                    <div class="category">Mockups</div>
                                    <h4>Notebook MockUp PSD</h4>
                                    <p>
                                        Today we’re happy to share with you the mockup of a classic notebook that will help you showcase your 
                                        drawings. Today we’re happy to share with you the mockup of a classic notebook that will help.
                                    </p>
                                    <a href="#" class="btn waves-effect waves-light">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l4">
                    <div class="card work-item icons all">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="#popup-4" class="activator"><img src="user/images/works/work4.jpg" alt="" /></a>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title grey-text text-darken-4">
                                <a href="#popup-4" class="activator">
                                    <span>Capitalist Icons</span>
                                    <i class="material-icons right">more_vert</i>
                                </a>
                            </h3>
                            <span class="category blue-text text-darken-2">Icons</span>
                        </div>
                        <div id="popup-4" class="popup-box mfp-fade mfp-hide">
                            <div class="content">
                                <div class="image">
                                    <img src="user/images/works/work4.jpg" alt="">
                                </div>
                                <div class="desc">
                                    <div class="category">Icons</div>
                                    <h4>Capitalist Icons</h4>
                                    <p>
                                        Today we have for you a set of 20 icons available in 2 styles: colored flat and line version, 
                                        designed on a 128px grid. These polished icons come in multiple formats so you can easily include 
                                        them in your projects.
                                    </p>
                                    <a href="#" class="btn waves-effect waves-light">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l4">
                    <div class="card work-item ui all">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="#popup-5" class="activator"><img src="user/images/works/work5.jpg" alt="" /></a>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title grey-text text-darken-4">
                                <a href="#popup-5" class="activator">
                                    <span>Clean and Modern Mapogo UI Kit</span>
                                    <i class="material-icons right">more_vert</i>
                                </a>
                            </h3>
                            <span class="category blue-text text-darken-2">UI Kits</span>
                        </div>
                        <div id="popup-5" class="popup-box mfp-fade mfp-hide">
                            <div class="content">
                                <div class="image">
                                    <img src="user/images/works/work5.jpg" alt="">
                                </div>
                                <div class="desc">
                                    <div class="category">UI Kits</div>
                                    <h4>Mapogo UI Kit</h4>
                                    <p>
                                        Mapogo is an expertly crafted UI kit perfect for iOS designers and developers. The free sample 
                                        includes 10 screens (750×1334 px) that can be easily customized in Photoshop
                                    </p>
                                    <a href="#" class="btn waves-effect waves-light">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l4">
                    <div class="card work-item ui all">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="#popup-6" class="activator"><img src="user/images/works/work6.jpg" alt="" /></a>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title grey-text text-darken-4">
                                <a href="#popup-6" class="activator">
                                    <span>Chameleon UI Kit</span>
                                    <i class="material-icons right">more_vert</i>
                                </a>
                            </h3>
                            <span class="category blue-text text-darken-2">UI Kits</span>
                        </div>
                        <div id="popup-6" class="popup-box mfp-fade mfp-hide">
                            <div class="content">
                                <div class="image">
                                    <img src="user/images/works/work6.jpg" alt="">
                                </div>
                                <div class="desc">
                                    <div class="category">UI Kits</div>
                                    <h4>Chameleon UI Kit</h4>
                                    <p>
                                        The freebie of the day is Chameleon, a modern UI kit perfect to use for creating a stylish and 
                                        clean mobile app. This kit includes 10 screens from various categories that can be easily edited.
                                    </p>
                                    <a href="#" class="btn waves-effect waves-light">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Pricing -->
        <div class="section pricing scrollspy" id="pricing-section">

            <!-- Title -->
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 class="grey-text text-darken-2 left-align">Pricing</h5>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m6 l3">
                    <div class="card-panel">
                        <div class="pricing-table">
                            <div class="pt-title">Basic</div>
                            <div class="pt-amount">
                                <span class="dollar">$</span>
                                <span class="amount">15</span>
                                <span class="period">/hr</span>
                            </div>
                            <div class="pt-feature-list">
                                <ul>
                                    <li class="disable">UI/UX Design</li>
                                    <li>Web Development</li>
                                    <li class="disable">IOS Application <span class="new badge red"></span></li>
                                    <li class="disable">Android Application</li>
                                    <li class="disable">Writing</li>
                                    <li class="disable">Photography <span class="new badge red"></span></li>
                                </ul>
                            </div>
                            <a href="#" class="btn waves-effect waves-light">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3">
                    <div class="card-panel">
                        <div class="pricing-table">
                            <div class="pt-title">Start-Up</div>
                            <div class="pt-amount">
                                <span class="dollar">$</span>
                                <span class="amount">29</span>
                                <span class="period">/hr</span>
                            </div>
                            <div class="pt-feature-list">
                                <ul>
                                    <li>UI/UX Design</li>
                                    <li>Web Development</li>
                                    <li class="disable">IOS Application <span class="new badge red"></span></li>
                                    <li class="disable">Android Application</li>
                                    <li class="disable">Writing</li>
                                    <li class="disable">Photography <span class="new badge red"></span></li>
                                </ul>
                            </div>
                            <a href="#" class="btn waves-effect waves-light">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3">
                    <div class="card-panel">
                        <div class="pricing-table">
                            <div class="pt-title">Business</div>
                            <div class="pt-amount">
                                <span class="dollar">$</span>
                                <span class="amount">49</span>
                                <span class="period">/hr</span>
                            </div>
                            <div class="pt-feature-list">
                                <ul>
                                    <li>UI/UX Design</li>
                                    <li>Web Development</li>
                                    <li>IOS Application <span class="new badge red"></span></li>
                                    <li>Android Application</li>
                                    <li class="disable">Writing</li>
                                    <li class="disable">Photography <span class="new badge red"></span></li>
                                </ul>
                            </div>
                            <a href="#" class="btn waves-effect waves-light">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3">
                    <div class="card-panel">
                        <div class="pricing-table">
                            <div class="pt-title">Enterprise</div>
                            <div class="pt-amount">
                                <span class="dollar">$</span>
                                <span class="amount">89</span>
                                <span class="period">/hr</span>
                            </div>
                            <div class="pt-feature-list">
                                <ul>
                                    <li>UI/UX Design</li>
                                    <li>Web Development</li>
                                    <li>IOS Application <span class="new badge red"></span></li>
                                    <li>Android Application</li>
                                    <li>Writing</li>
                                    <li>Photography <span class="new badge red"></span></li>
                                </ul>
                            </div>
                            <a href="#" class="btn waves-effect waves-light">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog -->
        <div class="section blog scrollspy" id="blog-section">

            <!-- Title -->
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 class="grey-text text-darken-2 left-align">Blog</h5>
                </div>
            </div>
            
            <div class="row">
                <div class="col s12 m12 l4">
                    <div class="card">
                        <div class="card-image">
                            <img src="user/images/blog/blog1.jpg" alt="" />
                            <a href="blog-post.html" class="btn-floating btn-large halfway-fab waves-effect waves-light"><i class="material-icons">more_vert</i></a>
                        </div>
                        <div class="card-content">
                            <span class="card-title">Music Player Design</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi venenatis et tortor ac tincidunt. In euismod iaculis lobortis. Vestibulum posuere molestie ipsum vel...
                            </p>
                        </div>
                        <div class="card-action">
                            <div class="badges">
                                <span class="new badge red" data-badge-caption="">branding</span>
                                <span class="new badge red" data-badge-caption="">ui-ux</span>
                            </div>
                            <div class="date">27 July</div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l4">
                    <div class="card">
                        <div class="card-image">
                            <img src="user/images/blog/blog2.jpg" alt="" />
                            <a href="blog-post.html" class="btn-floating btn-large halfway-fab waves-effect waves-light"><i class="material-icons">more_vert</i></a>
                        </div>
                        <div class="card-content">
                            <span class="card-title">Validate HTML Code</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi venenatis et tortor ac tincidunt. In euismod iaculis lobortis. Vestibulum posuere molestie ipsum vel...
                            </p>
                        </div>
                        <div class="card-action">
                            <div class="badges">
                                <span class="new badge red" data-badge-caption="">html</span>
                                <span class="new badge red" data-badge-caption="">code</span>
                            </div>
                            <div class="date">18 July</div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l4">
                    <div class="card">
                        <div class="card-image">
                            <img src="user/images/blog/blog1.jpg" alt="" />
                            <a href="blog-post.html" class="btn-floating btn-large halfway-fab waves-effect waves-light"><i class="material-icons">more_vert</i></a>
                        </div>
                        <div class="card-content">
                            <span class="card-title">Music Player Design</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi venenatis et tortor ac tincidunt. In euismod iaculis lobortis. Vestibulum posuere molestie ipsum vel...
                            </p>
                        </div>
                        <div class="card-action">
                            <div class="badges">
                                <span class="new badge red" data-badge-caption="">branding</span>
                                <span class="new badge red" data-badge-caption="">ui-ux</span>
                            </div>
                            <div class="date">27 July</div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="center-align">
                <a href="blog.html" class="btn waves-effect waves-light">View Blog</a>
            </div>
        </div>

        <!-- Section Contacts -->
        <div class="section contacts scrollspy last" id="contact-section">

            <!-- Title -->
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 class="grey-text text-darken-2 left-align">Contact Me</h5>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m12 l6">
                    <ul class="collection collection-info z-depth-1">
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s5 grey-text darken-1"><i class="material-icons">business</i> Address:</div>
                                <div class="col s7 grey-text text-darken-4 right-align">
                                    358 W Jefferson St, Bensenville
                                </div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s5 grey-text darken-1"><i class="material-icons">local_phone</i> Phone:</div>
                                <div class="col s7 grey-text text-darken-4 right-align">
                                    <a href="tel:12562548456">+1 256 254 84 56</a>
                                </div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s5 grey-text darken-1"><i class="material-icons">email</i> E-mail:</div>
                                <div class="col s7 grey-text text-darken-4 right-align">
                                    <a href="mailto:smorgan@domain.com">smorgan@domain.com</a>
                                </div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="map" id="map"></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card-panel">
                        <div class="contact-form">
                            <form id="cform" method="post">
                                <h5>Write a message:</h5>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" name="name" id="name_field" />
                                        <label for="name_field">Your Name</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input type="text" name="email" id="email_field" />
                                        <label for="email_field">Your Email</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input type="text" name="subject" id="subject_field" />
                                        <label for="subject_field">Subject</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <textarea name="message" id="message_field" class="materialize-textarea"></textarea>
                                        <label for="message_field">Message</label>
                                    </div>
                                </div>
                                <a class="btn waves-effect waves-light" onclick="$('#cform').submit(); return false;">Send Message</a>
                            </form>
                            <div class="alert-success">
                                <p>Thanks, your message is sent successfully. We will contact you shortly!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <!-- Footer -->
    <footer>
        <div class="copy">© 2016 mateCard. All rights reserved.</div>
    </footer>

</main>
@endsection
