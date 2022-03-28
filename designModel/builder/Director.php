<?php
/**
 * Created by PhpStorm.
 * User: huangchenghong
 * Date: 2022/3/28
 * Time: 14:51
 */
namespace builder;

class Director {
    function __construct(Build $build)
    {
        $build->buildPartA();
        $build->buildPartB();
    }
}
