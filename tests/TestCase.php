<?php

namespace MichaelNabil230\Weather\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use MichaelNabil230\Weather\WeatherServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            WeatherServiceProvider::class,
        ];
    }
}
