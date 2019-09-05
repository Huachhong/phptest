<?php
/**
 * User: chenghong.Huang
 * Email: huangchenghong@163.com
 * Date: 2018-02-27
 * Time: 11:20
 * 设计模式  委托模式
 */
class Brank {

    protected $info = array();

    public function undateBrankInfo($type, $money)
    {
        $this->info[$type] = $money;
    }

    public function brankWithDraw($brankType)
    {
        $brank = new $brankType;
        return $brank->brankMain($this->info);
    }
}


class brankDeposit {
    public function brankMain($data)
    {
        return $data['brankDeposit'];
    }
}



