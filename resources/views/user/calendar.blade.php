<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Online Appointment System for Veterinary Services</title>
    <link rel="stylesheet" href="{{URL::to('css/appointment-calendar.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/homepage.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="{{URL::to('WEBSITE ELEMENTS/brand-logo.png')}}">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
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



<!--BODY -->
<body>
   <p class="body-text">When will <b id="pet_name"></b> visit us?</p>
  <div class="main">
  <div class="sideb">
    <div class="header"><i class="fa fa-angle-left" aria-hidden="true"></i><span><span class="month"> </span><span class="year"></span></span><i class="fa fa-angle-right" aria-hidden="true"></i></div>
    <input type="date" name="date" id="date">
    
  </div>
  <div class="right-wrapper">
    <div class="header"><span></span></div><span class="day"></span><span class="month"></span>
  </div>
</div>

<!--NEXT BUTTON-->
    
<a href="{{route('confirmation')}}"><button class="button next-btn">Next</button></a>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script  src="{{URL::to('js/calendar-schedule.js')}}"></script>
 
    </body>
    <script type="text/javascript">
    $(document).ready(function(){
        
        var groom = JSON.parse(window.localStorage.getItem("groom_package"));
        if(groom){

             $("a").attr("href", "{{route('grooming_confirmation')}}")
        }
        

        var pet = JSON.parse(window.localStorage.getItem("pet"));
        $("#pet_name").text(pet.pet_name);
       

        $(".button").click(function(){
          var pet_date = $("#date").val();

           pet['date'] = pet_date;

            window.localStorage.setItem("pet", JSON.stringify(pet));
        

        });

       

    });
 </script> 
</html>