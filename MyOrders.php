<?php
include('DBconfig.php');
 session_start();
				
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
					<a class="nav-link" href="Pricing.php">Pricing</a>
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
							<h1 class="display-4"><span style="color:white;"><b>My Orders</b></span></h1>
							<p class="lead"><span style="color:white;">SHORTEST ROAD TO BIKE & CAR SERVICES</span></p>
						  </div>
						</div>
			
				<div class="container">		
					<nav aria-label="breakcrumb">
					<ol class="breadcrumb">
										<li class="breadcrumb-item" ><a href="homepage.php" style="color:#28a745;">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page" >My Orders</li>
					</ol>
					</nav>
				</div>
			<?php
			
			
				$email=$_SESSION['email'];
				$query    = "SELECT * FROM `order` where Email='$email'";
				$result = mysqli_query($conn,$query);
				if(mysqli_num_rows($result)>0)
				{
					while ($row=mysqli_fetch_array($result))
					{

						
						
						
						
			?>
			
							<div class="container" style="margin-bottom:10px; ">
								<div class="card text-center">
									  <div class="card-header" style="text-align: center; background-color:#28a745; color:white;"> 
										<?php echo "Your Order No. :- STAR1210147-". $row['Id']	; ?> 
									  </div>
									  <div class="card-body">
									  
									  <div class="row">
										<div class="col-md-4">
												<div class="card" style="width:22rem">
													<span class="card-title"><b>-- Type of Servicing which you want --	 </b><br><span style="margin-left:0px; margin:5px;"><?php echo $row['AdditionInfo']; ?></span></span>
												</div>
												</div>
									  
									
										
											<div class="col-md-4">
												<p class="card-text"><?php echo "<b>Name :-</b> ". $row['Name']	; ?>.</p>
												<p class="card-text"><?php echo "<b>Vehicle Type :-</b> ". $row['VehicleType']	; ?>.</p>
												<p class="card-text"><?php echo "<b>Vehicle No. :-</b> ". $row['VehicleNo']	; ?>.</p>
											</div>
										</div>
											
										
										
										
										<div class="row" style="margin-top:20px;">
											 <div class="col-md-2">
												  <div class="btn btn-success" ><?php echo "Total :- Rs.". $row['ServicingCharge']	; ?></div>
											</div>
											<div class="col-md-2">
											  <div class="btn btn-success"><?php echo "Status :- ". $row['PaymentStatus']	; ?></div>
											</div>

										</div>
										
									  </div>
									  <div class="card-footer text-muted">
										  <div class="row">
											  <div class="col-md-6">
												<b> Ordered On <?php echo $row['EDate']."   Selected Time:-  ". $row['ETime']	; ?></b>
											   </div>
											   <div class="col-md-6">
												  <div class="btn btn-success" ><?php echo "Order ". $row['OrderStatus']	; ?></div>
												</div>
										  </div>
									  </div>
								</div>
								</div>
			
						
			
			<?php
			
					}
				}
			?>
			
			<div class="container">
			
				<div class="alert alert-success" style="background:#f7f7f7; margin-top:20px;" role="alert"> <center> NO MORE RESULT TO DISPLAY </center> </div>
			</div>
			
</body>
</html>
