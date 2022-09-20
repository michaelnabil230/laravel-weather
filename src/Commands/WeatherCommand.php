<?php

namespace MichaelNabil230\Weather\Commands;

use Illuminate\Console\Command;

class WeatherCommand extends Command
{
    public $signature = 'laravel-weather';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
