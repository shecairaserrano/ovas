<!DOCTYPE html>
<html lang="en">
<head>


	  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Online Appointment System for Veterinary Services</title>
    <link rel="stylesheet" href="{{URL::to('CSS/petrecord.css')}}">
    <link rel="icon" type="image/x-icon" href="{{URL::to('WEBSITE ELEMENTS/logo2.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  </head>
  <body>

<!--NAVIGATION BAR-->
@include('shared.admin_header_nav')





    <div class="container">
    	@include('shared.notification')
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2><b>Pet's Record</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addPetModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Pet</span></a>
						<a href="#deletePetModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
                        <th>Pet Name</th>
                        <th>Age</th>
						<th>Gender</th>
                        <th>Breed</th>
                        <th>Date of Appointment</th>
                        <th>Reason</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($pets as $pet)
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td>{{ $pet->name }}</td>
                        <td>{{ $pet->age }}</td>
						<td>{{ $pet->gender }}</td>
                        <td>{{ $pet->breed }}</td>
                        <td>{{ $pet->appointment_date }}</td>
                        <td>{{ $pet->reason }}</td>
                        <td>
                            <a href="#editPetModal" data-edit_pet="{{$pet->id}}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deletePetModal" data-delete_pet="{{$pet->id}}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
               
                    @endforeach
               		
                </tbody>
            </table>
			<div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
	<!-- Edit Modal HTML -->
	<div id="addPetModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="{{route('create_pet')}}" method="POST">
					@csrf
					<div class="modal-header">						
						<h4 class="modal-title">Add Pet</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Pet Name</label>
							<input type="text" class="form-control" required name="name">
						</div>
						<div class="form-group">
							<label>Age</label>
							<input type="number" class="form-control" required name="age">
						</div>
						<div class="form-group">
							<label>Gender</label>
							<select name="gender" required>
								<option value="">Select Gender</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
						<div class="form-group">
							<label>Breed</label>
							<input type="text" class="form-control" required name="breed">
						</div>		
						<div class="form-group">
							<label>Date of Appointment</label>
							<input type="date" class="form-control" required name="appointment_date">
						</div>	
						<div class="form-group">
							<label>Reason</label>
							<textarea class="form-control" required name="reason"></textarea>
						</div>				
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="editPetModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="{{route('update_pet')}}" method="POST">
					@csrf
					<div class="modal-header">						
						<h4 class="modal-title">Edit Client</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<input type="hidden" name="pet_id" id="edit_pet_id">
					<div class="modal-body">					
						<div class="form-group">
							<label>Pet Name</label>
							<input type="text" class="form-control" required id="edit_pet_name" name="name">
						</div>
						<div class="form-group">
							<label>Age</label>
							<input type="text" class="form-control" required id="edit_pet_age" name="age">
						</div>
						<div class="form-group">
							<label>Gender</label>
							<input type="text" class="form-control" required id="edit_pet_gender" name="gender">
						</div>
						<div class="form-group">
							<label>Breed</label>
							<input type="text" class="form-control" required id="edit_pet_breed" name="breed">
						</div>		
						<div class="form-group">
							<label>Date of Appointment</label>
							<input type="text" class="form-control" required id="edit_pet_appointment_date" name="appointment_date">
						</div>	
						<div class="form-group">
							<label>Reason</label>
							<textarea class="form-control" required id="edit_pet_reason" name="reason"></textarea>
						</div>									
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deletePetModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="{{route('delete_pet')}}" method="POSt">
					@csrf
					<div class="modal-header">						
						<h4 class="modal-title">Delete Client</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<input type="hidden" name="pet_id" id="delete_pet_id">
					<div class="modal-body">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>

    <script src="JS/petrecord.js"></script>
</body>





<!--FOOTER-->

    <footer class="footer-distributed">

        <div class="footer-left">
            <div class="footer-pic"><img src="{{URL::to('WEBSITE ELEMENTS/logo2.png')}}"></div>
            <h3>Online Veterinary Appointment System</h3>


           
        </div>
    </footer>


</body>
<script type="text/javascript">
	$(document).ready(function(){
		var url = "{{route('find_pet')}}";
		var token = "{{Session::token()}}";

		$(".delete").click(function(){
			var pet_id = $(this).attr("data-delete_pet");
			
			$("#delete_pet_id").val(pet_id);

		});

		$(".edit").click(function(){
			var pet_id = $(this).attr("data-edit_pet");
			

			$("#edit_pet_id").val(pet_id);

			$.ajax({
               type:'POST',
               url:url,
               data:{_token: token, pet_id: pet_id},
               success:function(data) {
                  console.log(data);
                  $("#edit_pet_name").val(data.name);
                  $("#edit_pet_age").val(data.age);
                  $("#edit_pet_gender").val(data.gender);
                  $("#edit_pet_breed").val(data.breed);
                  $("#edit_pet_appointment_date").val(data.appointment_date);
                  $("#edit_pet_reason").val(data.reason);
                 
               }
            });


		});

	});
</script>

</html>