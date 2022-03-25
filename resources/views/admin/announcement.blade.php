<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
      <title>Online Appointment System for Veterinary Services</title>

    <link rel="icon" type="image/x-icon" href="WEBSITE ELEMENTS/logo2.png">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  
  
      <link rel="stylesheet" href="{{URL::to('CSS/calendar.css')}}">

  
</head>

<body>

<!--NAVIGATION BAR-->
@include('shared.admin_header_nav')

 <p class="body-text">CLINIC CALENDAR</p>
  
  
  <script src='http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.14/angular.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://code.angularjs.org/1.3.14/angular-animate.js'></script>

    <script src="JS/calendar.js"></script>

</body>


<!--FOOTER-->

    <footer class="footer-distributed">

        <div class="footer-left">
            <div class="footer-pic"><img src="WEBSITE ELEMENTS/logo2.png"></div>
            <h3>Online Veterinary Appointment System</h3>


           
        </div>
    </footer>


</body>
</html>
</html>
