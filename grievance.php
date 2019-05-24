<?php


session_start();

if(isset($_POST['gr']))
{

$grievancecategory= filter_input(INPUT_POST,'grievancecategory');
$grievancetype= filter_input(INPUT_POST,'grievancetype');
$grievancedetails	= filter_input(INPUT_POST,'grievancedetails');
$em=$_SESSION['lu'];



$digits_needed=8;

$random_number=''; // set up a blank string

$count=0;

while ( $count < $digits_needed ) {
    $random_digit = mt_rand(0, 9);
    
    $random_number .= $random_digit;
    $count++;
}



if(!empty($grievancecategory)||!empty($grievancetype)||!empty($grievancedetails))
{
	include 'db.php';
	$date = date('Y/m/d H:i:s');
	$sql="INSERT Into grievancetable values('','$em','$grievancecategory','$grievancetype','$grievancedetails','$date','new')";
	if ($conn->query($sql) === TRUE) 
	{
    	echo "your compliance are saved in db";
	} 
	else 
	{
    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
else
{
	echo"all fields are required";
	die();
}


}

?>


<html>
<head>
	<title>Grievance
	</title>
	<style>
	body{color:black;}
	body{background-color:#57a0d2}
	</style>
</head>
<body>
	 <a href="grievance.php">Raise a Grievance</a>
	<form method="POST">
	
	

<div align="right">
<select name="form" onchange="location = this.value;">
<option value=".php"></option>
<option value="status.php">Grievance Overview</option>
<option value="studchangestatus.php">Grievance status</option>

<option value="index.php">Logout</option>
</div>
</select>

<p>

</p>


<div align="left">
Grievance Category :<select name="grievancecategory">
	<option> </option>
	
  <option value="Academic">Academic</option>
  <option value="Student">Student</option>
  <option value="Infrastructure">Infrastructure</option>
  <option value="Administration">Administration</option>
  
</select></br></br>
Grievance Type :<select name="grievancetype">
  <option value="Type"></option>
  <option value=" Respect to instructor and staff">Respect to instructor and staff</option>
  <option value="Class ploicy">Class ploicy</option>
  <option value="Course Content">Course Content</option>
  <option value="Discrimination and Sexual Harrassment">Discrimination and Sexual Harrassment</option>
  <option value="Scholorship">Scholorship</option>
  <option value="Residence">Residence</option>
  <option value="Transport">Transport</option>  
  <option value="Lab facility">Lab facility</option>
  <option value="Fee choose">Fee choose</option>S
</select></br></br>
Grievance Details</br></br>
<textarea rows="5" cols="150" name="grievancedetails">
</textarea></br></br>

<input type="submit" value="Submit your questions" name="gr"></br></br>

</div>
</form>
</body>
</html>

