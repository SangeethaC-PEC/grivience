<?php 
	session_start();
	$ww=$_SESSION['status'];
	include 'db.php';
	
	
$q="SELECT * from changerec";
$r= $conn->query($q) ;

?>


<html>
<head>
	<title>
		Grievance status
	</title>	
	<style>
	body{color:black}
	body{background-color:FBDE90}
	</style>
</head>

<body>
	<h2 align="center">GRIEVANCE STATUS</h2>
	<table border="5" style="width:50%" align="center">
		<tr>
		<th>Status</th>
		
		</tr>
		<?php
	while ($rows= mysqli_fetch_assoc($r)) 
			{
				
		 ?>
		 <tr>
		 	<td><?php echo $rows['changerec']; ?></td>
		 	
		 </tr>
		 <?php 
		 	
		 	}
		 	echo "</table>";

		 	$conn-> close();
		  ?>
	</table>
</body>

</html>