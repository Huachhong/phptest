<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/11
 * Time: 21:07
 */
$serv = new Swoole\Http\Server('127.0.0.1', 9501);

$serv->on("start", function ($server){
    echo 'Swoole Http Server stasrt at 127.0.0.1:9501\n';
});
$serv-> on('request', function ($request, $response){
    $response->header('Content-Type', 'text/plain');
    $response->end("hello World\n");
});
