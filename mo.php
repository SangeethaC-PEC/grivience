<?php 
//	session_start();
	
	include 'db.php';
$q="SELECT * from grievancetable";

$r= $conn->query($q) ;

while ($rows= mysqli_fetch_assoc($r)) 
			{
			$s=$rows['createddate'];
		 $y=substr($s,0,4);
		 $m=substr($s,5,2);
		 $d=substr($s,8,2);
    	$s1=date("Y/m/d");
    	//echo $s;
		 $y1=substr($s1,0,4);
		 $m1=substr($s1,5,2);
		 $d1=substr($s1,8,2);
		 
$date1 = $s;
$date2 = $s1;

$diff = abs(strtotime($date2) - strtotime($date1));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

printf("%d years, %d months, %d days\n", $years, $months, $days);

		//echo ($c);
		
		 echo "<br>";

		 }

?>