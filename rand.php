<?php
/**
 * User: chenghong.Huang
 * Email: huangchenghong@163.com
 * Date: 2018-02-08
 * Time: 9:53
 */
/*
 *php实现随机函数，产生随机字符串
 * */
function getRandStr($str_len, $rand_str)
{
   if (empty($rand_str)) return '';
   $len = strlen($rand_str);
   $str = '';
   for($i = 0; $i < $str_len; $i++) {
       $rand = rand(0, $len - 1);
       $str .= $rand_str[$rand];
   }
   return $str;
}

$arr = 'hfewpgwgwegeHr363#5325DHJlfoweFlgfweWlfwevutpy5eppvmmegweoD';
echo getRandStr(10, $arr) . PHP_EOL;
