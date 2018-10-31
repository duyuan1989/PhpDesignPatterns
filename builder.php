<?php
namespace Patterns\Builder;

require './vendor/autoload.php';

/**
 * Class Index
 * @package patterns\Builder  建造者模式测试
 */
 class Index {
 	public static function run() {

        $truckBuilder = new TruckBuilder();
        
        $newVehicle = (new Director())->build($truckBuilder);


        echo '<pre>';
        var_dump($newVehicle);
//        print_r($newVehicle instanceof Parts\Truck);
        $newVehicle->getAttr();
 	}

 }

 Index::run();

