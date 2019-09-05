<?php
/**
 * User: chenghong.Huang
 * Email: huangchenghong@163.com
 * Date: 2018-03-29
 * Time: 16:47
 */
class Client
{
    private $client;

    public function __construct() {
        $this->client = new swoole_client(SWOOLE_SOCK_TCP, SWOOLE_SOCK_ASYNC);
        $this->client->on('connect', array($this, 'onconnect'));
        $this->client->on('receive', array($this, 'onreceive'));
        $this->client->on('close', array($this, 'onclose'));
        $this->client->on('error', array($this, 'onerror'));
    }

    public function connect() {
        $fd = $this->client->connect("127.0.0.1", 9501 , 1);

        if( !$fd ) {
            echo "Error: {$this->client->errMsg}[{$this->client->errCode}]" . PHP_EOL;
        }
    }

    public function onreceive($cli, $data)
    {
        echo $data . PHP_EOL;
    }
    public function onconnect($cli)
    {
        fwrite(STDOUT, "Please input msg：");
        swoole_event_add(STDIN, function ($fp) use ($cli){
            //global $cli;
            fwrite(STDOUT, 'enter message:' . PHP_EOL);
            //输入格式：fd,内容
            $msg = trim(fgets(STDIN));
            $cli->send($msg);
        });
    }
    public function onclose($cli)
    {
        echo 'client close conection' . PHP_EOL;
    }

    public function onerror()
    {

    }
}

$client = new Client();
$client->connect();