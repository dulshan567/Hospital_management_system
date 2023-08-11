<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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
           
              
                <h2>Doctor Add</h2><br><br>
                <hr><br><br>

                
           </div>
          <div class="container">
          <?php if(session()->has('message')): ?>
            <div class="alert alert-success">
                <button type="button " class="close" data-dismiss="alert">x</button>
                <?php echo e(session()->get('Message')); ?>



            </div>


            <?php endif; ?>

            <form action="<?php echo e(url('sendemail',$data->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div>
                <label>Greeting</label>&nbsp;&nbsp;
                <input type="text" name="greeting" style="color:black;" required=""><br><br>
                </div>

                <div>
                <label>Body</label>
                <input type="text" name="body" required=""><br><br>
                </div>

                
                <div>
                <label>Action url</label>
                <input type="text" name="actiontext" required=""><br><br>
                </div>
                <div>
                <label>Action Text</label>
                <input type="text" name="actionurl" required=""><br><br>
                </div>
                <div>
                <label>End Part</label>
                <input type="text" name="endpart" required=""><br><br>
                </div>

                
                
                <input type="submit" name="number" class="btn btn-success" ><br><br>
                </div>
            </form>
        </div> 
    </div>

    
      <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>

<?php /**PATH C:\xwamp\htdocs\laraval\Hospital-app\resources\views/admin/email_view.blade.php ENDPATH**/ ?>