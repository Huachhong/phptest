<?php
/**
 * User: chenghong.Huang
 * Email: huangchenghong@163.com
 * Date: 2018-02-27
 * Time: 16:17
 */
abstract class User
{
    public $id;
    public $name;
    public $userInfo;
    abstract public function getName();
    abstract public function getInfo();
}

class Teacher extends User{
    public function __construct($data = array())
    {
        $this->id = isset($data['id']) ? $data['id'] : 0;
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->userInfo = $data;
    }
    public function getName()
    {
        // TODO: Implement getName() method.
        return $this->name;
    }
    public function getInfo()
    {
        // TODO: Implement getInfo() method.
        return $this->userInfo;
    }
}

$teacher = new Teacher(array('id' => 1, 'name' => 'Li nan'));
echo $teacher->name . PHP_EOL;



