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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
    <div class="container">

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <ul class="list-group">
                        <li class="list-group-item">Pet Name: <span id="name"></span></li>
                        <li class="list-group-item">Age: <span id="age"></span></li>
                        <li class="list-group-item">Gender: <span id="gender"></span></li>
                        <li class="list-group-item">Breed: <span id="breed"></span></li>
                        <li class="list-group-item">Type: <span id="pet_type"></span></li>
                        <li class="list-group-item">Reason Menu: <span id="reason_menu"></span></li>
                        <li class="list-group-item">Reason: <span id="reason"></span></li>
                        <li class="list-group-item">Date: <span id="date"></span></li>
                    </ul>

                    <button class="btn btn-success btn-block submit">SUBMIT</button>
            </div>            
        </div>
    </div>

    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
        var url  = "{{route('set_appointment')}}";
        var token = "{{Session::token()}}";

        var pet = JSON.parse(window.localStorage.getItem("pet"));
        $("#name").text(pet.pet_name);
        $("#age").text(pet.pet_age);
        $("#gender").text(pet.pet_gender);
        $("#breed").text(pet.breed);
        $("#pet_type").text(pet.type);
        $("#reason_menu").text(pet.reason_menu);
        $("#reason").text(pet.reason);
        $("#date").text(pet.date);

        $(".submit").click(function(){
           $.ajax({
               type:'POST',
               url:url,
               data:{_token: token, pet: JSON.parse(window.localStorage.getItem("pet"))},
               success:function(data) {
                  if(data.status == 200) {
                    swal("Queue Number: "+data.queue, "Here is your Queue Number in "+data.date+" . Please keep it", "success");
                  }else if(data.status == 404) {
                    swal("Failed", data.message, "error");
                  }
               }
            });
        });
       

    });
 </script> 
