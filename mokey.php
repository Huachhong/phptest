<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/7
 * Time: 21:42
 */

/*
 * 猴子选大王
 * */
function mk($n, $m)
{
    $arr = range(1, $n);
    $i = 0;
    while(count($arr) > 1) {
        if (($i + 1) % $m == 0) {
            unset($arr[$i]);
        } else {
            array_push($arr, $arr[$i]);
            unset($arr[$i]);
        }
        $i++;
    }
    return $arr[$i];
}

echo mk(10, 3) . PHP_EOL;