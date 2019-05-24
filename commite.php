<?php


$ee="admin";
$pp=12345;

if(isset($_POST['sss']))
{
			$e=$_POST['username'];
			$p=$_POST['password'];

	if($ee==$e && $pp==$p)
	{

		header("Location:record.php");
	}
	else
	{
		echo "invalid Username or password";
	}

}


?>

<html>
	<head>
		<title>Login
	</title>
	
	<style>
	body{color:black}
	body{background-color:#4682b2}
	</style>
	</head>
	<body>
		<center>
		<form method="post" >
		<h1>Login</h1>
		<input type="text" placeholder="User name" name="username"></br></br>	
		<input type="password" placeholder="password" name="password"></br></br>
		<button type="submit" name="sss" >Login</button>

	</body>
</html>


