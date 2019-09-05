<?php
/**
 * User: chenghong.Huang
 * Email: huangchenghong@163.com
 * Date: 2018-03-29
 * Time: 16:32
 */
class tcpServer
{
    private $serv;
    public function __construct()
    {
        $this->serv = new swoole_server('0.0.0.0', 9501, SWOOLE_PROCESS, SWOOLE_SOCK_TCP);
        $this->serv->set(array('worker_num' => 4, 'task_worker_num' => 4));

        $this->serv->on('connect', array($this, 'onconnect'));
        $this->serv->on('receive', array($this, 'onreceive'));
        $this->serv->on('close', array($this, 'onclose'));
        $this->serv->on('task', array($this, 'ontask'));
        $this->serv->on('finish', array($this, 'onfinish'));
        $this->serv->on('workerstart', array($this, 'onworkerstart'));
    }

    public function onstart($serv)
    {
        echo 'tcp server start' . PHP_EOL;
    }

    public function onworkerstart($serv, $worker_id)
    {
        echo 'worker start :' . $worker_id . PHP_EOL;
        if ($worker_id == 0) {
                $this->timers();
            };
    }
    public function onconnect($serv, $fd)
    {
        echo $fd . 'client connect success!' . PHP_EOL;
        $serv->send($fd, $fd);
    }

    public function onreceive(swoole_server $serv, $fd, $from_id, $data)
    {
        echo 'from client message:' . $data . PHP_EOL;
/*        $arr = implode($data, ',');
        $to_fd = $arr[0];
        $content = $arr[1];*/
        
        $data = array('fd' => $fd, 'content' => $data);
        $serv->task(json_encode($data));

    }

    public function onclose($serv, $fd)
    {
        echo $fd . ' close' . PHP_EOL;
    }

    public function ontask($serv, $task_id, $from_id, $data)
    {
        $arr = json_decode($data, true);
        $fd = $arr['fd'];
        $content = $arr['content'];
        echo 'task content :' . $content . PHP_EOL;
        $this->serv->send($fd, date('Y-m-d H:i:s') . ' your job is handling');
        return $data;
    }

    public function onfinish($serv, $task_id, $data)
    {
        echo 'finish content:' . $data . PHP_EOL;
    }

    public function timers()
    {
        echo 'run to ticker' . PHP_EOL;
        swoole_timer_tick(1000, function($id) {
            echo 'ticker working :' . date('Y-m-d H:i:s') . PHP_EOL;
        });
    }

    public function run()
    {
        $this->serv->start();
    }

}
$serv = new tcpServer();
$serv->run();