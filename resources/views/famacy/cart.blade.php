<html>
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
 
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
  
  .col1{
    width:450px;
    float: left;
  }
  .col2{
    width:450px;
    float: left;
  }
  table{
    padding: 20px;
  }
</style>
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
          <li class="nav-item">
            <button type="button" class="btn btn-danger" >
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>  <a href="{{ url('cart') }}">Cart<span class="badge badge-pill badge-danger"></a> {{ count((array) session('cart')) }}</span>
                </button>
            </li>
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
<br><br>

<div class="container">
<label style="padding-right:50px;" for=""><h4>Patient ID - {{$patient->id}} </h4></label>
<label style="padding-right:50px; ;" for=""><h4> Patient Name - {{$patient->Patient_Name}}</h4></label>
<label for=""></label>
<center>
<hr>


<table>
  <tr>
    <th>Mediciene</th>
    <th>Mediciene</th>
    <th>Mediciene</th>
    <th>Mediciene</th>
    <th>Mediciene</th>
    <th>Mediciene</th>
    <th>Mediciene</th>
    
  </tr>
  <tr>
  <td style="width:5%; color:blue;">{{$patient->name}}</td>
  <td style="width:5%; color:blue;">{{$patient->name1}}</td>
  <td style="width:5%; color:blue;">{{$patient->name2}}</td>
  <td style="width:5%; color:blue;">{{$patient->name3}}</td>
  <td style="width:5%; color:blue;">{{$patient->name4}}</td>
  <td style="width:5%; color:blue;">{{$patient->name5}}</td>
  <td style="width:5%; color:blue;">{{$patient->name6}}</td>
  <td style="width:5%; color:blue;">{{$patient->name7}}</td>
 
  </tr>
</table>
</center>
</div>
<hr>
<br>
<form >
  <div class="col-4" >
  <input type="text" name="search"class="form-control" placeholder="search here.." value="{{$search}}" />
        <br>
         <a href="">
          
         </a>
         <button class="btn btn-primary" >search</button>
         </div>
      </form>


  </div>
</div>

 <!-- partial -->
 <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img src="assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                      </div>
                    
                      <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Mediciene List</h4>
                      <table>
                          <br><br>
                            <tr style="background-color: black;">
                                <th style="width:2%; padding:2px; font-size:17px; color:aliceblue">Image</th>
                                <th style="width:2%; padding:2px; font-size:17px; color:aliceblue">Code</th>
                                <th style="width:2%; padding:2px; font-size:17px; color:aliceblue">Type</th>
                                <th style="width:2%; padding:2px; font-size:17px; color:aliceblue">Name</th>
                                <th style="width:2%; padding:2px; font-size:17px; color:aliceblue">Quantity</th>
                              
                                <th style="width:2%; padding:2px; font-size:17px; color:aliceblue">Price</th>
                                <th style="width:2%; padding:2px; font-size:17px; color:aliceblue">action</th>
                            </tr>

                              @foreach($data as $Fitem)
                              
                              <tr  align="center">
                              <td><img height="50" width="50" src="/fitemimage/{{$Fitem->image}}"></td>
                                  <td>{{$Fitem->code}}</td>
                                  <td>{{$Fitem->type}}</td>
                                  <td>{{$Fitem->name}}</td>
                                  <td>{{$Fitem->Quentity}}</td>
                                  <td>{{$Fitem->price}}</td>
                                  
                                  
                                
                                <td>  <p class="btn-holder"><a href="{{ url('add-to-cart/'.$Fitem->id) }}" class="btn btn-info btn-sm" role="button">Add cart</a> </p></td>

                              </tr>
                              @endforeach
                              
                            </table>
                            {{$data->Links()}}
                   
                              </div>
                            </div>
                          </div>
                          <div class="col-md-7 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body">
                                <div class="d-flex flex-row justify-content-between">
                                  <h4 class="card-title mb-1">Medicine Cart</h4>
                                  
                                </div>
                   <br>  <br>  
                        <table>
                                <thead>
                                <tr style="background-color: black; ">
                                    <th style="width:5%; padding:1px; font-size:20px; color:aliceblue">Product</th>
                                    <th style="width:5%; padding:1px; font-size:20px; color:aliceblue">Price</th>
                                    <th style="width:5%; padding:1px; font-size:20px; color:aliceblue">Quantity</th>
                                    <th style="width:5%; padding:1px; font-size:20px; color:aliceblue" class="text-center">Subtotal</th>
                                    <th style="width:5%; padding:1px; font-size:20px; color:aliceblue"></th>
                                </tr>
                                </thead>
                                <tbody>
    <?php $total = 0 ?>
    @if(session('cart'))
        @foreach(session('cart') as $id => $details)
            <?php $total += $details['price'] * $details['Quentity'] ?>
            <tr>
                <td data-th="Product">
                    <div class="row">
                        <div class="">
                            <h6>{{ $details['name'] }}</h6>
                        </div>
                    </div>
                </td>
                <td data-th="Price">${{ $details['price'] }}</td>
                <td data-th="Quantity" style="padding: 20px;">
                    <form action="{{ route('update-quantity', ['id' => $id]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <input type="number" name="Quentity" value="{{ $details['Quentity'] }}" min="1">
                        <button type="submit" class="btn btn-info btn-sm">Update Quantity</button>
                    </form>
                </td>
                <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['Quentity'] }}</td>
                <td class="actions" data-th="">
                    <form action="{{ route('remove-from-cart', ['id' => $id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Remove from Cart</button>
                    </form>
                </td>
            </tr>
        @endforeach
    @endif
</tbody>

                                <tfoot>
                              
                                <tr>
                                    <td></td>
                                    <td colspan="2" class="hidden-xs"></td>
                                    <td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
                                    <td><a href="{{ url('invoice0', $patient->id) }}" class="btn btn-success"><i class=""></i>Genarate Bill</a></td>
                                </tr>
                                </tfoot>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
           
         
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
  

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
