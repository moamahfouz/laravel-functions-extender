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

    public function testFormatCreatedAtDateTimeToArabic()
    {
        $dateTime = '2023-12-25 12:34:56';
        $expectedResult = '25 ديسمبر 2023 12:34:56';

        $result = $this->extender->formatCreatedAtDateTimeToArabic($dateTime);

        $this->assertEquals($expectedResult, $result);
    }

}
