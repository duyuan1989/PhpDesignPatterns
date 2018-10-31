<?php

namespace Patterns\Builder\Parts;
/**
 * Class Engine
 * @package patterns\Builder\Parts 车门类
 */
class Door
{
    public function __call($name, $args){
        echo __CLASS__ . ' now todo:'.$args[0].'...<br/>';

    }

}