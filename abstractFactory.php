<?php
namespace Patterns\AbstractFactory;

require './vendor/autoload.php';

/**
 * Class Index
 * @package patterns\abstractFactory  抽象工厂测试
 */
 class Index {
 	public static function run() {
 		$factory = new HtmlFactory();
 		// var_dump($factory);
        $entity =  $factory->createText('foobar');
        print_r($entity);
        print_r($entity instanceof HtmlText);
 	}

 }

 Index::run();

