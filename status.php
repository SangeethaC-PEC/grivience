<?php 
	session_start();
	include 'db.php';
$q="SELECT * from grievancestatustable  ";
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
		<th>Email</th>
		<th>Unique ID</th>
		<th>Grievance Status</th>
		<th>Date</th>
		</tr>
		<?php
	while ($rows= mysqli_fetch_assoc($r)) 
			{
				
		 ?>
		 <tr>
		 	<td><?php echo $rows['email']; ?></td>
		 	<td><?php echo $rows['cid']; ?></td>
		 	<td><?php echo $rows['status']; ?></td>
		 	<td><?php echo $rows['date']; ?></td>
		 </tr>
		 <?php 
		 	
		 	}
		 	echo "</table>";

		 	$conn-> close();
		  ?>
	</table>
</body>

</html>