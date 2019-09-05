<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/7
 * Time: 20:32
 */
include_once 'config.php';
class Send
{
    public $eXchangeName;
    public $queueName;
    public $routingKey;

    public function __construct($config = array())
    {
        if (! is_array() || empty($config)) {
            exit('config is a array or is not empty!');
        }
        $this->eXchangeName = $config['ex_change_name'];
        $this->queueName = $config['queue_name'];
        $this->routingKey = $config['routingKey'];

        $this->connection = new AMQPConnection($config);
        if (! $this->connection->connect($this->connection)) {
            exit('connect mq failed!');
        }
        $this->channel = new AMQPChannel($this->connection);

    }

    public static function run()
    {

    }

}