<?php

namespace Rafaelneris\ObjectCalisthenics\Case2;

use DateTime;

class Birthday
{
    const OUTPUT_DATE_FORMAT = 'Y-m-d';

    private DateTime $dateTime;
    private int $day;
    private int $month;
    private int $year;

    public function __construct(string $birthday)
    {
        $this->day = (int)$this->dateTime->format('d');
        $this->month = (int)$this->dateTime->format('m');
        $this->year = (int)$this->dateTime->format('Y');
        $format = $this->getDateFormat($birthday);
        $dateTime = DateTime::createFromFormat($format, $birthday);
        if ($dateTime) {
            $this->dateTime = $dateTime;
        }

        $this->validateBirthdayDate();
    }

    private function getDateFormat($birthDay): string
    {
        if (str_contains($birthDay, "/")) {
            return "d/m/Y";
        }
        return "Y-m-d";
    }

    public function format($dateFormat = self::OUTPUT_DATE_FORMAT): string
    {
        return $this->dateTime->format($dateFormat);
    }

    public function validateBirthdayDate(): void
    {
        $currentYear = getdate(time())['year'];

        if ($this->year > $currentYear || (
                $this->year + 130 < $currentYear) || $this->month > 12) {
            throw new InvalidBirthdayException();
        }
    }
}