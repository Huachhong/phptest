<?php
/**
 * User: chenghong.Huang
 * Email: huangchenghong@163.com
 * Date: 2018-03-29
 * Time: 10:37
 */
$serv = new swoole_server('0.0.0.0',8088, SWOOLE_PROCESS, SWOOLE_SOCK_TCP);
$serv->on('connect', function ($serv, $fd) {
    echo 'connect success' . PHP_EOL;
});

$serv->on('receive', function ($serv, $fd,$from_id,$data) {
    var_dump($data);
});

$serv->on('close', function ($serv, $fd) {});

$serv->start();