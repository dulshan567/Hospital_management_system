<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public ">
  <?php echo $__env->make('admin.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <style>

  </style>

  </head>
  <body>
  <?php echo $__env->make('admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <?php echo $__env->make('admin.slidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     
     <!-- partial -->
 <div class="main-panel">
          <div class="content-wrapper"> <div class="row">
           
              
                <h2>Update Doctors</h2><br><br>
                <hr><br><br>
           </div>
          <div class="container">
      
        <form action="<?php echo e(url('editedoctor',$data->id)); ?>" method="POST" enctype="multipart/form-data">

        <?php echo csrf_field(); ?>
        <table align="center" padding:2rem;>

        
        <tr>
        <div >
            <td><label>Doctor Name</label></td>
            <td><input type="text" style="color: black;" name="name" value="<?php echo e($data->name); ?>"></td>
        </tr>
        </div>
        <div >
        <tr>
            <td><label>Phone</label></td>
            <td><input type="number" style="color: black;" name="phone" value="<?php echo e($data->phone); ?>"></td>
        </tr>
        </div>
        <div >
        <tr>
            <td><label>Speciality</label></td>
            <td><input type="text" style="color: black;" name="specialty" value="<?php echo e($data->specialty); ?>"></td>
        </tr>
        </div>
        <div >
        <tr>
            <td><label>Room No</label></td>
            <td><input type="text" style="color: black;" name="room" value="<?php echo e($data->room); ?>"></td>
        </tr>
        </div>
        <div >
        <tr>
            <td><label>Old Image</label></td>
           <td><img height="150px"  width="150px" src="doctorimage/<?php echo e($data->image); ?>"></td>
        </tr>
        </div>

        <div>
          <tr>
            <td><label>Change Image</label></td>
            <td><input type="file" name="file"></td>
          </tr>
        </div>

        <div>
            <tr>
              <td></td>
            <td padding:20px;><input type="submit" class="btn btn-primary"></td>
            </tr>
        </div>
        </table>
        </form>
        </div>


        </div> 
    </div>

    
      <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>

<?php /**PATH C:\xwamp\htdocs\laraval\Hospital-app\resources\views/admin/update_doctor.blade.php ENDPATH**/ ?>