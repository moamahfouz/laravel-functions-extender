<?php

namespace Moamahfouz\LaravelFunctionsExtender;

use Carbon\Carbon;

class LaravelFunctionsExtender
{

    /**
     * @var array $MONTHS
     * This array is used to store month
     */
    const MONTHS = [
        '01' => 'يناير',
        '02' => 'فبراير',
        '03' => 'مارس',
        '04' => 'ابريل',
        '05' => 'مايو',
        '06' => 'يونيو',
        '07' => 'يوليو',
        '08' => 'اغسطس',
        '09' => 'سبتمبر',
        '10' => 'اكتوبر',
        '11' => 'نوفمبر',
        '12' => 'ديسمبر',
    ];

    public function formatDateToArabic($date): string
    {

        $date = explode('-', $date);
        $year = $date[0];
        $month = $date[1];
        $day = $date[2];

        return $day . ' ' . self::MONTHS[$month] . ' ' . $year;
    }


    public function formatDateTimeToArabic($dateTime): string
    {
        $carbonDate = Carbon::parse($dateTime);

        $day = $carbonDate->day;
        $month = self::MONTHS[$carbonDate->month];
        $year = $carbonDate->year;
        $time = $carbonDate->format('H:i:s');

        return "{$day} {$month} {$year} {$time}";
    }

    public function formatDateTimeToArabicWithAmPm($dateTime): string
    {
        $carbonDate = Carbon::parse($dateTime);

        $day = $carbonDate->day;
        $month = self::MONTHS[$carbonDate->month];
        $year = $carbonDate->year;
        $time = $carbonDate->format('H:i:s');
        $am_pm = $carbonDate->format('a');
        $am_pm = $am_pm == 'am' ? 'صباحاً' : 'مساءً';

        return "{$day} {$month} {$year} {$time} {$am_pm}";
    }


}
