<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public ">
  @include('admin.style')
  <style>

  </style>

  </head>
  <body>
  @include('admin.nav')
       @include('admin.slidebar')
     
     <!-- partial -->
 <div class="main-panel">
          <div class="content-wrapper"> <div class="row">
           
              
                <h2>Update Doctors</h2><br><br>
                <hr><br><br>
           </div>
          <div class="container">
      
        <form action="{{url('editedoctor',$data->id)}}" method="POST" enctype="multipart/form-data">

        @csrf
        <table align="center" padding:2rem;>

        
        <tr>
        <div >
            <td><label>Doctor Name</label></td>
            <td><input type="text" style="color: black;" name="name" value="{{$data->name}}"></td>
        </tr>
        </div>
        <div >
        <tr>
            <td><label>Phone</label></td>
            <td><input type="number" style="color: black;" name="phone" value="{{$data->phone}}"></td>
        </tr>
        </div>
        <div >
        <tr>
            <td><label>Speciality</label></td>
            <td><input type="text" style="color: black;" name="specialty" value="{{$data->specialty}}"></td>
        </tr>
        </div>
        <div >
        <tr>
            <td><label>Room No</label></td>
            <td><input type="text" style="color: black;" name="room" value="{{$data->room}}"></td>
        </tr>
        </div>
        <div >
        <tr>
            <td><label>Old Image</label></td>
           <td><img height="150px"  width="150px" src="doctorimage/{{$data->image}}"></td>
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

    
      @include('admin.script')
  </body>
</html>

