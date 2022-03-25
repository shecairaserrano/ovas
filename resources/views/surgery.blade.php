<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Online Appointment System for Veterinary Services</title>
    <link rel="stylesheet" href="{{URL::to('css/surgery.css')}}">
    <link rel="icon" type="image/x-icon" href="{{URL::to('WEBSITE ELEMENTS/brand-logo.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

<!--NAVIGATION BAR-->
    @include('nav')
<!--BODY-PIC-CONTAINER-->

    <div class="first-pic-container">
        <img src="WEBSITE ELEMENTS/pic/surgery-title-bar.png">
    </div>

    <div class="second-pic-container">
    <a href="{{route('appointment_first')}}">
        <img src="WEBSITE ELEMENTS/pic/Surgery-first-image.png">
    </a>
        
    </div>

    <div class="third-pic-container">
        <img src="WEBSITE ELEMENTS/pic/some-surgeries-title.png">
    </div>

<!--BODY CONTAINER - BUTTONS-->

    <div class="btn-group">

        <!--SPAY AND NEUTERS-->
            <a class="button" href="#popup1">spay and neutres</a>

            <div id="popup1" class="overlay">
	            <div class="popup">
		            <h2>spay and neutres</h2>
		                <a class="close" href="#">&times;</a>
		            <div class="content">
                        <br><b>Spaying</b> refers to the removal of the reproductive organs of female dogs and
                        cats, while <b>neutering</b> is the removal of the testicles in male dogs and cats.
                        The surgeries are always performed while the animal is under anesthesia.
                        The animal may stay at the veterinarian's office anywhere from a few hours
                        to a few days, depending on the animal's size, age and health. Depending on
                        the procedure, the animal may need to have stitches removed after a few
                        days. 
		            </div>
	            </div>
            </div>

            <!--MASS REMOVAL-->
            <a class="button" href="#popup2">mass removal</a>

            <div id="popup2" class="overlay">
	            <div class="popup">
		            <h2>mass removal</h2>
		                <a class="close" href="#">&times;</a>
		            <div class="content">
                        <br><b>Masses</b> are a common condition in pets. These masses can grow on, in, 
                        or just under the skin. Ranging in size from a couple of millimeters to football-sized, 
                        masses can represent a wide variety of conditions from simple skin tags, to scars, 
                        to malignant cancers, to large fatty growth on dogs and cats.<br><b>Mass removals</b> typically 
                        require sedation or general anesthesia. This serves three functions: ensuring your pet 
                        holds perfectly still (with no sudden movements that could cause injury), keeping your 
                        pet fear-free (they'll sleep rather than feeling nervous), and avoiding pain.<br> Once the mass is removed, 
                        our veterinarian will send it to a laboratory for analysis. This test, called a “histopathology,” 
                        is the most accurate way to determine what the mass is (and, if it's cancerous, to determine 
                        whether or not all of the cancer was removed).
		            </div>
	            </div>
            </div>

            <!--SOFT TISSUE SURGERY-->
            <a class="button" href="#popup3">soft tissue surgery</a>

            <div id="popup3" class="overlay">
	            <div class="popup">
		            <h2>soft tissue surgery</h2>
		                <a class="close" href="#">&times;</a>
		            <div class="content">
                        <br><b>Soft tissue surgery</b> describes the majority of surgeries that don't fall under orthopedic surgery. 
                        Such as gastrointestinal/abdominal, urogenital, ear, and tumor removal surgeries.
		            </div>
	            </div>
            </div>

            <!--DENTAL-->
            <a class="button" href="#popup4">dental</a>

            <div id="popup4" class="overlay">
	            <div class="popup">
		            <h2>dental</h2>
		                <a class="close" href="#">&times;</a>
		            <div class="content">
                        <br><b>Dental cleanings</b> should be part of routine pet care. Cleanings help catch or prevent conditions of the gums 
                        and the bones that hold the teeth in place, called periodontal diseases. If left untreated, these diseases can damage 
                        your pet's internal organs, not just his mouth.<br>
                        Periodontal disease, including gingivitis and periodontitis, can develop when plaque and tartar build up underneath 
                        the gums. Potentially painful, periodontal disease could cost your pet his teeth. If the bacteria that caused the 
                        plaque enter your pet's bloodstream, they can create heart, lung, and kidney problems, too.
		            </div>
	            </div>
            </div>


            <!--OCULAR SURGERY-->
            <a class="button" href="#popup5">ocular surgery</a>

            <div id="popup5" class="overlay">
	            <div class="popup">
		            <h2>ocular surgery</h2>
		                <a class="close" href="#">&times;</a>
		            <div class="content">
                        <br>An <b>ocular surgery</b> is a surgery that is performed directly on an eye, or in the eye area. Common examples include “cherry eye” 
                        surgery, eyelid mass removals, and procedures to help a corneal ulcer (an abrasion on the surface of the eye) heal.
		            </div>
	            </div>
            </div>

            <!--ORTHOPEDIC SURGERY-->
            <a class="button" href="#popup6">orthopedic surgery</a>

            <div id="popup6" class="overlay">
	            <div class="popup">
		            <h2>orthopedic surgery</h2>
		                <a class="close" href="#">&times;</a>
		            <div class="content">
                        <br><b>Orthopedic surgery</b> involves the prevention, diagnosis, and treatment of bone, joint, ligament, tendon, and muscle disorders.
		            </div>
	            </div>
            </div>


            <!--FOREIGN BODY REMOVAL-->
            <a class="button" href="#popup7">foreign body removal</a>

            <div id="popup7" class="overlay">
	            <div class="popup">
		            <h2>foreign body removal</h2>
		                <a class="close" href="#">&times;</a>
		            <div class="content">
                        <br>A <b>foreign body removal</b> is an emergency procedure to remove an object that's obstructing normal digestive function.
		            </div>
	            </div>
            </div>

            <!--WOUND REPAIR-->
            <a class="button" href="#popup8">wound repair</a>

            <div id="popup8" class="overlay">
	            <div class="popup">
		            <h2>wound repair</h2>
		                <a class="close" href="#">&times;</a>
		            <div class="content">
                        <br><b>Wounds</b> are cuts, tears, burns, breaks, or other damage to living tissue. Wounds are often classified as clean, contaminated, 
                        or infected. Clean wounds are those created under sterile conditions, such as surgical incisions. The number of bacteria 
                        present determines the difference between contaminated and infected wounds.
		            </div>
	            </div>
            </div>

            <!--C-SECTION-->
            <a class="button" href="#popup9">c-section</a>

            <div id="popup9" class="overlay">
	            <div class="popup">
		            <h2>c-section</h2>
		                <a class="close" href="#">&times;</a>
		            <div class="content">
                        <br>A <b>caesarean section</b>, or <b>C-section</b>, is major surgery performed to remove puppies/kittens from the uterus. 
                        This is most commonly performed as an emergency procedure when there is difficulty with natural birth. 
                        Most pets recover quickly from this procedure; however, if your pet was in labor for several hours before 
                        surgery was performed, her recovery will be slower and she will need extra attention and help with her puppies/kittens.
		            </div>
	            </div>
            </div>
        </div>

<!--FOURTH PIC MESSAGE BOTTOM-->
            <div class="fourth-pic-container">
                <img src="WEBSITE ELEMENTS/pic/surgery-bottom-message.png">
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
