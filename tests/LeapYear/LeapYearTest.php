<?php
declare(strict_types=1);

namespace Tests\LeapYear;


use App\LeapYear\Year;
use PHPUnit\Framework\TestCase;

class LeapYearTest extends TestCase
{
    /**
     * @dataProvider normalYearProvider
     * @param Year $year
     */
    public function test_平年(Year $year): void
    {
        self::assertFalse($year->isLeap());
    }

    public function normalYearProvider(): \Generator
    {
        yield '4の倍数じゃない場合は平年' => [new Year(2021)];
        yield '100の倍数は平年' => [new Year(1900)];
    }

    /**
     * @dataProvider leapYearProvider
     * @param Year $year
     */
    public function test_うるう年(Year $year): void
    {
        self::assertTrue($year->isLeap());
    }

    public function leapYearProvider(): \Generator
    {
        yield '4の倍数はうるう年' => [new Year(1996)];
        yield '400の倍数はうるう年' => [new Year(2000)];
    }


}
