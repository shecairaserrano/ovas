<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Online Appointment System for Veterinary Services</title>
    <link rel="stylesheet" href="{{URL::to('CSS/admin.css')}}">
    <link rel="icon" type="image/x-icon" href="{{URL::to('WEBSITE ELEMENTS/logo2.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<!--NAVIGATION BAR-->
@include('shared.admin_header_nav')

<!--HEADER PIC-->
    <label class="header-pic"><img src="{{URL::to('WEBSITE ELEMENTS/admin.jpg')}}"></label>
  

<!--BODY -->
    <p class="body-text">RECORDS</p>
    <div class="rectangle"></div>
     <div class="btn-group">
        <a href="{{URL('/admin/clientrecord')}}"><button><h1>Client's Record</h1></button></a>
        <a href="{{URL('/admin/petrecord')}}"><button><h1>Pet's Record</h1></button></a>
        
    </div>

    
<div class="row">
  <div class="column">
    <a href="{{route('announcement')}}"><img src="{{URL::to('WEBSITE ELEMENTS/admin-announcement.png')}}" style="width:100%"></a>
  </div>
  <div class="column">
    <a href="{{route('concern')}}"><img src="{{URL::to('WEBSITE ELEMENTS/admin-concerns.png')}}"  style="width:100%"></a>
  </div>

</div>

</body>

<!--FOOTER-->

    <footer class="footer-distributed">

        <div class="footer-left">
            <div class="footer-pic"><img src="{{URL::to('WEBSITE ELEMENTS/logo2.png')}}"></div>
            <h3>Online Veterinary Appointment System</h3>


           
        </div>
    </footer>


</body>
</html>
