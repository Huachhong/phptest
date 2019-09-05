<?php
$arr = [1, 3, 56, 10,10];

foreach($arr as &$val) {
    echo $val . PHP_EOL;
}
