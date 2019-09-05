<?php
/**
 * User: chenghong.Huang
 * Email: huangchenghong@163.com
 * Date: 2018-04-08
 * Time: 15:40
 */
include 'config.php';

class Consum
{
    public static $routingKey;
    public static $exChangeName;
    public static $queueName;


    public static function run()
    {
        self::$exChangeName = 'hello';
        self::$routingKey   = 'hello';
        self::$queueName    = 'hello';

        $mq_args = include 'config.php';

        $connection = new AMQPConnection($mq_args);

        if (! $connection->connect()) {
            exit('connect MQ failed!');
        }
        $channel  = new AMQPChannel($connection);
        $channel->setPrefetchCount(1);
        $exChange = new AMQPExchange($channel);
        $exChange->setName(self::$exChangeName);
        $exChange->declareExchange();

        $queue    = new AMQPQueue($channel);
        $queue->setName(self::$queueName);;
        $queue->declareQueue();
        $queue->bind(self::$exChangeName, self::$routingKey);
        while (true) {
            $queue->consume(function ($envelop, $queue) {
                $msg = $envelop->getBody();
                echo '#########################' . PHP_EOL;
                echo $msg . PHP_EOL;
                $queue->ack($envelop->getDeliveryTag());
            });

        }

        $connection->disconnect();

    }

    public function operation($envelop, $queue)
    {
        $msg = $envelop->getBody();
        echo '#########################' . PHP_EOL;
        echo $msg . PHP_EOL;
        echo '#########################' . PHP_EOL;
    }
}

Consum::run();