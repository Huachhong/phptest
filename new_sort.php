<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/28
 * Time: 11:09
 */

//冒泡排序
function bubbleSort($arr) {
    $len = count($arr);
    if ($len <= 1) return $arr;
    $tem = '';
    for ($i = 0; $i < $len; $i++) {
        for ($j = 0; $j < $len - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j+1]) {
                $tem       = $arr[$j];
                $arr[$j]   = $arr[$j+1];
                $arr[$j+1] = $tem;
            }
        }
    }
    return $arr;
}

//快速排序
function quickSort($arr) {
    if (count($arr) <= 1) return $arr;
    $mid      = $arr[0];
    $leftArr  = array();
    $rightArr = array();
    array_shift($arr);
    foreach ($arr as $v) {
        if ($v > $mid) {
            $rightArr[] = $v;
        } else {
            $leftArr[] = $v;
        }
    }
    $leftArr = quickSort($leftArr);
    $leftArr[] = $mid;
    $rightArr= quickSort($rightArr);
    return array_merge($leftArr, $rightArr);
}

//二分查找法
function secondSeacher($arr, $target) {
    if (empty($arr)) return false;
    $low = 0;
    $hight = count($arr) - 1;
    while ($low <= $hight) {
        $mid = floor(($low + $hight) / 2);
        if ($arr[$mid] == $target) return true;
        if ($arr[$mid] > $target) {
            $hight = $mid -1;
        } else {
            $low = $mid + 1;
        }
    }
    return false;
}

$arr = array(3, 12, 5, 3, 10, 34, 7, 11, 9);
//$a = bubbleSort($arr); /*冒泡排序*/
$a = quickSort($arr);
echo secondSeacher($a, 34) . PHP_EOL;