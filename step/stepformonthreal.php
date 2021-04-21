<?php 

date_default_timezone_set("Europe/Sofia");

class StepForAll
{
  public function StepForMonth()
  {
    include '../connected/conn.php';

    $result = mysqli_query($con, "SELECT * FROM step") or die('Error 123');
        while ($row = mysqli_fetch_array($result)) 
        
        {$step= $row['step'];}
  
    $voltagefordayres = mysqli_query($con, "SELECT * FROM stepformonth") or die('Error 124');
      while ($row = mysqli_fetch_array($voltagefordayres)) 
      
      {$stepformonth = $row['stepformonth'];}
      
    $newvalueofpow = $step + $stepformonth;
  
    $insert = mysqli_query($con, "UPDATE stepformonth set stepformonth = $newvalueofpow WHERE ID=1") or die('Error 125');

    $this->DataStep();
  }

  private function DataStep()
  {
    include '../connected/conn.php';

    $datenow = date("M.d");
    
    if($datenow == "Jan.01" || $datenow == "Feb.01" || $datenow == "Mar.01" || $datenow == "Apr.01" || $datenow == "May.01" || $datenow == "Jun.01")
    {
      $zero = 0.00;
      $insert = mysqli_query($con, "UPDATE stepformonth set stepformonth = $zero WHERE ID=1") or die('Error 125');
    }
    else if($datenow == "Jal.01" || $datenow == "Aug.01" || $datenow == "Sep.01" || $datenow == "Oct.01" || $datenow == "Nov.01" || $datenow == "Dec.01")
    {
      $zero = 0.00;
      $insert = mysqli_query($con, "UPDATE stepformonth set stepformonth = $zero WHERE ID=1") or die('Error 125');
    }
  }

  public function StepForDay()
  {
    include '../connected/conn.php';

    $result = mysqli_query($con, "SELECT * FROM step") or die('Error 123');
        while ($row = mysqli_fetch_array($result)) 
        
        {$step= $row['step'];}
      
    $voltagefordayres = mysqli_query($con, "SELECT * FROM stepforday") or die('Error 124');
      while ($row = mysqli_fetch_array($voltagefordayres)) 
      
      {$stepforday = $row['stepforday'];}

    $newvalueofpow = $step + $stepforday ;
  
    $insert = mysqli_query($con, "UPDATE stepforday set stepforday = $newvalueofpow WHERE ID=1") or die('Error 125');
    $this->DataStepForDay();
  }

  private function DataStepForDay()
  {
    include '../connected/conn.php';

    $timenow = date("H:i:s");
  
    $timestart = "00:00:00";
    $timefinish = "00:05:00";
  
    if($timenow > $timestart && $timenow < $timefinish)
    {
      $zero = 0.00;
      $insert = mysqli_query($con, "UPDATE stepforday set stepforday = $zero WHERE ID=1") or die('Error 126');
    }
  }
}
?>