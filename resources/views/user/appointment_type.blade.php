<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Online Appointment System for Veterinary Services</title>
    <link rel="stylesheet" href="{{URL::to('css/homepage.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/appointment-type.css')}}">
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
    <h1 class="type-txt">Hi, is <b id="pet_name"></b> a:</h1>

    <div class="type-container">
        <div class="type-dog">
            <a href="{{route('dog')}}">
                <img src="{{URL::to('WEBSITE ELEMENTS/pic/type-dog-image.png')}}">
            </a>
        </div>

        <div class="type-cat">
            <a href="{{route('cat')}}">
                <img src="{{URL::to('WEBSITE ELEMENTS/pic/type-cat-image.png')}}">
            </a>
        </div>

    </div>

</body>
<script type="text/javascript">
    $(document).ready(function(){
        var pet = JSON.parse(window.localStorage.getItem("pet"));
        $("#pet_name").text(pet.pet_name);
        

    });
</script>
</html>