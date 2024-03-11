<?php

namespace App\Factory;

use App\Entity\Bicycle;
use App\Entity\Car;
use App\Entity\Truck;
use App\Entity\VehicleType;
use Exception;

class VehicleFactory {
    public function create(VehicleType $type, float $costPerKm, string $fuelType) {
        switch ($type) {
            case VehicleType::TRUCK:
                return new Truck($costPerKm, $fuelType);
            case VehicleType::CAR:
                return new Car($costPerKm, $fuelType);
            case VehicleType::BICYCLE:
                return new Bicycle($costPerKm, $fuelType);
            default:
                throw new Exception('Spécifiez un type de véhicule valide');
        }
    }

    public function createByDistanceAndWeight(int $distance, int $weight, float $costPerKm, string $fuelType) {
        if ($distance < 20 && $weight < 20) {
            return new Bicycle($costPerKm, $fuelType);
        }

        if ($weight > 200) {
            return new Truck($costPerKm, $fuelType);
        }

        return new Car($costPerKm, $fuelType);
    }
}