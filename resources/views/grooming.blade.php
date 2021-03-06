<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Online Appointment System for Veterinary Services</title>
    <link rel="stylesheet" href="{{URL::to('css/grooming.css')}}">
    <link rel="icon" type="image/x-icon" href="{{URL::to('WEBSITE ELEMENTS/brand-logo.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>

<!--NAVIGATION BAR-->
 @include('nav')

<!--GROOMING BODY CONTAINER-->
<div class="grooming-body-images">
        <div class="title-pic-container">
            <img src="WEBSITE ELEMENTS/pic/grooming-title-bar.png">
        </div>

</div>

<div class="row-body-images">
    <div class="column-body-images">
      <a href="{{route('appointment_first_groom',['name'=> 'complete'])}}">
          <img src="WEBSITE ELEMENTS/pic/grooming-complete-image.png">
      </a>
    </div>
    <div class="column-body-images">
      <a href="{{route('appointment_first_groom',['name'=> 'basic'])}}">
          <img src="WEBSITE ELEMENTS/pic/grooming-basic-image.png">
      </a>
    </div>
</div>

<!--INDIVIDUAL SERVICES CHECKBOXES-->
<div class = "service-title-container">
    <div class="service-title-row">
      <div class="col-12">
        <h1>Individual Services</h1>
      </div>
    </div>

    <div class="service-row">
      <div class="service-container">
        <ul class="service-list">
         <li>
            <label class="container">Nail Trim and Filling - 75 Php
              <input type="checkbox" value="Nail Trim and Filling - 75 Php">
              <span class="checkmark"></span>
            </label>
         </li>
          
         <li>
            <label class="container">Teeth Brushing - 75 Php
              <input type="checkbox" value="Teeth Brushing - 75 Php">
              <span class="checkmark"></span>
            </label>
         </li>
          
         <li>
            <label class="container">Ear Cleaning - 75 Php
              <input type="checkbox" value="Ear Cleaning - 75 Php">
              <span class="checkmark"></span>
            </label>
         </li>
          
         <li>
            <label class="container">Eye Wash - 75 Php
              <input type="checkbox" value="Eye Wash - 75 Php">
              <span class="checkmark"></span>
            </label>
         </li>
          
          <li>
            <label class="container">Facial Trimming - 150 Php
              <input type="checkbox" value="Facial Trimming - 150 Php">
              <span class="checkmark"></span>
            </label>
         </li>
          
         <li>
            <label class="container">Anal Drain - 150 Php
              <input type="checkbox" value="Anal Drain - 150 Php">
              <span class="checkmark"></span>
            </label>
         </li>

         <li>
            <label class="container">De-matting - 150 Php
              <input type="checkbox" value="De-matting - 150 Php">
              <span class="checkmark"></span>
            </label>
         </li>

         <li>
            <label class="container">Bath and Blow Dry - 200 Php
              <input type="checkbox" value="Bath and Blow Dry - 200 Php">
              <span class="checkmark"></span>
            </label>
         </li>
           
         </ul>
         </div>
      </div>
    </div>
  </div>
   
<!--BOOK NOW BUTTON FOR INDIVIDUAL SERVICES-->
  <div class="btn-container">
    <a href="{{route('appointment_first_groom',['name'=> 'Individual'])}}"><button class="btn-indivserv">BOOK NOW</button></a>
  </div>

<!--FOOTER-->

<footer class="footer-distributed">

    <div class="footer-left">
        <div class="footer-pic"><img src="WEBSITE ELEMENTS/brand-logo.png"></div>
        <h3>Online Veterinary Appointment System</h3>


        <p class="footer-company-name">Copyright ?? 2022 <strong>BCDSSDevelopers</strong> All rights reserved</p>
    </div>

    <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>Address</span>
                Country</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>Contact Number</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="">Email Address</a></p>
        </div>
    </div>
    <div class="footer-right">
        <p class="footer-company-about">
            <span>About Us</span>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla. 
        </p>
        <div class="footer-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
        </div>
    </div>
</footer>

<script type="text/javascript">
    $(document).ready(function(){
        var individual_list = [];

        $('input[type="checkbox"]').change(function() {
            var package_val = $(this).val();
            if($(this).is(":checked")) {
                
                individual_list.push(package_val);
            }else {
                individual_list.forEach(function(item, index){
                    if(item == package_val) {
                        individual_list.splice(index, 1);
                    }
                });
            }

            window.localStorage.setItem("individual_package", JSON.stringify(individual_list));
               
        });

    });
</script>


</body>