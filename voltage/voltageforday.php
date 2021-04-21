<?php 

include '../connected/conn.php';

$voltageforday = 0.00;

$result = mysqli_query($con, "SELECT * FROM voltageforday") or die('Error');
  
while ($row = mysqli_fetch_array($result)) 
	{$voltageforday = $row['voltageforday'];}
    
	echo $voltageforday;
	echo '  V';

?>
