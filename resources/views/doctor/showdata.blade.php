

<form method="get" action="{{url('showdata')}}">
    <select name="doctor" class="form-control" id="Catagory">
        <option>Select Your Catagory</option>
        @foreach($data as $appoint)
        <option name="{{$appoint->doctor}}">{{$appoint->doctor}}</option>
        @endforeach
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
            </tr>
           
        </table>
        <!--
        <script>

        $(document).ready(function(){
            $("#Catagory").on('change',function(){
                var Catagory =$(this).val();
                $.ajax({
                    url:"{{route('showdata')}}",
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
        </script>