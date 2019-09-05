<?php
/**
 * User: chenghong.Huang
 * Email: huangchenghong@163.com
 * Date: 2018-02-09
 * Time: 15:19
 */
/*
 * 单链表
 * */
class Node {
    public $data;
    public $next;
    function __construct($data = '')
    {
        $this->data = $data;
        $this->next = null;
    }
}

class SignalLink
{
    public $data;
    public $next;
    public function __construct()
    {
        $this->data = '';
        $this->next = null;
    }

    /*
     *创建链表
     * */

    public function createHeadList($num)
    {
       for ($i = 0; $i < $num; $i++) {
           $node       = new Node();
           $node->data = rand(100, 1000);
           $node->next = $this->next;
           $this->next = $node;
       }
    }

    /*
     *从头部建立链表
     * */
    public function createTailList($num)
    {
        $tail = $this;
        for ($i = 0; $i < $num; $i++) {
            $node       = new Node();
            $node->data = $this->data;
            $tail->next = $node;
            $tail       = $node;
        }
        $node->next = null;
    }

    /*
     *销毁链表
     * */
    public function destroyList()
    {
        $that = $this;
        while ($that) {
            $tem = $that->next;
            unset($that);
            $that = $tem;
        }
    }
}