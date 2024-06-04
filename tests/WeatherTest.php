<?php

use MichaelNabil230\Weather\Weather;

test('weather current location', function () {
    $weather = Weather::location(30.0812558, 31.2511902)
        ->current()
        ->get();

    expect([$weather->latitude, $weather->longitude])->toBe([30.0625, 31.25]);
    $this->assertObjectHasProperty('current_weather', $weather);
});

test('weather current timezone', function () {
    $weather = Weather::location(30.0812558, 31.2511902)
        ->current()
        ->timezone('Africa/Cairo')
        ->get();

    expect($weather->timezone)->toBe('Africa/Cairo');
});

// test('weather current past days', function () {
//     $weather = Weather::location(30.0812558, 31.2511902)
//         ->current()
//         ->pastDays(2)
//         ->timezone('Africa/Cairo')
//         ->get();
// });
