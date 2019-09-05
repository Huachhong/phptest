<?php
/**
 * User: chenghong.Huang
 * Email: huangchenghong@163.com
 * Date: 2018-04-03
 * Time: 19:29
 */
namespace Swoole\Library\Common;

class Factory
{
    public static $instance = array();

    public static function getInstance($className, $parameter = null)
    {
        $keyName = $className;
        if (isset(self::$instance[$keyName])) {
            return self::$instance[$keyName];
        }

        //判断类是否存在
        if (! class_exists($className)) {
            throw new \Exception($className . ' no found,please make sure class exist');
        }

        if (!empty($parameter)) {
            self::$instance[$keyName] = new $className($parameter);
        } else {
            self::$instance[$keyName] = new $className();
        }

        return self::$instance[$keyName];
    }
}

