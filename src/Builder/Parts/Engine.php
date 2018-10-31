<?php

namespace Patterns\Builder\Parts;
/**
 * Class Engine
 * @package patterns\Builder\Parts 引擎类
 */
class Engine
{
    public function __call($name, $args){
        echo __CLASS__ . '  now todo:'.$args[0].'...<br/>';

    }
}