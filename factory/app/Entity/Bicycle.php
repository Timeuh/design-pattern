<?php

namespace App\Entity;

class Bicycle implements Vehicle {
    private $costPerKm;
    private $fuelType;

    public function __construct($costPerKm, $fuelType) {
        $this->costPerKm = $costPerKm;
        $this->fuelType = $fuelType;
    }

    public function getCostPerKm(): float {
        return $this->costPerKm;
    }

    public function getFuelType(): string {
        return $this->fuelType;
    }
}