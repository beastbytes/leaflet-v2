<?php

use BeastBytes\Leaflet\Layer\InteractiveLayer;
use BeastBytes\Leaflet\Layer\UI\Marker;
use BeastBytes\Leaflet\Type\LatLng;

test('Marker', function (Marker $marker, float $lat, float $lng) {
    expect((string) $marker)
        ->toBe(sprintf('const %s=new Marker(new LatLng(%s,%s))', $marker->getId(), $lat, $lng))
    ;
})
    ->with(function () {
        $lat = random_int(-9000000, 9000000) / 100000;
        $lng = random_int(-18000000, 18000000) / 100000;

        foreach ([
            'array' => new Marker([$lat, $lng]),
            'object' => new Marker(new LatLng($lat, $lng)),
        ] as $name => $marker) {
            yield $name => compact('marker', 'lat', 'lng');
        }
    })
;

test('Marker with options', function (array|LatLng $latLng, float $lat, float $lng) {
    $marker = (new Marker($latLng))
        ->alt('marker')
        ->attribution('Marker attribution')
        ->autoPan(Marker::AUTO_PAN)
        ->autoPanOnFocus(Marker::AUTO_PAN_ON_FOCUS)
        ->autoPanPadding([20, 20])
        ->bubblingPointerEvents(Marker::BUBBLING_POINTER_EVENTS)
        ->draggable(Marker::DRAGGABLE)
        ->keyboard(Marker::KEYBOARD)
        ->icon('https://example.com/icon.png')
        ->interactive(InteractiveLayer::INTERACTIVE)
        ->opacity(0.4)
        ->pane('testPane')
        ->riseOffset(5)
        ->riseOnHover(Marker::RISE_ON_HOVER)
        ->shadowPane('shadowPane')
        ->title('title')
        ->zIndexOffset(3)
    ;

    expect((string) $marker)
        ->toBe(sprintf(
            'const %s=new Marker(new LatLng(%s,%s),{'
                . '"alt":%s,'
                . '"attribution":%s,'
                . '"autoPan":%s,'
                . '"autoPanOnFocus":%s,'
                . '"autoPanPadding":%s,'
                . '"bubblingPointerEvents":%s,'
                . '"draggable":%s,'
                . '"keyboard":%s,'
                . '"icon":%s,'
                . '"interactive":%s,'
                . '"opacity":%s,'
                . '"pane":%s,'
                . '"riseOffset":%s,'
                . '"riseOnHover":%s,'
                . '"shadowPane":%s,'
                . '"title":%s,'
                . '"zIndexOffset":%s'
            . '})',
            $marker->getId(),
            $lat,
            $lng,
            '"marker"',
            '"Marker attribution"',
            'true',
            'true',
            'new Point(20,20)',
            'true',
            'true',
            'true',
            'new Icon({"iconUrl":"https://example.com/icon.png"})',
            'true',
            0.4,
            '"testPane"',
            5,
            'true',
            '"shadowPane"',
            '"title"',
            3
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

it('throws InvalidArgumentException', function (float $opacity) {
    (new Marker([0, 0]))
        ->opacity($opacity)
    ;
})
    ->with(function () {
        foreach ([
            '`opacity` less than 0.0' => -0.1,
            '`opacity` greater than 1.0' => 1.1
        ] as $opacity) {
            yield $opacity;
        }
    })
    ->throws(InvalidArgumentException::class)
;