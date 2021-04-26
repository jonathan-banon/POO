<?php
require_once 'Vehicle/Bicycle.php';
require_once 'Vehicle/Car.php';
require_once 'Vehicle/Camion.php';
require_once 'Way/MotorWay.php';
require_once 'Way/PedestrianWay.php';
require_once 'Way/ResidentialWay.php';



$clio = new Car('blue', 8,'gaz');


try {
    $clio->forward();
} catch (Exception $e) {
    $clio->setParkBrake(false);
} finally {
    echo 'Ma voiture roule comme un donut';
}
