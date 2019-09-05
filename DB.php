<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/23
 * Time: 14:25
 */
class DB
{
    protected static $db;
    private function __construct()
    {

    }

    static public function getInstance()
    {
        if (self::$db) {
            return self::$db;
        } else {
            self::$db = new self();
            return self::$db;
        }
    }
}

$a = DB::getInstance();