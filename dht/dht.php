<?php

class DHT
{
    public $link='';

    public function __construct($temperature, $humidity)
    {
        $this->storeInDB($temperature, $humidity);
    }
    
    private function storeInDB($temperature, $humidity)
    {
        include '../connected/conn.php';

        $query = "UPDATE  dht11 set humidity='".$humidity."', temperature='".$temperature."' WHERE ID=1";
        $result = mysqli_query($con,$query) or die('Errant query:  '.$query);
    }
}
if($_GET['temperature'] != '' and  $_GET['humidity'] != '')
{$dht11 = new DHT($_GET['temperature'],$_GET['humidity']);}

?>