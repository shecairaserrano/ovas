<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Online Appointment System for Veterinary Services</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{URL::to('css/profilesettings.css')}}">
    <link rel="icon" type="image/x-icon" href="{{URL::to('/WEBSITE ELEMENTS/brand-logo.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
</head>
<body>

<!--NAVIGATION BAR-->
    @include('shared.client_nav')

<!--PROFILE SETTINGS-->
    <section class="py-5 my-5">
		<div class="container">
			<h1 class="profile-title">PROFILE SETTINGS</h1>
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<h4 class="text-center">Hi,</h4>

					<!--NAME SHOULD BE CHANGEABLE-->
						<h4 class="text-center">{{Auth::user()->name}}</h4>
					</div>

                <!--NAVIGATION BAR-->
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
							<i class="fa fa-home text-center mr-1"></i> 
							Account
						</a>
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i> 
							Password
						</a>
                        <a class="nav-link" id="history-tab" data-toggle="pill" href="#history" role="tab" aria-controls="history" aria-selected="false">
							<i class="fa fa-history text-center mr-1"></i> 
							Account History
						</a>
						<a href="{{route('client_logout')}}" class="logout-btn"><i class="fa fa-sign-out text-center mr-1"></i> Log out</a>
					</div>
				</div>

			<!--ACCOUNT SETTINGS-->
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                    @include('shared.notification')
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<form action="{{route('update_info')}}" method="POST">
                            @csrf
                            <h3 class="mb-4">Account Settings</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" class="form-control" value="{{Auth::user()->name}}" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" value="{{Auth::user()->email}}" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone number</label>
                                            <input type="number" class="form-control" value="{{Auth::user()->contact}}" maxlength="11" required name="contact">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <button class="btn btn-light">Cancel</button>
                                </div>
                        </form>
					</div>

                <!--PASSWORD SETTINGS-->
					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4">Password Settings</h3>
						<form action="{{route('update_password')}}" method="POST">
                            @csrf
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Old password</label>
                                    <input type="password" class="form-control" required name="password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>New password</label>
                                    <input type="password" class="form-control" required name="new_password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Confirm new password</label>
                                    <input type="password" class="form-control" required name="repeat_new_password">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button class="btn btn-light">Cancel</button>
                        </div>
                        </form>
					</div>

                <!---HISTORY-->
                <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">
                    <h3 class="mb-4">Account History</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group"></div>
                                <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
                              <input type="text" placeholder="Search.." name="search2">
                              <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                             
                            <table class="one">  
                                <tr>
                                <th>Date</th>
                                <th>Pet's Name</th> 
                                <th>Type</th> <!--DOG OR CAT-->
                                <th>Breed</th>
                                <th>Category of service</th> <!--either consultation, surgery, grooming-->
                                <th>Reason</th> 
                                <th>Grooming services</th> <!--either complete, basic, or individual -->
                                <th>Status</th>
                              </tr>
                              @foreach($appointments as $appoint)
                              <tr>
                                <td>{{$appoint->date}}</td>
                                <td>{{$appoint->pet_name}}</td> 
                                <td>{{$appoint->type}}</td>
                                <td>{{$appoint->breed}}</td>
                                @if($appoint->reason == null)
                                    <td>NA</td>
                                    <td>NA</td>
                                    <td>{{$appoint->reason_menu}} Package</td>
                                @else
                                     <td>{{$appoint->reason_menu}}</td>
                                    <td>{{$appoint->reason}}</td>
                                    <td>NA</td>
                                @endif
                               
                                 <td>{{$appoint->status_name}}</td>
                              </tr>
                              @endforeach

                            </table>
                            </body>
                            </div>
                        </div>
                    </div>
                </div>
				</div>
			</div>
		</div>
	</section>

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

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    </body>
</html>
