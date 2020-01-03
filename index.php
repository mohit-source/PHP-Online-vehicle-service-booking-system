<?php
	
	include('DBconfig.php');
	session_start();
	if(isset ($_POST['login_submit']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$query = "select * from register where Email = '$email' and Password = '$password'";
		$result = mysqli_query($conn,$query);
		if(mysqli_num_rows($result)==1)
		{
			
			$_SESSION['email'] = $email;
			if($email=="Admin@gmail.com" && $password=="admin1234")
			{
					header("Location:Admin.php");
			}
			else{
				header("Location:homepage.php");
			}
		}
		else
		{
			echo "<script>alert('Incorrect Email ID or Password !!!')</script>";
		}
	}

?>
<html>
 <head>
  <title>Login to STAR Automobiles</title>
 
  <link rel="stylesheet" href="boostrap.css">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  
</head>
<body>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="index.php" style="color:#28a745; text-align:center;">STAR Automobiles</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				  
				
				</ul>
				
				<a href ="signup.php">
				  <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Register</button>
				</a>

			  </div>
			</nav>
			
				
			<div class="card" style="width: 18rem; margin:auto; margin-top:20px;" >
					<div class="alert alert-dark" role="alert" style="text-align: center; background-color:#28a745; color:white;">
						Login
			    	</div>
				  <div class="card-body">
				
					 <form method="POST">
						  <div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" name="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email">
						
						  </div>
						  <div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" name="password" class="form-control" id="" placeholder="Password">
						  </div>
					
						<input class="btn btn-success" name="login_submit" type="submit" value="Submit">
					 </form>
				  </div>
			</div>
			
			
			
			
			
			
			
</body>
</html>
