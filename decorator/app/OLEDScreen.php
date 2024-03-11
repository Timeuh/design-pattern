<?php

namespace App;

use App\LaptopDecorator;

class OLEDScreen extends LaptopDecorator {
    public function __construct(Computer $laptop) {
        parent::__construct($laptop);
    }

    public function getPrice(): int {
        return $this->laptop->getPrice() + 300;
    }

    public function getDescription(): string {
        return $this->laptop->getDescription() . ", with an OLED screen";
    }
}