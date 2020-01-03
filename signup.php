
<?php
 include('DBconfig.php');
 
				if(isset($_POST['submit_form']))
				{

					$FirstName = $_POST['FirstName'];
					$LastName = $_POST['LastName'];
					$Email = $_POST['Email'];
					$Password = $_POST['Password'];
					$Mobile = $_POST['Mobile'];
					$Address = $_POST['Address'];
					$City = $_POST['City'];
					$State = $_POST['State'];

				 
					$query = "insert into register (FirstName , LastName , Email , Password , Mobile , Address , City , State) values ('$FirstName' , '$LastName' , '$Email' , '$Password' , '$Mobile' , '$Address' , '$City' , '$State' )";
					//$sql = "INSERT INTO register (FirstName, LastName, Email , Password , Mobile , Address , City , State) VALUES ('mk', 'c', 'g' , 'gh', 'ju' , 'hg' , 'hg' , 'hgf')";
					$result=mysqli_query($conn,$query);
					if($result){
						
						  echo "<script>alert('Registration Successfully !!! Please Login to continue...')</script>";
						 // header("Location:index.php");
						  echo "<script>window.open('index.php')</script>";
					} else {
						  echo "Error: " . $query . "<br>" . mysqli_error($conn);
					}
				}
 ?>
 
 


<html>
 <head>
  <title>Register</title>
 
		  <link rel="stylesheet" href="boostrap.css">
		  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
		  
 </head>
	<body>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="homepage.php" style="color:#28a745;">STAR Automobiles </a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				  
				
				</ul>
			
				<a href="index.php">
				  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
				</a>

			  </div>
			</nav>
			
				
			<div class="card" style="width: 25rem; margin:auto; margin-top:20px;" >
					<div class="alert alert-dark" role="alert" style="text-align: center; background-color:#28a745; color:white;">
						Register
			    	</div>
				  <div class="card-body">
				
					<form action=" " method="POST">
						  <div class="form-row">
							<div class="col-md-6 mb-3">
								  <label for="validationTooltip01">First name</label>
								  <input type="text" name="FirstName" class="form-control" id="validationTooltip01" placeholder="First name"  required>
								  
								</div>
								<div class="col-md-6 mb-3">
								  <label for="validationTooltip02">Last name</label>
								  <input type="text" name="LastName" class="form-control" id="validationTooltip02" placeholder="Last name"  required>
								 
							</div>
							<div class="form-group col-md-6">
							  <label for="inputEmail4">Email</label>
							  <input type="email" name="Email" class="form-control" id="inputEmail4" placeholder="Email">
							</div>
							<div class="form-group col-md-6">
							  <label for="inputPassword4">Password</label>
							  <input type="password" name="Password" class="form-control" id="inputPassword4" placeholder="Password">
							</div>
						  </div>
						   <div class="form-group">
							<label for="inputmobile">Mobile no</label>
							<input type="phone" name="Mobile" class="form-control" id="inputmobile" placeholder="Phone no.">
						  </div>
						  <div class="form-group">
							<label for="inputAddress">Address</label>
							<input type="text" name="Address" class="form-control" id="inputAddress" placeholder="1234 Main St">
						  </div>
						  <div class="form-row">
							<div class="form-group col-md-6">
							  <label for="inputCity">City</label>
							  <input type="text" name="City" class="form-control" id="inputCity">
							</div>
							<div class="form-group col-md-6">
							  <label for="inputState">State</label>
							  <select id="inputState" name="State" class="form-control">
								<option selected disabled>Choose...</option>
								<option >Maharshtra</option>
								<option >Goa</option>
								<option>Himachal Pradesh</option>
								<option>Uttar Pradesh</option>
							  </select>
							</div>
						
						
						  </div>
						  
							<input class="btn btn-success" name="submit_form" type="submit" value="Submit">
						</form>
						
					
				  </div>
				  
				</div>
			
			
			<?php
				
				
				

			?>
			
			
			
	</body>
</html>
