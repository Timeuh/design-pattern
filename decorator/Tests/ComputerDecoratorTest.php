<?php

namespace Test;

use App\GPU;
use App\OLEDScreen;
use PHPUnit\Framework\TestCase;

use App\Laptop;

class ComputerDecoratorTest extends TestCase
{
    public function testBasicLaptop()
    {
        $laptop = new Laptop();

        $this->assertSame(400, $laptop->getPrice());
        $this->assertSame("A laptop computer", $laptop->getDescription());
    }

    public function testLaptopWithGPU()
    {
        $laptop = new Laptop();
        $laptopWithGPU = new GPU($laptop);

        $this->assertSame(600, $laptopWithGPU->getPrice());
        $this->assertSame("A laptop computer, with a GPU", $laptopWithGPU->getDescription());
    }

    public function testLaptopWithOLEDScreen()
    {
        $laptop = new Laptop();
        $laptopWithOLEDScreen = new OLEDScreen($laptop);

        $this->assertSame(700, $laptopWithOLEDScreen->getPrice());
        $this->assertSame("A laptop computer, with an OLED screen", $laptopWithOLEDScreen->getDescription());
    }

    public function testLaptopWithGPUWithOLEDWScreen()
    {
        $laptop = new Laptop();
        $laptopWithOLEDScreen = new OLEDScreen($laptop);
        $laptopWithOLEDScreenAndGPU = new GPU($laptopWithOLEDScreen);

        $this->assertSame(900, $laptopWithOLEDScreenAndGPU->getPrice());
        $this->assertSame("A laptop computer, with an OLED screen, with a GPU", $laptopWithOLEDScreenAndGPU->getDescription());
    }
}