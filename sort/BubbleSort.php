<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2022/4/10
 * Time: 10:45
 */

function BubbleSort($arr) {
    $len = count($arr);
    for ($i = 0; $i < $len; $i++) {
        for ($j = 0; $j < $len - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $tmp    = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $tmp;
            }
        }
        echo json_encode($arr) . PHP_EOL;
    }
    return $arr;
}

function QuickSort($arr) {
    $len = count($arr);
    if ($len <= 1) return $arr;
    $mid = $arr[0];
    //array_shift($arr);
    $low = [];
    $hight = [];
    //从$i = 1 开始，切记
    for ($i = 1; $i < $len; $i++) {
        if ($arr[$i] > $mid) {
            $hight[] = $arr[$i];
        } else {
            $low[] = $arr[$i];
        }
    }
    $low   = QuickSort($low);
    $hight = QuickSort($hight);
    return array_merge($low, array($mid), $hight);
}




$arr = [12, 34, 9, 234, 13, 87, 32, 90, 25];

//$arr = [3, 2, 4, 1];

//冒泡排序
$arr = BubbleSort($arr);
//快速排序
//$arr = QuickSort($arr);
echo json_encode($arr) . PHP_EOL;
