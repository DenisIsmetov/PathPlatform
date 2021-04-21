<?php 
include '../connected/conn.php';

$result = mysqli_query($con, "SELECT * FROM powerforday") or die('Error129');
  
while ($row = mysqli_fetch_array($result)) 
	{$powerforday = $row['powerforday'];}
    
	echo $powerforday;
	echo '  W';

?>