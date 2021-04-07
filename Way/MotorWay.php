<?php
require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    private int $nbWay = 4;
    private int $maxSpeed = 130;
    public function addVehicles(Vehicle $vehicle)
    {
      if($vehicle instanceof Car){
          $this->currentVehicles[] = $vehicle;
      }else{
          echo 'Forbidden !!!';
      }
    }

}