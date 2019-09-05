<?php
/**
 * User: chenghong.Huang
 * Email: huangchenghong@163.com
 * Date: 2018-04-03
 * Time: 20:12
 */
class Path
{
    public $dir = null;
    public function __construct($dir = null)
    {
        $this->dir = $dir;
    }

    public function run()
    {

        $files = new DirectoryIterator($this->dir);

        foreach ($files as $file) {
            echo $file . PHP_EOL;
        }
    }
}


$path = new Path(__DIR__ . DIRECTORY_SEPARATOR . 'swoole');
$path->run();