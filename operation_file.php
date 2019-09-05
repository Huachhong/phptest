<?php
$start_time = microtime(true);
$fd = fopen('hong.txt', 'r+');

if (flock($fd, LOCK_EX)) {
   fwrite($fd, "write something here\n");
   flock($fd, LOCK_UN);
} else {
   echo "文件正在被其他进程占用" . PHP_EOL;
}

while(! feof($fd)) {
    echo fgets($fd) . PHP_EOL;
}
fclose($fd);
echo microtime(true) . PHP_EOL;
