<?php

$str = file_get_contents('text.json');
$arr = json_decode($str , true);
var_dump($arr);
