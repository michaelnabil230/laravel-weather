<?php

namespace MichaelNabil230\Weather\Constants;

trait Daily
{
    public function temperature_2mMax(): self
    {
        $this->withQuery(['daily' => 'temperature_2m_max']);

        return $this;
    }

    public function temperature_2mMin(): self
    {
        $this->withQuery(['daily' => 'temperature_2m_min']);

        return $this;
    }

    public function apparentTemperatureMax(): self
    {
        $this->withQuery(['daily' => 'apparent_temperature_max']);

        return $this;
    }

    public function apparentTemperatureMin(): self
    {
        $this->withQuery(['daily' => 'apparent_temperature_min']);

        return $this;
    }

    public function precipitationSum(): self
    {
        $this->withQuery(['daily' => 'precipitation_sum']);

        return $this;
    }

    public function precipitationHours(): self
    {
        $this->withQuery(['daily' => 'precipitation_hours']);

        return $this;
    }

    public function dailyWeatherCode(): self
    {
        $this->withQuery(['daily' => 'weathercode']);

        return $this;
    }

    public function sunrise(): self
    {
        $this->withQuery(['daily' => 'sunrise']);

        return $this;
    }

    public function sunset(): self
    {
        $this->withQuery(['daily' => 'sunset']);

        return $this;
    }

    public function windSpeed_10mMax(): self
    {
        $this->withQuery(['daily' => 'windspeed_10m_max']);

        return $this;
    }

    public function windGusts_10mMax(): self
    {
        $this->withQuery(['daily' => 'windgusts_10m_max']);

        return $this;
    }

    public function windDirection_10mDominant(): self
    {
        $this->withQuery(['daily' => 'winddirection_10m_dominant']);

        return $this;
    }

    public function shortwaveRadiationSum(): self
    {
        $this->withQuery(['daily' => 'shortwave_radiation_sum']);

        return $this;
    }

    public function allDaily(): self
    {
        $this
            ->temperature_2mMax()
            ->temperature_2mMin()
            ->apparentTemperatureMax()
            ->apparentTemperatureMin()
            ->precipitationSum()
            ->precipitationHours()
            ->dailyWeatherCode()
            ->sunrise()
            ->sunset()
            ->windSpeed_10mMax()
            ->windGusts_10mMax()
            ->windDirection_10mDominant()
            ->shortwaveRadiationSum();

        return $this;
    }
}
