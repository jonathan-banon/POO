<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Vehicle.php';
require_once 'Camion.php';

$camion = new Camion(3, 'blue', 3, 'gaz');
var_dump($camion);