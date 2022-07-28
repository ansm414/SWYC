
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Share What You Can</title>
    <meta name="theme-color" content="rgb(255,255,255)">
    <meta property="og:image" content="assets/img/logosimple.jpeg">
    <meta name="description" content="swyc.com
    Share What you can is a place where anyone can help everyone. We are a group of individuals who wanted to help everyone and give a platform through which everyone can anyone who wants to help can help. on Share what you can you dont just share food you can share anything from food to anything. you got something that is working but old and can be helpful for someone just post a ad and the related person will contact you and thus clearing out the excessive material in your house and helpoing the people in need. Food is wasted on daily basis and that food can be actually given to people and help them go through the day.not only that ngos and trust can be benifitted by this as this is a free for all plateform and can help provide the trust with much material they want.">
    <meta property="og:type" content="website">
    <link rel="icon" type="image/jpeg" sizes="1280x492" href="assets/img/logosimple.jpeg">
    <link rel="icon" type="image/jpeg" sizes="1280x492" href="assets/img/logosimple.jpeg">
    <link rel="icon" type="image/jpeg" sizes="1280x492" href="assets/img/logosimple.jpeg">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="manifest" href="manifest.json">
   
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Adamina">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,600,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/--mp---Multiple-items-slider-responsive.css">
    <link rel="stylesheet" href="assets/css/Animated-Pretty-Product-List-v12.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-Chat.css">
    <link rel="stylesheet" href="assets/css/canitoLogin.css">
    <link rel="stylesheet" href="assets/css/Competences-Grid---3-Columns---Hover-Effect-Pop---Icons.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Login-Box-En.css">
    <link rel="stylesheet" href="assets/css/Mega-Menu-Dropdown-100-Editable---Ambrodu.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/project-card.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
</head>
<style>
    *{
        font-family: 'PT Sans', sans-serif;
    }
    .anim{
        animation: chaneColor 6s infinite;
    }
    @keyframes chaneColor{
        0%{color:greenyellow;}
        25%{color: midnightblue;}
        50%{color: orchid;}
        100%{color: papayawhip;}
    }
