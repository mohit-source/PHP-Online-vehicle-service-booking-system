<?php
	include('DBconfig.php');
	session_start();
	$email = $_SESSION['email'];
	if(!$email)
	{
		header("Location:index.php");
	}
	
	
		$email=$_SESSION['email'];
				$query    = "SELECT * FROM register where Email='$email'";
				$result = mysqli_query($conn,$query);
				while ($row=mysqli_fetch_array($result))
				{

					$FirstName     = $row['FirstName'];
					
					
				}
				
				if(isset($_POST['submit_form']))
				{
					if(isset($_POST['radio']))
					{
						echo "You have selected :".$_POST['radio'];  //  Displaying Selected Value
						
						$VehicleType = $_POST['radio'];
					}
					$VehicleName = $_POST['VehicleName'];
					$VehicleBrand = $_POST['VehicleBrand'];
				
					
		
					$query = "insert into Vehicles (VehicleName , VehicleBrand , VehicleType) values ('$VehicleName' , '$VehicleBrand' , '$VehicleType' )";
					$result=mysqli_query($conn,$query);
					
						
						  echo "<script>alert('Added Successfully !!!');</script>";
					 
				}
	
?>

<html>
 <head>
  <title>Vehicles Name</title>
 
  <link rel="stylesheet" href="boostrap.css">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  
</head>
<body>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="Admin.php" style="color:#28a745;">STAR Automobiles</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				   <li class="nav-item active">
					<a class="nav-link" href="Admin.php">Home <span class="sr-only">(current)</span></a>
				  </li>
				   <li class="nav-item">
					<a class="nav-link" href="Member.php">Member</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="EmployeeDetails.php">Employees</a>
				  </li>
				    <li class="nav-item">
					<a class="nav-link" href="UsersOrders.php">Orders</a>
				  </li>
				   
				  
				  
				   
				</ul>
				
					<span class="nav-link" ><?php echo "Hello, ". $FirstName; ?></span>
				
				<a href="Logout.php">
	
				  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
				</a>

			  </div>
			</nav>
			
	
			
			<div class="jumbotron jumbotron-fluid" style="background: url('image/4.jpg') no-repeat; background-size:cover ;">
			  <div class="container"  >
				<h1 class="display-4"><span style="color:white;"><b>Vehicles</b></span></h1>
				<p class="lead"><span style="color:white;">SHORTEST ROAD TO BIKE & CAR SERVICES</span></p>
			  </div>
			</div>
			
			
			
			<div class="container">
			
					<div class="card" style="width: 70rem; margin:auto; margin-top:20px;" >
								<div class="alert alert-dark" role="alert" style="text-align: center; background-color:#28a745; color:white;">
									Add Vehicles
								</div>
							  <div class="card-body">
							
								<form action=" " method="POST">
								<center style="margin-bottom:30px;">
										<div class="form-check form-check-inline">
										  <input class="form-check-input" type="radio" name="radio" id="inlineRadio1" value="Bike" >
										  <label class="form-check-label" for="inlineRadio1">Bike</label>
										</div>
										<div class="form-check form-check-inline">
										  <input class="form-check-input" type="radio" name="radio" id="inlineRadio2" value="Auto Rikshaw" >
										  <label class="form-check-label" for="inlineRadio2">Auto Rikshaw</label>
										</div>
										<div class="form-check form-check-inline">
										  <input class="form-check-input" type="radio" name="radio" id="inlineRadio3" value="Car" >
										  <label class="form-check-label" for="inlineRadio3">Car</label>
										</div>
								</center>
									  
									 <div class="row">
										<div class="form-group col-md-6">
											  <label for="validationTooltip01">Vehicle Name</label>
											  <input type="text" name="VehicleName" class="form-control" id="validationTooltip01" placeholder="Vehicle Name"  required>
										</div>
										<div class="form-group col-md-6">
											  <label for="validationTooltip01">Vehicle Brand</label>
											  <input type="text" name="VehicleBrand" class="form-control" id="validationTooltip02" placeholder="Vehicle Brand"  required>
										</div>
									 </div>
										<div class="form-group">  
											<input class="btn btn-success" name="submit_form" type="submit" value="Add">
										</div>
								  </div>
									</form>
									
					
				  </div>
				  
					<table class="table table-hover"  style="margin-top:20px;">
					  <thead>
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Vehicle Brand</th>
								
								<th scope="col">Vehicle Name</th>
								<th scope="col">Vehicle Type</th>
								<th scope="col">Remove</th>
								
							</tr>
					
					  </thead>
			
			<?php
			
			
				$email=$_SESSION['email'];
				$query    = "SELECT * FROM `vehicles`";
				$result = mysqli_query($conn,$query);
				if(mysqli_num_rows($result)>0)
				{
					while ($row=mysqli_fetch_array($result))
					{

						
						
			
			
					  
					echo '  <tbody>
							<tr>
							
								<td> '. $row['Id']	.'</td>
								<td> '. $row['VehicleBrand'].'</td>
								<td>'.$row['VehicleName'].'</td>
								<td> '.$row['VehicleType'].'</td>
								<td> <a href="RemoveVehicles.php?id=' .$row['Id']. ' "> <div class="btn btn-success">Remove</div></a></td>
								
							
							</tr>
					  </tbody> ';
					  

					
			
		
		
					}
				}
				
															
			?>
								
	  </table>
	  
			</div>
			</div>
			
			<div class="container">
			
				<div class="alert alert-success" style="background:#f7f7f7; margin-top:20px;" role="alert"> <center> NO MORE RESULT TO DISPLAY </center> </div>
			</div>
			
			
</body>
</html>
