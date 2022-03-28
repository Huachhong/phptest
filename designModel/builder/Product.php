<?php
/**
 * Created by PhpStorm.
 * User: huangchenghong
 * Date: 2022/3/28
 * Time: 14:47
 */
namespace builder;
//
class Product {
    public $partA;
    public $partB;
    public function setPartA($partA) {
        $this->partA = $partA;
    }
    public function setPartB($partB) {
        $this->partB = $partB;
    }
}