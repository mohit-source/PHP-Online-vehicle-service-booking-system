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
					$_SESSION['name'] = $FirstName;
					$LastName  = $row['LastName'];
					$Email = $row['Email'];
					$Mobile = $row['Mobile'];
					$Address = $row['Address'];
				}
				
				if(isset($_POST['bike']))
				{
					$_SESSION['vehicleType']="Bike";
					header("Location:booking.php");
				}
				if(isset($_POST['auto']))
				{
					$_SESSION['vehicleType']="Auto Rikshaw";
					header("Location:booking.php");
				}
				if(isset($_POST['car']))
				{
					$_SESSION['vehicleType']="Car";
					header("Location:booking.php");
				}
				
	
?>

<html>
 <head>
  <title>Homepage</title>
 
  <link rel="stylesheet" href="boostrap.css">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  
</head>
<body>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="#" style="color:#28a745;">STAR Automobiles</a>
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
				
					<span class="nav-link" ><?php echo "Hello, ". $FirstName; ?></span>
				
				<a href="Logout.php">
	
				  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
				</a>

			  </div>
			</nav>
			
	
			
			<div class="jumbotron jumbotron-fluid" style="background: url('image/4.jpg') no-repeat; background-size:cover ;">
			  <div class="container"  >
				<h1 class="display-4"><span style="color:white;"><b>Bike and Car Servicing at your doorstep.</b></span></h1>
				<p class="lead"><span style="color:white;">SHORTEST ROAD TO BIKE & CAR SERVICES</span></p>
			  </div>
			</div>
			<div class="container">
			<form action="" method="POST">
			
					<div class="row">
					
						<div class="col-md-4">
							<div class="card" style="width: 18rem;">
							  <img src="image/bike.png" class="card-img-top" alt="...">
							  <div class="card-body">
								<h5 class="card-title">Bike Servicing</h5>

								<input type="submit" class="btn btn-success" name="bike" type="submit" value="Book">
							  </div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card" style="width: 18rem;">
							  <img src="image/auto.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
								<h5 class="card-title">Auto Rikshaw Servicing</h5>
								<input type="submit" class="btn btn-success" name="auto" type="submit" value="Book">
							  </div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card" style="width: 18rem;">
							  <img src="image/car.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
								<h5 class="card-title">Car Servicing</h5>								
									<input type="submit" class="btn btn-success" name="car" type="submit" value="Book">
							
							  </div>
							</div>
						</div>
					</div>
				</form>
			</div>
			
			
</body>
</html>
