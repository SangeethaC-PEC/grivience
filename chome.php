<?php

session_start();
  $em=$_SESSION['lu'];
?>

<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #4CAF50;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}
</style>
</head>
<body>

<h2>Comitte Home Page</h2>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="cview.php">View </a></li>
  <li><a href="index.php">Logout</a></li>

</ul>

</body>
</html>
