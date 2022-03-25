<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Online Appointment System for Veterinary Services</title>
    <link rel="stylesheet" href="{{URL::to('css/registration.css')}}">
    <link rel="icon" type="image/x-icon" href="{{URL::to('WEBSITE ELEMENTS/brand-logo.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--NAVIGATION BAR-->
     @include('nav')

<!--FORM-->
   <div class="wrapper">
        @include('shared.notification')
      <div class="title-text">
         <div class="title login">
            LOGIN FORM
         </div>
         <div class="title signup">
            SIGN UP FORM
         </div>

      </div>
   <div class="form-container">
      <div class="slide-controls">
         <input type="radio" name="slide" id="login" checked>
         <input type="radio" name="slide" id="signup">
         <label for="login" class="slide login">Login</label>
         <label for="signup" class="slide signup">Sign Up</label>
         <div class="slider-tab"></div>
      </div>
      
      <div class="form-inner">

         <form action="{{route('login_check')}}" class="login" method="POST">
            @csrf
            <div class="field">
               <input type="text" placeholder="Email Address" required name="email">
            </div>
            <div class="field">
               <input type="password" placeholder="Password" required name="password">
            </div>


            <div class="pass-link">
               <a href="#">Forgot password?</a>
            </div>
            <div class="field btn">
               <div class="btn-layer"></div>
               <input type="submit" value="Login">
            </div>
               
            <div class="signup-link">
               Not a member? <a href="">Sign Up now</a>
            </div>
         </form>

         <form action="{{route('register_check')}}" class="signup" method="POST">
            @csrf
            <div class="field">
               <input type="text" placeholder="Full Name" required name="name">
            </div>
            <div class="field">
               <input type="number" maxlength="11" placeholder="Phone Number" required name="contact">
            </div>
            <div class="field">
               <input type="email" placeholder="Email Address" required name="email">
            </div>
            <div class="field">
               <input type="text" placeholder="Address" required name="address">
            </div>
            <div class="field">
               <input type="password" placeholder="Password" required name="password">
            </div>
            <div class="field">
               <input type="password" placeholder="Confirm password" required name="repeat_password">
            </div>

            <label class="policy-container">
                <input type="checkbox" required>
                <span class="checkmark"></span>
                I hereby agree to the terms and conditions of this form from Data Privacy Act of 2012.
            </label>

            <div class="field btn">
               <div class="btn-layer"></div>
               <input type="submit" value="Sign up">
            </div>
            </div>
         </form>
      </div>
   </div>
</div>

        <script>
            const loginText = document.querySelector(".title-text .login");
            const loginForm = document.querySelector("form.login");
            const loginBtn = document.querySelector("label.login");
            const signupBtn = document.querySelector("label.signup");
            const signupLink = document.querySelector("form .signup-link a");
            signupBtn.onclick = (()=>{
                loginForm.style.marginLeft = "-50%";
                loginText.style.marginLeft = "-50%";
            });
            loginBtn.onclick = (()=>{
                loginForm.style.marginLeft = "0%";
                loginText.style.marginLeft = "0%";
            });
            signupLink.onclick = (()=>{
                signupBtn.click();
                return false;
            });
        </script>
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
