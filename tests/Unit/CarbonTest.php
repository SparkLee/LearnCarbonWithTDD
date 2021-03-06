<?php

use Carbon\Carbon;
use Tests\TestCase;

class CarbonTest extends TestCase
{
    /**
     * 两个时间相差的分钟数
     */
    public function test_diffInMinutes()
    {
        $result = Carbon::parse('2020-01-10 10:01:00')->diffInMinutes('2020-01-10 15:29:59');
        $this->assertEquals(328, $result);
    }
}
