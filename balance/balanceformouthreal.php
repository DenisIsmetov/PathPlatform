<?php 

class BalanceForMonthReal
{
  public function BalanceMonth()
  {
    include '../connected/conn.php';

    $powerformouthres = mysqli_query($con, "SELECT * FROM powerformonth") or die('Error 135');
    while ($row = mysqli_fetch_array($powerformouthres)) 
        
    {$powerformonth = $row['powerformonth'];}
    
    $newbalanceformonth = $powerformonth * 0.0015;
    
    $insert = mysqli_query($con, "UPDATE balancemonth set balancemonth = $newbalanceformonth WHERE ID=1") or die('Error 125');

    $this->DataBalance();
  }
  
  private function DataBalance()
  {
    include '../connected/conn.php';

    $datenow = date("M.d");
    
    if($datenow == "Jan.01" || $datenow == "Feb.01" || $datenow == "Mar.01" || $datenow == "Apr.01" || $datenow == "May.01" || $datenow == "Jun.01")
    {
      $zero = 0.00;
      $insert = mysqli_query($con, "UPDATE balanceformonth set balanceformonth = $zero WHERE ID=1") or die('Error 125');
    }
    else if($datenow == "Jal.01" || $datenow == "Aug.01" || $datenow == "Sep.01" || $datenow == "Oct.01" || $datenow == "Nov.01" || $datenow == "Dec.01")
    {
      $zero = 0.00;
      $insert = mysqli_query($con, "UPDATE balanceformonth set balanceformonth = $zero WHERE ID=1") or die('Error 125');
    }
  }
}

?>