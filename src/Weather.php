<?php

namespace MichaelNabil230\Weather;

use DateTime;
use DateTimeZone;
use Illuminate\Support\Facades\Http;
use InvalidArgumentException;
use MichaelNabil230\Weather\Constants\Daily;
use MichaelNabil230\Weather\Constants\Hourly;
use MichaelNabil230\Weather\Constants\Query;

class Weather
{
    use Daily, Hourly, Query;

    public function __construct(float $latitude, float $longitude)
    {
        $this->setLocation($latitude, $longitude);
        $this->setDefaultValues();
    }

    private function setLocation(float $latitude, float $longitude): self
    {
        $this->withQuery([
            'latitude' => $latitude,
            'longitude' => $longitude,
        ]);

        return $this;
    }

    private function setDefaultValues(): void
    {
        $this
            ->temperatureUnit(config()->string('weather.temperature_unit', 'celsius'))
            ->windSpeedUnit(config()->string('weather.wind_speed_unit', 'kmh'))
            ->precipitationUnit(config()->string('weather.precipitation_unit', 'mm'))
            ->timeFormat(config()->string('weather.time_format', 'iso8601'))
            ->timezone(config()->string('weather.timezone', 'GMT'));
    }

    public static function location(float $latitude, float $longitude): self
    {
        return new self($latitude, $longitude);
    }

    public function get(): ?object
    {
        return Http::get('https://api.open-meteo.com/v1/forecast', $this->query)
            ->object();
    }

    public function current(): self
    {
        $this->withQuery(['current_weather' => true]);

        return $this;
    }

    public function temperatureUnit(string $temperatureUnit): self
    {
        if (! in_array($temperatureUnit, ['celsius', 'fahrenheit'])) {
            throw new InvalidArgumentException(sprintf('The temperature unit is not support this %s unit.', $temperatureUnit));
        }

        $this->withQuery(['temperature_unit' => $temperatureUnit]);

        return $this;
    }

    public function windSpeedUnit(string $windSpeedUnit): self
    {
        if (! in_array($windSpeedUnit, ['kmh', 'ms', 'mph', 'kn'])) {
            throw new InvalidArgumentException(sprintf('The wind speed unit is not support this %s unit.', $windSpeedUnit));
        }

        $this->withQuery(['windspeed_unit' => $windSpeedUnit]);

        return $this;
    }

    public function precipitationUnit(string $precipitationUnit): self
    {
        if (! in_array($precipitationUnit, ['mm', 'inch'])) {
            throw new InvalidArgumentException(sprintf('The precipitation unit is not support this %s unit.', $precipitationUnit));
        }

        $this->withQuery(['precipitation_unit' => $precipitationUnit]);

        return $this;
    }

    public function timeFormat(string $timeFormat): self
    {
        if (! in_array($timeFormat, ['iso8601', 'unixtime'])) {
            throw new InvalidArgumentException(sprintf('The timeFormat is not support this %s unit.', $timeFormat));
        }

        $this->withQuery(['timeformat' => $timeFormat]);

        return $this;
    }

    public function date(DateTime $startDate, DateTime $endDate): self
    {
        $this->withQuery([
            'start_date' => $startDate->format('Y-m-d'),
            'end_date' => $endDate->format('Y-m-d'),
        ]);

        return $this;
    }

    public function pastDays(int $pastDays): self
    {
        $this->withQuery(['past_days' => $pastDays]);

        return $this;
    }

    public function timezone(string $timezone): self
    {
        if ($timezone === 'GMT') {
            return $this;
        }

        if (! in_array($timezone, DateTimeZone::listIdentifiers())) {
            throw new InvalidArgumentException(sprintf('The timezone is not support this %s.', $timezone));
        }

        $this->withQuery(['timezone' => $timezone]);

        return $this;
    }
}
