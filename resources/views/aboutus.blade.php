<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>G+ Hospital.lk</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css"
  rel="stylesheet"
/>
  <style>
  .fa-1x {
  font-size: 1.5rem;
}
.navbar-toggler.toggler-example {
  cursor: pointer;
}
.dark-blue-text {
  color: #0A38F5;
}
.dark-pink-text {
  color: #AC003A;
}
.dark-amber-text {
  color: #ff6f00;
}
.dark-teal-text {
  color: #004d40;
}
/* Slideshow container */
.slideshow-container {
 
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}



/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration:7s;
}

@keyframes fade {
  from {opacity: .6} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
.gradient-custom {
 
 /* fallback for old browsers */
 background: #f6d365;

 /* Chrome 10-25, Safari 5.1-6 */
 background: -webkit-linear-gradient(to left, rgba(246,211,101,0.8), rgba(253,160,133,0.8));

 /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
 background: linear-gradient(to left, rgba(246,211,101,0.8), rgba(253,160,133,0.8))

}
</style>
</head>
<body>


  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><b>Emargency</b><span class="mai-call text-primary"></span> 1500</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> mail@ghospital.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
   
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-danger">G+</span>&nbsp;Hospital</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            
            <a class="nav-link" href="/">Home &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
          </li>
         
          
          <li class="nav-item">
            <a class="nav-link" href="doctor">Doctors &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('chat')}}">Chat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('myprofile')}}">My Profile&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('Contact')}}">Contact &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('about')}}">About Us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
          </li>
  <!-- Back and log in -->
            @if(Route::has('login'))
            @Auth

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">
                        <a type="button" class="btn btn-danger"  href="{{url('getappointment')}}"  >
                          Get Appointment &nbsp; </a> &nbsp;
                        </li>
                        <li class="nav-item">
                        <a type="button" class="btn btn-danger"  href="{{url('myappointment')}}"  >
                          My Appointment </a>
                          </li> &nbsp;
                          <button type="button" class="btn btn-success"><b>{{ Auth::user()->name }}</b> </button>
                                    
                          &nbsp; &nbsp;
                               <a id="menu-btn" class="fas fa-bars" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                 
                                
                                </a>
                                 <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{url('myprofile')}}">Profile</a>
                                    
                                    <a class="dropdown-item" href="/">Home</a>
                                    <a class="dropdown-item" href="{{url('pharmacies')}}">pharmacy</a>
                                    <a class="dropdown-item" href="{{url('doctors')}}">Doctors</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                           

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </div>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
    
    </div>
            @else

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
              
            </li>
            <li class="nav-item">
             
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>
            &nbsp; &nbsp; &nbsp;

                            </li>
                                  
                                <a id="menu-btn" class="fas fa-bars" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                 </a>
                                 <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/">Home</a>
                                    <a class="dropdown-item" href="{{url('pharmacies')}}">pharmacy</a>
                                    <a class="dropdown-item" href="{{url('doctors')}}">Doctors</a>
                                   </div>
                                </div>
                            </li>

            @endauth
            @endif
          </ul>
        </div> <!-- .navbar-collapse -->
        
     
      </div> <!-- .container -->
     <!--Navbar-->



<!--/.Navbar-->
    </nav>
  </header>
<br>
<center><h1 >About Us</h1></center>
<h4 style="color: #ff6f00;">G+ Hospitals -The First Internationally accredited hospitals chain in Sri Lanka</h4>
<br><br>

<div class="note note-primary mb-3">
  <strong>Welcome to G+ Hospitals :</strong> You and your loved ones are safe in our internationally accredited care.
   Our scope of healthcare services revolves around patient safety and we offer you highly specialized medical care including tertiary and super specialty care at our state-of-the-art facilities. At our hospitals in Watala and Thalawathugoda, you can rest easy while our practiced and qualified medical staff works around the clock to ensure a superior patient experience. A panel of over 300 visiting and resident specialist consultants and our teams of care givers ensure you the best of care for all your health problems.
    This being the case, we have always been recognized as one of the leading healthcare providers in Sri Lanka bringing in international best practices ensuring superior outcomes
</div>

<div class="note note-primary mb-3">
<strong>Superior care</strong>
Our hospitals are well-equipped with modern facilities that make use of the latest technological advancements to ensure your comfort as well as best clinical outcome. As an internationally accredited hospital chain, we always remain mindful of the requirement to offer world class services to you and your family. We’ve secured the services of some of the country’s finest talent in the medical arena to provide the best possible care and guidance to you. Our aesthetically pleasing hospital interiors, were specifically designed so to help you gain a sense of peace to help with the healing process.
</div>
<div class="note note-primary mb-3">
<p><br>By the way, if you need a referral to a great writing site which can help you with essays on any topic according to health or medicine, then I believe I can give you one. I used one UK essay writing service last year that not only delivered on time, but also helped me gain my first A in this course. The booking process was easy, the writer I was given was easy to communicate with and seemed to not only understand my needs but also pre-empt others that I was not even aware of. You can follow this UK essay writing service for the best essay writing service experience ever. I guarantee you that this source at UK essays will do their best for you!
</div>
<div class="note note-primary mb-3">
<strong>Our Services</strong>
<p><br>We take care of your preventive and curative healthcare requirements at our state-of-the-art facilities. Collectively, our hospitals can accommodate 190 in-house patients where you can be rest assured of receiving care on par with international standards. Our island wide laboratory services network is well-equipped with the cutting-edge technology, equipment and skilled professionals to provide accurate diagnostic investigations. We’ve purposely built our hospitals to align with international standards and equipped each area with the latest technological advancements. You can visit our Accident and Emergency units any time during the day and night to receive medical or surgical emergency care.
</div>

<div class="note note-primary mb-3">
<strong>We take care of you</strong>
Within the safe confines of our ultra-clean hospital environments, we employ experienced healthcare professionals to care for you. Our medical and support staff is trained to provide compassionate care while paying attention to detail. You and your family members can enjoy the high end comfort of our hospital rooms, designed to help expedite the recovery process.
</div>

<br> <hr>
  <div class="gradient-custom">
  <h3 style="color:black; text-align:center">
    <b>Keep me updated with latest promotions</b></h3> <center> 

  <div class="col-md-3">
  <div class="form-outline">
    <input type="search" id="form1" class="form-control" />
    <label class="form-label" for="form1">Enter Email</label>
  </div><br>
  <button type="button" class="btn btn-primary">Subscribe Now
    </button>
</div>

  </div>
   

<hr><br>
@include('futter')
 

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"
></script>
</body>
</html>