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
					$City = $row['City'];
					$State = $row['State'];
				}
				
				
				
				if(isset($_POST['submit_form']))
				{

					
				}
				if(isset($_POST['cancel_form']))
				{
					header("Location:homepage.php");
				}
				
				
 ?>

<html>
 <head>
  <title>Profile</title>
 
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
				<h1 class="display-4"><span style="color:white;"><b>Profile</b></span></h1>
				<p class="lead"><span style="color:white;">SHORTEST ROAD TO BIKE & CAR SERVICES</span></p>
			  </div>
			</div>
			
				
		
		<div class="card" style="width: 70rem; margin:auto; margin-bottom:20px; " >
		<div class="alert alert-dark" role="alert" style="text-align: center; background-color:#28a745; color:white;">
						Profile
			    	</div>
			
			    <form method="POST" action="" style="margin:20px";>
			
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
						<div class="form-group col-md-6">
						  <label for="dateTime"><b>City :-</b></label>
						  <label for="dateTime" name="date"><?php echo $City; ?></label>
						</div>
						
						<div class="form-group col-md-2">
						  <label for="Time"><b>State :-</b></label>
						  <label for="Time" name="time" value=" "><?php echo $State; ?></label>
						</div>
					  </div>
					  
					  
					   
			
						<div class="row">
							<div class="col-md-2">
							  <input class="btn btn-success" name="submit_form" type="submit" value="Edit Profile">
							</div>
							<div class="col-md-2">
							  <input class="btn btn-success" name="cancel_form" type="submit" value="Go Back">
							</div>

						</div>
			</form>
			</div>
			
			<?php
			
			
			
				
			
			?>
			
</body>
</html>
