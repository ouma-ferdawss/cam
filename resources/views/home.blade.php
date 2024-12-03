<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Tech Conference</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicons -->
        <link href="img/favicon.ico" rel="icon">
        <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:300,400,500,700,900" rel="stylesheet"> 

        <!-- Bootstrap CSS File -->
        <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    </head>

    <body>
        <!-- Header Start -->
        <header id="header">
            <div class="container-fluid">

                <div id="logo" class="pull-left">
                    <!-- Uncomment below if you prefer to use text logo -->
                    <!-- <h1><a href="index.html" class="scrollto">Tech Conference</a></h1> -->
                    {{--<a href="{{url('/')}}"><img src="{{asset('assets/img/logo.png')}}" alt="Logo" /></a>--}}
                    <a href="{{route('home')}}"><img src="{{asset('assets/img/logo.png')}}" alt="Logo" /></a>
                </div>

                <!--nav id="nav-menu-container">
                  <  <ul class="nav-menu">
                        <li class="menu-active"><a href="index.html">Home</a></li>
                        li><a href="about.html">About</a></li>
                        <li><a href="speaker.html">Speakers</a></li>
                        <li><a href="agenda.html">Agenda</a></li>
                        <li><a href="venue.html">Venue</a></li>
                        <li><a href="ticket.html">Tickets</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="login.html">Login</a></li>>
                    </ul>
                </nav>
                <#nav-menu-container -->
            </div>
        </header>
        <!-- #header end -->

        <!-- Intro Section Start-->
        <section id="intro">
            <div class="intro-container">
                <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                    <ol class="carousel-indicators"></ol>

                    <div class="carousel-inner" role="listbox">

                        <div class="carousel-item active">
                            <div class="carousel-background"><img src="{{asset('assets/img/slider-1.jpg')}}" alt=""></div>
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2>CAM World Elite </h2>
                                    <p>
                                        World Elite Launch, UEFA CL Campaign & Salesforce Training.
                                    </p>
                                    <a href="{{route('participate.form')}}" class="btn-get-started scrollto">Confirmer ma présence</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- #intro end -->

  <!-- Ticket Section Start -->
  <section id="ticket">
    <div class="container">
        <header class="section-header">
            <h3>À propos</h3>
        </header>
        <div class="row">
            <div class="col-md-4">
                <div class="single-ticket">
                    <h2 style="padding: 28px;">DATE : </br> 17/12/2024</h2>
                
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-ticket">
                    <h2 style="padding: 3px;">LIEU :</br> Four Seasons Casablanca</h2>
                   
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-ticket">

                   <h2 style="padding: 20px;"> <a href="/participate">Confirmer ma présence </a></h2>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Ticket Section End -->






        <!--About Section Start>
        <section id="about">
            <div class="container">
                <header class="section-header">
                    <h3>About Us</h3>
                </header>
                <div class="row">
                    <div class="col-md-4 about-col-1">
                        <div class="about-title">  
                            <h1>Welcome to Tech Innovation Conference 2019</h1>
                            <a href="#">Buy Tickets</a>
                        </div>
                    </div>
                    <div class="col-md-8 about-col-2">
                        <div class="about-imgs">
                            <div class="about-img">
                                <img class="img-fluid" src="{{asset('assets/img/about.jpg')}}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <About Section end -->
      
        
        <!-- Agenda Section Start -->


        <section id="agenda">
            <div class="container">
                <header class="section-header text-center mb-5">
                    <h3 class="section-title">Programme de l'événement</h3>
                </header>
        
                <div class="row align-items-center">
                    <!-- Timeline Content -->
                    <div class="col-lg-6">
                        <div class="timeline">
                            <div class="timeline-item">
                                <div class="timeline-time">18:30</div>
                                <div class="timeline-content">
                                    <h4>Accueil des invités</h4>
                                    <h4>Découverte des activités</h4>
                                </div>
                            </div>
        
                            <div class="timeline-item">
                                <div class="timeline-time">19:30</div>
                                <div class="timeline-content">
                                    <h4>Discours de bienvenue</h4>
                                    <h4>Animation musicale « Violoniste »</h4>
                                </div>
                            </div>
        
                            <div class="timeline-item">
                                <div class="timeline-time">19:45</div>
                                <div class="timeline-content">
                                    <h4>Mot des présidents MC x CAM</h4>
                                </div>
                            </div>
        
                            <div class="timeline-item">
                                <div class="timeline-time">20:05</div>
                                <div class="timeline-content">
                                    <h4>Reveal de la carte WE</h4>
                                </div>
                            </div>
        
                            <div class="timeline-item">
                                <div class="timeline-time">20:10</div>
                                <div class="timeline-content">
                                    <h4>Cocktail de clôture</h4>
                                    <h4>Animation musicale « DJ »</h4>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <!-- Image Content -->
                    <div class="col-lg-6 text-center">
                        <img src="{{asset('assets/img/agenda.png')}}" alt="Event Image" class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
        </section>
        
        

        <!-- Agenda Section End -->


        <!-- Stand Section Start -->
        <section id="speaker">
            <div class="container">
                <header class="section-header">
                    <h3>Launch Event</h3>
                </header>
                <div class="row">
                    <div class="col-md-6 img-cols">
                        <div class="img-col">
                            <img class="img-fluid" src="{{asset('assets/img/travel.png')}}">
                        </div>
                    </div>
                    <div class="col-md-6 content-cols content-cols-right">
                        <div class="content-col">
                            <h3>STAND 1 : "TRAVEL Zone"</h3>
                        </br>
                            <p>
                                Une piste interactive plonge les invités dans l’univers du voyage avec des écrans géants diffusant des visuels captivants. Cette expérience illustre les avantages de la carte biométrique pour des voyages sécurisés et simplifiés.
                            </p>
                            
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 img-cols d-block d-md-none">
                        <div class="img-col">
                            <img class="img-fluid" src="{{asset('assets/img/information.png')}}">
                        </div>
                    </div>
                    <div class="col-md-6 content-cols  content-cols-left">
                        <div class="content-col">
                            <h3>STAND 2 : "INFORMATION Zone"</h3>
                        </br>
                            <p>
                                Un stand interactif pour découvrir les avantages de la carte via des vidéos et totems digitaux. Une expérience immersive mettant en valeur ses points forts.
                            </p>
                            
                        </div>
                    </div>
                    <div class="col-md-6 img-cols d-none d-md-block">
                        <div class="img-col">
                            <img class="img-fluid" src="{{asset('assets/img/information.png')}}">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 img-cols">
                        <div class="img-col">
                            <img class="img-fluid" src="{{asset('assets/img/gaming.png')}}">
                        </div>
                    </div>
                    <div class="col-md-6 content-cols content-cols-right">
                        <div class="content-col">
                            <h3>STAND 3 : "Gaming Zone"</h3>
                            </br>
                            <p>
                                Un espace fun où innovation et divertissement se rencontrent ! Testez la "Sharing Box AI" et amusez-vous avec des jeux interactifs liés à la carte biométrique.
                            </p>            
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 img-cols d-block d-md-none">
                        <div class="img-col">
                            <img class="img-fluid" src="{{asset('assets/img/zone.png')}}">
                        </div>
                    </div>
                    <div class="col-md-6 content-cols  content-cols-left">
                        <div class="content-col">
                            <h3>STAND 4 : "Experience Zone"</h3>
                            </br>
                            <p>
                                Vivez une immersion unique avec des casques Oculus, explorant des scénarios réalistes intégrant la carte biométrique. Une expérience inoubliable !
                            </p>
                           
                        </div>
                    </div>
                    <div class="col-md-6 img-cols d-none d-md-block">
                        <div class="img-col">
                            <img class="img-fluid" src="{{asset('assets/img/zone.png')}}">
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- Stand Section End -->   
        
      

        <!-- Call To Action Start -->
        <section id="call-to-action">
            <div class="container text-center">
                <!--h3>Click Below to Call Us</h3-->
                <a class="cta-btn" href="#">Confirmer ma présence</a>
            </div>
        </section>
        <!-- Call To Action end -->

       

        <!-- Footer Start -->
        <footer id="footer">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <a href="/">Crédit Agricole</a>. Tous droits réservés<br>
					Site réalisé par  <a href="https://nextbridge.ma/">Next Bridge</a>
                </div>
            </div>
        </footer>
        <!-- Footer end -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        <!-- Uncomment below i you want to use a preloader -->
        <!-- <div id="preloader"></div> -->

        <!-- JavaScript Libraries -->
        <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/vendor/jquery/jquery-migrate.min.js')}}"></script>
        <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/vendor/easing/easing.min.js')}}"></script>
        <script src="{{asset('assets/vendor/superfish/hoverIntent.js')}}"></script>
        <script src="{{asset('assets/vendor/superfish/superfish.min.js')}}"></script>
        <script src="{{asset('assets/vendor/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('assets/vendor/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/vendor/touchSwipe/jquery.touchSwipe.min.js')}}"></script>

        <!-- Main Javascript File -->
        <script src="{{asset('assets/js/main.js')}}"></script>

    </body>
</html>
