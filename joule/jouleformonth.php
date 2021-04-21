<?php 

include '../connected/conn.php';

  $powerfordayres = mysqli_query($con, "SELECT * FROM jouleformonth") or die('Error 124');
    while ($row = mysqli_fetch_array($powerfordayres)) 
            
    {$jouleformonth = $row['jouleformonth'];}

    echo $jouleformonth;
    echo ' J';

?>