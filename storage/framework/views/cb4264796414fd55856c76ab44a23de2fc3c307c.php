<!DOCTYPE html>
<html lang="en">
  <head>
  <?php echo $__env->make('admin.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <style>
    lebel{
        display: inline-block;
        width: 200px;
        align-items: center;


    }


  </style>
  </head>
  <body>
  <?php echo $__env->make('admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <?php echo $__env->make('admin.slidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     
     <!-- partial -->
 <div class="main-panel">
          <div class="content-wrapper"> <div class="row">
           
              
                <h2>Show Doctors</h2><br><br>
                <hr><br><br>

                
           </div>
          <div class="container">
        </div align="center" style="padding:100px">
        <table align="center">
            <tr style="background-color: aliceblue; color:black">
            <th style="padding:10px">Doctor Name</th>
            <th style="padding:10px">phone</th>
            <th style="padding:10px">Speciality</th>
            <th style="padding:10px">Room No</th>
            <th style="padding:10px">Image</th>
            <th style="padding:10px">Delete</th>
            <th style="padding:10px">Update</th>
            
            </tr>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr style="background-color: yellow; color:black">
                <td><?php echo e($doctor->name); ?></td>
                <td><?php echo e($doctor->phone); ?></td>
                <td><?php echo e($doctor->specialty); ?></td>
                <td><?php echo e($doctor->room); ?></td>
                <td><img height="50" width="50" src="doctorimage/<?php echo e($doctor->image); ?>"></td>

                <td><a onclick="return confirm('Are you sure Delete This')" class="btn btn-danger" href="<?php echo e(url('deletedoctor',$doctor->id)); ?>">Delete</a></td>
                <td><a class="btn btn-primary" href="<?php echo e(url('updatedoctor',$doctor->id)); ?>">Update</a></td>
                
               
                
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        
        </div>


        </div> 
    </div>

    
      <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>

<?php /**PATH C:\xwamp\htdocs\laraval\Hospital-app\resources\views/admin/showdoctors.blade.php ENDPATH**/ ?>