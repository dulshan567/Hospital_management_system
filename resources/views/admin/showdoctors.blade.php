<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.style')
  <style>
    lebel{
        display: inline-block;
        width: 200px;
        align-items: center;


    }


  </style>
  </head>
  <body>
  @include('admin.nav')
       @include('admin.slidebar')
     
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
@foreach($data as $doctor)
            <tr style="background-color: yellow; color:black">
                <td>{{$doctor->name}}</td>
                <td>{{$doctor->phone}}</td>
                <td>{{$doctor->specialty}}</td>
                <td>{{$doctor->room}}</td>
                <td><img height="50" width="50" src="doctorimage/{{$doctor->image}}"></td>

                <td><a onclick="return confirm('Are you sure Delete This')" class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>
                <td><a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update</a></td>
                
               
                
            </tr>
            @endforeach
        </table>
        
        </div>


        </div> 
    </div>

    
      @include('admin.script')
  </body>
</html>

