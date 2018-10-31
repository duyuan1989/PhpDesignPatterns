<?php

namespace Patterns\FactoryMethod;

interface VehicleInterface
{
    public function setColor(string $rgb);
    public function getColor();
}