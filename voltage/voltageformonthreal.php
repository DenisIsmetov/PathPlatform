<?php 

date_default_timezone_set("Europe/Sofia");

class VoltageMain
{
  public function VoltageMonth()
  {
    include '../connected/conn.php';

    $result = mysqli_query($con, "SELECT * FROM voltage") or die('Error 123');
        while ($row = mysqli_fetch_array($result)) {
        
          $voltage = $row['voltage'];
        
          if($voltage < 0.28)
          {
            $voltage = 0.00;
          }
      }
  
    $voltagefordayres = mysqli_query($con, "SELECT * FROM voltageformonth") or die('Error 124');
      while ($row = mysqli_fetch_array($voltagefordayres)) {
      
      $voltageformonth = $row['voltageformonth'];
    }
  
    $newvoltageformonth = $voltage + $voltageformonth;
  
    $insert = mysqli_query($con, "UPDATE voltageformonth set voltageformonth = $newvoltageformonth WHERE ID=1") or die('Error 125');

    $this->DataVoltage();
  }

  private function DataVoltage()
  {
    include '../connected/conn.php';

    $datenow = date("M.d");
    
    if($datenow == "Jan.01" || $datenow == "Feb.01" || $datenow == "Mar.01" || $datenow == "Apr.01" || $datenow == "May.01" || $datenow == "Jun.01")
    {
      $zero = 0.00;
      $insert = mysqli_query($con, "UPDATE voltageformonth set voltageformonth = $zero WHERE ID=1") or die('Error 125');
    }
    else if($datenow == "Jal.01" || $datenow == "Aug.01" || $datenow == "Sep.01" || $datenow == "Oct.01" || $datenow == "Nov.01" || $datenow == "Dec.01")
    {
      $zero = 0.00;
      $insert = mysqli_query($con, "UPDATE voltageformonth set voltageformonth = $zero WHERE ID=1") or die('Error 125');
    }
  }
  
  public function VoltageForDay()
  {
    include '../connected/conn.php';

    $result = mysqli_query($con, "SELECT * FROM voltage") or die('Error 123');
        while ($row = mysqli_fetch_array($result)) {
        
          $voltage = $row['voltage'];
        
          if($voltage < 0.28)
          {
            $voltage = 0.00;
          }
      }
  
    $voltagefordayres = mysqli_query($con, "SELECT * FROM voltageforday") or die('Error 124');
      while ($row = mysqli_fetch_array($voltagefordayres)) {
      
      $voltageforday = $row['voltageforday'];
    }
  
    $newvalueofvol = $voltage + $voltageforday;
  
    $insert = mysqli_query($con, "UPDATE voltageforday set voltageforday = $newvalueofvol WHERE ID=10") or die('Error 125');

    $this->DataVoltageForDay();
  }

  private function DataVoltageForDay()
  {
    include '../connected/conn.php';

    $timenow = date("H:i:s");
  
    $timestart = "00:00:00";
    $timefinish = "00:05:00";
  
    if($timenow > $timestart && $timenow < $timefinish)
    {
      $zero = 0.00;
      $insert = mysqli_query($con, "UPDATE voltageforday set voltageforday = $zero WHERE ID=10") or die('Error 126');
    }
  }
}
?>