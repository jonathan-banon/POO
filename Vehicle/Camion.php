<?php
require_once 'Vehicle.php';

class Camion extends Vehicle
{
    private int $maxSpeed = 130;
    protected $stock;
    private int $loading = 0;
    protected string $color;
    protected string $energy;


    public function __construct(int $stock, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->stock = $stock;
        $this->energy = $energy;

    }


        /**
         * @return int
         */
        public function getStock(): int
        {
            return $this->stock;
        }

        /**
         * @param int $stock
         */
        public function setStock(int $stock): void
        {
            $this->stock = $stock;
        }

        /**
         * @return int
         */
        public function getLoading(): int
        {
            return $this->loading;
        }

        /**
         * @param int $loading
         */
        public function setLoading(int $loading): void
        {
            $this->loading = $loading;
        }

        /**
         * @return string
         */
        public function getColor(): string
        {
            return $this->color;
        }

        /**
         * @param string $color
         */
        public function setColor(string $color): void
        {
            $this->color = $color;
        }

        /**
         * @return string
         */
        public function getEnergy(): string
        {
            return $this->energy;
        }

        /**
         * @param string $energy
         */
        public function setEnergy(string $energy): void
        {
            $this->energy = $energy;
        }
    /**
     * @return int
     */
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    /**
     * @param int $maxSpeed
     */
    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

        public function isFuelFull($energyLevel) : string
        {
           if($energyLevel < 1){
               echo 'in filling';
           }else{
               echo  'full';
           }
        }
}
