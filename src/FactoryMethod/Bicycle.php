<?php

namespace Patterns\FactoryMethod;

class Bicycle implements VehicleInterface
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