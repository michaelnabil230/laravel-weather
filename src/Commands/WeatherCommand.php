<?php

namespace MichaelNabil230\Weather\Commands;

use Exception;
use Illuminate\Console\Command;
use MichaelNabil230\Weather\Weather;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'weather:current', description: 'Get current weather by location')]
class WeatherCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    public $signature = 'weather:current {latitude} {longitude}';

    /**
     * The console command description.
     *
     * @var string
     */
    public $description = 'Get current weather by location';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->comment('Starting get the weather...');

        $latitude = (float) $this->argument('latitude');
        $longitude = (float) $this->argument('longitude');

        try {
            $weather = Weather::location($latitude, $longitude)
                ->current()
                ->get();

            if ($weather === null) {
                $this->error('Weather is failed.');

                return;
            }

            $this->comment("Today temperature is: {$weather->current_weather->temperature}.");
        } catch (Exception $exception) {
            $this->error("Weather is failed because: {$exception->getMessage()}.");
        }
    }
}
