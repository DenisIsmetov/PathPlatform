<?php 

date_default_timezone_set("Europe/Sofia");

class KiloWattHours
{
  public function KiloWattHoursMonth()
  {
    include '../connected/conn.php';

    $powerformouthres = mysqli_query($con, "SELECT * FROM powerformonth") or die('Error 135');
    while ($row = mysqli_fetch_array($powerformouthres)) 
        
    {$powerformonth = $row['powerformonth'];}
  
    $newkilformonth = $powerformonth / 1000;
  
    $insert = mysqli_query($con, "UPDATE kilowatthoursformonth set kilowatthoursformonth = $newkilformonth WHERE ID=1") or die('Error 125');

    $this->DataKiloWattHours();
  }

  private function DataKiloWattHours()
  {
    include '../connected/conn.php';

    $datenow = date("M.d");
    
    if($datenow == "Jan.01" || $datenow == "Feb.01" || $datenow == "Mar.01" || $datenow == "Apr.01" || $datenow == "May.01" || $datenow == "Jun.01")
    {
      $zero = 0.00;
      $insert = mysqli_query($con, "UPDATE kilowatthoursformonth set kilowatthoursformonth = $zero WHERE ID=1") or die('Error 125');
    }
    else if($datenow == "Jal.01" || $datenow == "Aug.01" || $datenow == "Sep.01" || $datenow == "Oct.01" || $datenow == "Nov.01" || $datenow == "Dec.01")
    {
      $zero = 0.00;
      $insert = mysqli_query($con, "UPDATE kilowatthoursformonth set kilowatthoursformonth = $zero WHERE ID=1") or die('Error 125');
    }
  }

  public function KiloWattHoursDay()
  {
    include '../connected/conn.php';
  
    $result = mysqli_query($con, "SELECT * FROM  powerforday") or die('Error 123');
        while ($row = mysqli_fetch_array($result)) 
        
        {$powerforday = $row['powerforday'];}
  
    $newvalueofkil= ($powerforday / 1000);
  
    $insert = mysqli_query($con, "UPDATE kilowatthoursforday set kilowatthoursforday = $newvalueofkil WHERE ID=1") or die('Error 125');

    $this->DataKiloWattHoursDay();
  }

  private function DataKiloWattHoursDay()
  {
    include '../connected/conn.php';

    $timenow = date("H:i:s");
  
    $timestart = "00:00:00";
    $timefinish = "00:05:00";
  
    if($timenow > $timestart && $timenow < $timefinish)
    {
      $zero = 0.00;
      $insert = mysqli_query($con, "UPDATE kilowatthoursforday set kilowatthoursforday = $zero WHERE ID=1") or die('Error 126');
    }
  }
}
?>