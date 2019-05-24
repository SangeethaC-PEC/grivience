<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
<table border="1">
<tr><th>sino</th><th>Mailid</th><th>Grievancecategory</th><th>grievancetype</th><th>grievancedetails</th></tr>
<?php 
//	session_start();
function dateDiff ($d1, $d2) 
{

    // Return the number of days between the two dates:    
    return round(abs(strtotime($d1) - strtotime($d2))/86400);

} 	
	include 'db.php';
$q="SELECT * from grievancetable";
$r= $conn->query($q) ;
$i=1;
while ($rows= mysqli_fetch_assoc($r)) 
			{
			$s=$rows['createddate'];
	
    	$s1=date("Y/m/d");
    
		 
$date1 = $s;
$date2 = $s1;
$x=dateDiff($date1,$date2);
?>

<?php
if($x>30)
{

	echo "<tr><td>";
	echo $i."</td><td>";
	echo $rows['emailid']."</td>";
	echo "<td>".$rows['grievancecategory']."</td>";
	echo "<td>".$rows['grievancetype']."</td>";
	echo "<td>".$rows['grievancedetails']."</td></tr>";
	$i++;
}

		 }

?>
</table>