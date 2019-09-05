<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/7
 * Time: 15:57
 */
$exchangeName = 'demo';
$queueName = 'hello_2';
$routeKey = 'hello';
$connection = new AMQPConnection(array('host' => '127.0.0.1', 'port' => '5672', 'vhost' => '/', 'login' => 'guest', 'password' => 'guest'));
$connection->connect() or die("Cannot connect to the broker!\n");
$channel = new AMQPChannel($connection);
$exchange = new AMQPExchange($channel);
$exchange->setName($exchangeName);
$exchange->setType(AMQP_EX_TYPE_DIRECT);
$exchange->declareExchange();
$queue = new AMQPQueue($channel);
$queue->setName($queueName);
$queue->declareQueue();
$queue->bind($exchangeName, $routeKey);
var_dump('[*] Waiting for messages. To exit press CTRL+C');
while (TRUE) {
    $queue->consume('callback');
}
$connection->disconnect();
function callback($envelope, $queue) {
    $msg = $envelope->getBody();
    var_dump(" [x] Received:" . $msg);
    $queue->nack($envelope->getDeliveryTag());
}