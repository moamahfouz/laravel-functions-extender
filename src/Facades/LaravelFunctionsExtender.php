<?php

namespace Moamahfouz\LaravelFunctionsExtender\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelFunctionsExtender extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'LaravelFunctionsExtender';
    }
}