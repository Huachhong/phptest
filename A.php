<?php
/**
 * User: chenghong.Huang
 * Email: huangchenghong@163.com
 * Date: 2018-04-02
 * Time: 20:52
 */
class A
{
    public function getName()
    {
        return 'Lisi';
    }
    protected function getId()
    {
        return '1';
    }
}

class B extends A
{
    public function getUserInfo()
    {
        echo 'hong' . parent::getId();
    }
}

$b = new B();
$b -> getId();
