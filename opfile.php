<?php

$fd = fopen("hong.txt", "a+");

if (flock($fd, LOCK_EX)) {
    fwrite($fd, "hello word 1" . PHP_EOL);
    flock($fd, LOCK_UN);
}

fclose($fd);

$fd = fopen("hong.txt", "a+");

while (! feof($fd)) {
    $line = fgets($fd);
    echo $line;
}
fclose($fd);
