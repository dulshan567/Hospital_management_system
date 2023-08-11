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

</style>
</head>
<body>


  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <?php echo $__env->make('head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <section style="background-color: #E8F5E9;">
  <div class="container py-5">
    <div class="row justify-content-center mb-3">
      <div class="col-md-12 col-xl-10">
        <div class="card shadow-0 border rounded-3">

          <div class="card-body">
            <div class="row">
              <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                <div class="bg-image hover-zoom ripple rounded ripple-surface">
                  <img src="Newsimage/<?php echo e($newss->image); ?>"
                    class="w-100" />
                  <a href="#!">
                    <div class="hover-overlay">
                      <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-xl-6">
                <h5><?php echo e($newss->Title); ?></h5>
                <div class="d-flex flex-row">
                
                
                <p class="text-truncate mb-4 mb-md-0">
                <?php echo e($newss->Content); ?>

                </p>
              </div>
              <span class="mai-time"></span> <?php echo e($newss->created_at); ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
    </div>
  </div>
  <
</section>

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
</html>

<?php /**PATH C:\xwamp\htdocs\laraval\Hospital-app\resources\views/news.blade.php ENDPATH**/ ?>