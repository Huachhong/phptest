<?php
/**
 * Created by PhpStorm.
 * User: huangchenghong
 * Date: 2022/3/28
 * Time: 14:52
 */
namespace builder;

class ConcreteBuilder extends Build {
    public $product;
    public function __construct()
    {
        $this->product = new Product();
    }
    public function buildPartA()
    {
        $this->product->setPartA('建造A部分');
    }
    public function buildPartB()
    {
        $this->product->setPartB('建造B部分');
    }

    public function getResult()
    {
        return $this->product;
    }
}