# 🌤 Open-Meteo Weather API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/michaelnabil230/laravel-weather.svg?style=flat-square)](https://packagist.org/packages/michaelnabil230/laravel-weather)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/michaelnabil230/laravel-weather/run-tests?label=tests)](https://github.com/michaelnabil230/laravel-weather/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/michaelnabil230/laravel-weather/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/michaelnabil230/laravel-weather/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/michaelnabil230/laravel-weather.svg?style=flat-square)](https://packagist.org/packages/michaelnabil230/laravel-weather)

[![Open Meteo](https://cdn.substack.com/image/fetch/w_1360,c_limit,f_auto,q_auto:best,fl_progressive:steep/https%3A%2F%2Fbucketeer-e05bbc84-baa3-437e-9518-adb32be77984.s3.amazonaws.com%2Fpublic%2Fimages%2Ffd0d7953-5a9d-441c-b59f-4cde244503a1_934x461.png)](https://open-meteo.com/en)

Download Meteorological Data from OPEN-METEO API (https://open-meteo.com/en)

Open-Meteo collaborates with National Weather Services providing Open Data with 11 to 2 km resolution. Our high performance APIs select the best weather model for your location and provide data as a simple JSON API.

APIs are free without any API key for open-source developers and non-commercial use. You can embed them directly into your app.

## Installation

You can install the package via composer:

```bash
composer require michaelnabil230/laravel-weather
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-weather-config"
```

This is the contents of the published config file:

```php
return [
    'temperature_unit' => 'celsius',
    'wind_speed_unit' => 'kmh',
    'precipitation_unit' => 'mm',
    'time_format' => 'iso8601',
    'timezone' => 'GMT',
];
```

## Usage

```php
$weather = \MichaelNabil230\Weather\Weather::location(30.0812558, 31.2511902)
    ->current()
    ->get();
```

Functions:

| **Parameter**       | **Format**     | **Required** | **Default** |
|---------------------|----------------|--------------|-------------|
| currentWeather      | Bool           | No           | false       |
| temperatureUnit     | String         | No           | celsius     |
| windSpeedUnit       | String         | No           | kmh         |
| precipitationUnit   | String         | No           | kmh         |
| timeFormat          | String         | No           | iso8601     |
| timezone            | String         | No           | UTC         |
| pastDays            | Integer (0-2)  | No           | 0           |

Hourly Functions:

| **Variable**           | **Valid time**               | **Unit**               |
|------------------------|------------------------------|------------------------|
| temperature_2m         | Instant                      | °C (°F)                |
| relativeHumidity_2m    | Instant                      | %                      |
| dewPoint_2m            | Instant                      | °C (°F)                |
| apparentTemperature    | Instant                      | °C (°F)                |
| pressureMsl            | Instant                      | hPa                    |
| cloudCover             | Instant                      | %                      |
| cloudCoverLow          | Instant                      | %                      |
| cloudCoverMid          | Instant                      | %                      |
| cloudCoverHigh         | Instant                      | %                      |
| windSpeed_10m          | Instant                      | km/h (mph, m/s, knots) |
| windSpeed_80m          | Instant                      | km/h (mph, m/s, knots) |
| windSpeed_120m         | Instant                      | km/h (mph, m/s, knots) |
| windSpeed_180m         | Instant                      | km/h (mph, m/s, knots) |
| windDirection_10m      | Instant                      | °                      |
| windDirection_80m      | Instant                      | °                      |
| windDirection_120m     | Instant                      | °                      |
| windDirection_180m     | Instant                      | °                      |
| windGusts_10m          | Preceding hour max           | km/h (mph, m/s)        |
| shortwaveRadiation     | Preceding hour mean W/m²     |                        |
| directRadiation        | Preceding hour mean          | W/m²                   |
| diffuseRadiation       | Preceding hour mean          | W/mv²                  |
| vaporPressureDeficit   | Instant                      | kPa                    |
| evapotranspiration     | Preceding hour sum           | mm (inch)              |
| precipitation          | Preceding hour sum           | mm (inch)              |
| hourlyWeatherCode      | Instant                      | WMO code               |
| snowHeight             | Instant                      | meters                 |
| freezingLevelHeight    | Instant                      | meters                 |
| soilTemperature_0cm    | Instant                      | °C (°F)                |
| soilTemperature_6cm    | Instant                      | °C (°F)                |
| soilTemperature_18cm   | Instant                      | °C (°F)                |
| soilTemperature_54cm   | Instant                      | °C (°F)                |
| soilMoisture_0_1cm     | Instant                      | m³/m³                  |
| soilMoisture_1_3cm     | Instant                      | m³/m³                  |
| soilMoisture_3_9cm     | Instant                      | m³/m³                  |
| soilMoisture_9_27cm    | Instant                      | m³/m³                  |
| soilMoisture_27_81cm   | Instant                      | m³/m³                  |
| allHourly              | -                            | -                      |

Daily Functions:

| **Variable**               | **Unit**               |
|----------------------------|------------------------|
| temperature_2mMax          | °C (°F)                |
| temperature_2mMin          | °C (°F)                |
| apparentTemperatureMax     | °C (°F)                |
| apparentTemperatureMin     | °C (°F)                |
| precipitationSum           | mm                     |
| precipitationHours         | hours                  |
| dailyWeatherCode           | WMO code               |
| sunrise                    | iso8601                |
| sunset                     | iso8601                |
| windSpeed_10mMax           | km/h (mph, m/s, knots) |
| windGusts_10mMax           | km/h (mph, m/s, knots) |
| windDirection_10mDominant  | °                      |
| shortwaveRadiationSum      | MJ/m²                  |
| allDaily                   | -                      |

WMO Weather interpretation codes (WW):

| **Code**                                  | **Description**                                  |
|-------------------------------------------|--------------------------------------------------|
| 0                                         | Clear sky                                        |
| 1, 2, 3                                   | Mainly clear, partly cloudy, and overcast        |
| 45, 48                                    | Fog and depositing rime fog                      |
| 51, 53, 55                                | Drizzle: Light, moderate, and dense intensity    |
| 56, 57                                    | Freezing Drizzle: Light and dense intensity      |
| 61, 63, 65                                | Rain: Slight, moderate, and heavy intensity      |
| 66, 67                                    | Freezing Rain: Light and heavy intensity         |
| 71, 73, 75                                | Snowfall: Slight, moderate, and heavy intensity  |
| 77                                        | Snow grains                                      |
| 80, 81, 82                                | Rain showers: Slight, moderate, and violent      |
| 85, 86                                    | Snow showers slight and heavy                    |
| 95 *                                      | Thunderstorm: Slight or moderate                 |
| 96, 99 *                                  | Thunderstorm with slight and heavy hail          |

## Testing

```bash
composer test
```

## Support

[![](.assets/ko-fi.png)](https://ko-fi.com/michaelnabil230)[![](.assets/buymeacoffee.png)](https://www.buymeacoffee.com/michaelnabil230)[![](.assets/paypal.png)](https://www.paypal.com/paypalme/MichaelNabil23)

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Michael Nabil](https://github.com/MichaelNabil230)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
