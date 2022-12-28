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

function QuickSort2($arr) {
    $len = count($arr);
    if ($len <= 1) return $arr;
    $low = [];
    $up  = [];
    $mid = $arr[0];
    for ($i = 1; $i < $len; $i++) {
        if ($arr[$i] > $mid) {
            $up[] = $arr[$i];
        } else {
            $low[] = $arr[$i];
        }
    }
    $low = QuickSort2($low);
    $up  = QuickSort2($up);
    return array_merge($low, array($mid), $up);
}

//选择排序
function selectionSort($arr) {
    $len = count($arr);
    for ($i = 0; $i < $len - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < $len; $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }
        if ($min != $i) {
            $tmp = $arr[$i];
            $arr[$i] = $arr[$min];
            $arr[$min] = $tmp;
        }
    }
    return $arr;
}

function insertSort($arr) {
    //获取数组单元个数
    $count = count($arr);
    //外层循环用于从未排序区域中取出待排序元素
    for ($i=1; $i < $count; $i++) {
        //获取当前需要插入已排序区域的元素值
        $temp = $arr[$i];
        //内层循环用于从已排序区域寻找待排序元素的插入位置
        for ($j=$i-1; $j >= 0; $j--) {
            //如果$arr[$i]比已排序区域的$arr[$j]小，就后移$arr[$j]
            if ($temp < $arr[$j]) {
                $arr[$j+1] = $arr[$j];
                $arr[$j] = $temp;
            } else {
                //如果$arr[$i]不小于$arr[$j]，则对已排序区无需再排序
                break;
            }
        }
    }
    return $arr;
}

//归并排序
function mergeSort($array) {
    $len = count($array);
    if ($len <= 1) {
        return $array;
    }
    $mid   = floor($len / 2);
    $left  = array_slice($array, 0, $mid);
    $right = array_slice($array, $mid);
    return merge(mergeSort($left), mergeSort($right));
}

function merge($arr1, $arr2) {
    $newarr = [];
    $index1 = $index2 = 0;
    $num1 = count($arr1);
    $num2 = count($arr2);
    while($index1 < $num1 && $index2 < $num2) {
        $newarr[] = $arr1[$index1] < $arr2[$index2] ? $arr1[$index1++] : $arr2[$index2++];
    }
    for ($index1; $index1 < $num1; $index1++) {
        $newarr[] = $arr1[$index1];
    }
    for ($index2; $index2 < $num2; $index2++) {
        $newarr[] = $arr2[$index2];
    }
    return $newarr;
}

$arr = [12, 34, 9, 234, 13, 87, 32, 90, 25];

//$arr = [3, 2, 4, 1];

//冒泡排序
//$arr = BubbleSort($arr);
//快速排序
//$arr = QuickSort2($arr);
//归并排序
$arr = mergeSort($arr);
echo json_encode($arr) . PHP_EOL;
