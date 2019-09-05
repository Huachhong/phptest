<?php
$date_str = isset($argv[1]) ? $argv[1] : exit;
$months_num = isset($argv[2]) ? $argv[2] : 1;

echo date('Y-m-d', strtotime($date_str . ' + ' . $months_num . 'month')) . PHP_EOL;

