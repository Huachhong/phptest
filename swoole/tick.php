<?php
/**
 * User: chenghong.Huang
 * Email: huangchenghong@163.com
 * Date: 2018-03-30
 * Time: 15:36
 */
swoole_timer_tick(1000, function () {
    echo date('Y-m-d H:i:s') . PHP_EOL;
});

