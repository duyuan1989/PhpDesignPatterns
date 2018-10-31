<?php

namespace Patterns\FactoryMethod;

class CarFerrari implements VehicleInterface
{
    /**
     * @var string
     */
    private $color;

    public function setColor(string $rgb)
    {
        $this->color = $rgb;
    }
    public function getColor(){
        return  $this->color;
    }
}