<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Online Appointment System for Veterinary Services</title>
    <link rel="stylesheet" href="{{URL::to('css/homepage.css')}}">
    <link rel="stylesheet" href="{{URL::to('CSS/appointment-breed-cat.css')}}">
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

        <h1 class="breed-cat-input">What <b id="pet_name"></b>'s breed?</h1>

        <select id="pet-breed-cat" name="pet-breed-cat">
            <option value="" disabled selected class="default">Select breed</option>
            <option value="abyssinian" class="options">Abyssinian</option>
            <option value="british-shorthair" class="options">British Shorthair</option>
            <option value="bengal" class="options">Bengal</option>
            <option value="burmese" class="options">Burmese</option>
            <option value="balinese" class="options">Balinese</option>
            <option value="devon-rex" class="options">Devon Rex</option>
            <option value="exotic-shorthair" class="options">Exotic Shorthair</option>
            <option value="japanese-bobtail" class="options">Japanese Bobtail</option>
            <option value="maine-coon" class="options">Maine Coon</option>
            <option value="ocicat" class="options">Ocicat</option>
            <option value="persian" class="options">Persian</option>
            <option value="puspin" class="options">Puspin</option>
            <option value="ragdoll" class="options">Ragdoll</option>
            <option value="russian-blue" class="options">Russian Blue</option>
            <option value="sphynx" class="options">Sphynx</option>
            <option value="siamese" class="options">Siamese</option>
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

            pet['breed'] = $("#pet-breed-cat").val();
            pet['type'] = 'cat';

            window.localStorage.setItem("pet", JSON.stringify(pet));
        

        });

       

    });
 </script>   
