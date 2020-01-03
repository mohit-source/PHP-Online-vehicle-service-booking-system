<?php
include('DBconfig.php');
 session_start();
				$email=$_SESSION['email'];
				$query    = "SELECT * FROM register where Email='$email'";
				$result = mysqli_query($conn,$query);
				while ($row=mysqli_fetch_array($result))
				{

					$FirstName     = $row['FirstName'];
					
					$LastName  = $row['LastName'];
					$Email = $row['Email'];
					$Mobile = $row['Mobile'];
					$Address = $row['Address'];
				}
				
				
				
				if(isset($_POST['submit_form']))
				{
					
					$paymentStatus;

					$name = $FirstName;
					
					
					$Edate = $_SESSION['date'];
					$Etime = $_SESSION['time'];
					$vehicleType = $_SESSION['vehicleType'];
					$vehicle = $_SESSION['vehicle'];
					$serviceType = $_SESSION['serviceType'];
					$VehicleName = $_SESSION['VehicleName'];
					$payment = $_SESSION['payment'];
					$orderStatus = "Pending";
					
					if($payment == "Cash on Servicing")
					{
						$paymentStatus="Pending";
					}
					else if($payment =="Debit Card")
					{
						$paymentStatus="Paid";
					}
					$serviceCharge = $_SESSION['charges'];//$_SESSION['parts'];
					$machanical = "mk";
					$additionInfo = $_SESSION['info'];
					

				 
					$query = "insert into `order` ( Name , Email , Mobile , Address , EDate , ETime , VehicleType , VehicleNo , ServiceType , ServicingCharge , PaymentStatus , OrderStatus , VehicleName , Machanical , AdditionInfo ) values ( '$name' , '$Email' , '$Mobile' , '$Address' , '$Edate' , '$Etime' , '$vehicleType' , '$vehicle' , '$serviceType' , '$serviceCharge' , '$paymentStatus' , '$orderStatus' , '$VehicleName' , 'NULL' , '$additionInfo' )";
					//$query = "insert into `order` (Name , Email , Mobile , Address , EDate , ETime , VehicleType , ServiceType , ServicingCharge , Machanical , AdditionInfo ) values ('ASDF' , 'GFSD' , 'HG' , 'RT' , 'R' , 'ER' , 'HFD' , 'TV' , 'VG' , 'TG' , 'VV' )";
					$result=mysqli_query($conn,$query);
					if($result){
						
						  //echo "<script>alert('Registration Successfully !!! Please Login to continue...')</script>";
						  header("Location:OrderSuccessfull.php");
					} else {
						  echo "Error: " . $query . "<br>" . mysqli_error($conn);
					}
				}
				if(isset($_POST['cancel_form']))
				{
					header("Location:Booking.php");
				}
				
				
 ?>

<html>
 <head>
  <title>Confirm Booking</title>
 
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
				<h1 class="display-4"><span style="color:white;"><b>Confirm Booking</b></span></h1>
				<p class="lead"><span style="color:white;">SHORTEST ROAD TO BIKE & CAR SERVICES</span></p>
			  </div>
			</div>
			
				
		
		<div class="card" style="width: 70rem; margin:auto; margin-bottom:20px; " >
		<div class="alert alert-dark" role="alert" style="text-align: center; background-color:#28a745; color:white;">
						SERVICES
			    	</div>
			
			    <form method="POST" action="" style="margin:20px";>
			
						<div class="form-group">
						  <label for="vehicleNo"><b>Vehicle No. :-</b></label>
						  <label for="vehicleNo" name="vehicleNo" value="" > <?php echo $_SESSION['vehicle']; ?> </label>
						  
						</div>
					  <div class="form-row">
						<div class="form-group col-md-6">
						  <label for="name"><b>Name :-</b></label>
						  <label for="name" name="name" value="" > <?php echo $FirstName ." ". $LastName; ?> </label>
						  
						</div>
						<div class="form-group col-md-6">
						  <label for="email" ><b>Email :-</b></label>
						  <label for="email" name="email"><?php echo $Email ; ?></label>
						  
						</div>
					  </div>
					  <div class="form-row">
					  <div class="form-group col-md-6">
						<label for="mobile"><b>Mobile :-</b></label>
						<label for="mobile" name="mobile"><?php echo $Mobile ; ?></label>
						
					  </div>
					  <div class="form-group col-md-6">
						<label for="address"><b>Address :-</b></label>
						<label for="address" name="address"><?php echo $Address ; ?></label>
					  </div>
					  </div>
					  <div class="form-row">
						<div class="form-group col-md	-6">
						  <label for="dateTime"><b>Date :-</b></label>
						  <label for="dateTime" name="date"><?php echo $_SESSION['date']; ?></label>
						</div>
						
						<div class="form-group col-md-6">
						  <label for="Time"><b>Time :-</b></label>
						  <label for="Time" name="time"><?php echo $_SESSION['time'];?></label>
						</div>
					  </div>
					  <div class="form-row">
						<div class="form-group col-md-6">
						  <label for="VehicleType"><b>VehicleType :-</b></label>
						  <label for="VehicleType" name="VehicleType"><?php echo $_SESSION['vehicleType']; ?></label>
						</div>
						
						<div class="form-group col-md-6">
						  <label for="ServiceType"><b>ServiceType :-</b></label>
						  <label for="ServiceType" name="ServiceType"><?php echo $_SESSION['serviceType']; ?></label>
						</div>
					  </div>
					    <div class="form-row">
						   <div class="form-group col-md-6">
							<label for="info"><b>Servicing Charges :-</b></label>
							<label for="info"><?php echo "Rs. ".$_SESSION['charges']; ?></label>
						  </div>
						   <div class="form-group col-md-6">
							<label for="info"><b>Vehicle Name :-</b></label>
							<label for="info"><?php  echo $_SESSION['VehicleName']; ?></label>
						  </div>
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-6">
							<label for="info"><b>Additional Info. :-</b></label>
							<label for="info"><?php echo $_SESSION['info']; ?></label>
						</div>
						<div class="form-group col-md-6">
							<label for="info"><b>Payment Mode :-</b></label>
							<label for="info"><?php  echo $_SESSION['payment']; ?></label>
						  </div>
						</div>
						<div class="row">
							<div class="col-md-2">
							  <input class="btn btn-success" name="submit_form" type="submit" value="Confirm Booking">
							</div>
							<div class="col-md-2">
							  <input class="btn btn-success" name="cancel_form" type="submit" value="Cancel Booking">
							</div>

						</div>
			</form>
			</div>
			
			<?php
			
			
			
				
			
			?>
			
</body>
</html>
