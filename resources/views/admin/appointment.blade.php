<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Online Appointment System for Veterinary Services</title>
    <link rel="stylesheet" href="{{URL::to('CSS/appointment.css')}}">
    <link rel="icon" type="image/x-icon" href="{{URL::to('WEBSITE ELEMENTS/logo2.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<!--NAVIGATION BAR-->
@include('shared.admin_header_nav')


<!--BODY -->
    <p class="body-text">APPOINTMENT</p>
    <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
  <input type="text" placeholder="Search.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
 
<table class="one">  
    <thead>
    <th>Name</th>
    <th>Pet's Name</th> 
    <th>Reason</th>
    <th>Status</th>
    <th>Booked on</th>
    <th>Actions</th>
  </thead>

  @foreach($appointments as $appoint)
  <tr>
    <td>{{$appoint->user->name}}</td>
    <td>{{$appoint->pet_name}}</td> 
    <td>
        @if($appoint->reason == null)
            {{$appoint->reason_menu}}
        @else
            {{$appoint->reason}}
        @endif
    </td>
     <td>{{strtoupper($appoint->status_name)}}</td>
     <td>{{$appoint->date}}</td>
     <td>
        @if($appoint->status_name == 'pending')
             <a href="{{route('appointment_accept', $appoint->id)}}" style="color: green;">Accept</a>
            <a href="{{route('appointment_decline', $appoint->id)}}" style="color: red">Decline</a>
       @else
       N/A     
       
        @endif
        
     </td>
  </tr>
  
  @endforeach
</table>
 

   
   </body>
<!--FOOTER-->

    <footer class="footer-distributed">

        <div class="footer-left">
            <div class="footer-pic"><img src="{{URL::to('WEBSITE ELEMENTS/logo2.png')}}"></div>
            <h3>Online Veterinary Appointment System</h3>


           
        </div>
    </footer>


</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    @if(Session::has('success'))
        swal("Success", "{{Session::get('success')}}", "success");
    @endif
</script>
</html>
