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
				<h1 class="display-4"><span style="color:white;"><b>Machanical Engg.</b></span></h1>
				<p class="lead"><span style="color:white;">SHORTEST ROAD TO BIKE & CAR SERVICES</span></p>
			  </div>
			</div>
			
			
			<div class="container">
			
			<a href="AddEmployees.php" class="btn btn-success">Add Employees</a>
			<table class="table table-hover"  style="margin-top:20px;">
					  <thead>
							<tr>
								<th scope="col">Employees ID</th>
								<th scope="col">Name</th>
								<th scope="col">Email</th>
								<th scope="col">Mobile NO.</th>
								<th scope="col">Joining Date</th>
								<th scope="col">Address</th>
								<th scope="col">Remove</th>
							</tr>
					
					  </thead>
			
			<?php
			
			
				$email=$_SESSION['email'];
				$query    = "SELECT * FROM `employee`";
				$result = mysqli_query($conn,$query);
				if(mysqli_num_rows($result)>0)
				{
					while ($row=mysqli_fetch_array($result))
					{

					  
								echo ' <tbody>
										<tr>
										
											<td>'  ."STAR-MEM124-".$row['Emp_ID']. '</td>
											<td>' .$row['Name']. '</td>
											<td>' .$row['Email'].'</td>
											<td>' . $row['Mobile']. '</td>
											<td>' . $row['Joining_Date']. '</td>
											<td>' . $row['Address']. '</td>
											<td> <a href="RemoveEmp.php?id=' .$row['Emp_ID']. ' "> <div class="btn btn-success">Remove</div></a></td>
											
										</tr>
								  </tbody>  ';
							
						
			
			
					}
				}
				
															
			?>
								
	  </table>
	  
	  </div>
</body>
</html>