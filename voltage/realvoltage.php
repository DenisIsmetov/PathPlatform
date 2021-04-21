<?php 

include '../connected/conn.php';

$result = mysqli_query($con, "SELECT * FROM voltage") or die('Error');
    while ($row = mysqli_fetch_array($result)) {
	
	$voltage = $row['voltage'];
		
    if($voltage < 0.20)
    {
		echo '0.00 V';
    }
    else
    {	
		echo $voltage;
		echo '  V';
	}
}
?>
