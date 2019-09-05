<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/1
 * Time: 15:03
 */
function read_dir($dir)
{
    $list = array();
    if (is_file($dir)) return $list[] = $dir;

    $list_dir = scandir($dir);
    foreach ($list_dir as $val) {
        if ($val != '..' && $val != '.') {
            if (is_dir($dir . '/' . $val)) {
                $list[] = read_dir($dir . '/' . $val);
            } else {
                $list[] = $dir . '/' . $val;
                //echo $dir . '/' . $val . PHP_EOL;
            }
        }
    }
}

read_dir(__DIR__);