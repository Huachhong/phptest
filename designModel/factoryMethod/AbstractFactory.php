<?php
/**
 * Created by PhpStorm.
 * User: huangchenghong
 * Date: 2022/3/28
 * Time: 17:43
 */
namespace factoryMethod;

//抽象工厂

interface AbstractFactory {
    public function newProduct();
}