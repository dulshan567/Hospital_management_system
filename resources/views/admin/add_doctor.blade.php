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
           
              
                <h2>Doctor Add</h2><br><br>
                <hr><br><br>

                
           </div>
          <div class="container">
      

            <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                @csrf
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

    
      @include('admin.script')
  </body>
</html>

