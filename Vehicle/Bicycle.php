<?php
require_once 'Vehicle.php';
class Bicycle extends Vehicle implements LightableInterface
{
    private int $maxSpeed = 50;

    public function switchOn()
    {
        if($this->getCurrentSpeed() > 10) {
            return true;
        }
    }

    public function switchOff()
    {
        return false;
    }
}