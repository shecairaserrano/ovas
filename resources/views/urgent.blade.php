<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Online Appointment System for Veterinary Services</title>
    <link rel="stylesheet" href="{{URL::to('css/urgentcare.css')}}">
    <link rel="icon" type="image/x-icon" href="{{URL::to('WEBSITE ELEMENTS/brand-logo.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<!--NAVIGATION BAR-->
    @include('nav')

<!--BODY-PIC-CONTAINER-->
         <div class="urgentcare-body-images";>
            <div class="urgentcare-title">
                <img src="WEBSITE ELEMENTS/pic/urgentcare-title.png">
            </div>

        <div class="btn-group">
            
            <!--GIVING LIQUIDS BY MOUTH-->
            <a class="btn-instructions" href="#popup1">giving liquids orally</a>
           
            <div id="popup1" class="overlay">
	            <div class="popup">
		            <h2>giving liquids orally</h2>
		                <a class="close" href="#">&times;</a>
		            <div class="content">
			        <br><b>DOGS</b><br>
                    <b>1.</b> TILT HEAD upwards.<br><br>
                    <b>2.</b> Using thumb and first finger, PULL CHEEK outwards at corner of lips, making a pouch.<br><br>
                    <b>3.</b> Slowly POUR medicine or liquid into pouch. If choking occurs, stop, wait until
                    choking has stopped, then start again.<br><br>
                    <b>CATS</b><br>
                    <b>1.</b> GRASP head to hold still.<br><br>
                    <b>2.</b> Insert medicine dropper or syringe tip into cat's mouth in the space behind the fang teeth.<br><br>
                    <b>3.</b> Instill small amount of liquid (1/2-1 tsp.) into the mouth, allowing cat to swallow before
                    continuing.<br><br>
		            </div>
	            </div>
            </div>

            <!--BANDAGE-->
            <a class="btn-instructions" href="#popup2">how to bandage</a>
           
            <div id="popup2" class="overlay">
	            <div class="popup">
		            <h2>how to bandage</h2>
		                <a class="close" href="#">&times;</a>
		            <div class="content">
			        <br><b>HOW TO BANDAGE:</b><br><br>
                    <b>1.</b> Place a GAUZE PAD or clean cloth over the cleansed and treated wound.<br><br>
                    <b>2.</b> Wrap GAUZE ROLL or cloth strips snugly around the wound, holding the pad in place.<br><br>
                    <b>3.</b> Wrap TAPE on top and overlap onto the hair 1 inch above and below the gauze. If any swelling
                    occurs below the bandage, it is too tight-remove and re-bandage.<br><br>
                    <b>4.</b> Remove and replace DAILY.
		            </div>
	            </div>
            </div>

            <!--MUZZLE-->
            <a class="btn-instructions" href="#popup3">how to muzzle</a>
           
            <div id="popup3" class="overlay">
	            <div class="popup">
		            <h2>how to muzzle</h2>
		                <a class="close" href="#">&times;</a>
		            <div class="content">
                        <br><b>HOW TO MUZZLE:</b><br><br>
                        <b>1.</b> WRAP gauze roll (2 1/2 ft. long) or cloth strip (1 inch wide) around muzzle of pet<br><br>
                        <b>2.</b> TIE one loop securely under chin - DON'T WORRY - breathing is not affected.<br><br>
                        <b>3.</b> TIE AGAIN behind pet's head on top of neck. Don't be timid - IT DOESN'T HURT.
		            </div>
	            </div>
            </div>

            <!--VOMITING-->
            <a class="button" href="#popup4">vomiting</a>

            <div id="popup4" class="overlay">
	            <div class="popup">
		            <h2>vomiting</h2>
		                <a class="close" href="#">&times;</a>
		            <div class="content">
			        <br>You must see Veterinarian if your pet:<br>
                    <b>1.</b> Has swallowed a foreign body (sewing needles, fish hook, bone etc.)<br>
                    <b>2.</b> Is in pain when touched on belly (abdominal pain)<br>
                    <b>3.</b> Vomits blood<br>
                    <b>4.</b> Does not stop vomiting within 18-24 hours after following the steps below.<br><br>

                    <b>TREATMENT:</b><br>
                    <b>1.</b> Stop all food and water.<br>
                    <b>2.</b> Give PEDIALYTE (Electrolyte replacement) by mouth when vomiting subsides - 1 TBSN per 5 ilbs,
                    body weight every 1-2 hours.<br>
                    <b>3.</b> Allow pet to lick ICE CUBES.<br>
                    <b>4.</b> 6-12 hours after vomiting has stopped, give small amounts of water, PEDIALYTE, or soup broth
                    (1-2 Tbsp. per 10lbc body weight) every 2 hours.<br>
                    <b>5.</b> 24 hours after vomiting has stopped, feed small amounts of cooked eggs and/or cooked lean meat.
		            </div>
	            </div>
            </div>

            <!--DIARRHEA-->
            <a class="button" href="#popup5">diarrhea</a>
           
            <div id="popup5" class="overlay">
	            <div class="popup">
		            <h2>diarrhea</h2>
		                <a class="close" href="#">&times;</a>
		            <div class="content">
			        <br><b>1.</b> Stop all food.<br>
                    <b>2.</b> GIVE WATER - keep available to pet (unless vomiting).<br>
                    <b>3.</b> FEED A SPECIAL DIET<br>
                    Every 6-8 hours, feed small quantities of the following diet.
                    Mix together: (store excess in refrigerator)<br>
                    • 1 cup of baby rice cereal or cooked rice.<br>
                    • 1.2 cup cottage cheese or boiled meat.<br>
                    • 1 cooked egg.<br>
                    • 1 jar strained chicken or turkey baby.<br>
                    CONTINUE this diet until diarrhea has stopped for 24 hours.<br>
                    <b>4.</b> GIVE PEDIALYTE (Electrolyte replacement) orally - 1 TBSN per 5 pounds body weight hourly.<br>
                    <b>5.</b> If diarrhea gets worse or does not improve within 24 hourse, see Veterinarian.
		            </div>
	            </div>
            </div>

            <!--POISONS-->
            <a class="button" href="#popup6">poisons</a>
           
            <div id="popup6" class="overlay">
	            <div class="popup">
		            <h2>poisons (swallowed)</h2>
		                <a class="close" href="#">&times;</a>
		            <div class="content">
			        <br><b>MUSCLE SPAM POISONS</b> - such as rats or gopher poison (Strychnine) and snail poison (Metaldehyde).<br>
                    <b>TREATMENT:</b><br>
                    <b>1.</b> If muscle spasms (seizures or convulsions) are absent or slight, INDUCE VOMITING.<br>
                    <b>2.</b> If muscle spasms and are moderate to severe, DO NOT INDUCE VOMITING, RUSH to Veterinarian.<br><br>
                    <b>METHODS of causing your pet your pet to VOMIT:</b><br>
                    <b>CATS:</b> Give 1 tsp Hydrogen Peroxide by mouth very 5 minutes until vomting occurs.<br>
                    <b>DOGS:</b> Give Hydrogen Peroxide by mouth based on how much your dog weighs: 
                    (1-20 pounds) - give 2 teaspoons,
                    (20-40 pounds) - give 4 teaspoons,
                    (40-up pounds) - give 6 teaspoons.<br><br>
                    <b>SKIN POISONS:</b><br>
                    <b>Symptoms - </b> Topical Insecticides (for fleas & ticks): Excess salivation, ilated pupils, depressed, and weak.<br>
                    <b>TREATMENT:</b><br>
                    <b>1.</b>Give a bath with soap. Rinse well and remember to wear rubber gloves.<br>
                    <b>2.</b>Check skin for possible burns and treat.<br>
                    <b>3.</b>If symptoms are moderate to severe or pet is not improving, take to Veterinarian. BE SURE TO BRING POISON CONTAINER TOO.<br>
                </div>
	            </div>
            </div>


            <!--SEIZURES-->
            <a class="button" href="#popup7">seizures</a>
           
            <div id="popup7" class="overlay">
	            <div class="popup">
		            <h2>seizures (Fits or Convulsions)</h2>
		                <a class="close" href="#">&times;</a>
		            <div class="content">
			        <br><b>SYMPTOMS:</b><br>
                    Pet falls onto ground, uncontrolled muscle twitching and paddling motion of legs. Pet is awake but unresponsive.<br><br>
                    <mark>IF YOUR PET IS A NURSING NEW MOTHER and has seizures, she may have low blood calcium.<b>THIS IS AN EMERGENCY</b>
                    - Do not waste time - See Veterinarian IMMEDIATELY.</mark><br><br> 
                    <b>TREATMENT:</b><br>
                    <b>1.</b> REMOVE pet to a small, quiet room (laundry or bathroom is ideal).<br>
                    <b>2.</b> DO NOT MUZZLE or put fingers in mouth.<br>
                    <b>3.</b> TIME the DURATION of the seizure and observe all behavior to inform VET the following day.<br>
                    <b>4.</b> CALL VET immediately if seizure lasts longer than 5 minutes.<br>
                    <b>5.</b> Allow pet to recover by itself if seizures is less than 5 minutes.<br>
                    <b>6.</b> TAKE TEMPERATURE (rectally) with thermometer after seizure is over. If it is above 104°F (41°C).
                     cool pet down to 101°F. <br>
                    <b>7.</b> If weak after seizure, give 1/4 to 1/2 tsp honey or sugar syrup per 10 lbs of pet's body weight.
		            </div>
	            </div>
            </div>    
        
            <!--BROKEN BONES-->
            <a class="button" href="#popup8">broken bones</a>
           
            <div id="popup8" class="overlay">
	            <div class="popup">
		            <h2>broken bones</h2>
		                <a class="close" href="#">&times;</a>
		            <div class="content">
			       <br><b>BONE NOT THROUGH THE SKIN:</b><br>
                   <b>1.</b> MUZZLE<br>
                   <b>2.</b> Make a SPLINT out of a piece of wood or folded newspaper or magazine. Tape the splint to the
                   outside of the leg, allowing a 6-inch overlap at each end of break site.
                   Tape SECURELY. If paw swells - tape is too tight - loosen it.<br>
                   <b>3.</b> Take to Veterinarian as soon as possible but within 24 hours.<br><br>
                   <b>BONE THROUGH THE SKIN</b><br>
                   <b>1.</b> PREVENT pet form LICKING.<br>
                   <b>2.</b> BANDAGE and SPLINT if possible.<br>
                   <b>3.</b> Take to Veterinarian immediately.<br>
		            </div>
	            </div>
            </div>
              
            <!--BURNS-->
            <a class="button" href="#popup9">burns</a>
           
            <div id="popup9" class="overlay">
	            <div class="popup">
		            <h2>burns</h2>
		                <a class="close" href="#">&times;</a>
		            <div class="content">
			        <br><b>1.</b> Immediately apply ICE PACK or COLD, WET CLOTH to the burn site. Hold for 2-3 minutes.<br>
                    <b>2.</b> CLIP HAIR close to skin, using scissors.<br>
                    <b>3.</b> CLEANSE gently with mild soap.<br>
                    <b>4.</b> Apply ANTIBIOTIC oitment. Repeat every 8 hours.<br>
                    <b>5.</b> BANDAGE.<br>
                    <b>6.</b> See Veterinarian if burn is extensive or deep.
		            </div>
	            </div>
            </div>

            <!--CHOKING-->
            <a class="button" href="#popup10">choking</a>
           
            <div id="popup10" class="overlay">
	            <div class="popup">
		            <h2>choking</h2>
		                <a class="close" href="#">&times;</a>
		            <div class="content">
			        <br><b>EQUIPMENT NEEDED:</b><br>
                    <b>1.</b> Clothes hanger (you may need 2 or 3 taped together for the larger pet).<br><br>
                    <b>PROCEDURE:</b><br>
                    <b>1.</b> To look into the mouth, grasp the tongue (use a napkin to hold onto the tongue)
                    and pull it forward. <br>
                    <b>2.</b> Bend one end of the hanger and INSERT it into mouth behind the fang teeth to keep the mouth
                    open. One person is needed to hold the head and clothes hanger. The other person inserts a finger over
                    the base of the tongue, starting one one side of the throat and sweeps the finger to the other side to 
                    remove the object.
		            </div>
	            </div>
            </div>

            <!--HEAT STROKE-->
            <a class="button" href="#popup11">heat stroke</a>
           
            <div id="popup11" class="overlay">
	            <div class="popup">
		            <h2>heat stroke</h2>
		                <a class="close" href="#">&times;</a>
		            <div class="content">
			        <br><b>CAUSE:</b><br>
                    Being left in an overheated car, excess running on a hot day, or confined in a hot area without water.<br><br>
                    <b>SYMPTOMS:</b><br>
                    Heavy panting, extreme weakness, and a body temperature above 104°F (40°C). Body temperature is measured by inserting
                    a thermometer into rectum.<br><br>
                    <b>TREATMENT:</b><br>
                    COOL IMMEDIATELY-HOSE OFF or BATHE in cold water and apply ICE PACKS until the body temperature drops to 102°F (39°C).
                    Normal body temperature is 101°-102°F.<br><br>
                    Allow your pet to drink 1/4 to 1 cup cold water every 5 minutes (larger quantities may be vomited.) See Veterinarian as soon
                    as possible.
		            </div>
	            </div>
            </div>

            <!--CONSTIPATION-->
            <a class="button" href="#popup12">constipation</a>
           
            <div id="popup12" class="overlay">
	            <div class="popup">
		            <h2>constipation</h2>
		                <a class="close" href="#">&times;</a>
		            <div class="content">
			        <br>Always LIFT TAIL and check bowel opening to see if plugged. If so, remove fecal matter and hair 
                    until bowel opening can be seen.<br><br>
                    <b>DOGS AND CATS:</b><br>
                    <b>1.</b> Many problems can cause constipation including dehydration.<br>
                    <b>2.</b> Assess dehydration by pinching the skin. If the skin stays in a pitched position for 
                    2 seconds or longer, your pet is severely dehydrated and needs to be seen by the Veterinarian.<br>
                    <b>3.</b> Re-hydrate by giving oral PEDIALYTE SOLUTION or water in small quantities hourly.<br><br>
                    <b>CATS:</b><br>
                    CAUTION - Your cat may have a plugged bladder caused by a bladder stone and act as if constipated.<br>
                    <b>Symptoms:</b> Frequent trips to the litter box with no urine being passed - cat squats in litter trying
                    to urinate. Most owners think their cat is constipated. This is an emergency and must be seen immediately by Veterinarian.<br>
                    <br><b>IF CAT IS ACTUALLY CONSTIPATED:</b><br>
                    Give HAIRBALL MEDICINE (available through Veterinarian or pet store). Give as directed on medicine label. This is a
                    mild laxative.
		            </div>
	            </div>
            </div>

            <!--CUTS-->
            <a class="button" href="#popup13">cuts</a>
           
            <div id="popup13" class="overlay">
	            <div class="popup">
		            <h2>cuts</h2>
		                <a class="close" href="#">&times;</a>
		            <div class="content">
			        <br><b>1.</b> MUZZLE pet - animals will bite if it pain - protect yourself with a simple muzzle (as long as there 
                    is no breathing difficulty).<br>
                    <b>2.</b> Use direct PRESSURE (use a clean cloth) and ICE PACKS to stop the bleeding.<br>
                    <b>3.</b> Using scissors or hair clippers, CLIP HAIR from around the cut.<br>
                    <b>4.</b> GENTLY WASH with soap and RINSE with water.<br>
                    <b>5.</b> Apply 1/2 to 1 tsp. POVIDONE IODINE solution and allow excess to drain off.<br>
                    <b>6.</b> Apply ANTIBIOTIC OINTMENT followed by a BANDAGE and change daily.<br>
                    <b>7.</b> See Veterinarian as soon as possible if bleeding is uncontrolled, the cut requires
                    stitches, or infection occurs.
		            </div>
	            </div>
            </div>

            <!--HIT BY CAR-->
            <a class="button" href="#popup14">hit by car</a>
           
            <div id="popup14" class="overlay">
	            <div class="popup">
		            <h2>hit by car</h2>
		                <a class="close" href="#">&times;</a>
		            <div class="content">
                    <br><b>1.</b> RESTRAIN - Place a belt or leash around the neck to avoid escaping. IF THERE IS NO 
                    DIFFICULTY IN BREATHIG, apply a MUZZLE for you protection. 
                    <br><b>NOTE:</b> If bloody bubbles are coming
                    from the nostrils, lung bleeding exists - RUSH to the nearest Veterinarian.<br> 
                    DO NOT MUZZLE OR RESTRAIN. Allow pet to assume the most comfortable position.<br>
                    <b>2.</b> Apply pressure to stop any uncontrolled bleeding if a wound exists, then bandage.<br>
                    <b>3.</b> COVER WITH BLANKET for shock. Shock symptoms are: weakness, collapse, shallow breathing, bewildered
                    appearance, and dilated eye pupils and/or pupils.<br>
                    <b>4.</b> If a bone is broken, APPLY SPLINT.<br>
                    <b>5.</b> TRANSPORT to Veterinarian using a blanket or piece of wood as a stretcher.
		            </div>
	            </div>
            </div>

            <!--URINARY PROBLEM-->
            <a class="button" href="#popup15">urinary problem</a>
           
            <div id="popup15" class="overlay">
	            <div class="popup">
		            <h2>urinary problem</h2>
		                <a class="close" href="#">&times;</a>
		            <div class="content">
			        <br><b>INFECTION (Kidney and Bladder):</b><br>
                    If pet is passing small amount (2-3 teaspoons) of urine frequently, or wetting in house, see Veterinarian within 
                    24 hours.<br><br>
                    <b>URINARY BLOCKAGE:</b><br>
                    If pet makes frequent trips outside or to the litter box, attempts to urinate yet passes very little or
                    no urine, a bladder stone may have blocked the bladder. These pets act as if they are constipated.<br>
                    This is an EMERGENCY - your pet may die within 24-48 hours. See Veterinarian immediately.
		            </div>
	            </div>
            </div>

<!--FIRST AID IMAGE-->
     <!--    <div class="urgentcare-firstaid">
                <img src="WEBSITE ELEMENTS/pic/urgentcare-first-aid.png">
        </div> -->
        
<!--URGENT CARE BOTTOM MESSAGE-->
        <div class="urgentcare-message">
                <img src="WEBSITE ELEMENTS/pic/urgentcare-bottom-message.png">
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
