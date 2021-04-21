<?php 

include '../connected/conn.php';

  $stepfordayres = mysqli_query($con, "SELECT * FROM stepformonth") or die('Error 124');
    while ($row = mysqli_fetch_array($stepfordayres)) 
    
    {$stepformonth = $row['stepformonth'];}
  
    echo $stepformonth;
    echo '  СТЪПКИ';
?>