<header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><h5 style="color:red;"><b>Emargency</b><span class="mai-call text-primary"></span> 1500</h5></a>
              <span class="divider">|</span>
              <a href="#"><h5 style="color:green;"> <span class="mai-mail text-primary"></span>mail@ghospital.com</h5> </a>
              <span class="divider">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
              <a href="#"><span class=" text-primary"></span> <h4 style="color: blue;"><b>විශ්වාසනීය කඩිනම් සේවාව</b></h4></a>
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
            
              <a class="nav-link" href="/">Home &nbsp;&nbsp;&nbsp;</a>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('doctors')); ?>">Doctors &nbsp;&nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('chat')); ?>">Chat&nbsp;&nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('myprofile')); ?>">My Profile&nbsp;&nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('Contact')); ?>">Contact &nbsp;&nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('about')); ?>">About Us&nbsp;&nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('news')); ?>">News&nbsp;&nbsp;&nbsp;</a>
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
                                       
                       

                        <li class="nav-item">
                         
                        <a type="button" class="btn btn-danger"  href="<?php echo e(url('apointhome')); ?>"  >
                          Get Appointment &nbsp; </a> &nbsp;
                        </li>
                        <li class="nav-item">
                        <a type="button" class="btn btn-danger"  href="<?php echo e(url('myappointment')); ?>"  >
                          My Appointment </a>
                          </li> &nbsp;
                          <button type="button" class="btn btn-outline-success"><b><?php echo e(Auth::user()->name); ?></b> </button>
                                    
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

<?php /**PATH C:\xwamp\htdocs\laraval\Hospital-app\resources\views/head.blade.php ENDPATH**/ ?>