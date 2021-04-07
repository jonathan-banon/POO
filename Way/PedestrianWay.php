<?php
require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    private int $nbWay = 1;
    private int $maxSpeed = 10;

    public function addVehicles(Vehicle $vehicle)
    {
        if($vehicle instanceof Bicycle){
            $this->currentVehicles[] = $vehicle;
        }else{
            echo 'Forbidden !!!';
        }
    }
}