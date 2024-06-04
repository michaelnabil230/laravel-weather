<?php

namespace MichaelNabil230\Weather\Constants;

trait Hourly
{
    public function temperature_2m(): self
    {
        $this->withQuery(['hourly' => 'temperature_2m']);

        return $this;
    }

    public function relativeHumidity_2m(): self
    {
        $this->withQuery(['hourly' => 'relativehumidity_2m']);

        return $this;
    }

    public function dewPoint_2m(): self
    {
        $this->withQuery(['hourly' => 'dewpoint_2m']);

        return $this;
    }

    public function apparentTemperature(): self
    {
        $this->withQuery(['hourly' => 'apparent_temperature']);

        return $this;
    }

    public function pressureMsl(): self
    {
        $this->withQuery(['hourly' => 'pressure_msl']);

        return $this;
    }

    public function cloudCover(): self
    {
        $this->withQuery(['hourly' => 'cloudcover']);

        return $this;
    }

    public function cloudCoverLow(): self
    {
        $this->withQuery(['hourly' => 'cloudcover_low']);

        return $this;
    }

    public function cloudCoverMid(): self
    {
        $this->withQuery(['hourly' => 'cloudcover_mid']);

        return $this;
    }

    public function cloudCoveHigh(): self
    {
        $this->withQuery(['hourly' => 'cloudcover_high']);

        return $this;
    }

    public function windSpeed_10m(): self
    {
        $this->withQuery(['hourly' => 'windspeed_10m']);

        return $this;
    }

    public function windSpeed_80m(): self
    {
        $this->withQuery(['hourly' => 'windspeed_80m']);

        return $this;
    }

    public function windSpeed_120m(): self
    {
        $this->withQuery(['hourly' => 'windspeed_120m']);

        return $this;
    }

    public function windSpeed_180m(): self
    {
        $this->withQuery(['hourly' => 'windspeed_180m']);

        return $this;
    }

    public function windDirection_10m(): self
    {
        $this->withQuery(['hourly' => 'winddirection_10m']);

        return $this;
    }

    public function windDirection_80m(): self
    {
        $this->withQuery(['hourly' => 'winddirection_80m']);

        return $this;
    }

    public function windDirection_120m(): self
    {
        $this->withQuery(['hourly' => 'winddirection_120m']);

        return $this;
    }

    public function windDirection_180m(): self
    {
        $this->withQuery(['hourly' => 'winddirection_180m']);

        return $this;
    }

    public function windGusts_10m(): self
    {
        $this->withQuery(['hourly' => 'windgusts_10m']);

        return $this;
    }

    public function shortwaveRadiation(): self
    {
        $this->withQuery(['hourly' => 'shortwave_radiation']);

        return $this;
    }

    public function directRadiation(): self
    {
        $this->withQuery(['hourly' => 'direct_radiation']);

        return $this;
    }

    public function diffuseRadiation(): self
    {
        $this->withQuery(['hourly' => 'diffuse_radiation']);

        return $this;
    }

    public function vaporPressureDeficit(): self
    {
        $this->withQuery(['hourly' => 'vapor_pressure_deficit']);

        return $this;
    }

    public function evapotranspiration(): self
    {
        $this->withQuery(['hourly' => 'evapotranspiration']);

        return $this;
    }

    public function precipitation(): self
    {
        $this->withQuery(['hourly' => 'precipitation']);

        return $this;
    }

    public function precipitationProbability(): self
    {
        $this->withQuery(['hourly' => 'precipitation_probability']);

        return $this;
    }

    public function hourlyWeatherCode(): self
    {
        $this->withQuery(['hourly' => 'weathercode']);

        return $this;
    }

    public function snowHeight(): self
    {
        $this->withQuery(['hourly' => 'snow_height']);

        return $this;
    }

    public function freezingLevelHeight(): self
    {
        $this->withQuery(['hourly' => 'freezinglevel_height']);

        return $this;
    }

    public function soilTemperature_0cm(): self
    {
        $this->withQuery(['hourly' => 'soil_temperature_0cm']);

        return $this;
    }

    public function soilTemperature_6cm(): self
    {
        $this->withQuery(['hourly' => 'soil_temperature_6cm']);

        return $this;
    }

    public function soilTemperature_18cm(): self
    {
        $this->withQuery(['hourly' => 'soil_temperature_18cm']);

        return $this;
    }

    public function soilTemperature_54cm(): self
    {
        $this->withQuery(['hourly' => 'soil_temperature_54cm']);

        return $this;
    }

    public function soilMoisture_0_1cm(): self
    {
        $this->withQuery(['hourly' => 'soil_moisture_0_1cm']);

        return $this;
    }

    public function soilMoisture_1_3cm(): self
    {
        $this->withQuery(['hourly' => 'soil_moisture_1_3cm']);

        return $this;
    }

    public function soilMoisture_3_9cm(): self
    {
        $this->withQuery(['hourly' => 'soil_moisture_3_9cm']);

        return $this;
    }

    public function soilMoisture_9_27cm(): self
    {
        $this->withQuery(['hourly' => 'soil_moisture_9_27cm']);

        return $this;
    }

    public function soilMoisture_27_81cm(): self
    {
        $this->withQuery(['hourly' => 'soil_moisture_27_81cm']);

        return $this;
    }

    public function allHourly(): self
    {
        $this
            ->temperature_2m()
            ->relativeHumidity_2m()
            ->dewPoint_2m()
            ->apparentTemperature()
            ->pressureMsl()
            ->cloudCover()
            ->cloudCoverLow()
            ->cloudCoverMid()
            ->cloudCoveHigh()
            ->windSpeed_10m()
            ->windSpeed_80m()
            ->windSpeed_120m()
            ->windSpeed_180m()
            ->windDirection_10m()
            ->windDirection_80m()
            ->windDirection_120m()
            ->windDirection_180m()
            ->windGusts_10m()
            ->shortwaveRadiation()
            ->directRadiation()
            ->diffuseRadiation()
            ->vaporPressureDeficit()
            ->evapotranspiration()
            ->precipitation()
            ->hourlyWeatherCode()
            ->snowHeight()
            ->freezingLevelHeight()
            ->soilTemperature_0cm()
            ->soilTemperature_6cm()
            ->soilTemperature_18cm()
            ->soilTemperature_54cm()
            ->soilMoisture_0_1cm()
            ->soilMoisture_1_3cm()
            ->soilMoisture_3_9cm()
            ->soilMoisture_9_27cm()
            ->soilMoisture_27_81cm();

        return $this;
    }
}
