<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/28
 * Time: 21:39
 */

class A {
    static protected $instan;
    function __construct() {

    }
    public function getInstance () {
        if (! self::$instan instanceof self) {
            self::$instan = new self();
        }
        return self::$instan;
    }
}