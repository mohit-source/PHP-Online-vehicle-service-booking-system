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
					
				}
				
				if(isset($_POST['submit_form']))
				{

					$Name = $_POST['Name'];
					
					$Email = $_POST['Email'];
					$Mobile = $_POST['Mobile'];
					$Joining_Date = $_POST['Date'];
					$Address = $_POST['Address'];
					$Specialist = $_POST['specialist'];
					$Password = $_POST['password'];
					
					

				 
					$query = "insert into employee (Name , Email , Password , Mobile , Joining_Date , Specialist , Address ) values ('$Name' , '$Email' , '$Password' , '$Mobile' , '$Joining_Date' , '$Specialist' , '$Address' )";
					//$sql = "INSERT INTO register (FirstName, LastName, Email , Password , Mobile , Address , City , State) VALUES ('mk', 'c', 'g' , 'gh', 'ju' , 'hg' , 'hg' , 'hgf')";
					$result=mysqli_query($conn,$query);
					if($result){
						
						  echo "<script>alert('Added Successfully !!!)</script>";
						  header("Location:EmployeeDetails.php");
						 // echo "<script>window.open('index.php')</script>";
					} else {
						  echo "Error: " . $query . "<br>" . mysqli_error($conn);
					}
				}
	
?>

<html>
 <head>
  <title>Add Employees</title>
 
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
				<h1 class="display-4"><span style="color:white;"><b>Machanical Engg.</b></span></h1>
				<p class="lead"><span style="color:white;">SHORTEST ROAD TO BIKE & CAR SERVICES</span></p>
			  </div>
			</div>
			
			
			
			<div class="container">
			
					<div class="card" style="width: 70rem; margin:auto; margin-top:20px;" >
					<div class="alert alert-dark" role="alert" style="text-align: center; background-color:#28a745; color:white;">
						Add Employees
			    	</div>
				  <div class="card-body">
				
					<form action=" " method="POST">
						  <div class="form-row">
							<div class="col-md-6 mb-3">
								  <label for="validationTooltip01">Name</label>
								  <input type="text" name="Name" class="form-control" id="validationTooltip01" placeholder="First name"  required>
								  
								</div>
								<div class="col-md-6 mb-3">
								  <label for="validationTooltip02">Email</label>
								  <input type="email" name="Email" class="form-control" id="validationTooltip02" placeholder="Email"  required>
								 
								</div>
							<div class="form-group col-md-6">
							  <label for="inputEmail4">Joining Date</label>
							  <input type="date" name="Date" class="form-control" id="date" placeholder="Date">
							</div>
							<div class="form-group col-md-6">
								<label for="inputmobile">Mobile no</label>
								<input type="phone" name="Mobile" class="form-control" id="inputmobile" placeholder="Phone no.">
							</div>
							
							 <div class="form-group col-md-6">
								<label for="inputAddress">Password</label>
								<input type="Password" name="password" class="form-control" id="inputAddress" placeholder="Password">
							  </div>
							<div class="form-group col-md-6">
								<label for="inputmobile">Specialist In</label>
								
								<select class="form-control" name="specialist" id="exampleFormControlSelect1" required>
								  <option selected disabled>Choose</option>
								  <option>Bike</option>
								  <option>Auto Rikshaw</option>
								  <option>Car</option>

								 </select>
							</div>
							
						  </div>
						 
						 
						  <div class="form-group">
							<label for="inputAddress">Address</label>
							<input type="text" name="Address" class="form-control" id="inputAddress" placeholder="1234 Main St">
						  </div>
						  
							<input class="btn btn-success" name="submit_form" type="submit" value="Submit">
						</form>
						
					
				  </div>
				  
				</div>
			
			</div>
			
			
</body>
</html>
