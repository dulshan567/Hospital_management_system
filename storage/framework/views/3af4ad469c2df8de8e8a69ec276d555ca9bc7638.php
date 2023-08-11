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
           
              
                <h2>Appointments</h2><br><br>
                <hr><br><br>

                
           </div>
          <div class="container">
        </div align="center" style="padding:100px">
        <table align="center">
            <tr style="background-color: aliceblue; color:black">
            <th style="padding:10px">Customer Name</th>
            <th style="padding:10px">Email</th>
            <th style="padding:10px">phone</th>
            <th style="padding:10px">Doctor Name</th>
            <th style="padding:10px">Date</th>
            <th style="padding:10px">Messages</th>
            <th style="padding:10px">Status</th>
            <th style="padding:10px">Approved</th>
            <th style="padding:10px">Cancel</th>
            <th style="padding:10px">Send Mail</th>
            </tr>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appoint): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr style="background-color: yellow; color:black">
                <td><?php echo e($appoint->name); ?></td>
                <td><?php echo e($appoint->email); ?></td>
                <td><?php echo e($appoint->phone); ?></td>
                <td><?php echo e($appoint->doctor); ?></td>
                <td><?php echo e($appoint->date); ?></td>
                <td><?php echo e($appoint->message); ?></td>
                <td><?php echo e($appoint->status); ?></td>
                <td><a class="btn btn-success" href="<?php echo e(url('approved',$appoint->id)); ?>">Approved</a></td>
                <td><a class="btn btn-danger" href="<?php echo e(url('canceled',$appoint->id)); ?>">Canceled</a></td>
                <td><a class="btn btn-primary" href="<?php echo e(url('emailview',$appoint->id)); ?>">Send Mail</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        
        </div>


        </div> 
    </div>

    
      <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>

<?php /**PATH C:\xwamp\htdocs\laraval\Hospital-app\resources\views/admin/showappointment.blade.php ENDPATH**/ ?>