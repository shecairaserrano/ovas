<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Online Appointment System for Veterinary Services</title>
    <link rel="stylesheet" href="{{URL::to('css/homepage.css')}}">
    <link rel="stylesheet" href="{{URL::to('CSS/appointment-breed-dog.css')}}">
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
                <a href="Homepage.html"><img src="{{URL::to('WEBSITE ELEMENTS/brand-logo.png')}}"></a>
            </div>
            <div class="nav-title-page">
                <p>Online Veterinary Appointment System</p>
            </div>
        </div>
    </nav>

    <div class="nav-button-container">
        <a href="javascript:javascript:history.go(-1)"><i class="fa fa-chevron-left" 
            style="font-size: 50px; color: #1697b7; cursor: pointer; padding: 30px 20px 10px;"></i></a>

        <a href="Services.html"><i class="fa fa-remove"
            style="float: right; font-size: 50px;  color: #1697b7; cursor: pointer; padding: 30px 20px 10px;"></i></a>
    </div>

<!--BODY CONTAINER-->
    <div class="breed-col">

        <h1 class="breed-dog-input">What <b id="pet_name"></b>'s breed?</h1>

        <select id="pet-breed-dog" name="pet-breed-dog">
            <option value="" disabled selected class="default">Select breed</option>
            <option value="american-bulldog" class="options">American Bulldog</option>
            <option value="aspin" class="options">Aspin</option>
            <option value="alaskan-malamute" class="options">Alaskan Malamute</option>
            <option value="barbet" class="options">Barbet</option>
            <option value="basenji" class="options">Basenji</option>
            <option value="beagle" class="options">Beagle</option>
            <option value="bichon-frise" class="options">Bichon Frise</option>
            <option value="basset-hound" class="options">Basset Hound</option>
            <option value="boston-terrier" class="options">Boston Terrier</option>
            <option value="bull-terrier" class="options">Bull Terrier</option>
            <option value="bulldog" class="options">Bulldog</option>
            <option value="chihuahua" class="options">Chihuahua</option>
            <option value="chow-chow" class="options">Chow Chow</option>
            <option value="dachshund" class="options">dachshund</option>
            <option value="dalmatian" class="options">dalmatian</option>
            <option value="doberman" class="options">Doberman</option>
            <option value="french-bulldog" class="options">French Bulldog</option>
            <option value="frenchton" class="options">Frenchton</option>
            <option value="german-shepherd" class="options">German Shepherd</option>
            <option value="golden-retriever" class="options">Golden Retiever</option>
            <option value="japanses-spitz" class="options">Japanese Spitz</option>
            <option value="maltese" class="options">Maltese</option>
            <option value="papillon" class="options">Papillon</option>
            <option value="pekingese" class="options">Pekingese</option>
            <option value="pomeranian" class="options">Pomeranian</option>
            <option value="poodle" class="options">Poodle</option>
            <option value="pug" class="options">Pug</option>
            <option value="rottweiler" class="options">Rottweiler</option>
            <option value="saint-bernard" class="options">Saint Bernard</option>
            <option value="shih-tzu" class="options">Shih Tzu</option>
            <option value="siberian-husky" class="options">Siberian Husky</option>
            <option value="yorkshire-terrier" class="options">Yorkshire Terrier</option>
            <option value="other" class="options">Other Breed</option>
        </select>

    </div>

<!--NEXT BUTTON-->
    
<a href="{{route('appointment_reason')}}"><button class="button next-btn">Next</button></a>

<script type="text/javascript">
    $(document).ready(function(){
        var pet = JSON.parse(window.localStorage.getItem("pet"));
        $("#pet_name").text(pet.pet_name);


        $(".button").click(function(){

            pet['breed'] = $("#pet-breed-dog").val();
            pet['type'] = 'dog';

            window.localStorage.setItem("pet", JSON.stringify(pet));
        

        });

       

    });
</script>
