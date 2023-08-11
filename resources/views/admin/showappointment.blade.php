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
@foreach($data as $appoint)
            <tr style="background-color: yellow; color:black">
                <td>{{$appoint->name}}</td>
                <td>{{$appoint->email}}</td>
                <td>{{$appoint->phone}}</td>
                <td>{{$appoint->doctor}}</td>
                <td>{{$appoint->date}}</td>
                <td>{{$appoint->message}}</td>
                <td>{{$appoint->status}}</td>
                <td><a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a></td>
                <td><a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">Canceled</a></td>
                <td><a class="btn btn-primary" href="{{url('emailview',$appoint->id)}}">Send Mail</a></td>
            </tr>
            @endforeach
        </table>
        
        </div>


        </div> 
    </div>

    
      @include('admin.script')
  </body>
</html>

