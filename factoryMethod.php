<?php
namespace Patterns\FactoryMethod;

require './vendor/autoload.php';

/**
 * Class Index
 * @package patterns\Builder  工厂方法模式测试
 */
class Index {
    public static function run() {


        $factory = new GermanFactory();
        $result = $factory->create(FactoryMethod::FAST);
        echo '<pre/>';
        echo  $result->getColor().PHP_EOL;
        var_dump($result);
        var_dump($result instanceof Bicycle);
    }

}

Index::run();