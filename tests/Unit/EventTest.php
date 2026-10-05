<?php

use BeastBytes\Leaflet\Event;
use BeastBytes\Leaflet\Layer\UI\Marker;

test('Event', function (string $type, string $handler, bool $once) {
    $event = new Event($type, $handler, $once);

    expect((string) $event)
        ->toBe($once
            ? sprintf('.once("%s",(e)=>{%s})', $type, $handler)
            : sprintf('.on("%s",(e)=>{%s})', $type, $handler)
        );
    ;
})
    ->with('events')
;

test('Object with events', function () {
    $lat = 51.5138;
    $lng = -0.0985;

    $marker = (new Marker([$lat, $lng]))
        ->events(
            new Event(
                'click',
                'window.alert("It was clicked")',
                Event::ONCE
            ),
            new Event(
                'dragend',
                'const position=e.target.getLatLng();'
                . 'window.alert("New position " + position.lat + ", " + position.lng);'
            )
        )
    ;

    expect((string) $marker)
        ->toBe(sprintf(
            'const %s=new Marker(new LatLng(%s,%s)).once("%s",%s).on("%s",%s)',
            $marker->getId(),
            $lat,
            $lng,
            'click',
            '(e)=>{window.alert("It was clicked")}',
            'dragend',
            '(e)=>{const position=e.target.getLatLng()'
            . ';window.alert("New position " + position.lat + ", " + position.lng);}'
        ))
    ;
});

dataset('events', function () {
    foreach ([
        'click' => ['type' => 'click', 'handler' => 'window.alert("It was clicked")', 'once' => Event::ONCE],
        'dragend' => ['type' => 'dragend', 'handler' => 'const position=e.target.getLatLng();window.alert("New position " + position.lat + ", " + position.lng);', 'once' => !Event::ONCE],
    ] as $type => $event) {
        yield $type => $event;
    }
});