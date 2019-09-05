<?php
/**
 * User: chenghong.Huang
 * Email: huangchenghong@163.com
 * Date: 2018-04-02
 * Time: 20:15
 */
abstract class absA
{
    public $num = 10;
    public function getName(){
        echo 'hong' . PHP_EOL;
    }

    public abstract function getId();
}