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
           
              
                <h2>Add News</h2><br><br>
                <hr><br><br>

                
           </div>
          <div class="container">
      

            <form action="{{url('Add_news')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <table align="center">
                  
                <div> <tr>
                <td><label>Title</label>&nbsp;&nbsp;</td>
                <td><input type="text" name="Title" style="color:black;" required=""><br><br></td>
                </tr></div>
               
                <div> <tr>
                <td><label>Status</label>&nbsp;&nbsp;</td>
                <td><input type="text" name="status" style="color:black;" required=""><br><br></td>
                </tr></div>

                <div>
                  <tr>
                <td><label>Content</label></td>
                <td><textarea  name="Content" style="color:black;" required=""></textarea><br><br></td>
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

