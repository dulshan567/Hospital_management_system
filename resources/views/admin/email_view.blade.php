<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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
          @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button " class="close" data-dismiss="alert">x</button>
                {{session()->get('Message')}}


            </div>


            @endif

            <form action="{{url('sendemail',$data->id)}}" method="POST">
                @csrf
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

    
      @include('admin.script')
  </body>
</html>

