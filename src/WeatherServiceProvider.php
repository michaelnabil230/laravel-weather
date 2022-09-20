<?php

namespace MichaelNabil230\Weather;

use MichaelNabil230\Weather\Commands\WeatherCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class WeatherServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-weather')
            ->hasConfigFile()
            ->hasCommand(WeatherCommand::class);
    }
}
