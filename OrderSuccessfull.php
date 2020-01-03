<?php
include('DBconfig.php');
 session_start();
				$email=$_SESSION['email'];
				$query    = "SELECT * FROM `order` where Email='$email'";
				$result = mysqli_query($conn,$query);
				while ($row=mysqli_fetch_array($result))
				{

					$Name     = $row['Name'];
					
					$Edate  = $row['EDate'];
					$Etime = $row['ETime'];
					$ServiceType = $row['ServiceType'];
					$VehicleType = $row['VehicleType'];
					$ServicingCharge = $row['ServicingCharge'];
					
					$VehicleName = $row['VehicleName'];
				
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
				<h1 class="display-4"><span style="color:white;"><b>Booking Confirmed</b></span></h1>
				<p class="lead"><span style="color:white;">SHORTEST ROAD TO BIKE & CAR SERVICES</span></p>
			  </div>
			</div>
			
				
		
		
			    <form method="POST" action="" style="margin:20px";>
			
					<div class="card text-center">
						  <div class="card-header" style="text-align: center; background-color:#28a745; color:white;">
							Your order is Succesful !!!
						  </div>
						  <div class="card-body">
							<h5 class="card-title">Thankyou for Selecting Us...</h5>
							<p class="card-text">Our Machanical Engg. is reached soon to you for pick your <?php echo $VehicleName?>.</p>
							<a href="homepage.php" class="btn btn-success">Go Back</a>
						  </div>
						  <div class="card-footer text-muted">
							You have Selected your Date and Time for servicing is <?php echo " ".$Edate." Time :".$Etime ?>
						  </div>
					</div>
							 
				
		
			
			<?php
			
			
			
				
			
			?>
			
</body>
</html>
