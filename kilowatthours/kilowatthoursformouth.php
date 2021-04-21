<?php 

include '../connected/conn.php';

$kilowatthoursformonth = 0.00;

$result = mysqli_query($con, "SELECT * FROM kilowatthoursformonth") or die('Error130');
  
while ($row = mysqli_fetch_array($result)) 
	{$kilowatthoursformonth= $row['kilowatthoursformonth'];}
    
	echo $kilowatthoursformonth;
	echo '  kWh';
	
?>