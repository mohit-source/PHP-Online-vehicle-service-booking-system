<?php

		$db_host = 'localhost';
		$db_user = 'root';
		$db_pass = '';
		$db_name = 'garage';
		
		$conn = mysqli_connect($db_host , $db_user , $db_pass , $db_name );
		
		if(!$conn)
		{
			die ('failed').mysqli_connect_error();
		}
		
		$sql = "select * from vehicles";
		$query = mysqli_query($conn,$sql);
		
		
	
?>

<html>
	<title> HTML Table </title>
	<head>
	<style>
		body{
			font-size:15px;
			color:#343d44;
			font-family:"segoe-ui","open-sans",tahoma-arial;
			padding:0px;
			margin:0px;
		}
		table
		{
			margin:auto;
			font-family:"Lucida sans Unicode", "Lucida Grande";
			font-size:17px;
		}
		h1
		{
			margin:25px auto 0;
			text-align:center;
			text-transform:uppercase;
			font-size:17px;
		}
	</style>
	</head>
	<body>
			<h1> Data fetched from database </h1>
			<table border="2"><caption>Person Data</caption>
				<thead>
				  <tr>
						<td>Id</td>
						<td>Vehicle Brand</td>
						<td>Vehicle Name</td>
						
				  </tr>
				 </thead>
				 
				 <?php 
					while($row=mysqli_fetch_array($query))
					{
					echo	'<tr>
							<td>'.$row['Id'].'</td>
							<td>'.$row['VehicleBrand'].'</td>
							<td>'.$row['VehicleName'].'</td>
							
						</tr>';
					}
				 ?>
				 
			<table>
	</body>
</html>