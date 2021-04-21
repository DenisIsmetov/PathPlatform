<?php 

include '../connected/conn.php';

  $voltageformonth = 0.00;

  $voltagefordayres = mysqli_query($con, "SELECT * FROM voltageformonth") or die('Error 124');
    while ($row = mysqli_fetch_array($voltagefordayres)) {
    
    $voltageformonth = $row['voltageformonth'];
  }

  echo $voltageformonth;
  echo ' V';
?>