<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/7
 * Time: 15:12
 */
//echo $_SERVER['PHP_SELF'] . PHP_EOL;

//echo 'file' . __FILE__ . PHP_EOL;
#header('content-type:text/html;charset=utf-8');
#echo 'false:' . empty(false) . PHP_EOL;
#echo '"false"' . empty('false') . PHP_EOL;
#echo '0:' . empty(0) . PHP_EOL;
#echo '0.00:' . empty(0.00) . PHP_EOL;
#echo '"0.0"' . empty('0.0') . PHP_EOL;
#echo ':' . empty('') . PHP_EOL;
#echo '"0":' . empty('0') . PHP_EOL;
#echo 'array:' . empty(array()) . PHP_EOL;
#echo 'NULL:' . empty(NULL) . PHP_EOL;
#echo 'null:' . empty(null) . PHP_EOL;
#$a = 'abgckg';
#echo $a{0} . PHP_EOL . substr($a, 0, 1) . PHP_EOL . $a[0] . PHP_EOL;
//for ($i='a'; $i <='z' ; $i++) {
//   echo $i.'--' . PHP_EOL;
//}
//$arr = null;
//foreach($arr as $key => $val) {
//    echo $key . '=>' . $val;
//}
$i = 5;
echo --$i . PHP_EOL;
