<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Online Appointment System for Veterinary Services</title>
   <link rel="stylesheet" href="{{URL::to('CSS/clientrecord.css')}}">
    <link rel="icon" type="image/x-icon" href="{{URL::to('WEBSITE ELEMENTS/logo2.png')}}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href='https://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
						<h2><b>Client's Record</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addClientModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Client</span></a>
						<a href="#deleteClientModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
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
                        <th>Name</th>
                        <th>Email</th>
						<th>Address</th>
                        <th>Contact Number</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($clients as $client)
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td>{{$client->name}}</td>
                        <td>{{$client->email}}</td>
						<td>{{$client->address}}</td>
                        <td>{{$client->contact}}</td>
                        <td>
                            <a href="#editClientModal" data-edit_client="{{$client->id}}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteClientModal" data-delete_client="{{$client->id}}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                    
					@endforeach
                   				
					
                </tbody>
            </table>
			<div class="clearfix">
                {{$clients->links()}}
            </div>
        </div>
    </div>
	<!-- Edit Modal HTML -->
	<div id="addClientModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				
					<div class="modal-header">						
						<h4 class="modal-title">Add Client</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<form action="{{route('create_client')}}" method="POST">
					@csrf
					<div class="modal-body">					
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" required name="name">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" required name="email">
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" required name="address"></textarea>
						</div>
						<div class="form-group">
							<label>Contact Number</label>
							<input type="text" class="form-control" required name="contact">
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
	<div id="editClientModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				
					<div class="modal-header">						
						<h4 class="modal-title">Edit Client</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<form action="{{route('update_client')}}" method="POST">
						@csrf
					<div class="modal-body">
					<input type="hidden" name="client_id" id="edit_client_id">					
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" required name="name" id="edit_client_name">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" required name="email" id="edit_client_email">
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" required name="address" id="edit_client_address"></textarea>
						</div>
						<div class="form-group">
							<label>Contact Number</label>
							<input type="text" class="form-control" required name="contact" id="edit_client_contact">
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
	<div id="deleteClientModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="{{route('delete_client')}}" method="POSt">
					@csrf
					<input type="hidden" name="client_id" id="delete_client_id">
					<div class="modal-header">						
						<h4 class="modal-title">Delete Client</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
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

    <script src="JS/clientrecord.js"></script>
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
		var url = "{{route('find_client')}}";
		var token = "{{Session::token()}}";

		$(".delete").click(function(){
			var client_id = $(this).attr("data-delete_client");
			
			$("#delete_client_id").val(client_id);

		});

		$(".edit").click(function(){
			var client_id = $(this).attr("data-edit_client");
			

			$("#edit_client_id").val(client_id);

			$.ajax({
               type:'POST',
               url:url,
               data:{_token: token, client_id: client_id},
               success:function(data) {
                  $("#edit_client_name").val(data.name);
                  $("#edit_client_email").val(data.email);
                  $("#edit_client_address").val(data.address);
                  $("#edit_client_contact").val(data.contact);
               }
            });


		});

	});
</script>

</html>