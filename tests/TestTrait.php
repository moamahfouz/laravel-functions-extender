<?php

namespace Moamahfouz\LaravelFunctionsExtender\Tests;

trait TestTrait
{

    public function dd($var)
    {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
        die();
    }

}