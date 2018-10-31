<?php

namespace Patterns\FactoryMethod;

abstract class FactoryMethod
{
    const CHEAP = 'cheap';
    const FAST = 'fast';

    abstract protected function createVehicle(string $type): VehicleInterface;

    public function create(string $type,string $color='BLACK'): VehicleInterface
    {
        $obj = $this->createVehicle($type);
//        $obj->setColor('black');
        $obj->setColor($color);

        return $obj;
    }
}