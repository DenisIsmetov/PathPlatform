<?php 

date_default_timezone_set("Europe/Sofia");

class Power
{
  public function VoltageSumToPowerMonth()
  {
    include '../connected/conn.php';

    $result = mysqli_query($con, "SELECT * FROM voltage") or die('Error 123');
        while ($row = mysqli_fetch_array($result)) 
        {
          $voltage= $row['voltage'];
          
          if($voltage < 0.28)
          {
            $voltage = 0.00;
          }
        }
    
    $powerformouthres = mysqli_query($con, "SELECT * FROM powerformonth") or die('Error 124');
      while ($row = mysqli_fetch_array($powerformouthres)) {
      
      $powerformonth = $row['powerformonth'];
    }
    
    $newpowerformonth = ($voltage * 0.08)+ $powerformonth;
    
    $insert = mysqli_query($con, "UPDATE powerformonth set powerformonth = $newpowerformonth WHERE ID=1") or die('Error 125');

    $this->DataPower();
  }
  
  private function DataPower()
  {
    include '../connected/conn.php';

    $datenow = date("M.d");
      
    if($datenow == "Jan.01" || $datenow == "Feb.01" || $datenow == "Mar.01" || $datenow == "Apr.01" || $datenow == "May.01" || $datenow == "Jun.01")
    {
      $zero = 0.00;
      $insert = mysqli_query($con, "UPDATE powerformonth set powerformonth = $zero WHERE ID=1") or die('Error 125');
    }
    else if($datenow == "Jal.01" || $datenow == "Aug.01" || $datenow == "Sep.01" || $datenow == "Oct.01" || $datenow == "Nov.01" || $datenow == "Dec.01")
    {
      $zero = 0.00;
      $insert = mysqli_query($con, "UPDATE powerformonth set powerformonth = $zero WHERE ID=1") or die('Error 125');
    }
  }

  public function VoltageToSumPowerDay()
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
  
    $voltagefordayres = mysqli_query($con, "SELECT * FROM powerforday") or die('Error 124');
      while ($row = mysqli_fetch_array($voltagefordayres)) {
      
      $powerforday = $row['powerforday'];
    }
  
    $newvalueofpow = ($voltage * 0.08) + $powerforday ;
  
    $insert = mysqli_query($con, "UPDATE powerforday set powerforday = $newvalueofpow WHERE ID=1") or die('Error 125');

    $this->DataPowerForDay();
  }

  private function DataPowerForDay()
  {
    include '../connected/conn.php';

    $timenow = date("H:i:s");
  
    $timestart = "00:00:00";
    $timefinish = "00:05:00";
  
    if($timenow > $timestart && $timenow < $timefinish)
    {
      $zero = 0.00;
      $insert = mysqli_query($con, "UPDATE powerforday set powerforday = $zero WHERE ID=1") or die('Error 126');
    }
  }
}

?>