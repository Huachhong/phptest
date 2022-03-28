<?php
/**
 * Created by PhpStorm.
 * User: huangchenghong
 * Date: 2022/3/28
 * Time: 16:33
 */

use builder\ConcreteBuilder;
use builder\Director;
spl_autoload_register(function ($class_name) {
    //echo $class_name . "\n";
    $class_name = str_replace('\\', '/', $class_name);
    require_once $class_name . '.php';

});

/*工厂方法模式*/
echo '##########工厂方法模式' . PHP_EOL;
$product1 = (new \factoryMethod\ConcreteProduct1())->show();
/*建造模式*/
echo '##########建造模式' . PHP_EOL;
$build = new ConcreteBuilder();
$director = new Director($build);
var_dump($build->getResult());
/*建造模式*/
