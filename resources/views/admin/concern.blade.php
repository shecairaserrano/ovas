<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Online Appointment System for Veterinary Services</title>
    <link rel="stylesheet" href="{{URL::to('css/concern.css')}}">
    <link rel="icon" type="image/x-icon" href="{{URL::to('WEBSITE ELEMENTS/logo2.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<!--NAVIGATION BAR-->
@include('shared.admin_header_nav')


<!--BODY -->
    <p class="body-text">CONCERNS</p>

    <div class="table-users">
   <div class="header">Information</div>
   
   <table cellspacing="0">
      <tr>
         <th><b>Picture</th>
         <th><b>Name</th>
         <th width="400"><b>Comments</th></b></th>
          <th><b>Actions</th>
         <th></th>
      </tr>

      <tr>
         <td><img src="https://i.picsum.photos/id/1005/100/100.jpg" alt="" /></td>
         <td>John Michael</td>
         <td>SAMPLE </td>
         <td><button class="btn btn-delete">
  <span class="fa fa-trash"></span>
  <span class="mdi mdi-delete-empty mdi-24px"></span>
  <span>Delete</span></button></td>

      </tr>

      <tr>
         <td><img src="https://i.picsum.photos/id/1027/100/100.jpg" alt="" /></td>
         <td>Jennifer</td>
         <td>SAMPLE.</td>
          <td><button class="btn btn-delete">
  <span class="fa fa-trash"></span>
  <span class="mdi mdi-delete-empty mdi-24px"></span>
  <span>Delete</span></button></td>
      </tr>

      <tr>
         <td><img src="https://i.picsum.photos/id/64/100/100.jpg" alt="" /></td>
         <td>Irish</td>
         <td> SAMPLE.</td>
         <td><button class="btn btn-delete">
  <span class="fa fa-trash"></span>
  <span class="mdi mdi-delete-empty mdi-24px"></span>
  <span>Delete</span></button></td>
      </tr>
      
      <tr>
         <td><img src="https://i.picsum.photos/id/1025/100/100.jpg" alt="" /></td>
         <td>Shecaira</td>
         <td>SAMPLE.</td>
          <td><button class="btn btn-delete">
  <span class="fa fa-trash"></span>
  <span class="mdi mdi-delete-empty mdi-24px"></span>
  <span>Delete</span></button></td>
   </table>
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

