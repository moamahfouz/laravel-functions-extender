<?php

namespace Moamahfouz\LaravelFunctionsExtender;

use Carbon\Carbon;

class LaravelFunctionsExtender
{

    function formatCreatedAtDateTimeToArabic($dateTime): string
    {
        $months = [
            1 => 'يناير',
            2 => 'فبراير',
            3 => 'مارس',
            4 => 'أبريل',
            5 => 'مايو',
            6 => 'يونيو',
            7 => 'يوليو',
            8 => 'أغسطس',
            9 => 'سبتمبر',
            10 => 'أكتوبر',
            11 => 'نوفمبر',
            12 => 'ديسمبر',
        ];

        $carbonDate = Carbon::parse($dateTime);

        $day = $carbonDate->day;
        $month = $months[$carbonDate->month];
        $year = $carbonDate->year;
        $time = $carbonDate->format('H:i:s');

        return "{$day} {$month} {$year} {$time}";
    }

}