</style>
<body>
<div class="">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand ml-5" href="#"><img src="assets/img/logosimple.jpeg" style="height:40px;width:100px;"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse ml-5" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" style="margin-left:100px;">
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fa fa-home" style="color: green;"></i> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-phone" style="color: green;"></i> Contact Us</a>
      </li>
     
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fa fa-eye" style="color: green;"></i> View Ads
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/all_ads1"><i class="fa fa-hand-lizard-o" aria-hidden="true" style="color:green;"></i> Deserving People's Ads</a>
    
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/all_ads"><i class="fa fa-handshake" style="color:green;"></i> Donating People's Ads</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#"><i class="fa fa-address-card" style="color:green;"></i> About Us</a>
      </li>

      @if (Route::has('login'))
                 @auth
                 <li class="nav-item">
        <a class="nav-link " href="/chatify"><i class="fa fa-address-card" style="color:green;"></i> My Chats</a>
      </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{ url('/home') }}"><i class="fa fa-user" style="color:green;"></i> Profile</a>
                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/edituserprofile"> <i class="fa fa-pencil" aria-hidden="true" style="color:green;"></i> Edit Profile</a>
                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item dropdown dropdown-toggle" data-toggle="dropdown" href=""> <i class="fa fa-plus-circle" aria-hidden="true" style="color:green;"></i> Post Ad</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/abc2"><i class="fa fa-hand-lizard-o" aria-hidden="true" style="color:green;"></i> Get Something</a>
            
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/abc"><i class="fa fa-handshake" style="color:green;"></i> Donate Something</a>
                </div>



                 
                 
                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="/myads"><i class="fa fa-arrow-down" aria-hidden="true" style="color:green;"></i> My Ads</a>

                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      <i class="fa fa-sign-out" aria-hidden="true" style="color:green;"></i>  {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </div>


                         </li>
                       
                    @else
                    <li class="nav-item">
                           <a class="nav-link" href="{{  route('login') }}"><i class="fa fa-sign-in" aria-hidden="true" style="color:green;"></i> Login</a>
                         </li>
                       

                        @if (Route::has('register'))
                        <li class="nav-item">
                           <a class="nav-link " href="{{  route('register') }}"><i class="fa fa-plus-square" aria-hidden="true" style="color:green;"></i> Register</a>
                         </li>
                            
                        @endif
                    @endauth
            @endif



          

    </ul>
    <form class="form-inline ">
    <div class="input-group ">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-handshake" style="color:green;"></i></span>
  </div>
  <input type="text" class="form-control text-center" placeholder="Add Title" aria-label="Username" aria-describedby="basic-addon1">
</div>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>
    <div style="background-repeat:no-repeat;background-attachment:fixed;background-size:cover;height: 100vh;background-image: url('https://images.unsplash.com/photo-1553095066-5014bc7b7f2d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8d2FsbCUyMGJhY2tncm91bmR8ZW58MHx8MHx8&w=1000&q=80');display: flex;justify-content: center;align-items: center;" >

        <div class="text-center">
            <p></p>
            <p></p>

        <h1 class="text-success" style="font-size: 60px;" > <span class="anim">Share What You Can</span></h1>
        <button class=" btn-info ">Get Started</button>
    </div>

    </div>
    <!-- </div style="width:50vw;height:auto;"> -->
    <div  style="background-color:white;">
    <div class="container ">
        <div class="row" data-aos="fade-up" data-aos-duration="650">
            <div class="col-6 align-center "><img class="img-fluid  box-shadow" src="assets/img/slogan.jpeg"></div>
            <div class="col-6 text-center  box-shadow" id="what">
                <h2 style="color: green;" class="text-center text-black-50">What is SWYC?</h2>
                <p style="text-align: justify;
                text-justify: inter-word;font-weight: bold;">Share What you can is a place where anyone can help everyone. We are a group of individuals who wanted to help everyone and give a platform through which everyone can anyone who wants to help can help. on Share what you can you dont
                    just share food you can share anything from food to anything. you got something that is working but old and can be helpful for someone just post a ad and the related person will contact you and thus clearing out the excessive material
                    in your house and helpoing the people in need. Food is wasted on daily basis and that food can be actually given to people and help them go through the day.not only that ngos and trust can be benifitted by this as this is a free
                    for all plateform and can help provide the trust with much material they want.<br></p>
                    <a class="btn btn-outline-success " role="button" href="Aboutus.blade.html">Learn More About us</a>
                </div>
        </div>
        <div class="row" data-aos="fade-right" data-aos-duration="650">
            <div class="col-md-6 text-center h-50  box-shadow" id="foodwaste">
                <h2 class="text-black-50 text-center">FOOD WASTE</h2>
                <p style="text-align: justify;
                text-justify: inter-word;font-weight: bold;">Thousand of Tons of food is wasted annually and completly clean and edible food is wasted for no reason. 40 to 50% off fruits and vegetables are wasted every year that can be given to people who need food and help them get over their
                    day. We all have foods in out homes and eat it daily about 30% of the cereals are wasted annually. why dont we just give it to hungry people and help stop this waste. 20 % of dairy and meat is wasted annually by us many time it
                    is just sitting there and waiting to become inedible why can,t we stop this. if you want to stop this just join SWYC and share whatever you can and become a world saver. become a hero just by sharing food.<br></p><a class="btn btn-outline-success"
                    role="button" href="mission.blade.html">Learn More About Food Waste</a></div>
            <div class="col-md-6 " data-aos="fade-left" data-aos-duration="500"><img class="img-fluid  box-shadow" src="assets/img/food-waste-world-block-2.png" style="width: 100vw;height: 70vh;"></div>
        </div>
        <div class="row" data-aos="fade-right" data-aos-duration="650">
            <div class="col-md-6" data-aos="fade-left" data-aos-duration="500"><img class="img-thumbnail img-fluid  box-shadow" src="assets/img/savefoodwas2te.jpg" style="width: 100vw;height: 70vh;"></div>
            <div class="col-md-6 text-center  box-shadow" id="clear">
                <h3 class="text-uppercase text-black-50 text-center" style="color: green;">Clear out excessive material</h3>
                <p class="text-justify font-weight-bold">We all have things lying around that are completly OK but useless for us. these thing cannot be sold cause they are either old or little bit rough around the edges. they are just lying there waiting to be wasted. these thing can vary
                    from old televisions to old beds that are in the store room and have no place in the house. so just by uploading the thing you can share these thing with the people in need and they can use it.you can share old books that other
                    wise will be recycled and go to waste those same books can help other students that cannot afford them.&nbsp; what are you waiting for start sharing now.cloths are great example old cloths that are going to be thrown away and get
                    wasted share them give it to people who actually need it.</p><a class="btn btn-outline-success" role="button" href="mission.blade.html">Learn More About Sharing things</a></div>
        </div>
    </div>
</div>
     <div style="width: 100%;height: 60vh;background-color: #030c5a;display: grid;place-items: center;">

            <img class="w-50" style="height: 170px;" src="assets/img/savefoodwaste11.jpg">
        </div>

        <div  style="background-color:white;">
        <!-- <div style="width: 100%;height: 100vh;"> -->
            <h1 class="text-center pt-5" style="color: green;">GET STARTED</h1>
            <div class="container" >
                <div class="row ">
                    <div class="col-md-6 col-lg-5 col-sm-12 text-center box-shadow offset-1" data-aos="fade-right" id="procedure">
                        <h2 class="text-center" style="color: green;">How Can I Help<i class="fas fa-hand-holding-heart"></i></h2>
                        <ul class="list-unstyled" style="color: black;">
                            <li><strong>Login to Your SWYC Account</strong></li>
                            <li><strong>Give product details</strong></li>
                            <li><strong>Upload Images</strong></li>
                            <li><strong>Post</strong></li>
                        </ul><a class="btn btn-outline-success text-center" role="button" href="signup.blade.html">Start helping Now!!!</a></div>
                    <div class="col-md-6 col-lg-5 col-12 text-center box-shadow" data-aos="fade-left" id="procedure">
                        <h2 class="text-center" style="color: green;">How Can I Get Things</h2>
                        <ul class="list-unstyled" style="color: black;">
                            <li><strong>Login In To you SWYC account</strong></li>
                            <li><strong>Search for the product</strong></li>
                            <li><strong>contact the owner</strong></li>
                            <li><strong>recieve it</strong></li>
                        </ul><a class="btn btn-outline-success" role="button" href="signup.blade.html">Join us now</a></div>
                    <div class="col-md-6 offset-xl-3 col-12 text-center box-shadow" data-aos="fade-right" data-aos-duration="550" id="procedure" style="margin-top: 10px;">
                        <h2 class="text-center" style="color: green;">Need Anything</h2>
                        <ul class="list-unstyled" style="color: black;">
                            <li><strong>Login In To you SWYC account</strong></li>
                            <li><strong>Goto to upload ad</strong></li>
                            <li><strong>add Ad title and discription</strong></li>
                            <li><strong>Post Ad</strong></li>
                            <li><strong>If someone has it he/she will contact You</strong></li>
                        </ul><a class="btn btn-outline-success" role="button" href="signup.blade.html">Join US now!!!</a></div>
                </div>
            </div>

</div>

    <div  style="background-color:white;">

                <!-- other Sharing -->
            <div class="container">
                <div class="row">
                    <div class="col text-center"><a class="btn btn-block btn-dark" role="button" href="index.blade.html" style="font-size: 30px;">See What others are sharing!!!!!</a></div>
                </div>
            </div>

</div>
            <!-- </div> -->

                <!-- Footer Start -->
            <div class="footer-clean" style="background-color: rgb(0,0,0);color: rgb(255,255,255);">
            <footer>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-4 col-md-3 item">
                            <h3>Our Mission</h3>
                            <ul>
                                <li><a href="mission.blade.html" style="font-size: 14px;">Food Waste</a></li>
                                <li><a href="mission.blade.html" style="font-size: 14px;">Sharing is Caring</a></li>
                                <li><a href="mission.blade.html" style="font-size: 14px;">Reuse useable material</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-3 item">
                            <h3>About Us</h3>
                            <ul>
                                <li><a href="Aboutus.blade.html" style="font-size: 14px;">Our Team</a></li>
                                <li><a href="Aboutus.blade.html" style="font-size: 14px;">Contact Us</a></li>
                                <li><a href="Aboutus.blade.html" style="font-size: 14px;">Who Are We</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-3 item">
                            <h3>Find Products</h3>
                            <ul>
                                <li><a href="searchresult.blade.html" style="font-size: 14px;">Food&nbsp;</a></li>
                                <li><a href="searchresult.blade.html" style="font-size: 14px;">Non-Food</a></li>
                                <li><a href="#" style="font-size: 14px;" target="_top">What Do you want</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                            <p class="copyright"
                                style="color: white;">Share What You Can © 2020</p>
                        </div>
                    </div>
                </div>
            </footer>
            </div>
           
            <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
    <script>
	    var botmanWidget = {
            title:'Chat With SWYC',
	        aboutText: 'Powered by SWYC',
	        introMessage: "✋ Hi! I'm from SWYC",
            desktopHeight: 350,
            bubbleAvatarUrl: ""
    
	    };
    </script>
  
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
          <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/--mp---Multiple-items-slider-responsive-1.js"></script>
    <script src="assets/js/--mp---Multiple-items-slider-responsive.js"></script>
    <script src="assets/js/Animated-Pretty-Product-List-v12.js"></script>
    <script src="assets/js/togglelocation.js"></script>
</body>

</html>
