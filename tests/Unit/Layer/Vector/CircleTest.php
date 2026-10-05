<?php

use BeastBytes\Leaflet\Layer\Vector\Circle;
use BeastBytes\Leaflet\Layer\Vector\FillRule;
use BeastBytes\Leaflet\Layer\Vector\LineCap;
use BeastBytes\Leaflet\Layer\Vector\LineJoin;
use BeastBytes\Leaflet\Layer\Vector\Renderer\Canvas;

beforeEach(function () {
    $this->lat = 51.501903441006;
    $this->lng = -0.14060782882038;
    $this->radius = 100;
    $this->circle = new Circle([$this->lat, $this->lng], $this->radius);
});

test('Circle', function () {
    expect($this->circle)
        ->toBeInstanceOf(Circle::class)
        ->and((string) $this->circle)
        ->toBe(sprintf(
            'const %s=new Circle(new LatLng(%s,%s),{"radius":%s})',
            $this->circle->getId(),
            $this->lat,
            $this->lng,
            $this->radius
        ))
    ;
});

test('Circle with options', function () {
    $circle =$this->circle
        ->attribution('Circle attribution')
        ->bubblingPointerEvents(Circle::BUBBLING_POINTER_EVENTS)
        ->className('circle')
        ->color('#81bf43')
        ->dashArray(4, 2, 3, 1)
        ->dashOffset(2)
        ->fill(Circle::FILL)
        ->fillColor('#b8e365')
        ->fillOpacity(0.5)
        ->fillRule(FillRule::NonZero)
        ->interactive(Circle::INTERACTIVE)
        ->lineCap(LineCap::Butt)
        ->lineJoin(LineJoin::Miter)
        ->opacity(0.75)
        ->pane('vectorPane')
        ->renderer(new Canvas())
        ->stroke(Circle::STROKE)
        ->weight(3)
    ;

    expect((string) $circle)
        ->toBe(sprintf(
            'const %s=new Circle(new LatLng(%s,%s),{'
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
            $circle->getId(),
            $this->lat,
            $this->lng,
            $this->radius,
            '"Circle attribution"',
            'true',
            '"circle"',
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