<?php

$firstname=$_POST['firstname'];
$lastname= filter_input(INPUT_POST,'lastname');
$email= filter_input(INPUT_POST,'email');
$createpassword= filter_input(INPUT_POST,'createpassword');
$confirmpassword= filter_input(INPUT_POST,'confirmpassword');
$stud="student";

if(!empty($firstname)||!empty($lastname)||!empty($email)||!empty($createpassword)||!empty($confirmpassword))
{
	include 'db.php';
	$q=mysqli_prepare($conn,"INSERT Into registration values('$firstname','$lastname','$email','$createpassword','$confirmpassword','$stud')");
	mysqli_execute($q);
	Header('Location:index.php');
	
}
else
{
	echo"all fields are required";
	die();
}

echo "Login created...!";


?>
