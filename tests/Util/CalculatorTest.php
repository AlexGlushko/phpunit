<?php

namespace App\Tests\Util;

use App\Util\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $result = $calculator->add(30, 12);

        $this->assertEquals(42, $result);
    }

    public function testAddWithInvalid()
    {
        $calculator = new Calculator();
        $result = $calculator->add(-20, 14);

        $this->assertEquals(-6, $result);
    }

    /**
     * @dataProvider additionProvider
     *
     * @param $a
     * @param $b
     * @param $expected
     */
    public function testAddWithDataProvider($a, $b, $expected)
    {
        $calculator = new Calculator();

        $result = $calculator->add($a, $b);

        $this->assertSame($expected, $result);
    }

    public function additionProvider()
    {
        return [
            [2, 4, 6],
            [14, 12, 26],
            [-20, 15, -5],
        ];
    }
}
