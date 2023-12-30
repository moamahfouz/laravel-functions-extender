<?php

namespace Moamahfouz\LaravelFunctionsExtender;

use Illuminate\Support\ServiceProvider;

class LaravelFunctionsExtenderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerHelpers();
    }

    public function register()
    {
        $this->app->singleton('LaravelExtender', function () {
            return new LaravelFunctionsExtender();
        });
    }


    protected function registerHelpers()
    {
        if (file_exists($file = __DIR__ . '/helpers.php')) {
            require $file;
        }
    }


}