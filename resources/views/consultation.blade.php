<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Online Appointment System for Veterinary Services</title>
    <link rel="stylesheet" href="{{URL::to('css/consultation.css')}}">
    <link rel="icon" type="image/x-icon" href="{{URL::to('WEBSITE ELEMENTS/brand-logo.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

<!--NAVIGATION BAR-->
    @include('nav')

<!--BODY-PIC-CONTAINER-->
<div class="consultation-body-section">
    <div class="first-pic-container">
        <img src="WEBSITE ELEMENTS/pic/consultation-title-bar.png">
    </div>

    <div class="second-pic-container">
        <a href="{{route('appointment_first')}}">
            <img src="WEBSITE ELEMENTS/pic/Consultation-first-image.png">
        </a>
       
    </div>

    <div class="third-pic-container">
        <img src="WEBSITE ELEMENTS/pic/Consultation-second-image.png">
    </div>
</div>
<!--FOOTER-->

    <footer class="footer-distributed">

        <div class="footer-left">
            <div class="footer-pic"><img src="WEBSITE ELEMENTS/brand-logo.png"></div>
            <h3>Online Veterinary Appointment System</h3>


            <p class="footer-company-name">Copyright © 2022 <strong>BCDSSDevelopers</strong> All rights reserved</p>
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

</body>
</html>
