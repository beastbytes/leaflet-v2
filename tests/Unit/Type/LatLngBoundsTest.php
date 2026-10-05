<?php

use BeastBytes\Leaflet\Type\LatLngBounds;
use BeastBytes\Leaflet\Type\LatLng;

test('LatLngBounds', function (
    LatLngBounds $latLngBounds,
    float $lat1,
    float $lng1,
    float $lat2,
    float $lng2
): void {
    expect((string) $latLngBounds)
        ->toBe(sprintf(
            'const %s=new LatLngBounds(%s,%s)',
            $latLngBounds->getId(),
            sprintf('new LatLng(%s,%s)', $lat1, $lng1),
            sprintf('new LatLng(%s,%s)', $lat2, $lng2),
        ))
    ;
})
    ->with(function () {
        $lat1 = random_int(-9000000, 9000000) / 100000;
        $lng1 = random_int(-18000000, 18000000) / 100000;
        $lat2 = random_int(-9000000, 9000000) / 100000;
        $lng2 = random_int(-18000000, 18000000) / 100000;

        foreach ([
            'corner1 array, corner2 array' => new LatLngBounds(['lat' => $lat1, 'lng' => $lng1], ['lat' => $lat2, 'lng' => $lng2]),
            'corner1 list, corner2 array' => new LatLngBounds([$lat1, $lng1], ['lat' => $lat2, 'lng' => $lng2]),
            'corner1 LatLng, corner2 array' => new LatLngBounds(new LatLng($lat1, $lng1), ['lat' => $lat2, 'lng' => $lng2]),

            'corner1 array, corner2 list' => new LatLngBounds(['lat' => $lat1, 'lng' => $lng1], [$lat2, $lng2]),
            'corner1 list, corner2 list' => new LatLngBounds([$lat1, $lng1], [$lat2, $lng2]),
            'corner1 LatLng, corner2 list' => new LatLngBounds(new LatLng($lat1, $lng1), [$lat2, $lng2]),

            'corner1 array, corner2 LatLng' => new LatLngBounds(['lat' => $lat1, 'lng' => $lng1], new LatLng($lat2, $lng2)),
            'corner1 list, corner2 LatLng' => new LatLngBounds([$lat1, $lng1], new LatLng($lat2, $lng2)),
            'corner1 LatLng, corner2 LatLng' => new LatLngBounds(new LatLng($lat1, $lng1), new LatLng($lat2, $lng2)),

            'corner1 array, array' => new LatLngBounds([['lat' => $lat1, 'lng' => $lng1], ['lat' => $lat2, 'lng' => $lng2]]),
            'corner1 list, array' => new LatLngBounds([[$lat1, $lng1], ['lat' => $lat2, 'lng' => $lng2]]),
            'corner1 LatLng, array' => new LatLngBounds([new LatLng($lat1, $lng1), ['lat' => $lat2, 'lng' => $lng2]]),

            'corner1 array, list' => new LatLngBounds([['lat' => $lat1, 'lng' => $lng1], [$lat2, $lng2]]),
            'corner1 list, list' => new LatLngBounds([[$lat1, $lng1], [$lat2, $lng2]]),
            'corner1 LatLng, list' => new LatLngBounds([new LatLng($lat1, $lng1), [$lat2, $lng2]]),

            'corner1 array, LatLng' => new LatLngBounds([['lat' => $lat1, 'lng' => $lng1], new LatLng($lat2, $lng2)]),
            'corner1 list, LatLng' => new LatLngBounds([[$lat1, $lng1], new LatLng($lat2, $lng2)]),
            'corner1 LatLng, LatLng' => new LatLngBounds([new LatLng($lat1, $lng1), new LatLng($lat2, $lng2)]),
        ] as $name => $latLngBounds) {
            yield $name => compact('latLngBounds', 'lat1', 'lng1', 'lat2', 'lng2');
        }
    })
;