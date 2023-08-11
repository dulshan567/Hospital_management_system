<html>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
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
<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-danger">G+</span>&nbsp;Hospital</a>

       <!-- <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form> -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home</a>
            </li>
          
  <!-- Back and log in -->
            <?php if(Route::has('login')): ?>
            <?php if(auth()->guard()->check()): ?>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

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
                       
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                
                                <button type="button" class="btn btn-primary"> <?php echo e(Auth::user()->name); ?></button>
                                    
                                </a>
                               
                                        
                                  
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="<?php echo e(url('myprofile')); ?>">Profile</a>
                                    
                                    <a class="dropdown-item" href="/">Home</a>
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

            <?php endif; ?>
            <?php endif; ?>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>
  <div class="container">
  <h1>Add Mediciene</h1>
        <div class="row">
          <div class="col-md-10">
  <div class="card" >
          <div class="card-body" >

          <form action="<?php echo e(url('uploaditem')); ?>" method="POST" enctype="multipart/form-data" >
               <?php echo csrf_field(); ?>
               <div class="row">
               <div class="col-md-7">
                   <div class="form-group" >
                     <label for="">Code</label>
                     <input type="text" class="form-control" name="code" >
                  </div>
               </div> <br>
               <div class="col-md-7">
                   <div class="form-group" >
                     <label for="">name</label>
                     <input type="text" class="form-control" name="name" >
                  </div>
               </div> <br>
               <div class="col-md-7">
                   <div class="form-group" >
                     <label for="">Type</label>
                     <input type="text" class="form-control" name="type"  >
                  </div>
               </div> <br>
               <div class="col-md-7">
                   <div class="form-group" >
                     <label for="">Quentity</label>
                     <input type="text" class="form-control" name="Quentity" >
                  </div>
               </div> <br>
               <div class="col-md-7">
                   <div class="form-group" >
                     <label for="">Price</label>
                     <input type="text" class="form-control" name="price" >
                  </div>
               </div> <br>
               <div class="col-md-6">
                   <div class="form-group" >
                     <label for="">image</label>
                     <input type="file" class="form-control" name="file" >
                  </div>
               </div> <br>
             
               <br>
               
                   <br><hr>
                     <button type="submit"  class="btn btn-primary" >Add Mediciene</button>
                 
               

               
            </div>
          </form>
          </div>
  </div>
  </div>
  </div>
  </div>

</body>

</html><?php /**PATH C:\xwamp\htdocs\laraval\Hospital-app\resources\views/famacy/addmedicine.blade.php ENDPATH**/ ?>