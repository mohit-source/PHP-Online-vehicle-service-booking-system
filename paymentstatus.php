<?php
			include('DBconfig.php');
						if(isset($_GET['id']) && is_numeric($_GET['id']))
						{
							$id = $_GET['id'];
							
							$query    = "update `order` set PaymentStatus = 'Paid'";
							$result = mysqli_query($conn,$query);
							
							header("Location:MachanicalWork.php");
							
						}
					
?>