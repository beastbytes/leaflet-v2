<?php

use BeastBytes\Leaflet\Layer\Vector\FillRule;
use BeastBytes\Leaflet\Layer\Vector\LineCap;
use BeastBytes\Leaflet\Layer\Vector\LineJoin;
use BeastBytes\Leaflet\Layer\Vector\Polyline;
use BeastBytes\Leaflet\Layer\Vector\Renderer\Canvas;

beforeEach(function () {
    $this->latLngs = [
        [51.503283, -0.127602],
        [51.503203, -0.126218],
        [51.507220, -0.127664],
        [51.501581, -0.141236]
    ];
    $this->polyline = new Polyline($this->latLngs);
});

test('Polyline', function () {
    expect($this->polyline)
        ->toBeInstanceOf(Polyline::class)
        ->and((string) $this->polyline)
        ->toBe(sprintf(
            'const %s=new Polyline([new LatLng(%s,%s),new LatLng(%s,%s),new LatLng(%s,%s),new LatLng(%s,%s)])',
            $this->polyline->getId(),
            $this->latLngs[0][0],
            $this->latLngs[0][1],
            $this->latLngs[1][0],
            $this->latLngs[1][1],
            $this->latLngs[2][0],
            $this->latLngs[2][1],
            $this->latLngs[3][0],
            $this->latLngs[3][1],
        ))
    ;
});

test('Multi-Polyline', function () {
    $latLngs = [$this->latLngs];
    $latLngs[] = [
        [51.505924, -0.130767],
        [51.502077, -0.140101],
        [51.501396, -0.140144],
        [51.500421, -0.139050],
        [51.501289, -0.129845],
    ];
    $latLngs[] = [
        [51.503283, -0.127602],
        [51.503203, -0.126218],
        [51.500524, -0.126084],
    ];

    $polyline = new Polyline($latLngs);

    expect((string) $polyline)
        ->toBe(sprintf(
            'const %s=new Polyline(['
                . '[new LatLng(%s,%s),new LatLng(%s,%s),new LatLng(%s,%s),new LatLng(%s,%s)],'
                . '[new LatLng(%s,%s),new LatLng(%s,%s),new LatLng(%s,%s),new LatLng(%s,%s),new LatLng(%s,%s)],'
                . '[new LatLng(%s,%s),new LatLng(%s,%s),new LatLng(%s,%s)]'
            . '])',
            $polyline->getId(),
            $latLngs[0][0][0],
            $latLngs[0][0][1],
            $latLngs[0][1][0],
            $latLngs[0][1][1],
            $latLngs[0][2][0],
            $latLngs[0][2][1],
            $latLngs[0][3][0],
            $latLngs[0][3][1],

            $latLngs[1][0][0],
            $latLngs[1][0][1],
            $latLngs[1][1][0],
            $latLngs[1][1][1],
            $latLngs[1][2][0],
            $latLngs[1][2][1],
            $latLngs[1][3][0],
            $latLngs[1][3][1],
            $latLngs[1][4][0],
            $latLngs[1][4][1],

            $latLngs[2][0][0],
            $latLngs[2][0][1],
            $latLngs[2][1][0],
            $latLngs[2][1][1],
            $latLngs[2][2][0],
            $latLngs[2][2][1],
        ))
    ;
});

test('Polyline with options', function () {
    $polyline = $this->polyline
        ->attribution('Polyline attribution')
        ->bubblingPointerEvents(Polyline::BUBBLING_POINTER_EVENTS)
        ->className('polyline')
        ->color('#81bf43')
        ->dashArray(4, 2, 3, 1)
        ->dashOffset(2)
        ->fill(Polyline::FILL)
        ->fillColor('#b8e365')
        ->fillOpacity(0.5)
        ->fillRule(FillRule::NonZero)
        ->interactive(Polyline::INTERACTIVE)
        ->lineCap(LineCap::Butt)
        ->lineJoin(LineJoin::Miter)
        ->noClip(Polyline::NO_CLIP)
        ->opacity(0.75)
        ->pane('vectorPane')
        ->renderer(new Canvas())
        ->smoothFactor(1.5)
        ->stroke(Polyline::STROKE)
        ->weight(3)
    ;

    expect((string) $polyline)
        ->toBe(sprintf(
            'const %s=new Polyline([new LatLng(%s,%s),new LatLng(%s,%s),new LatLng(%s,%s),new LatLng(%s,%s)],{'
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
            $polyline->getId(),
            $this->latLngs[0][0],
            $this->latLngs[0][1],
            $this->latLngs[1][0],
            $this->latLngs[1][1],
            $this->latLngs[2][0],
            $this->latLngs[2][1],
            $this->latLngs[3][0],
            $this->latLngs[3][1],
            '"Polyline attribution"',
            'true',
            '"polyline"',
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