

<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>

<base href="/public ">
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
           
          </div>
          <div class="col-sm-4 text-right text-sm">
            
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

        
  <!-- Back and log in -->
            <?php if(Route::has('login')): ?>
            <?php if(auth()->guard()->check()): ?>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    <a  class="btn btn-success" href="/">Home</a>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
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
                       
                          <button type="button" class="btn btn-success"><b><?php echo e(Auth::user()->name); ?></b> </button>
                                    
                          &nbsp; &nbsp;
                               <a id="menu-btn" class="fas fa-bars" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                 
                                
                                </a>
                                 <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="<?php echo e(url('myprofile')); ?>">Profile</a>
                                    
                                    <a class="dropdown-item" href="/">Home</a>
                                    <a class="dropdown-item" href="<?php echo e(url('pharmacies')); ?>">pharmacy</a>
                                    <a class="dropdown-item" href="<?php echo e(url('doctors')); ?>">Doctors</a>
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>
                           

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                    </div>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
    
    </div>
            <?php else: ?>

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="<?php echo e(route('login')); ?>">Login</a>
              
            </li>
            <li class="nav-item">
             
              <a class="btn btn-primary ml-lg-3" href="<?php echo e(route('register')); ?>">Register</a>
            </li>
            &nbsp; &nbsp; &nbsp;

                            </li>
                                  
                                <a id="menu-btn" class="fas fa-bars" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                 </a>
                                 <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/">Home</a>
                                    <a class="dropdown-item" href="<?php echo e(url('pharmacies')); ?>">pharmacy</a>
                                    <a class="dropdown-item" href="<?php echo e(url('doctors')); ?>">Doctors</a>
                                   </div>
                                </div>
                            </li>

            <?php endif; ?>
            <?php endif; ?>
          </ul>
        </div> <!-- .navbar-collapse -->
        
     
      </div> <!-- .container -->
     <!--Navbar-->



<!--/.Navbar-->
    </nav>
  </header>
  <?php if(session('success')): ?>
    <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>
  <br>
  <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
                          <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                        <div class="w3-modal-content w3-animate-zoom">
                            <img id="img01" style="width:100%">
                          </div>
                        </div>
<hr>
<div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>User Details</h1>
                <div class="user-details">

  <?php if($user->profile_photo): ?>
                <img src="<?php echo e(asset('storage/' . $user->profile_photo)); ?>" alt="Profile Photo" width="200px" height="200px" style="border-radius: 250px;">
            <?php else: ?>
                <span>No profile photo available.</span>
            <?php endif; ?> 

<br><br>
         <div class="col-md-4">
         <div class="form-group" >
               <form action="<?php echo e(route('user.uploadPhoto')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <label for=""></label>
                <input type="hidden" class="form-control" name="user_id" value="<?php echo e($user->id); ?>">
                <input type="file" class="form-control" name="profile_photo"> 
                <button type="submit" class="btn btn-danger">Upload</button>
            </form>
         </div></div>
                    <p>Patient ID: <?php echo e($user->id); ?></p>
                    <p>Name: <?php echo e($user->name); ?></p>
                    <p>Email: <?php echo e($user->email); ?></p>
                    <!-- Add more user details as needed -->
                </div>
            </div>
            <div class="col-md-6">
                <h1>Medical Reports</h1>
                <div class="image-gallery">
                    <div class="row">
                        <?php $__currentLoopData = $user->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
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
                    <form action="<?php echo e(route('user.upload', ['id' => $user->id])); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="photo">Upload Photo</label>
                            <input type="file" name="photo" id="photo" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <!-- Your footer code here -->
<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
</script>
<!-- <script src="<?php echo e(asset('js/jquery-3.5.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
   -->
</body>
</html><?php /**PATH C:\xwamp\htdocs\laraval\Hospital-app\resources\views/doctor/profile.blade.php ENDPATH**/ ?>