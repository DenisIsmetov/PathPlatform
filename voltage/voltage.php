<?php

class Voltage
{
    public $link='';

    public function __construct($voltage)
    {
        $this->storeInDB($voltage);
    }
    
    private function storeInDB($voltage)
    {
        include '../connected/conn.php';
        
        $query = "UPDATE voltage set voltage='".$voltage."' WHERE id=1";
        $result = mysqli_query($con,$query) or die('Errant query:  '.$query);
        $this->VoltageAllMain();
    }

    private function VoltageAllMain()
    {
        include 'voltageformonthreal.php';
        include '../power/powerformonthreal.php';
        include '../kilowatthours/kilowatthoursformouthreal.php';
        include '../balance/balanceformouthreal.php';
        include '../joule/jouleformonthreal.php';

        $voltageall = new VoltageMain;
        $voltageall->VoltageMonth();
        $voltageall->VoltageForDay();

        $balance = new BalanceForMonthReal;
        $balance->BalanceMonth();

        $power = new Power;
        $power->VoltageSumToPowerMonth();
        $power->VoltageToSumPowerDay();

        $kilowatthours = new KiloWattHours;
        $kilowatthours->KiloWattHoursDay();
        $kilowatthours->KiloWattHoursMonth();

        $joule = new JouleForMonth;
        $joule->PowerMonth();
    }
}

if($_GET['voltage'] != ''){$voltage= new Voltage($_GET['voltage']);}

?>