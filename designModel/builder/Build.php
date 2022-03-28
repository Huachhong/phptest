<?php
/**
 * Created by PhpStorm.
 * User: huangchenghong
 * Date: 2022/3/28
 * Time: 14:48
 */
namespace builder;

abstract class Build {
    public function buildPartA(){}
    public function buildPartB(){}
    public function getResult(){}
}