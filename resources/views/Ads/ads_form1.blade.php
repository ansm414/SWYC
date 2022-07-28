<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SWYC Corporation</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style2.css" rel="stylesheet">
       <link href="assets/css/responsive.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Groovin - v4.7.1
  * Template URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="/">SWYC</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="/ab">About</a></li>
          <li><a class="nav-link scrollto" href="#portfolio" >Services</a></li>
        
              <li class="dropdown"><a href="#"><span>View Ads</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="/all_ads1">Deserving People's Ads</a></li>
                  <li><a href="/all_ads">Donating People's Ads</a></li>
                  
                </ul>
              </li>


              @if (Route::has('login'))


                 @auth
                 <li class="nav-item">
        <a class="nav-link " href="/chatify"><i class="fa fa-address-card" style="color:green;"></i> My Chats</a>
      </li>
                 <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="/edituserprofile">Edit Profile</a></li>
                  <li><a href="/abc2">Get Something</a></li>
                  <li><a href="/abc">Donate Something</a></li>
                  <li><a href="/myads">My Ads</a></li>
                  <li> <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></li>



                  
                </ul>
              </li>

          






                 
          

            @endauth

          @endif



          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a href="https://issi.org.pk/issue-brief-on-food-security-challenges-for-pakistan/#:~:text=According%20to%20a%20Pakistan%20Bureau,households%20are%20experiencing%20food%20insecurity" target="_blank">Blog</a></li>
          
          <li><a class="nav-link scrollto" href="/contactus">Contact</a></li>

         


    @auth





          <li><a href="{{ route('logout') }}" class="getstarted scrollto"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></li>

          @else

              
          
          <li><a class="getstarted scrollto"  href="{{  route('login') }}">Login</a></li>
          
@endauth      
 
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Share What You Can</h2>
          
                @auth
                <div>
                  <a href="{{  route('register') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
                @else
                <div>
                  <a href="{{  route('register') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Register</a>
                </div>
                @endauth
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">See What You Sharing</h2>
                @auth
                <div>
                  <a href="{{  route('register') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
                @else
                <div>
                  <a href="{{  route('register') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Register</a>
                </div>
                @endauth

              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(assets/img/3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Got Something To Share</h2>
                @auth
                <div>
                  <a href="{{  route('register') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
                @else
                <div>
                  <a href="{{  route('register') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Register</a>
                </div>
                @endauth
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->
      
  <div class="" style="display:grid;place-items:center;margin-top:5px;margin-bottom:5px;height:80vh;">
  <div class="w-50" style="border:1px solid grey;padding:20px;border-radius:20px;">
<form method="POST" action="/abc3">
    @csrf
   
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="Title" placeholder="Title" name="title">
    </div>

 

    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" class="form-control" id="description" placeholder="Description" name="description">
    </div>

    <div class="form-group">
      <label for="address">Address</label>
      <input type="text" class="form-control" id="address" placeholder="Address" name="address">
    </div>

    <div class="form-group">
      <label for="city">City</label>
      <input type="text" class="form-control" id="city" placeholder="City" name="city">
    </div>

    <div class="form-group">
      
      <input type="submit" class="form-control btn-success mt-3 w-25" value="Publish Ad">
    </div>
</div>
</form>
</div>
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>SWYC</h3>
             
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Find Products</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Food</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Non Food</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">What you want? </a></li>
          
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Subsribe your queries</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>SWYP</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/groovin-free-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">SWYC Developers</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>


