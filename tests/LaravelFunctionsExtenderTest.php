<?php

namespace Moamahfouz\LaravelFunctionsExtender\Tests;

use Moamahfouz\LaravelFunctionsExtender\LaravelFunctionsExtender;
use PHPUnit\Framework\TestCase;

class LaravelFunctionsExtenderTest extends TestCase
{
    /** @var LaravelFunctionsExtender */
    private LaravelFunctionsExtender $extender;

    protected function setUp(): void
    {
        parent::setUp();

        $this->extender = new LaravelFunctionsExtender();
    }

    public function testFormatDateToArabic()
    {
        $date = '2023-12-28';
        $expectedResult = '28 ديسمبر 2023';

        $result = $this->extender->formatDateToArabic($date);

        $this->assertEquals($expectedResult, $result);
    }

    public function testFormatDateTimeToArabic()
    {
        $dateTime = '2023-12-28 12:34:56';
        $expectedResult = '28 ديسمبر 2023 12:34:56';

        $result = $this->extender->formatDateTimeToArabic($dateTime);

        $this->assertEquals($expectedResult, $result);
    }

    public function testFormatDateTimeToArabicWithAmPm()
    {
        $dateTime = '2023-12-28 12:34:56';
        $expectedResult = '28 ديسمبر 2023 12:34:56 صباحاً';


        $result = $this->extender->formatDateTimeToArabicWithAmPm($dateTime);

        $this->assertEquals($expectedResult, $result);
    }

}
