<?php
/**
 * User: chenghong.Huang
 * Email: huangchenghong@163.com
 * Date: 2018-03-13
 * Time: 15:46
 */
spl_autoload_register(function ($class_name) {
    //echo $class_name . "\n";
    $class_name = str_replace('\\', '/', $class_name);
    require_once $class_name . '.php';

});
//require_once './libraries/Good.php';
use libraries\Good;
$good = new Good();

echo $good->add() . "\n";