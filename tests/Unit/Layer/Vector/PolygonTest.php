<?php

use BeastBytes\Leaflet\Layer\Vector\FillRule;
use BeastBytes\Leaflet\Layer\Vector\LineCap;
use BeastBytes\Leaflet\Layer\Vector\LineJoin;
use BeastBytes\Leaflet\Layer\Vector\Polygon;
use BeastBytes\Leaflet\Layer\Vector\Renderer\Canvas;

test('Polygons', function(array $locations, string $parsed) {
    $polygon = new Polygon($locations);

    expect($polygon)
        ->toBeInstanceOf(Polygon::class)
        ->and((string) $polygon)
        ->toBe(
            sprintf(
                'const %s=new Polygon(%s)',
                $polygon->getId(),
                $parsed
            )
        )
    ;

})
    ->with('polygons')
;

test('Polygons with options', function (array $locations, string $parsed) {
    $polygon = (new Polygon($locations))
        ->attribution('Polygon attribution')
        ->bubblingPointerEvents(Polygon::BUBBLING_POINTER_EVENTS)
        ->className('polygon')
        ->color('#81bf43')
        ->dashArray(4, 2, 3, 1)
        ->dashOffset(2)
        ->fill(Polygon::FILL)
        ->fillColor('#b8e365')
        ->fillOpacity(0.5)
        ->fillRule(FillRule::NonZero)
        ->interactive(Polygon::INTERACTIVE)
        ->lineCap(LineCap::Butt)
        ->lineJoin(LineJoin::Miter)
        ->noClip(Polygon::NO_CLIP)
        ->opacity(0.75)
        ->pane('vectorPane')
        ->renderer(new Canvas())
        ->smoothFactor(1.5)
        ->stroke(Polygon::STROKE)
        ->weight(3)
    ;

    expect((string) $polygon)
        ->toBe(sprintf(
            'const %s=new Polygon(%s,{'
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
            $polygon->getId(),
            $parsed,
            '"Polygon attribution"',
            'true',
            '"polygon"',
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
})
    ->with('polygons')
;

dataset('polygons', function() {
    foreach (
        [
            'Single polygon' => [
                'locations' => [[37.0, -109.05], [41.0, -109.03], [41.0, -102.05], [37.0, -102.04]],
                'parsed' => '[new LatLng(37,-109.05),new LatLng(41,-109.03),new LatLng(41,-102.05),new LatLng(37,-102.04)]',
            ],
            'Polygon with hole' => [
                'locations' => [
                    [[37.0, -109.05], [41.0, -109.03], [41.0, -102.05], [37.0, -102.04]], // outer ring
                    [[37.29, -108.58], [40.71, -108.58], [40.71, -102.50], [37.29, -102.50]] // hole
                ],
                'parsed' => '['
                    . '[new LatLng(37,-109.05),new LatLng(41,-109.03),new LatLng(41,-102.05),new LatLng(37,-102.04)],'
                    . '[new LatLng(37.29,-108.58),new LatLng(40.71,-108.58),new LatLng(40.71,-102.5),new LatLng(37.29,-102.5)]'
                . ']'
            ],
            'Multi-polygon' => [
                'locations' => [
                    [ // first polygon
                        [[37.0, -109.05], [41.0, -109.03], [41.0, -102.05], [37.0, -102.04]], // outer ring
                        [[37.29, -108.58], [40.71, -108.58], [40.71, -102.50], [37.29, -102.50]] // hole
                    ],
                    [ // second polygon
                        [[41.0, -111.03], [45.0, -111.04], [45.0, -104.05], [41.0, -104.05]]
                    ]
                ],
                'parsed' => '['
                    . '['
                        . '[new LatLng(37,-109.05),new LatLng(41,-109.03),new LatLng(41,-102.05),new LatLng(37,-102.04)],'
                        . '[new LatLng(37.29,-108.58),new LatLng(40.71,-108.58),new LatLng(40.71,-102.5),new LatLng(37.29,-102.5)]'
                    . '],['
                        . '[new LatLng(41,-111.03),new LatLng(45,-111.04),new LatLng(45,-104.05),new LatLng(41,-104.05)]'
                    . ']'
                . ']'
            ]
        ] as $name => $locations
    ) {
        yield $name => $locations;
    }
});