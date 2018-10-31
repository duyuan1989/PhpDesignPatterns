<?php

namespace Patterns\FactoryMethod;

class GermanFactory extends FactoryMethod
{
    protected function createVehicle(string $type): VehicleInterface
    {
        switch ($type) {
            case parent::CHEAP:
                return new Bicycle();
            case parent::FAST:
                $carMercedes = new CarMercedes();
                //  我们可以从已知的的类中找到具体的交通工具
                $carMercedes->addAMGTuning();

                return $carMercedes;
            default:
                throw new \InvalidArgumentException("$type is not a valid vehicle");
        }
    }
}