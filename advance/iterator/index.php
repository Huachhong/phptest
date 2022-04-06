<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2022/4/6
 * Time: 23:34
 */

/*
 * 生成器
 * */
//按需读取文件
function getChars() {
    $fp = fopen("test.txt", "rb");
    while(feof($fp) === false) {
        yield fgets($fp);
    }
    fclose($fp);
}

foreach (getChars() as $n => $val) {
    echo $n, ', ', $val;
}