<?php

namespace App;

abstract class LaptopDecorator implements Computer {
    public function __construct(protected Computer $laptop) {}
}