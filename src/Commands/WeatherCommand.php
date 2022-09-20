<?php

namespace MichaelNabil230\Weather\Commands;

use Exception;
use Illuminate\Console\Command;
use MichaelNabil230\Weather\Weather;

class WeatherCommand extends Command
{
    public $signature = 'weather:current {latitude} {longitude}';

    public $description = 'Get current weather by location';

    public function handle(): int
    {
        $this->comment('Starting get the weather...');

        $latitude = (float) $this->argument('latitude');
        $longitude = (float) $this->argument('longitude');

        try {
            $weather = (object) Weather::location($latitude, $longitude)
                ->current()
                ->get();

            $this->comment("Today temperature is:{$weather->current_weather->temperature}");
        } catch (Exception $exception) {
            $this->error("Weather is failed because: {$exception->getMessage()}.");

            return self::FAILURE;
        }

        return self::SUCCESS;
    }
}
