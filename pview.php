<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}



th {
  background-color: #4CAF50;
  color: white;
}
</style>
<table border="1">
<tr><th>sino</th><th>Mailid</th><th>Grievancecategory</th><th>grievancetype</th><th>grievancedetails</th><th>Estatus</th><th>Days</th></tr>
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
	
if(($x<=15) && ($rows['status']!='Under Commitee Review'))
{
  {
    $sql1="update grievancetable set status='Under Commitee Review' where status='new' ";
    $conn->query($sql1);

    $from_add = "admin@buddhablock.in"; 
            $to_add = $rows['emailid']; //<-- put your yahoo/gmail email address here
            $subject = "Status update";
            $message = "Hi your status had been updated, It is now under Commitee review";
            $headers = "From: $from_add \r\n";
            $headers .= "Reply-To: $from_add \r\n";
            $headers .= "Return-Path: $from_add\r\n";
            $headers .= "X-Mailer: PHP \r\n";
  
  
  mail($to_add,$subject,$message,$headers);
  }
}
else if(($x>=15) && ($x<=30))
{
  if($rows['status']!='Under University Review')
  {
    $sql1="update grievancetable set status='Under University Review' where status='new' ";
    $conn->query($sql1);
    $from_add = "admin@buddhablock.in"; 
            $to_add = $rows['emailid']; //<-- put your yahoo/gmail email address here
            $subject = "Status update";
            $message = "Hi your status had been updated, It is now under Principal review";
            $headers = "From: $from_add \r\n";
            $headers .= "Reply-To: $from_add \r\n";
            $headers .= "Return-Path: $from_add\r\n";
            $headers .= "X-Mailer: PHP \r\n";
  
  
  mail($to_add,$subject,$message,$headers);
  }
}
else if(($x>=30))
{
  if($rows['status']!='Under AICTE Review')
  {
    $sql1="update grievancetable set status='Under AICTE Review' where status='new' ";
    $conn->query($sql1);
    $from_add = "admin@buddhablock.in"; 
            $to_add = $rows['emailid']; //<-- put your yahoo/gmail email address here
            $subject = "Status update";
            $message = "Hi your status had been updated, It is now under AICTE review";
            $headers = "From: $from_add \r\n";
            $headers .= "Reply-To: $from_add \r\n";
            $headers .= "Return-Path: $from_add\r\n";
            $headers .= "X-Mailer: PHP \r\n";
  
  
  mail($to_add,$subject,$message,$headers);
  }
}



echo "<tr bgcolor='#f2f2f2'><td>";
  echo $rows['cid']."</td><td>";
  echo $rows['emailid']."</td>";
  echo "<td>".$rows['grievancecategory']."</td>";
  echo "<td>".$rows['grievancetype']."</td>";
  echo "<td>".$rows['grievancedetails']."</td>";
  echo "<td>".$x."</td>";
  echo "<td>".$rows['status']."</td></tr>";

}
?>
</table>
<a href="phome.php"><input type="button" value="Home Page"></a>