<?php

namespace MichaelNabil230\Weather\Tests;

use MichaelNabil230\Weather\WeatherServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            WeatherServiceProvider::class,
        ];
    }
}
