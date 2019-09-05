<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/2
 * Time: 22:25
 * 算法练习
 */

//显示
function display($arr)
{
    if (is_string($arr)) {
        echo $arr . PHP_EOL;
        return;
    }

    for ($i = 0 ;$i < count($arr) ; $i++)
        echo $arr[$i] . '  ';
    echo PHP_EOL;
    return;

}
function msectime() {
    return microtime(true);
}
//创建随机数组
function createArr($len)
{
    $arr = array();
    for ($i = 0 ; $i < $len; $i++)
        $arr[] = rand(1, 500);
    return $arr;
}
//冒泡排序
function bubble_sort($arr)
{
    if (count($arr) <= 1) return $arr;
    $len = count($arr);
    $tem = '';
    for ($i = 0; $i < $len; $i++) {
        for ($j = 0; $j < $len - 1 -$i; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    $tem = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $tem;
                }
        }
    }
    return $arr;
}

/*
 * 快速排序
 * 最好时间复杂度O(nlogn)，最差O(n^2)
 *
 * */
function quicksort($arr)
{
    if (! isset($arr[0])) return $arr;
    $leftarr = array();
    $rightarr = array();
    $mid = $arr[0];
    foreach ($arr as $v) {
        if ($mid < $v) {
            $rightarr[] = $v;
        }
        if ($mid > $v) {
            $leftarr[] = $v;
        }
    }

    $leftarr = quicksort($leftarr);
    $leftarr[] = $mid;
    $rightarr = quicksort($rightarr);
    return array_merge($leftarr, $rightarr);
}

/*
 * 选择排序
 * */
function selectsort($arr)
{
    if (count($arr) < 2) return $arr;
    $len = count($arr);
    //实现思路 双重循环完成，外层控制轮数，当前的最小值。内层 控制的比较次数，$i 当前最小值的位置， 需要参与比较的元素
    for($i = 0; $i < $len - 1 ; $i++) {
        //先假设最小的值的位置
        $p = $i;
        //$j 当前都需要和哪些元素比较，$i 后边的
        for ($j = $i + 1 ; $j < $len ; $j++) {
           if ($arr[$p] > $arr[$j]) {
               //比较，发现更小的,记录下最小值的位置；并且在下次比较时，应该采用已知的最小值进行比较
               $p = $j;
           }
        }
        //已经确定了当前的最小值的位置，保存到$p中。如果发现 最小值的位置与当前假设的位置$i不同，则位置互换即可
        if ($p != $i) {
            $tem = $arr[$p];
            $arr[$p] = $arr[$i];
            $arr[$i] = $tem;
        }
    }
    return $arr;
}


//$arr = array(20,10, 2, 11, 7, 19, 29, 15, 3, 8);
$arr = createArr(100);
display($arr);
//$arr = selectsort($arr);
$arr = quicksort($arr);
display($arr);
