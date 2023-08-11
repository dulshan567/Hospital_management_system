<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

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

@keyframes  fade {
  from {opacity: .6} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media  only screen and (max-width: 3000px) {
  .text {font-size: 11px}
}
</style>

</head>
<body>

<header>
  <!-- Back and log in -->
            <?php if(Route::has('login')): ?>
            <?php if(auth()->guard()->check()): ?>

                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                        <!-- <div class="m-4">
     Success Alert -->
                          <!-- <div class="alert alert-success alert-dismissible fade show">
                              <strong>Log In Success!</strong> <button type="button" class="btn btn-outline-danger"><b>Your Number Is : <?php echo e(Auth::user()->id); ?></b> </button>
                              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                          </div>
                        </div>                  -->
                       

                        <?php endif; ?>

            <?php else: ?>
         <?php endif; ?>
            <?php endif; ?>
    
  </header>
  <!-- Back to top button -->
  <div class="back-to-top"></div>
  
  <?php echo $__env->make('head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/11906113_4855148.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Let's make your life happier</span>
        <h1 class="display-4">Healthy Living</h1>
        <a href="#" class="btn btn-primary">Let's Consult</a>
      </div>
    </div>
  </div>

</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <div class="page-hero bg-image " style="background-image: url(../assets/img/mainimg/Picsart_23-06-04_19-35-56-223.jpg); ">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead"></span>
        <h1 class="display-4"><Healthy Living/h1>
        <a href="#" class="btn btn-primary"></a>
      </div>
    </div>
  </div>

</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <div class="page-hero bg-image" style="background-image: url(../assets/img/mainimg/ftyuy.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead"></span>
        <h1 class="display-4"><Healthy Living/h1>
        <a href="#" class="btn btn-primary"></a>
      </div>
    </div>
  </div>

</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <div class="page-hero bg-image " style="background-image: url(../assets/img/mainimg/yg.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead"></span>
        <h1 class="display-4"></h1>
        <a href="#" class="btn btn-primary"></a>
      </div>
    </div>
  </div>

</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <div class="page-hero bg-image" style="background-image: url(../assets/img/mainimg/bp.jpg); background-size: cover; background-position: center;">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead"></span>
        <h1 class="display-4"></h1>
        <a href="#" class="btn btn-primary"></a>
      </div>
    </div>
  </div>
</div>


</div>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

  <div class="bg-light">
    <div class="page-section py-0 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-red">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Chat</span> with a doctors</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-green">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>One</span>-Health Protection</p>
            </div>
          </div>
        
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-red">
                <span class="mai-basket"></span>
              </div>
              <p><span>One</span>-Health Pharmacy</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to Your Health <br> Center</h1>
            Welcome to G+ Hospitals – You and your loved ones are safe in our internationally accredited care. Our scope of healthcare services revolves around patient safety and we offer you highly specialized medical care including tertiary and super specialty care at our state-of-the-art facilities. At our hospitals in Wattala and Thalawathugoda, you can rest easy while our practiced and qualified medical staff works around the clock to ensure a superior patient experience. A panel of over 300 visiting and resident specialist consultants and our teams of care givers ensure you the best of care for all your health problems. This being the case, we have always been recognized as one of the leading healthcare providers in Sri Lanka bringing in international best practices ensuring superior outcomes.
            <p class="text-grey mb-4">G+ Hospitals has embarked on a digital journey to be Sri Lanka’s No.1 Smart Hospital. We have already introduced many innovative digital health solutions including Tele medicine, Online pharmacy, Online laboratory portal and Tele physiotherapy.</p>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/bg-doctor.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

<?php echo $__env->make('ourservices', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php if($doctor!==NULL): ?>:

<?php echo $__env->make('doctor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>;
<?php if($news!==NULL): ?>:
<?php echo $__env->make('latestn', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>;

<!-- Assuming $user represents the newly registered user -->


<?php echo $__env->make('futter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script> 

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
</html><?php /**PATH C:\xwamp\htdocs\laraval\Hospital-app\resources\views/welcome.blade.php ENDPATH**/ ?>