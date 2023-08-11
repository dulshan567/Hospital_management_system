
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

</head>
<body>


<?php echo $__env->make('head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <div class="page-section bg-green">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Our All Doctors</h1>
      <div class="row mt-5">
       
      <?php $__currentLoopData = $doctor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctors): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#"></a>
              </div>
              <a href="blog-details.html" class="post-thumb">
                <img style="height:250px !important" src="doctorimage/<?php echo e($doctors->image); ?>" alt="">
              </a>
            </div>

            
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">Dr. <?php echo e($doctors->name); ?></a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                  
                  <h6 class="post-title"><a href="blog-details.html"><?php echo e($doctors->specialty); ?></a></h6>
                  </div>
                  <span>Diego Simmons</span><br>
                 
                </div>
                <a ><br>Read More</a>
              </div>
             
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
        <div class="col-12 text-center mt-4 wow zoomIn">
      <a href="blog.html" class="btn btn-primary">Loading...<div class="fa-3x">
  <i class="fas fa-spinner fa-pulse"></i>
</div></a>
        </div>
        
      </div>
    </div>
  </div> <!-- .page-section -->
  <?php echo $__env->make('futter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- Back to top button -->
  <div class="back-to-top"></div>

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
</html><?php /**PATH C:\xwamp\htdocs\laraval\Hospital-app\resources\views/user/doctors.blade.php ENDPATH**/ ?>