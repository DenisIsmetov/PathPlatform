<?php 

include '../connected/conn.php';
    
$result = mysqli_query($con, "SELECT * FROM dht11") or die('Error129');

while ($row = mysqli_fetch_array($result)) 
    {$temperature = $row['temperature'];}

    echo $temperature;
    echo '   °C';
?>