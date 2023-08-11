<div class="m-4">
   <div class="alert alert-success alert-dismissible fade show">
           <strong>Appoinment Success !  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</strong> <button type="button" class="btn btn-outline-danger"><b>Your Appoinment Number Is : <?php echo e(Session::get('appointment_id')); ?></b> </button>
           <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>
  </div> 
<div class="page-hero" style="background: linear-gradient(to right, #4e54c8, #8f94fb);">
  <div class="hero-section">
    <div class="container text-center wow zoomIn">
      <div class="page-section">
        <div class="container">
          <h1 class="text-center  wow fadeInUp" style="color:aliceblue">Make an Appointment</h1>

          <form class="main-form" action="<?php echo e(url('appoinment')); ?>" method="POST">
            <?php echo csrf_field(); ?>
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
                  <?php $__currentLoopData = $doctor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctors): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($doctors->name); ?>"><?php echo e($doctors->name); ?> ----Specialty---- <?php echo e($doctors->specialty); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
              <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                <input type="text" name="number" class="form-control" placeholder="Phone Number..">
              </div>
              <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
              </div>
            </div>
            <!-- <form action="<?php echo e(url('payment')); ?>" method="post">
              <?php echo csrf_field(); ?>
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



<?php if(Session::has('appointment_id')): ?>
        <script>
            alert('Appointment NO: <?php echo e(Session::get('appointment_id')); ?>');
        </script>
    <?php endif; ?>
    <!-- <?php if(Session::has('appointment_id')): ?>
    <script>
        alert('Appointment ID: <?php echo addslashes(Session::get('appointment_id')); ?>');
    </script>
<?php endif; ?> -->
<?php /**PATH C:\xwamp\htdocs\laraval\Hospital-app\resources\views/appoinment.blade.php ENDPATH**/ ?>