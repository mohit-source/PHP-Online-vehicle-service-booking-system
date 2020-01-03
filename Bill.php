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
					
						if(isset($_GET['Id']) && is_numeric($_GET['Id']))
						{
							$id = $_GET['Id'];
					
			
							
								
								
	
								$query2    = "SELECT * FROM `order` where Id='$id'";
								$result2 = mysqli_query($conn,$query2);
								
								while($row=mysqli_fetch_array($result2))
								{
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
									$Machanical = $row['Machanical'];	
									$AdditionalInfo = $row['AdditionInfo'];
								}
								
								$query3    = "SELECT * FROM `billTable` where Bill_No='$id'";
								$result3 = mysqli_query($conn,$query3);
								
								while($row=mysqli_fetch_array($result3))
								{
									$OrderNo = $row['Order_No'];
									$BillNo = $row['Bill_No'];
									$Parts = $row['Spare_Parts'];
									$Total = $row['Total_Price'];
					
								}
				

						}
						
						if(isset($_POST['Confirm_order']))
						{
							
							
								
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
				<h1 class="display-4"><span style="color:white;"><b>Star Automobiles</b></span></h1>
				<p class="lead"><span style="color:white;">SHORTEST ROAD TO BIKE & CAR SERVICES</span></p>
			  </div>
			</div>
			
			
			
			
		
	  
	  
	  <div class="card" style="width: 70rem; margin:auto; margin-bottom:20px; " >
		<div class="alert alert-dark" role="alert" style="text-align: center; background-color:#28a745; color:white;">
						Order Details
			    	</div>
			
			    <form method="POST" action="" style="margin:20px";>
			
					  <div class="form-row">
					  <div class="form-group col-md-6">
						  <label for="billno"><b>Bill No :-</b></label>
						  <label for="billno" name="billno" value="" > <?php echo $BillNo;?> </label>
						  
						</div>
						<div class="form-group col-md-6">
						  <label for="orderno" ><b>Order No :-</b></label>
						  <label for="orderno" name="orderno"><?php echo $OrderNo ; ?></label>
						  
						</div>
						<div class="form-group col-md-6">
						  <label for="name"><b>Name :-</b></label>
						  <label for="name" name="name" value="" > <?php echo $Name;?> </label>
						  
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
						  <label for="dateTime"><b>Date :-</b></label>
						  <label for="dateTime" name="date"><?php echo $Edate; ?></label>
						</div>
						
						<div class="form-group col-md-2">
						  <label for="Time"><b>Time :-</b></label>
						  <label for="Time" name="time" value=" "><?php echo $Etime; ?></label>
						</div>
					  </div>
					   <div class="form-row">
						<div class="form-group col-md-6">
						  <label for="dateTime"><b>Vehicle Type :-</b></label>
						  <label for="dateTime" name="date"><?php echo $VehicleType; ?></label>
						</div>
						
						<div class="form-group col-md-2">
						  <label for="Time"><b>Vehicle No :-</b></label>
						  <label for="Time" name="time" value=" "><?php echo $VehicleNo; ?></label>
						</div>
					  </div>
					   <div class="form-row">
						<div class="form-group col-md-6">
						  <label for="dateTime"><b>Service Type :-</b></label>
						  <label for="dateTime" name="date"><?php echo $ServiceType; ?></label>
						</div>
						
						<div class="form-group col-md-2">
						  <label for="Time"><b>Servicing Charge :-</b></label>
						  <label for="Time" name="time"><?php echo $ServicingCharge; ?></label>
						</div>
					  </div>
					  
					  <div class="form-row">
						<div class="form-group col-md-6">
						  <label for="dateTime"><b>Payment Status :-</b></label>
						  <label for="dateTime" name="date"><?php echo $PaymentStatus; ?></label>
						</div>
						
						<div class="form-group col-md-2">
						  <label for="Time"><b>Order Status :-</b></label>
						  <label for="Time" name="time" value=" "><?php echo $OrderStatus; ?></label>
						</div>
					  </div>
					    <div class="form-row">
						<div class="form-group col-md-6">
						  <label for="dateTime"><b>Vehicle Name :-</b></label>
						  <label for="dateTime" name="date"><?php echo $VehicleName; ?></label>
						</div>
						
						<div class="form-group col-md-6">
						  <label for="Time"><b>Additional Info :-</b></label>
						  <label for="Time" name="time" value=" "><?php echo $AdditionalInfo; ?></label>
						</div>
					  </div>
					    <div class="form-row">
						<div class="form-group col-md-6">
						  <label for="dateTime"><b>Spare Parts Added in Your Vehicle :-</b></label>
						  <label for="dateTime" name="date"><?php echo $Parts; ?></label>
						</div>
						
						
					  </div>
					    <div class="form-row">
						<div class="form-group col-md-6">
						  <label for="dateTime"><b>Machanical Name:-</b></label>
						  <label for="dateTime" name="date"><?php echo $Machanical; ?></label>
						</div>
						
						<div class="form-group col-md-6">
						  <label for="Time"><b>Total Charge :-</b></label>
						  <label for="Time" name="time" value=" "><?php echo $Total; ?></label>
						</div>
					  </div>
					  
					  
					

			
						<div class="row">
							<div class="col-md-2">
							  <input class="btn btn-success" name="Confirm_order" onclick="window.print()" type="submit" value="Print Bill">
							</div>
							

						</div>
			</form>
			</div>
			
			
			
			
			
</body>
</html>
