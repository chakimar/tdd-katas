<?php
declare(strict_types=1);

namespace App\LeapYear;


class Year
{
    private int $year;

    public function __construct(int $year)
    {
        $this->year = $year;
    }

    public function isLeap(): bool
    {
        return $this->year % 400 === 0
            || (
                $this->year % 4 === 0
                && $this->year % 100 !== 0
            )
            ;
    }
}
