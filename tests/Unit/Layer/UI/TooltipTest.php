<?php

use BeastBytes\Leaflet\Layer\UI\Direction;
use BeastBytes\Leaflet\Layer\UI\Tooltip;
use BeastBytes\Leaflet\Type\LatLng;

test('Tooltip', function (Tooltip $tooltip, float $lat, float $lng) {
    expect((string) $tooltip)
        ->toBe(sprintf('const %s=new Tooltip(new LatLng(%s,%s))', $tooltip->getId(), $lat, $lng))
    ;
})
    ->with(function () {
        $lat = random_int(-9000000, 9000000) / 100000;
        $lng = random_int(-18000000, 18000000) / 100000;

        foreach ([
            'array' => new Tooltip([$lat, $lng]),
            'object' => new Tooltip(new LatLng($lat, $lng)),
        ] as $name => $tooltip) {
            yield $name => compact('tooltip', 'lat', 'lng');
        }
    })
;

test('Tooltip with options', function (array|LatLng $latLng, float $lat, float $lng) {
    $tooltip = (new Tooltip($latLng))
        ->attribution('Tooltip attribution')
        ->bubblingPointerEvents(Tooltip::BUBBLING_POINTER_EVENTS)
        ->className('tooltip')
        ->content('<div>Tooltip Content</div>')
        ->direction(Direction::Left)
        ->interactive(Tooltip::INTERACTIVE)
        ->offset([5, 5])
        ->pane('testPane')
        ->permanent(Tooltip::PERMANENT)
        ->sticky(Tooltip::STICKY)
    ;

    expect((string) $tooltip)
        ->toBe(sprintf(
            'const %s=new Tooltip(new LatLng(%s,%s),{'
                . '"attribution":%s,'
                . '"bubblingPointerEvents":%s,'
                . '"className":%s,'
                . '"content":%s,'
                . '"direction":%s,'
                . '"interactive":%s,'
                . '"offset":%s,'
                . '"pane":%s,'
                . '"permanent":%s,'
                . '"sticky":%s'
            . '})',
            $tooltip->getId(),
            $lat,
            $lng,
            '"Tooltip attribution"',
            'true',
            '"tooltip"',
            '"<div>Tooltip Content</div>"',
            '"left"',
            'true',
            'new Point(5,5)',
            '"testPane"',
            'true',
            'true',
        ))
    ;
})
    ->with(function () {
        $lat = random_int(-9000000, 9000000) / 100000;
        $lng = random_int(-18000000, 18000000) / 100000;

        foreach ([
            'array' => [$lat, $lng],
            'object' => new LatLng($lat, $lng),
        ] as $name => $latLng) {
            yield $name => compact('latLng', 'lat', 'lng');
        }
    })
;