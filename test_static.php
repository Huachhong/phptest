<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-01-18
 * Time: 17:16
 */
class A {
    public static $val = 'Hello Word!';
    public $name = 'hong';
    public static function test()
    {
        return $name;
    }
}

echo A::test();