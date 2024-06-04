<?php

namespace MichaelNabil230\Weather\Tests;

use MichaelNabil230\Weather\Weather;

class WeatherTest extends TestCase
{
    public function test_weather_current_location()
    {
        $weather = Weather::location(30.0812558, 31.2511902)
            ->current()
            ->get();

        $this->assertSame([30.0625, 31.25], [$weather->latitude, $weather->longitude]);
        $this->assertObjectHasProperty('current_weather', $weather);
    }

    public function test_weather_current_timezone()
    {
        $weather = Weather::location(30.0812558, 31.2511902)
            ->current()
            ->timezone('Africa/Cairo')
            ->get();

        $this->assertSame('Africa/Cairo', $weather->timezone);
    }

    // public function test_weather_current_past_days()
    // {
    //     $weather = Weather::location(30.0812558, 31.2511902)
    //         ->current()
    //         ->pastDays(2)
    //         ->timezone('Africa/Cairo')
    //         ->get();
    // }
}
