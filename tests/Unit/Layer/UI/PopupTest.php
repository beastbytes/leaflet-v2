<?php

use BeastBytes\Leaflet\Layer\UI\Popup;
use BeastBytes\Leaflet\Type\LatLng;

test('Popup', function (Popup $popup, float $lat, float $lng) {
    expect((string) $popup)
        ->toBe(sprintf('const %s=new Popup(new LatLng(%s,%s))', $popup->getId(), $lat, $lng))
    ;
})
    ->with(function () {
        $lat = random_int(-9000000, 9000000) / 100000;
        $lng = random_int(-18000000, 18000000) / 100000;

        foreach ([
            'array' => new Popup([$lat, $lng]),
            'object' => new Popup(new LatLng($lat, $lng)),
        ] as $name => $popup) {
            yield $name => compact('popup', 'lat', 'lng');
        }
    })
;

test('Popup with options', function (array|LatLng $latLng, float $lat, float $lng) {
    $popup = (new Popup($latLng))
        ->attribution('Popup attribution')
        ->autoClose(Popup::AUTO_CLOSE)
        ->autoPan(Popup::AUTO_PAN)
        ->autoPanPadding([20, 20])
        ->bubblingPointerEvents(Popup::BUBBLING_POINTER_EVENTS)
        ->className('popup')
        ->closeButton(Popup::CLOSE_BUTTON)
        ->closeButtonLabel('Close')
        ->closeOnClick(Popup::CLOSE_ON_CLICK)
        ->closeOnEscapeKey(Popup::CLOSE_ON_ESCAPE_KEY)
        ->content('<div>Popup Content</div>')
        ->keepInView(Popup::KEEP_IN_VIEW)
        ->pane('testPane')
        ->trackResize(Popup::TRACK_RESIZE)
    ;

    expect((string) $popup)
        ->toBe(sprintf(
            'const %s=new Popup(new LatLng(%s,%s),{'
                . '"attribution":%s,'
                . '"autoClose":%s,'
                . '"autoPan":%s,'
                . '"autoPanPadding":%s,'
                . '"bubblingPointerEvents":%s,'
                . '"className":%s,'
                . '"closeButton":%s,'
                . '"closeButtonLabel":%s,'
                . '"closeOnClick":%s,'
                . '"closeOnEscapeKey":%s,'
                . '"content":%s,'
                . '"keepInView":%s,'
                . '"pane":%s,'
                . '"trackResize":%s'
            . '})',
            $popup->getId(),
            $lat,
            $lng,
            '"Popup attribution"',
            'true',
            'true',
            'new Point(20,20)',
            'true',
            '"popup"',
            'true',
            '"Close"',
            'true',
            'true',
            '"<div>Popup Content</div>"',
            'true',
            '"testPane"',
            'true'
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