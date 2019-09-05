<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/29
 * Time: 23:24
 */
function search($arr, $target)
{
    if (empty($arr)) return false;
    $low = 0;
    $hight = count($arr) - 1;
    while($low <= $hight) {
    $mid = floor(($low +$hight) / 2);
    if($arr[$mid] == $target) {return true;}
    if ($arr[$mid] > $target) {
        $hight = $mid - 1;
    } else if ($arr[$mid] < $target) {
        $low = $mid + 1;
    }
    }
    return false;
}

/*function search($arr, $target)
{
    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);
        #找到元素
        if ($arr[$mid] == $target) return $mid;
        #中元素比目标大,查找左部
        if ($arr[$mid] > $target) $high = $mid - 1;
        #重元素比目标小,查找右部
        if ($arr[$mid] < $target) $low = $mid + 1;
    }
}*/
$arr = [1,2,3,4,5,6];
echo search($arr, 2) . PHP_EOL;