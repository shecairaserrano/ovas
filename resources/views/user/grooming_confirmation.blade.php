<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Online Appointment System for Veterinary Services</title>
    <link rel="stylesheet" href="{{URL::to('css/homepage.css')}}">
    <link rel="stylesheet" href="{{URL::to('CSS/appointment-confirmation-grooming.css')}}">
    <link rel="icon" type="image/x-icon" href="{{URL::to('/WEBSITE ELEMENTS/brand-logo.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<!--NAVIGATION BAR-->
    <nav class="navigation-bar">
        <div class="logo-container">
            <div>
                <a href="Homepage.html"><img src="{{URL::to('/WEBSITE ELEMENTS/brand-logo.png')}}"></a>
            </div>
            <div class="nav-title-page">
                <p>Online Veterinary Appointment System</p>
            </div>
        </div>
    </nav>

    <div class="nav-button-container">
        <a href="javascript:javascript:history.go(-1)"><i class="fa fa-chevron-left" 
            style="font-size: 50px; color: #1697b7; cursor: pointer; padding: 30px 20px 10px;"></i></a>

        <a href="{{url('service')}}"><i class="fa fa-remove"
            style="float: right; font-size: 50px;  color: #1697b7; cursor: pointer; padding: 30px 20px 10px;"></i></a>
    </div>

<!--BODY-->
<h1 class="check-text">Check Your Data</h1>
<h4 class="check-message-text">Double-check all the details before submitting. Once submitted, all the data input cannot be changed or edited.</h4>

<div class="confirmation-col">

    <div class="first-col">

    <!--NAME-->
    <h1 class="label-text">Name</h1>
        <input type="text" class="pet-output" name="pet-name" id="name">

      <!--TYPE-->
    <h1 class="label-text">Type</h1>
      <input type="text" class="pet-output" name="pet-type" id="pet_type">

    <!--BREED-->
    <h1 class="label-text">Breed</h1>
      <input type="text" class="pet-output" name="pet-breed" id="breed">

</div>

<div class="second-col">

    <!--DATE OF VISIT-->
    <h1 class="label-text">Date of visit</h1>
      <input type="text" class="pet-output" name="pet-date" id="date">

    <!--REASON-->
    <h1 class="label-text">Package</h1>
      <input type="text" class="pet-output" name="pet-package" id="package">

    <!--DETAILED REASON INFORMATION-->
    <h1 class="label-text">Individual Services</h1>
      <textarea type="text" class="pet-individual-services" name="pet-individual-services" id="individual"></textarea>

    </div>
</div>

<!--NEXT BUTTON-->
    
<button class="button submit-btn submit">Submit</button>
</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
        var url  = "{{route('set_appointment')}}";
        var token = "{{Session::token()}}";

        var pet = JSON.parse(window.localStorage.getItem("pet"));

        var groom = JSON.parse(window.localStorage.getItem("groom_package"));
        if(groom){

             $("#package").val(groom);
             pet['reason_menu'] = groom;
        }

        var individual = JSON.parse(window.localStorage.getItem("individual_package"));
        if(individual){

             $("#individual").val(individual);
             pet['reason'] = individual.toString();
        }

        
        


        $("#name").val(pet.pet_name);
        $("#age").val(pet.pet_age);
        $("#gender").val(pet.pet_gender);
        $("#breed").val(pet.breed);
        $("#pet_type").val(pet.type);
        $("#date").val(pet.date);

        $(".submit").click(function(){
           $.ajax({
               type:'POST',
               url:url,
               data:{_token: token, pet: pet},
               success:function(data) {
                console.log(data);
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
</html>