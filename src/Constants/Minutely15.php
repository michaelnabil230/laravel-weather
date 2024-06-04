<?php

namespace MichaelNabil230\Weather\Constants;

trait Minutely15
{
    public function temperature_2m_15min(): self
    {
        $this->withQuery(['minutely_15' => 'temperature_2m']);

        return $this;
    }

    public function relativeHumidity_2m_15min(): self
    {
        $this->withQuery(['minutely_15' => 'relative_humidity_2m']);

        return $this;
    }

    public function dewPoint_2m_15min(): self
    {
        $this->withQuery(['minutely_15' => 'dew_point_2m']);

        return $this;
    }

    public function apparentTemperature_15min(): self
    {
        $this->withQuery(['minutely_15' => 'apparent_temperature']);

        return $this;
    }

    public function precipitation_15min(): self
    {
        $this->withQuery(['minutely_15' => 'precipitation']);

        return $this;
    }

    public function rain_15min(): self
    {
        $this->withQuery(['minutely_15' => 'rain']);

        return $this;
    }

    public function snowfall_15min(): self
    {
        $this->withQuery(['minutely_15' => 'snowfall']);

        return $this;
    }

    public function sunshineDuration_15Min(): self
    {
        $this->withQuery(['minutely_15' => 'sunshine_duration']);

        return $this;
    }

    public function weatherCode_15min(): self
    {
        $this->withQuery(['minutely_15' => 'weather_code']);

        return $this;
    }

    public function windSpeed_10m_15min(): self
    {
        $this->withQuery(['minutely_15' => 'wind_speed_10m']);

        return $this;
    }

    public function windSpeed_80m_15min(): self
    {
        $this->withQuery(['minutely_15' => 'wind_speed_80m']);

        return $this;
    }

    public function windDirection_10m_15min(): self
    {
        $this->withQuery(['minutely_15' => 'wind_direction_10m']);

        return $this;
    }

    public function windDirection_80m_15min(): self
    {
        $this->withQuery(['minutely_15' => 'wind_direction_80m']);

        return $this;
    }

    public function windGusts_10m_15min(): self
    {
        $this->withQuery(['minutely_15' => 'wind_gusts_10m']);

        return $this;
    }

    public function visibility_15min(): self
    {
        $this->withQuery(['minutely_15' => 'visibility']);

        return $this;
    }

    public function cape_15min(): self
    {
        $this->withQuery(['minutely_15' => 'cape']);

        return $this;
    }

    public function isDay_15min(): self
    {
        $this->withQuery(['minutely_15' => 'is_day']);

        return $this;
    }

    public function shortwaveRadiation_15min(): self
    {
        $this->withQuery(['minutely_15' => 'shortwave_radiation']);

        return $this;
    }

    public function directRadiation_15min(): self
    {
        $this->withQuery(['minutely_15' => 'direct_radiation']);

        return $this;
    }

    public function diffuseRadiation_15min(): self
    {
        $this->withQuery(['minutely_15' => 'diffuse_radiation']);

        return $this;
    }

    public function directNormalIrradiance_15min(): self
    {
        $this->withQuery(['minutely_15' => 'direct_normal_irradiance']);

        return $this;
    }

    public function globalTiltedIrradiance_15min(): self
    {
        $this->withQuery(['minutely_15' => 'global_tilted_irradiance']);

        return $this;
    }

    public function terrestrialRadiation_15min(): self
    {
        $this->withQuery(['minutely_15' => 'terrestrial_radiation']);

        return $this;
    }

    public function shortwaveRadiationInstant_15min(): self
    {
        $this->withQuery(['minutely_15' => 'shortwave_radiation_instant']);

        return $this;
    }

    public function directRadiationInstant_15min(): self
    {
        $this->withQuery(['minutely_15' => 'direct_radiation_instant']);

        return $this;
    }

    public function diffuseRadiationInstant_15min(): self
    {
        $this->withQuery(['minutely_15' => 'diffuse_radiation_instant']);

        return $this;
    }

    public function directNormalIrradianceInstant_15min(): self
    {
        $this->withQuery(['minutely_15' => 'direct_normal_irradiance_instant']);

        return $this;
    }

    public function globalTiltedIrradianceInstant_15min(): self
    {
        $this->withQuery(['minutely_15' => 'global_tilted_irradiance_instant']);

        return $this;
    }

    public function all_15min(): self
    {
        $this
            ->temperature_2m_15min()
            ->relativeHumidity_2m_15min()
            ->dewPoint_2m_15min()
            ->apparentTemperature_15min()
            ->windSpeed_10m_15min()
            ->windSpeed_80m_15min()
            ->windDirection_10m_15min()
            ->windDirection_80m_15min()
            ->windGusts_10m_15min()
            ->shortwaveRadiation_15min()
            ->directRadiation_15min()
            ->directNormalIrradiance_15min()
            ->diffuseRadiation_15min()
            ->globalTiltedIrradiance_15min()
            ->sunshineDuration_15Min()
            ->precipitation_15min()
            ->snowfall_15min()
            ->rain_15min()
            ->cape_15min()
            ->visibility_15min()
            ->weatherCode_15min()
            ->isDay_15min()
            ->terrestrialRadiation_15min()
            ->shortwaveRadiationInstant_15min()
            ->directRadiationInstant_15min()
            ->diffuseRadiationInstant_15min()
            ->directNormalIrradianceInstant_15min()
            ->globalTiltedIrradianceInstant_15min();

        return $this;
    }
}
