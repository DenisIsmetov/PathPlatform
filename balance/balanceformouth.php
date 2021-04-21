<?php 

include '../connected/conn.php';

$balancemonth = 0.00;

$result = mysqli_query($con, "SELECT * FROM balancemonth") or die('Error130');
  
while ($row = mysqli_fetch_array($result)) 
	{$balancemonth= $row['balancemonth'];}
    
	echo $balancemonth;
	echo '  лв.';
	
?>