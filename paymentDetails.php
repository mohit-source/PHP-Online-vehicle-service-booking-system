<?php
	include('DBconfig.php');
	session_start();
	$email = $_SESSION['email'];
	if(!$email)
	{
		header("Location:index.php");
	}
						
				
								$email=$_SESSION['email'];
								$query    = "SELECT * FROM employee where Email='$email'";
								$result = mysqli_query($conn,$query);
								$FirstName;
								while ($row=mysqli_fetch_array($result))
								{
									$FirstName     = $row['Name'];
								}
						$Specialist;
					$id;
						if(isset($_GET['Id']) && is_numeric($_GET['Id']))
						{
							$id = $_GET['Id'];
					
			
							
								
								
	
								$query2    = "SELECT * FROM `order` where Id='$id'";
								$result2 = mysqli_query($conn,$query2);
								
								while($row=mysqli_fetch_array($result2))
								{
									$Id = $row['Id'];
		
									$Name = $row['Name'];
									$Email = $row['Email'];
									$Mobile = $row['Mobile'];
									$Address = $row['Address'];
									$Edate = $row['EDate'];
									$Etime = $row['ETime'];
									$VehicleType = $row['VehicleType'];
									$Specialist = $row['VehicleType'];
									$VehicleNo = $row['VehicleNo'];
									$ServiceType = $row['ServiceType'];
									$ServicingCharge = $row['ServicingCharge'];
									$PaymentStatus = $row['PaymentStatus'];
									$OrderStatus = $row['OrderStatus'];
									$VehicleName = $row['VehicleName'];	
									$AdditionalInfo = $row['AdditionInfo'];
								}
				

						}
						
						if(isset($_POST['Confirm_order']))
						{
									$Parts = $_POST['Parts'];
									
									$Charge = 350 + $ServicingCharge;
							
										$query2    = "INSERT into billTable (  Order_No , Mobile , Spare_Parts , Total_Price ) values ( '$Id' ,'$Mobile' , '$Parts' , '$Charge'  )";
										$result2 = mysqli_query($conn,$query2);
										$quer = "Update `order` set PaymentStatus = 'Paid'  where Id='$id' ";
										mysqli_query($conn,$quer);
										header("Location:Bill.php?Id=".$id."");
										
										
								
						}
						
						if(isset($_POST['cancel_form']))
						{
								header("Location:UsersOrders.php");
						}
	
?>

<html>
 <head>
  <title>STAR Members</title>
 
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
					<a class="nav-link" href="MachanicalPage.php">Home <span class="sr-only">(current)</span></a>
				  </li>
				  
				  <li class="nav-item">
					<a class="nav-link" href="MachanicalWork.php">Orders</a>
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
				<h1 class="display-4"><span style="color:white;"><b>Order Details</b></span></h1>
				<p class="lead"><span style="color:white;">SHORTEST ROAD TO BIKE & CAR SERVICES</span></p>
			  </div>
			</div>
			
			
			
			
		
	  
	  
	  <div class="card" style="width: 70rem; margin:auto; margin-bottom:20px; " >
		<div class="alert alert-dark" role="alert" style="text-align: center; background-color:#28a745; color:white;">
						Order Details
			    	</div>
			
			    <form method="POST" action="" style="margin:20px";>
			
					
						
					  
					     <div class="form-group">
							<label for="exampleFormControlSelect1">Spare Parts Added in your Vehicle</label>
							<input type="text" name="Parts" class="form-control" id="inputAddress" placeholder="Eg. Engine Oil" required >
						</div>

						
						<div class="row">
							<div class="col-md-2">
							  <input class="btn btn-success" name="Confirm_order" type="submit" value="Generate Bill">
							</div>
							<div class="col-md-2">
							 <input class="btn btn-success" name="cancel_form" type="submit" value="Go Back">
							</div>

						</div>
					
			</form>
			</div>
			
			
			
			
			
</body>
</html>

			
			
			
			
			
			
			
			
			
			
			
						