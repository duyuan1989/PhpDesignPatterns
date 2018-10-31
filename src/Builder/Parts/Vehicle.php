<?php

namespace Patterns\Builder\Parts;
/**
 * Class Vehicle
 * @package patterns\Builder\Parts 车辆抽象类
 */
abstract class Vehicle
{
    /**
     * @var object[]
     */
    private $data = [];

    /**
     * @param string $key
     * @param object $value
     */
    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function getPart()
    {
        foreach ($this->data as $key=>$value){
           $value->action($key);
        }
    }


}