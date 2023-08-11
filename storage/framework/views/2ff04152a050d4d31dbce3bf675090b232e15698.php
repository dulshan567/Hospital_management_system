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
           
              
                <h2>Doctor Add</h2><br><br>
                <hr><br><br>

                
           </div>
          <div class="container">
      

            <form action="<?php echo e(url('upload_doctor')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <table align="center">
                  
                <div> <tr>
                <td><label>Doctor name</label>&nbsp;&nbsp;</td>
                <td><input type="text" name="name" style="color:black;" required=""><br><br></td>
                </tr></div>
               

                <div>
                  <tr>
                <td><label>phone</label></td>
                <td><input type="phone" name="number" required=""><br><br></td>
                  </tr>

                </div>

                <div>
                  <tr>
                <td><label>Speciality</label></td>
                <td><select name="specialty" required="">
                <option >==select==</option>
                <option value="General">General</option>
                    <option value="skin">Skin</option>
                    <option value="hart">Heart</option>
                    <option value="eye">Eye</option>
                    <option value="Neurology">Neurology</option>
                    <option value="Dental">Dental</option>
                </select><br><br></td>
                  </tr>
                </div>
                <div>
                  <tr>
                <td><label>Room No</label></td>
                <td><input type="room" name="room" required=""><br><br></td>
                  </tr>
                </div>

                <div>
                  <tr>
                <td><label>Image</label></td>
                <td><input type="file" name="file" required=""><br><br></td>
                  </tr>
                </div>
                <div>
                <tr>
                  <td></td>
                  <td><input type="submit" name="number" class="btn btn-success" ><br><br><td>
                </tr>
                </div>
                </table>
            </form>
        </div> 
    </div>

    
      <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>

<?php /**PATH C:\xwamp\htdocs\laraval\Hospital-app\resources\views/admin/add_doctor.blade.php ENDPATH**/ ?>