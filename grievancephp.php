<?php

$grievancesubject=$_POST['grievancesubject'];
$grievancecategory= filter_input(INPUT_POST,'grievancecategory');
$grievancetype= filter_input(INPUT_POST,'grievancetype');
$grievancedetails	= filter_input(INPUT_POST,'grievancedetails');



if(!empty($grievancesubject)||!empty($grievancecategory)||!empty($grievancetype)||!empty($grievancedetails))
{
	include 'db.php';
	$q=mysqli_prepare($conn,"INSERT Into grievancetable values('$grievancesubject','$grievancecategory','$grievancetype','$grievancedetails')");
	mysqli_execute($q);
	
}
else
{
	echo"all fields are required";
	die();
}

echo "hello";


?>
