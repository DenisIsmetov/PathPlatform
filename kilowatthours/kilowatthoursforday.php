<?php 

include '../connected/conn.php';

$kilowatthoursforday = 0.00;

$result = mysqli_query($con, "SELECT * FROM kilowatthoursforday") or die('Error130');
  
while ($row = mysqli_fetch_array($result)) 
	{$kilowatthoursforday = $row['kilowatthoursforday'];}
    
	echo $kilowatthoursforday;
	echo '  kWh';
	
?>