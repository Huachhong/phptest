<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/24
 * Time: 23:08
 */
//二分查找法

function dichotomy_search($arr, $target)
{
    $low = 0;
    $hight = count($arr) - 1;

    while ($low < $hight) {
        $mid = floor(($low + $hight) / 2);

        if ($arr[$mid] == $target) return true;
        if ($arr[$mid] > $target)
            $hight = $mid - 1;
        if ($arr[$mid] < $target)
            $low = $mid + 1;
    }
    return false;
}

array_intersect();