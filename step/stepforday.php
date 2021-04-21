<?php 
include '../connected/conn.php';

$result = mysqli_query($con, "SELECT * FROM stepforday") or die('Error129');
  
while ($row = mysqli_fetch_array($result)) 
	{$stepforday = $row['stepforday'];}
    
	echo $stepforday;
	echo '  СТЪПКИ';

?>