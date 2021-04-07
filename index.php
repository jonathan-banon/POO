<?php
require_once 'Vehicle/Bicycle.php';
require_once 'Vehicle/Car.php';
require_once 'Vehicle/Camion.php';
require_once 'Way/MotorWay.php';
require_once 'Way/PedestrianWay.php';
require_once 'Way/ResidentialWay.php';


$motorway = new MotorWay();
$pedestrianWay= new PedestrianWay();
$residentialWay = new ResidentialWay();
$bicycle = new Bicycle('blue', 3);
$car = new Car('red', 8,'gaz');
$clio = new Car('blue', 8,'gaz');

$camion = new Camion(1, 'noir', 5, 'gaz');

$pedestrianWay->addVehicles($bicycle);
$residentialWay->addVehicles($bicycle);
var_dump($pedestrianWay->getCurrentVehicles());
var_dump($residentialWay->getCurrentVehicles());