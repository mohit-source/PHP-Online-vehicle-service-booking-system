<?php
include('DBconfig.php');
 session_start();
 
		$_SESSION['email']=$_SESSION['email'];
				if(isset($_POST['submit_form']))
				{
					$ServiceCharge;
				
					$_SESSION['vehicle']  = $_POST['vehicle'];
					$_SESSION['date']  = $_POST['date'];
					$_SESSION['time']  = $_POST['time'];
					$_SESSION['VehicleName']  = $_POST['VehicleName'];
					$ServiceType = $_POST['serviceType'];
					
					if($_SESSION['vehicleType']=="Bike")
					{
					
						if($ServiceType == "Standard service")
						{
							$ServiceCharge = "550";
						}
						else if($ServiceType == "Comprehensive Check-Up")
						{
							$ServiceCharge = "1100";
						}
					}
					if($_SESSION['vehicleType']=="Auto Rikshaw")
					{
					
						if($ServiceType == "Standard service")
						{
							$ServiceCharge = "970";
						}
						else if($ServiceType == "Comprehensive Check-Up")
						{
							$ServiceCharge = "1800";
						}
					}
					if($_SESSION['vehicleType']=="Car")
					{
					
						if($ServiceType == "Standard service")
						{
							$ServiceCharge = "1500";
						}
						else if($ServiceType == "Comprehensive Check-Up")
						{
							$ServiceCharge = "3450";
						}
					}
					
					
					$_SESSION['serviceType']  = $ServiceType;
					$_SESSION['payment']  = $_POST['payment'];
					$_SESSION['charges']  = $ServiceCharge;
					$_SESSION['info']  = $_POST['info'];
					
					header("Location:Confirmpage.php");
				 
				}
?>

<html>
 <head>
  <title>Booking</title>
 
  <link rel="stylesheet" href="boostrap.css">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  
</head>
<body>

<?php

	$email = $_SESSION['email'];
		if(!$email)
		{
			header("Location:index.php");
		}
		
	
?>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="homepage.php" style="color:#28a745;">STAR Automobiles</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				   <li class="nav-item active">
					<a class="nav-link" href="homepage.php">Home <span class="sr-only">(current)</span></a>
				  </li>
				   <li class="nav-item">
					<a class="nav-link" href="Profile.php">Profile</a>
				  </li>
				 
				    <li class="nav-item">
					<a class="nav-link" href="MyOrders.php">Orders</a>
				  </li>
				  
				</ul>
				<a href="Logout.php">
	
				  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
				</a>

			  </div>
			</nav>
			
	
			
			<div class="jumbotron jumbotron-fluid" style="background: url('image/4.jpg') no-repeat; background-size:cover ;">
			  <div class="container"  >
				<h1 class="display-4"><span style="color:white;"><b>Booking</b></span></h1>
				<p class="lead"><span style="color:white;">SHORTEST ROAD TO BIKE & CAR SERVICES</span></p>
			  </div>
			</div>
			
				
		
		<div class="card" style="width: 70rem; margin:auto; margin-bottom:20px;" >
		<div class="alert alert-dark" role="alert" style="text-align: center; background-color:#28a745; color:white;">
						SERVICES
			    	</div>
			<form method="POST" action="" style="margin:10px">
				
				
			
			  <div class="form-group">
				<label for="exampleFormControlInput1">Vehicle no.</label>
				<input type="text" class="form-control" id="exampleFormControlInput1" name="vehicle" placeholder="eg. MH 19 AA 1111 " required>
			  </div>
			  
			  <div class="form-row">
			  
			  
		  
				<div class="col">
				 <div class="form-group">
					<label for="exampleFormControlSelect1">Date</label>
					<input type="Date" class="form-control"  name="date" required>
				  </div>
				  </div>
					
				
				  <div class="col">
				   <div class="form-group">
					<label for="exampleFormControlSelect1">Time</label>
					<select class="form-control" name="time" id="exampleFormControlSelect1" required>
					  <option selected disabled>Choose</option>
					  <option>9:00 AM - 12:00 PM</option>
					  <option>12:00 PM - 3:00 PM</option>
					  <option>3:00 PM - 6:00 PM</option>
					  <option>6:00 PM - 9:00 PM</option>
					 </select>
				  </div>
				  </div>
				  
				  
			  </div>
			   <div class="row">
			  
				  
			  
			  	  <div class="form-group col-md-6">
					<label for="exampleFormControlSelect1">Vehicle Name</label>
					<select class="form-control" name="VehicleName" id="exampleFormControlSelect1" required>
					  <option selected disabled>Choose</option>
					  
					  
			<?php
			
						$VehicleType = $_SESSION['vehicleType'];
						echo $VehicleType;
					
						$email=$_SESSION['email'];
						$query    = "SELECT * FROM `vehicles` where VehicleType = '$VehicleType' ";
						$result = mysqli_query($conn,$query);
						if(mysqli_num_rows($result)>0)
						{
							while ($row=mysqli_fetch_array($result))
							{

						
						
			?>
			
					  <option><?php echo $row['VehicleBrand']." ".$row['VehicleName']; ?>   </option>
					  
			<?php
							}
							
						}
					
			?>
					 
					</select>
				  </div>

				  <div class="form-group col-md-6">
					<label for="exampleFormControlSelect1">Servicing Type</label>
					<select class="form-control" name="serviceType" id="exampleFormControlSelect1" required>
					  <option selected disabled>Choose</option>
					  <option>Standard service</option>
					  <option>Comprehensive Check-Up</option>
					</select>
				  </div>
			  
			   </div>
			    
				
					
					  
					
					 
					  <div class="form-group">
						<label for="exampleFormControlSelect2">Payment Mode :-</label>
							<select class="form-control" name="payment" id="exampleFormControlSelect1" required>
							  <option selected disabled>Choose</option>
							  <option>Cash on Servicing</option>
							  <option>Debit Card</option>
							</select>					
					
						</div>
				  
			
			  <div class="form-group">
				<label for="exampleFormControlTextarea1">Additional Info.</label>
				<textarea class="form-control" name="info" id="exampleFormControlTextarea1" rows="3"></textarea required>
			  </div>
			  
			  <input class="btn btn-success" name="submit_form" type="submit" value="Next">
			  
			</form>
			</div>
			
</body>
</html>
