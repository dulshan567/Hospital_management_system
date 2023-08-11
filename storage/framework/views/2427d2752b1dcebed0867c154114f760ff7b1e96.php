<h1>
    show data page myyyyy
</h1>

<form method="get" action="<?php echo e(url('showdata')); ?>">
    <select name="doctor" class="form-control" id="Catagory">
        <option>Select Your Catagory</option>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appoint): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option name="<?php echo e($appoint->doctor); ?>"><?php echo e($appoint->doctor); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <button type="submit">Filter</button>

</form>
<div class="col-md-4" >
    <input type="text" class="form-control" placeholder="Search Here...">
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
            </tr>
           
        </table>
        <!--
        <script>

        $(document).ready(function(){
            $("#Catagory").on('change',function(){
                var Catagory =$(this).val();
                $.ajax({
                    url:"<?php echo e(route('showdata')); ?>",
                    type:GET,
                    data:{'Catagory':Catagory},
                    success:function(data){
                        var appoinments data.appoinments;
                        var html='';
                        if (appoinments.length>0) {
                            
                        }
                    
                    }
                });


            });
        });
        </script><?php /**PATH C:\xwamp\htdocs\laraval\Hospital-app\resources\views/doctor/showdata.blade.php ENDPATH**/ ?>