<?php

namespace App\Repositories\MySQL;

use App\Repositories\MySQL\SumOfTwoInterface;
use App\SumOfTwoMySQL;

class SumOfTwoRepository implements SumOfTwoInterface
{
    public function callProc($number)
    {

        $result = \DB::connection('mysql')->SELECT('CALL sumoftwoproc(?)', [$number]);


        if ($result[0]->result) {
            return true;
        } else {
            return false;
        }
    }
}
