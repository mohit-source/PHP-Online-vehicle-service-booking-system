<?php
			include('DBconfig.php');
						if(isset($_GET['id']) && is_numeric($_GET['id']))
						{
							$id = $_GET['id'];
							
							$query    = "DELETE from Vehicles where Id = '$id'";
							$result = mysqli_query($conn,$query);
							
							header("Location:Vehicles.php");
							
						}
					
?>