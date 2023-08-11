<div class="m-4">
   <div class="alert alert-success alert-dismissible fade show">
           <strong>Appoinment Success !  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</strong> <button type="button" class="btn btn-outline-danger"><b>Your Appoinment Number Is : {{ Session::get('appointment_id') }}</b> </button>
           <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>
  </div> 
<div class="page-hero" style="background: linear-gradient(to right, #4e54c8, #8f94fb);">
  <div class="hero-section">
    <div class="container text-center wow zoomIn">
      <div class="page-section">
        <div class="container">
          <h1 class="text-center  wow fadeInUp" style="color:aliceblue">Make an Appointment</h1>

          <form class="main-form" action="{{url('appoinment')}}" method="POST">
            @csrf
            <div class="row mt-5">
              <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                <input type="text" name="name" class="form-control" placeholder="Full name">
              </div>
              <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                <input type="text" name="email" class="form-control" placeholder="Email address..">
              </div>
              <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                <input type="date" name="date" class="form-control">
              </div>
              <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                <select name="doctor" id="doctor" class="custom-select">
                  <option>--Select Doctors--</option>
                  @foreach($doctor as $doctors)
                  <option value="{{$doctors->name}}">{{$doctors->name}} ----Specialty---- {{$doctors->specialty}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                <input type="text" name="number" class="form-control" placeholder="Phone Number..">
              </div>
              <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
              </div>
            </div>
            <!-- <form action="{{url('payment')}}" method="post">
              @csrf
              <input type="hidden" name="amount" value="200">

              <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Pay With Paypal</button>
            </form> -->

            <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
          </form>
        </div>
       
      </div> <!-- .page-section -->
    </div>
  </div>
</div>



@if(Session::has('appointment_id'))
        <script>
            alert('Appointment NO: {{ Session::get('appointment_id') }}');
        </script>
    @endif
    <!-- @if(Session::has('appointment_id'))
    <script>
        alert('Appointment ID: {!! addslashes(Session::get('appointment_id')) !!}');
    </script>
@endif -->
