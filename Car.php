<?php
class Car
{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeat;
    private string $energy;
    private int $energyLevel;

    public function __construct($color, $nbSeat, $energyType ){
        $this->color = $color;
        $this->nbSeat = $nbSeat;
        $this->energyType = $energyType;
    }
    public function start(){
        if ($this->energyLevel >= 0){
            return 'No fuel left....';
        }
    }
    public function forward(){
        $this->currentSpeed = 15;
        return 'GO !!!';
    }
    public function brake(): string{
        $sentence="";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
    public function getNbWeels(){
        return $this->nbWheels;
    }
    public function getCurentSpeed(){
        return $this->currentSpeed;
    }
    public function getColor(){
        return $this->color;
    }
    public function getNbSeats(){
        return $this->nbSeat;
    }
    public function getEnergy(){
        return $this->energy;
    }
    public function getEnergyLevel(){
        return $this->energyLevel;
    }
}