<?php
namespace Patterns\Builder\Parts;

/**
 * Class Truck
 * @package DesignPatterns\Creational\Builder\Parts 卡车类
 */
class Truck extends Vehicle
{
    public function getAttr(){
        $this->getPart();
    }


}