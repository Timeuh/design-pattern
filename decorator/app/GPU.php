<?php

namespace App;

use App\LaptopDecorator;

class GPU extends LaptopDecorator {
    public function __construct(Computer $laptop) {
        parent::__construct($laptop);
    }

    public function getPrice(): int {
        return $this->laptop->getPrice() + 200;
    }

    public function getDescription(): string {
        return $this->laptop->getDescription() . ", with a GPU";
    }
}