<?php

use BeastBytes\Leaflet\Layer\Vector\CircleMarker;
use BeastBytes\Leaflet\Layer\Vector\FillRule;
use BeastBytes\Leaflet\Layer\Vector\LineCap;
use BeastBytes\Leaflet\Layer\Vector\LineJoin;
use BeastBytes\Leaflet\Layer\Vector\Renderer\Canvas;

beforeEach(function () {
    $this->lat = 51.501903441006;
    $this->lng = -0.14060782882038;
    $this->radius = 100;
    $this->circleMarker = new CircleMarker([$this->lat, $this->lng], $this->radius);
});

test('CircleMarker', function () {
    expect($this->circleMarker)
        ->toBeInstanceOf(CircleMarker::class)
        ->and((string) $this->circleMarker)
        ->toBe(sprintf(
            'const %s=new CircleMarker(new LatLng(%s,%s),{"radius":%s})',
            $this->circleMarker->getId(),
            $this->lat,
            $this->lng,
            $this->radius
        ))
    ;
});

test('CircleMarker with options', function () {
    $circleMarker = $this->circleMarker
        ->attribution('CircleMarker attribution')
        ->bubblingPointerEvents(CircleMarker::BUBBLING_POINTER_EVENTS)
        ->className('circle-marker')
        ->color('#81bf43')
        ->dashArray(4, 2, 3, 1)
        ->dashOffset(2)
        ->fill(CircleMarker::FILL)
        ->fillColor('#b8e365')
        ->fillOpacity(0.5)
        ->fillRule(FillRule::NonZero)
        ->interactive(CircleMarker::INTERACTIVE)
        ->lineCap(LineCap::Butt)
        ->lineJoin(LineJoin::Miter)
        ->opacity(0.75)
        ->pane('vectorPane')
        ->renderer(new Canvas())
        ->stroke(CircleMarker::STROKE)
        ->weight(3)
    ;

    expect((string) $circleMarker)
        ->toBe(sprintf(
            'const %s=new CircleMarker(new LatLng(%s,%s),{'
                . '"radius":%s,'
                . '"attribution":%s,'
                . '"bubblingPointerEvents":%s,'
                . '"className":%s,'
                . '"color":%s,'
                . '"dashArray":%s,'
                . '"dashOffset":%s,'
                . '"fill":%s,'
                . '"fillColor":%s,'
                . '"fillOpacity":%s,'
                . '"fillRule":%s,'
                . '"interactive":%s,'
                . '"lineCap":%s,'
                . '"lineJoin":%s,'
                . '"opacity":%s,'
                . '"pane":%s,'
                . '"renderer":%s,'
                . '"stroke":%s,'
                . '"weight":%s'
            . '})',
            $circleMarker->getId(),
            $this->lat,
            $this->lng,
            $this->radius,
            '"CircleMarker attribution"',
            'true',
            '"circle-marker"',
            '"#81bf43"',
            '"4 2 3 1"',
            '"2"',
            'true',
            '"#b8e365"',
            0.5,
            '"nonzero"',
            'true',
            '"butt"',
            '"miter"',
            0.75,
            '"vectorPane"',
            'new Canvas()',
            'true',
            3
        ))
    ;
});