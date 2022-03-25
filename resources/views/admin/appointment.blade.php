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
    <tr>
    <th>Name</th>
    <th>Pet's Name</th> 
    <th>Reason</th>
    <th>Status</th>
    <th>Booked on</th>
  </tr>
  <tr>
    <td>Jen</td>
    <td>Primo</td> 
    <td>Cuteness</td>
     <td>Complete</td>
      <td>2/22/22</td>
  </tr>
  <tr>
    <td>Bondoy</td>
    <td>Loki</td> 
    <td>Cuteness</td>
     <td>Complete</td>
      <td>2/22/22</td>
  </tr>
    <tr>
    <td>Rish</td>
    <td>Chevy</td> 
    <td>Cutie</td>
     <td>Complete</td>
      <td>2/22/22</td>
  </tr>
    <tr>
    <td>She</td>
    <td>Hailey</td> 
    <td>Cuteness</td>
     <td>Complete</td>
      <td>2/22/22</td>
  </tr>
  <tr>
    <td></td>
    <td></td> 
    <td></td>
     <td></td>
      <td></td>
  </tr>
    <tr>
    <td></td>
    <td></td> 
    <td></td>
     <td></td>
      <td></td>
  </tr>
   <tr>
    <td></td>
    <td></td> 
    <td></td>
     <td></td>
      <td></td>
  </tr>
   <tr>
    <td></td>
    <td></td> 
    <td></td>
     <td></td>
      <td></td>
  </tr>
   <tr>
    <td></td>
    <td></td> 
    <td></td>
     <td></td>
      <td></td>
  </tr>
</table>
 

   <a href="#" class="previous">&laquo; Previous</a>
<a href="#" class="next">Next &raquo;</a>

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
