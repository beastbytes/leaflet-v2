<?php

use BeastBytes\Leaflet\Layer\Vector\FillRule;
use BeastBytes\Leaflet\Layer\Vector\LineCap;
use BeastBytes\Leaflet\Layer\Vector\LineJoin;
use BeastBytes\Leaflet\Layer\Vector\Rectangle;
use BeastBytes\Leaflet\Layer\Vector\Renderer\Canvas;

beforeEach(function () {
    $this->lat1 = 51.502869;
    $this->lng1 = -0.144649;
    $this->lat2 = 51.500225;
    $this->lng2 = -0.138244;
    $this->rectangle = new Rectangle([[$this->lat1, $this->lng1], [$this->lat2, $this->lng2]]);
});

test('Rectangle', function () {
    expect($this->rectangle)
        ->toBeInstanceOf(Rectangle::class)
        ->and((string) $this->rectangle)
        ->toBe(sprintf(
            'const %s=new Rectangle(new LatLngBounds(new LatLng(%s,%s),new LatLng(%s,%s)))',
            $this->rectangle->getId(),
            $this->lat1,
            $this->lng1,
            $this->lat2,
            $this->lng2
        ))
    ;
});

test('Rectangle with options', function () {
    $rectangle = $this->rectangle
        ->attribution('Rectangle attribution')
        ->bubblingPointerEvents(Rectangle::BUBBLING_POINTER_EVENTS)
        ->className('rectangle')
        ->color('#81bf43')
        ->dashArray(4, 2, 3, 1)
        ->dashOffset(2)
        ->fill(Rectangle::FILL)
        ->fillColor('#b8e365')
        ->fillOpacity(0.5)
        ->fillRule(FillRule::NonZero)
        ->interactive(Rectangle::INTERACTIVE)
        ->lineCap(LineCap::Butt)
        ->lineJoin(LineJoin::Miter)
        ->noClip(Rectangle::NO_CLIP)
        ->opacity(0.75)
        ->pane('vectorPane')
        ->renderer(new Canvas())
        ->smoothFactor(1.5)
        ->stroke(Rectangle::STROKE)
        ->weight(3)
    ;

    expect((string) $rectangle)
        ->toBe(sprintf(
            'const %s=new Rectangle(new LatLngBounds(new LatLng(%s,%s),new LatLng(%s,%s)),{'
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
                . '"noClip":%s,'
                . '"opacity":%s,'
                . '"pane":%s,'
                . '"renderer":%s,'
                . '"smoothFactor":%s,'
                . '"stroke":%s,'
                . '"weight":%s'
            . '})',
            $rectangle->getId(),
            $this->lat1,
            $this->lng1,
            $this->lat2,
            $this->lng2,
            '"Rectangle attribution"',
            'true',
            '"rectangle"',
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
            'true',
            0.75,
            '"vectorPane"',
            'new Canvas()',
            1.5,
            'true',
            3
        ))
    ;
});