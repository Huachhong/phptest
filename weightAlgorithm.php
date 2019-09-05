<?php
/**
 * User: chenghong.Huang
 * Email: huangchenghong@163.com
 * Date: 2018-02-10
 * Time: 11:03
 */
/*
 *权重随机算法
 * */
$arr = array(
    array('name' => 'A', 'weight' => 1), //一等奖
    array('name' => 'B', 'weight' => 2), //二等奖
    array('name' => 'C', 'weight' => 3), //三等奖
);

/*
 * 计算总权重
 * */
function sum($arr)
{
    $total = 0;
    foreach ($arr as $value) {
        $total += $value['weight'];
    }
    return $total;
}

/*
 * 方法1，放大法。时间复杂度O(1)，占用空间大
 * */
function random1($arr)
{
    $weightSum = sum($arr);
    if ($weightSum <= 0) {
        return ;
    }

    //初始化对象池， 相等于抽奖箱
    $pool = array();
    foreach ($arr as $v) {
        for ($i = 0; $i <= $v['weight']; $i++) {
            $pool[] = $v;
        }
    }
    //打乱数组，这步可有可无。因为我这里是模拟抽奖，打乱顺序
    shuffle($pool);

    //抽奖
    $randNum = rand(1, $weightSum);
    return $pool[$randNum - 1]['name']; //返回 A或B或C;
}


/*
*方法2, 区间法
 *
 * **/
function random2($arr)
{
    //计算总权重
    $weightSum = sum($arr);
    if ($weightSum <= 0) {
        return ;
    }
    /*计算区间*/
    $total = 0;
    foreach ($arr as $key => $val) {
        $total += $val['weight'];
        //计算区间范围
        $arr[$key]['range'] = $total;
    }
    /* 一等奖区间 (0,1];二等奖 (1,3];三等奖 (3,6]  */
    /*计算区间*/

    /*抽奖*/
    $randNum = rand(1, $weightSum);
    foreach ($arr as $k => $v) {
        if ($v['range'] >= $randNum) {
            return $v['name']; //返回 A或B或C;
        }
    }
    /*抽奖*/
}

/**方法3**/
function random3($arr)
{
   $weightSum = sum($arr);
   if ($weightSum <= 0) {
       return ;
   }

   $randNum = rand(1, $weightSum);
   foreach ($arr as $k => $v) {
       if ($randNum <= $v['weight']) {
           return $v['name']; //返回 A或B或C;
       }
       $randNum -=$v['weight'];
   }

}

/*for ($i = 1; $i <= 6; $i++) {
    $choosed = random1($arr);
    echo $choosed . PHP_EOL;
}*/
//$choosed = random1($arr);
//echo $choosed . PHP_EOL;
/* 下面为测试出现概率 */

$ret = array();
for ($i = 0; $i < 60000000; $i++) {
    $choosed = random3($arr);
    $ret[$choosed] = isset($ret[$choosed]) ? $ret[$choosed] + 1 : 1;
}

//计算比例
$ret_sum = array_sum($ret);
$per_arr = array();
echo '抽奖总次数：' . $ret_sum . PHP_EOL;
foreach ($ret as $k => $val) {
    $per = round($val / $ret_sum, 4) * 100;
    echo '  ' . $k . '：抽中' . $val . '次，抽中概率：' . $per . '%' . PHP_EOL;
}



