<?php

namespace App\Repositories\Mongo;

use App\Repositories\SumOfTwoInterface;
use App\SumOfTwo;

class SumOfTwoRepository implements SumOfTwoInterface
{
    public function all()
    {
        return SumOfTwo::all();
    }
}
