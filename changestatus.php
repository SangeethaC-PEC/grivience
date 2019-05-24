<?php 
	session_start();
	
	include 'db.php';
	


 if(isset($_POST['ss']))
 {
 	$u=$_GET['textarea1'];
 	$_SESSION['status'] = $u;
 	
 	$sql="INSERT Into changerec values('$w')";
	if ($conn->query($sql) === TRUE) 
	{
    	echo "your compliance are saved in db";
	} 
	else 
	{
    echo "Error: " . $sql . "<br>" . $conn->error;
	}

 }
?>


<!DOCTYPE html>
<head>
	<style>
	body{color:black}
	body{background-color:#FF9147}
	</style>
</head>
<body>
	<form method="post">
		<h2>Enter the status</h2></br>
		<textarea rows="5" cols="150" name="textarea1"></textarea></br></br>
		<button type="submit" name="ss" >Submit</button>
	</form>
</body>

