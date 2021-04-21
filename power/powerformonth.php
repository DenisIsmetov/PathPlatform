<?php 
include '../connected/conn.php';

  $powerfordayres = mysqli_query($con, "SELECT * FROM powerformonth") or die('Error 124');
    while ($row = mysqli_fetch_array($powerfordayres)) 
    
    {$powerformonth = $row['powerformonth'];}

    echo $powerformonth;
    echo ' W';
    
?>