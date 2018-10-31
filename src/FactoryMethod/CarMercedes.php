<?php

namespace Patterns\FactoryMethod;

class CarMercedes implements VehicleInterface
{
    /**
     * @var string
     */
    private $color;

    public function setColor(string $rgb)
    {
        $this->color = $rgb;
    }

    public function addAMGTuning()
    {
        // 在这里做额外的调整
        $this->mark = 'AMGTuning';
    }
    public function getColor(){
        return  $this->color;
    }
}