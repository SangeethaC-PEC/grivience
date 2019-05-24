<?php 
	session_start();
	
	include 'db.php';
$q="SELECT * from grievanceuni";
$q1="SELECT status FROM grievancestatustable";
$r= $conn->query($q) ;
$r1=$conn->query($q1) ;



?>


<html>
<head>
	<title>
		Grievance records
	</title>	
	<style>
	body{color:black}
	body{background-color:FBDE90}
	</style>
</head>

<body>
	<h2 align="center">GRIEVANCE RECORDS</h2>
	<table border="5" style="width:50%" align="center">
		<tr>
		<th>Email</th>
		
		<th>Grievance category</th>
		<th>Grievance types</th>
		<th>Grievance details</th>
		<th>Date</th>
		<th>Status</th>
		</tr>
		<?php
		while ($rows= mysqli_fetch_assoc($r)) 
			{
			$rows1= mysqli_fetch_assoc($r1);
		 ?>
		 <tr>
		 	<td><?php echo $rows['emailid']; ?></td>
		 	
		 	<td><?php echo $rows['grievancecategory']; ?></td>
		 	<td><?php echo $rows['grievancetype']; ?></td>
		 	<td><?php echo $rows['grievancedetails']; ?></td>
		 	<td><?php echo $rows['createddate']; ?></td>
		 	<form action="changestatus.php" method="post">
		 	<td><button type="submit" name="s"><?php echo $rows1['status']; ?></button></td>
		 </form>
		 	
		 	
	

		 </tr>
		 <?php 
		 	}
		 	echo "</table>";

		 	$conn-> close();
		  ?>
		   
	</table>
</body>

</html>