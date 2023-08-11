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
</head>
<body>

  <!-- Back to top button -->
  

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
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctor">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('myprofile')}}">profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
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
                       
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                
                                <button type="button" class="btn btn-primary"> {{ Auth::user()->name }}</button>
                                    
                                </a>
                               
                                        
                                  
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{url('myprofile')}}">Profile</a>
                                    
                                    <a class="dropdown-item" href="/">Home</a>
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

            @endauth
            @endif
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <br>
 
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <div class="card" >
          <div class="card-body" >
          <h4>Medicine From</h4><hr>

          
          </div>
               <form action="{{url('add')}}" method="POST">
               @csrf
               <div class="row">
               <div class="col-md-4">
                   <div class="form-group" >
                     <label for="">ID - {{$data->id}}</label>
                      <input type="text" value="{{$data->id}}" class="form-control"  name="user_id" id="user_id" >
                  </div>
               </div>
               <div class="col-md-4">
                   <div class="form-group" >
                     <label for="">Patient Name - {{$data->name}}</label>
                      <input type="text" value="{{$data->name}}" class="form-control"  name="Patient_Name" id="Patient_Name" >
                  </div>
               </div>
               <div class="col-md-4">
                   <div class="form-group" >
                     <label for="">Doctor Name - {{$data->doctor}}</label>
                      <input type="text" value="{{$data->doctor}}" class="form-control"  name="Doctor" id="name6" >
                  </div>
               </div>
             
               <div class="col-md-4">
                   <div class="form-group" >
                     <label for="">Medicince 01</label>
                     <input type="text" class="form-control" name="name" id="name" >
                  </div>
               </div>
               <div class="col-md-4">
                   <div class="form-group" >
                     <label for="">Medicince 02</label>
                     <input type="text" class="form-control" name="name1" id="name1" >
                  </div>
               </div>
               <div class="col-md-4">
                   <div class="form-group" >
                     <label for="">Medicince 03</label>
                     <input type="text" class="form-control"  name="name2" id="name2"  >
                  </div>
               </div>
               <div class="col-md-4">
                   <div class="form-group" >
                     <label for="">Medicince 04</label>
                     <input type="text" class="form-control"  name="name3" id="name3" >
                  </div>
               </div>
               <div class="col-md-4">
                   <div class="form-group" >
                     <label for="">Medicince 05</label>
                     <input type="text" class="form-control"  name="name4" id="name4" >
                  </div>
               </div>
               <div class="col-md-4">
                   <div class="form-group" >
                     <label for="">Medicince 06</label>
                     <input type="text" class="form-control"  name="name5" id="name5" >
                  </div>
               </div>
               <div class="col-md-4">
                   <div class="form-group" >
                     <label for="">Medicince 07</label>
                     <input type="text" class="form-control"  name="name6" id="name6" >
                  </div>
               </div>

              
               
               <div class="col-md-4">
                   <div class="form-group" >
                     
                     <button type="submit"  class="btn btn-primary" >Send Farmacy</button>
                  </div>
               </div>
               

               
            </div>
          </form>
          </div>
        
        </div>
            
            
        </div> 
      </div> 
    </div> 






@include('futter')
   

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>
