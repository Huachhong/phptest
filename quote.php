<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/22
 * Time: 9:57
 */
/*$ref = 0;
$row = & $ref;
foreach(array(1, 2, 3) as $row) {

}
echo $ref . PHP_EOL;  //output 3*/

//变量的引用
$a = 1;
$b = & $a;
echo 'a=' . $a . ',b=' . $b . PHP_EOL;
$b = 10;
echo 'a=' . $a . ',b=' . $b . PHP_EOL;
$a = 20;
echo 'a=' . $a . ',b=' . $b . PHP_EOL;


















