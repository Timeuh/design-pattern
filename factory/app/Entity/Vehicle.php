<?php

namespace App\Entity;

interface Vehicle {
    public function getCostPerKm(): float;

    public function getFuelType(): string;
}