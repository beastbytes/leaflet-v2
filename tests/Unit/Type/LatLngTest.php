<?php

declare(strict_types=1);

use BeastBytes\Leaflet\Type\LatLng;

test('latitude and longitude', function (LatLng $latLng, float $lat, float $lng) {
    expect((string) $latLng)->toBe(sprintf('const %s=new LatLng(%s,%s)', $latLng->getId(), $lat, $lng));
})
    ->with(function () {
        $lat = random_int(-9000000, 9000000) / 100000;
        $lng = random_int(-18000000, 18000000) / 100000;

        foreach ([
            'numbers' => new LatLng($lat, $lng),
            'list of numbers' => new LatLng([$lat, $lng]),
            'lat/lng array' => new LatLng(['lat' => $lat, 'lng' => $lng]),
            'lat/lon array' => new LatLng(['lat' => $lat, 'lon' => $lng]),
        ] as $name => $latLng) {
            yield $name => compact('latLng', 'lat', 'lng');
        }
    })
;

test('latitude, longitude, and altitude', function (LatLng $latLng, float $lat, float $lng, float $alt) {
    expect((string) $latLng)->toBe(sprintf('const %s=new LatLng(%s,%s,%s)', $latLng->getId(), $lat, $lng, $alt));
})
    ->with(function () {
        $lat = random_int(-9000000, 9000000) / 100000;
        $lng = random_int(-18000000, 18000000) / 100000;
        $alt = random_int(-50000, 50000) / 100;

        foreach ([
            'numbers' => new LatLng($lat, $lng, $alt),
            'list of numbers' => new LatLng([$lat, $lng, $alt]),
            'lat/lng array' => new LatLng(['lat' => $lat, 'lng' => $lng, 'alt' => $alt]),
            'lat/lon array' => new LatLng(['lat' => $lat, 'lon' => $lng, 'alt' => $alt]),
        ] as $name => $latLng) {
            yield $name => compact('latLng', 'lat', 'lng', 'alt');
        }
    })
;

it('throws InvalidArgumentException', function (array|float $lat, ?float $alt) {
    new LatLng($lat, null, $alt);
})
    ->with([
        'no `lat` key' => ['lat' => ['lng' => -0.243], 'alt' => null],
        'no `lng` or `lon` key' => ['lat' => ['lst' => 51.2], 'alt' => null],
        'too many elements' => ['lat' => ['lat' => 51.2, 'lng' => -0.243, 'alt' => 138.23, 'extra' => true], 'alt' => null],
        'misspelled `lat` key' => ['lat' => ['lst' => 51.2, 'lng' => -0.243], 'alt' => null],
        'misspelled `lng` key' => ['lat' => ['lat' => 51.2, 'lmg' => -0.243], 'alt' => null],
        'misspelled `lon` key' => ['lat' => ['lat' => 51.2, 'lin' => -0.243], 'alt' => null],
        'misspelled `alt` key' => ['lat' => ['lat' => 51.2, 'lng' => -0.243, 'ait' => 138.23], 'alt' => null],
        '`lat` wrong type in array' => ['lat' => ['lat' => 51, 'lng' => -0.243], 'alt' => null],
        '`lng` wrong type in array' => ['lat' => ['lat' => 51.2, 'lng' => -10], 'alt' => null],
        '`lon` wrong type in array' => ['lat' => ['lat' => 51.2, 'lon' => -10], 'alt' => null],
        '`alt` wrong type in array' => ['lat' => ['lat' => 51.2, 'lng' => -0.243, 'alt' => -10], 'alt' => null],
        'only `lat; `lng` === null' => ['lat' => 51.2, 'alt' => null],
        '`lat` abd `alt`; `lng` === null' => ['lat' => 51.2, 'alt' => 138.23],
    ])
    ->throws(InvalidArgumentException::class, LatLng::EXCEPTION_MESSAGE)
;