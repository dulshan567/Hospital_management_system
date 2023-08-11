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
@media  only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
@import  url(https://fonts.googleapis.com/css?family=Anonymous+Pro);
/* Base */

h2 {
text-align: center;
  position: relative;
  color: hsl(0, 0%, 68%);
  font-weight: bold;
  font-family: "Anonymous Pro", monospace;
  letter-spacing: 7px;
  overflow: hidden;
  border-right: 2px solid hsl(0, 0%, 80%);
  white-space: nowrap;
  animation: typewriter 4s steps(50) 1s 2 normal both,
    blinkTextCursor 5000ms infinite;
}

@keyframes  typewriter {
  from {
    width: 50%;
  }
  to {
    width: 100%;
  }
}
@keyframes  blinkTextCursor {
  from {
    border-right-color: hsl(0, 0%, 80%);
  }
  to {
    border-right-color: transparent;
  }
}
.gradient-custom {
 
    /* fallback for old browsers */
    background: #f6d365;
  
    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to left, rgba(246,211,101,0.8), rgba(253,160,133,0.8));
  
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to left, rgba(246,211,101,0.8), rgba(253,160,133,0.8))
  
  }
  .gradient {
    /* fallback for old browsers */
    background: #f6d365;
  
    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right, rgba(246,211,101,1), rgba(253,160,133,1));
  
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, rgba(246,211,101,1), rgba(253,160,133,1))
  }
</style>
</head>
<body>


  <!-- Back to top button -->
  <div class="back-to-top"></div>
  <?php echo $__env->make('head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- <div class="mySlides fade">
  <div class="numbertext">1 / 3</div> -->
  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/management-header.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
      <h1 class="display-4"><b>CONTACT US</b></h1>
        <span class="subhead">We are committed to improving our service and scaling new heghts each year. In order to serve you better we welcome your valuable advice and feed-back.</span>
        <br> <br> <br>  <a href="#" class="btn btn-success">389, Negombo Road,<br> Wattala.<br> 
0117 888 888<br> 
info@g*hospital.com
Follow Us on  </a>
        
      </div>
    </div>
  </div>

</div>
<br><br>
<center>
<h3>Contact G+ Hospital</h3><br>
<h4 style="color:#ff6f00;">Please complete the form below, so we can provide quick and efficient service.</h4>
</center>
  <form class="main-form" action="" method="POST">

<?php echo csrf_field(); ?>
  <div class="row mt-5 ">
    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
      <input type="text" name="name" class="form-control" placeholder="Full name">
    </div>
    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
      <input type="text" name="email" class="form-control" placeholder="Email address..">
    </div>
   
    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
      <input type="text" name="number" class="form-control" placeholder="Phone Number..">
    </div>
    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
      <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
    </div>
  </div>

  <button type="submit" class="btn btn-primary mt-3 wow zoomIn"><span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>Send</button>
  </form>
<br><hr>
<div class="gradient">
    <center></center><h2 style="color:white; text-align:center">Call Us  +9471 2525 4257</h2> <center>
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

<?php echo $__env->make('futter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
</html><?php /**PATH C:\xwamp\htdocs\laraval\Hospital-app\resources\views/Contact.blade.php ENDPATH**/ ?>