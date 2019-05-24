<?php


session_start();

if(isset($_POST['gr']))
{
$em=$_SESSION['email'];
$uid=$_POST['uid'];
$gstatus=$_POST['gstatus'];
$date = $_POST['date'];

include 'db.php';
	$sql="INSERT Into grievancetable values('$em','$uid','$gstatus','date')";
	if ($conn->query($sql) === TRUE) 
	{
    	echo "your compliance are saved in db";
	} 
	else 
	{
    echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>
