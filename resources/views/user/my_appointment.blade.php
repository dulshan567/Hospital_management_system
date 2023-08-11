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
  <div class="back-to-top"></div>

  @include('head')

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
      <div align="center" style="padding:100px;">

<table style="padding:100px;">
  <tr style="background-color: black;">
      <th style="padding:10px; font-size:20px; color:aliceblue">Doctor Name</th>
      <th style="padding:10px; font-size:20px; color:aliceblue">Date</th>
      <th style="padding:10px; font-size:20px; color:aliceblue">Message</th>
      <th style="padding:10px; font-size:20px; color:aliceblue">status</th>
      <th style="padding:10px; font-size:20px; color:aliceblue">Cansal Appointment</th>
  </tr>

  @foreach($appoint as $appoints)
  <tr style="background-color:white ; border:1px;" align="center">
      <td  style="padding:10px; font-size:20px; color:black">{{$appoints->doctor}}</td>
      <td  style="padding:10px; font-size:20px; color:black">{{$appoints->date}}</td>
      <td  style="padding:10px; font-size:20px; color:black">{{$appoints->message}}</td>
      <td  style="padding:10px; font-size:20px; color:black">{{$appoints->status}}</td>
      <td><a class="btn btn-danger" onclick="return confirm('Are you Sure Delete this')"  href="{{url('cansel_appoint',$appoints->id)}}">Cansal</a></td>
  </tr>
  @endforeach
</table>
      </div>
    </div>
  </div>
  </div>
   

 <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"
></script>
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>









