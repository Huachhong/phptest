<?php
/**
 * Created by PhpStorm.
 * User: huangchenghong
 * Date: 2022/3/28
 * Time: 18:07
 */
namespace factoryMethod;
class ConcreteProduct1 implements AbstractProduct {
    public function show()
    {
        echo "生产产品1" . PHP_EOL;
    }
}