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

  <title>One Health - Medical Center HTML5 Template</title>

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
    .gradient-custom-2 {
/* fallback for old browsers */
background: #fbc2eb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(251, 194, 235, 1), rgba(166, 193, 238, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(251, 194, 235, 1), rgba(166, 193, 238, 1))
}
  </style>
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <?php echo $__env->make('head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
 
  <?php if(session('success')): ?>
    <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>
    <section class="h-100 gradient-custom-2">
  <div class="container py-5 h-100">
  <h4>My Profile Page</h4><hr>
    <!-- <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7"> -->
        <div class="card">
          
          <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:280px;">
          
            <div class="ms-4 mt-5 d-flex flex-column" style="width: 200px;">
            
            <?php if($user->profile_photo): ?>
                <img src="<?php echo e(asset('storage/' . $user->profile_photo)); ?>" alt="Profile Photo" width="200px" height="200px;">
            <?php else: ?>
                <span>No profile photo available.</span>
            <?php endif; ?> 
         
    
     
            </div>
            
            <div class="ms-3" style="margin-top: 50px;">
              <h5><?php echo e(Auth::user()->name); ?></h5>
              <p><?php echo e(Auth::user()->email); ?></p>
              <div class="form-group form-group-sm mb-3">
              <form action="<?php echo e(route('user.uploadPhoto')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <label for="form-control"></label>
                <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                <input type="file" class="form-control"  name="profile_photo" style="border-radius: 50px; width:150px; text-align:center; padding-bottom:20px">
                <button type="submit" class="btn btn-success btn-sm" style="size: 20px;">Edit Profile Photo</button>
            </form>
              </div>
           
            </div>
        
          </div>
          <div class="p-4 text-black" style="background-color: #f8f9fa;">
            <div class="d-flex justify-content-end text-center py-1">
            <a type="button" class="btn btn-outline-info"  href="<?php echo e(url('myappointment')); ?>"  >
                          My Appointment </a>
            </div>
          </div>
          <div class="card-body p-4 text-black">
            <div class="mb-5">
              <p class="lead fw-normal mb-1">About</p>
              <div class="p-4" style="background-color: #f8f9fa;">
                <p class="font-italic mb-1">+</p>
                <p class="font-italic mb-1">+</p>
                <p class="font-italic mb-0">+</p>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-4">
              <p class="lead fw-normal mb-0">Medical Reports</p>
              <p class="mb-0"><a href="#!" class="text-muted">Show all</a></p>
            </div>
            <div class="col-md-6">
                
                <div class="image-gallery">
                    <div class="row">
                        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                            <div class="col-md-4">
                            <div class="w3-container w3-third">
                                <img src="<?php echo e(asset('storage/' . $image->path)); ?>" alt="Image" style="width:100%;cursor:pointer"  class="img-thumbnail" onclick="onClick(this)" class="w3-hover-opacity">
                            </div>
                            
                         </div>
                         
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <!-- Add more images or customize the gallery as needed -->

                    <!-- Display a success message if image was uploaded successfully -->
                   

                    <!-- Image upload form -->
                   
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


  <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
                          <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                        <div class="w3-modal-content w3-animate-zoom">
                            <img id="img01" style="width:100%">
                          </div>
                        </div>


<?php echo $__env->make('futter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
</script>
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html><?php /**PATH C:\xwamp\htdocs\laraval\Hospital-app\resources\views/user/profile.blade.php ENDPATH**/ ?>