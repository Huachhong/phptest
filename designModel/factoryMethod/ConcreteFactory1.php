<?php
/**
 * Created by PhpStorm.
 * User: huangchenghong
 * Date: 2022/3/28
 * Time: 18:04
 */
namespace factoryMethod;

use factoryMethod\AbstractFactory;

class ConcreteFactory1 implements AbstractFactory {
    public function newProduct()
    {
        return new ConcreteProduct1();
    }
}