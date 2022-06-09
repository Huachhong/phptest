<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/28
 * Time: 21:39
 */

class A {
    static protected $instan;
    //构造方法声明为private，防止创建对象
    private function __construct() {

    }
    public function getInstance () {
        if (! self::$instan instanceof self) {
            self::$instan = new self();
        }
        return self::$instan;
    }
    //禁止克隆
    public function __clone()
    {
        trigger_error('clone is not allowed');
    }
}