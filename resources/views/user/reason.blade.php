<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Online Appointment System for Veterinary Services</title>
    <link rel="stylesheet" href="{{URL::to('css/homepage.css')}}">
    <link rel="stylesheet" href="{{URL::to('CSS/appointment-reason.css')}}">
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
                <a href="{{url('/')}}"><img src="{{URL::to('WEBSITE ELEMENTS/brand-logo.png')}}"></a>
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
    <div class="reason-col">

        <h1 class="reason-text">What is the reason for <b id="pet_name"></b>'s vist?</h1>

        <select id="reason-menu" name="reason-menu">
            <option value="" disabled selected class="default">Select reason</option>
            <option value="bladder-infection" class="options">Bladder Infection</option>
            <option value="dental-disease" class="options">Dental Disease</option>
            <option value="ear-infection" class="options">Ear Infection</option>
            <option value="flea-ticks" class="options">Flea and Ticks</option>
            <option value="general-checkup" class="options">General Check-up</option>
            <option value="kidney-problems" class="options">Kidney Problems</option>
            <option value="prenatal-checkup" class="options">Prenatal Check-up</option>
            <option value="skin-allergies" class="options">Skin Allergies</option>
            <option value="thyroid-problems" class="options">Thyroid Problems</option>
            <option value="upset-stomach" class="options">Upset Stomach</option>
            <option value="vaccinations" class="options">Vaccinations</option>
            <option value="other" class="options">Other</option>
        </select>
    </div>

<!--DETAILED EXPLANATION-->
        <textarea type="text" id="detailed-reason" name="detailed-reason" placeholder="tell us more" required></textarea>

   

<!--NEXT BUTTON-->
    
<a href="{{route('calendar')}}"><button class="button next-btn">Next</button></a>

<script type="text/javascript">
    $(document).ready(function(){
      

        var pet = JSON.parse(window.localStorage.getItem("pet"));
        $("#pet_name").text(pet.pet_name);
       

        $(".button").click(function(){
           
           var reason_menu = $("#reason-menu").val();
           var reason = $("#detailed-reason").val();
           pet['reason_menu'] = reason_menu;
           pet['reason'] = reason;

            window.localStorage.setItem("pet", JSON.stringify(pet));
        

        });

       

    });
 </script> 