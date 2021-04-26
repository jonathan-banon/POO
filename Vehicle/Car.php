<?php
require_once 'Vehicle.php';
 class Car extends Vehicle implements LightableInterface
{
    public const ALLOWED_ENERGIES = [
     'fuel',
     'electric',
 ];
     private string $energy;
     private int $energyLevel;
     private bool $hasParkBrake = true;

     public function __construct(string $color, int $nbSeats, string $energy)
     {
         parent::__construct($color, $nbSeats);
         $this->setEnergy($energy);
     }

     public function switchOn(){
         return true;
     }
     public function switchOff(){
         return false;
     }

     public function forward(): string
     {
         if($this->getParkBrake()) {
             throw new Exception("Park brake on !!");
         }
         $this->currentSpeed = 15;
         return "Go !";
     }

    public function setParkBrake($hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

     public function getParkBrake(): bool
     {
         return $this->hasParkBrake;
     }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}