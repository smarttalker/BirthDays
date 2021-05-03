<?php


namespace Smarttalker\Dates;


class BirthDays
{
    private $birthDate;
    private $todayDate;

    public function __construct($birthDate)
    {
        $this->birthDate = $birthDate;
        $this->todayDate = date('Y-m-d');
    }

    public function findTotalDays()
    {
        $totalSecs = strtotime($this->todayDate) - strtotime($this->birthDate);
        return floor($totalSecs / 3600 / 24);
    }

}