<?php

session_start();

if(isset($_POST['login']))
{
	$e=$_POST['Login'];
	$p=$_POST['Password'];
	

	include 'db.php';
	$sql="select email,createpassword from registration where email='$e' and createpassword='$p'";
		$r=	$conn->query($sql);
$_SESSION['email'] = $e;
		
	 $c= $r->num_rows;

	if($c>0)
	{

		header("Location:grievance.php");
	}
	else
	{
		echo "invalid credential please enter correct data";
	}

}


?>


<html>
<head>
	<title>Online Grievance Management System at Institute level
	</title>
	<style>
	body{color:blue;}
	body{background-color:#95c8d8}
	</style>
	
</head>
<body>
	
	
<center>
<h1>Login</h1>
<form method="POST">
<input type="text" placeholder="Login" name="Login"></br></br>
<input type="password" placeholder="Password" name="Password"></br></br>
<input type="submit" value="Sign in" name="login"></br></br>
</form>
<a href="register.php">Create an new account</a>
</center>
</body>
</html>