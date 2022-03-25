<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Online Appointment System for Veterinary Services</title>
    <link rel="stylesheet" href="{{URL::to('css/homepage.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/appointment-info.css')}}">
    <link rel="icon" type="image/x-icon" href="{{URL::to('WEBSITE ELEMENTS/brand-logo.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
<!--NAVIGATION BAR-->
    <nav class="navigation-bar">
        <div class="logo-container">
            <div>
                <a href="{{url('/home')}}"><img src="{{URL::to('WEBSITE ELEMENTS/brand-logo.png')}}"></a>
            </div>
            <div class="nav-title-page">
                <p>Online Veterinary Appointment System</p>
            </div>
        </div>
    </nav>

    <div class="nav-button-container">
        <a href="javascript:javascript:history.go(-1)"><i class="fa fa-chevron-left" 
            style="font-size: 50px; color: #1697b7; cursor: pointer; padding: 30px 20px 10px;"></i></a>

        <a href="{{url('/service')}}"><i class="fa fa-remove" 
            style="float: right; font-size: 50px;  color: #1697b7; cursor: pointer; padding: 30px 20px 10px;"></i></a>
    </div>

<!--BODY CONTAINER-->
<!--NAME-->
    <h1 class="name-txt">May I know your pet's name?</h1>
    <input type="text" id="pet-name" name="pet-name" placeholder="Enter your pet's name" required>
   
    <div class="age-gender-col">

        <div class="age-col">

            <h1 class="age-input">Age</h1>
            <select id="pet-age" name="pet-age" required>
                <option value="" disabled selected class="default">Select age</option>
                <option value="1m" class="options">1 Month</option>
                <option value="2m" class="options"> 2 Months</option>
                <option value="3m" class="options">3 Months</option>
                <option value="4m" class="options">4 Months</option>
                <option value="5m" class="options">5 Months</option>
                <option value="6m" class="options">6 Months</option>
                <option value="7m" class="options">7 Months</option>
                <option value="8m" class="options">8 Months</option>
                <option value="9m" class="options">9 Months</option>
                <option value="10m" class="options">10 Months</option>
                <option value="11m" class="options">11 Months</option>
                <option value="1y" class="options">1 Year</option>
                <option value="2y" class="options">2 Years</option>
                <option value="3y" class="options">3 Years</option>
                <option value="4y" class="options">4 Years</option>
                <option value="5y" class="options">5 Years</option>
                <option value="6y" class="options">6 Years</option>
                <option value="7y" class="options">7 Years</option>
                <option value="8y" class="options">8 Years</option>
                <option value="9y" class="options">9 Years</option>
                <option value="10y" class="options">10 Years</option>
                <option value="11y" class="options">11 Years</option>
                <option value="12y" class="options">12 Years</option>
                <option value="13y" class="options">13 Years</option>
                <option value="14y" class="options">14 Years</option>
                <option value="15y" class="options">15 Years</option>
                <option value="16y" class="options">16 Years</option>
                <option value="17y" class="options">17 Years</option>
                <option value="18y" class="options">18 Years</option>
                <option value="19y" class="options">19 Years</option>
                <option value="20y" class="options">20 Years</option>
                <option value="21y" class="options">21 Years</option>
                <option value="22y" class="options">22 Years</option>
                <option value="23y" class="options">23 Years</option>
                <option value="24y" class="options">24 Years</option>
                <option value="25y" class="options">25 Years</option>
            </select>

        </div>
       
        <div class="gender-col">

            <h1 class="gender-input">Gender</h1>
            <select id="pet-gender" name="pet-gender" required>
                <option value="" disabled selected class="default">Select gender</option>
                <option value="Male" class="options">Male</option>
                <option value="Female" class="options">Female</option>
            </select>

        </div>
    </div>
    
<!--NEXT BUTTON-->
    
        <a href="{{route('appointment_type')}}"><button class="button next-btn">Next</button></a>

    </body>
    <script type="text/javascript">
        $(document).ready(function(){

            $(".button").click(function(){

                var pet_name = $("#pet-name").val();
                var pet_gender = $("#pet-gender").val();
                var pet_age = $("#pet-age").val();

                var pet = {
                    pet_name: pet_name,
                    pet_age: pet_age,
                    pet_gender: pet_gender
                }

                window.localStorage.setItem("pet", JSON.stringify(pet));
            });
        });
    </script>
</html>