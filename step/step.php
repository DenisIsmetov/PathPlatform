<?php

class Step
{
    public $link='';

    public function __construct($step)
    {
     $this->storeInDB($step);
    }

    
    private function storeInDB($step)
    {
     include '../connected/conn.php';

     $query = "UPDATE step set step='".$step."' WHERE id=1";
     $result = mysqli_query($con,$query) or die('Errant query:  '.$query);
     $this->StepAll();
    }

    private function StepAll()
    {
     include 'stepformonthreal.php';

     $stepall = new StepForAll;
     $stepall->StepForMonth();
     $stepall->StepForDay();
    }
    
}

if($_GET['step'] != ''){$step= new Step($_GET['step']);}
   
?>