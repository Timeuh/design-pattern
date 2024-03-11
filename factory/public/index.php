<?php

use App\Entity\VehicleType;

require('../vendor/autoload.php');

$factory = new App\Factory\VehicleFactory();

$bicycle = $factory->create(VehicleType::BICYCLE, 0.0, 'muscle');
$car = $factory->create(VehicleType::CAR, 0.5, 'essence');
$truck = $factory->create(VehicleType::TRUCK, 2.5, 'essence');

print_r($bicycle);
print_r($car);
print_r($truck);

$vehicle = $factory->createByDistanceAndWeight(10, 15);
print_r($vehicle);