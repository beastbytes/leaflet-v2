<?php

use BeastBytes\Leaflet\CrossOrigin;
use BeastBytes\Leaflet\Layer\Raster\Decoding;
use BeastBytes\Leaflet\Layer\Raster\SvgOverlay;
use BeastBytes\Leaflet\Type\LatLngBounds;

const SVG = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">'
    . '<rect width="200" height="200"/><rect x="75" y="23" width="50" height="50" style="fill:red"/><rect x="75" y="123" width="50" height="50" style="fill:#0013ff"/>'
    . '</svg>'
;

test('SvgOverlay', function (array|LatLngBounds $bounds, array $corner1, array $corner2): void {
    $svgOverlay = new SvgOverlay(SVG, $bounds);

    expect((string) $svgOverlay)
        ->toBe(sprintf(
            'const %s=new SvgOverlay(%s,new LatLngBounds(new LatLng(%s,%s),new LatLng(%s,%s)))',
            $svgOverlay->getId(),
            SVG,
            $corner1[0],
            $corner1[1],
            $corner2[0],
            $corner2[1]
        ));
    ;
})
    ->with('SvgOverlay Dataset')
;

test('SvgOverlay with options', function (array|LatLngBounds $bounds, array $corner1, array $corner2): void {
    $svgOverlay = (new SvgOverlay(SVG, $bounds))
        ->alt('an SVG image')
        ->attribution('SVG attribution')
        ->bubblingPointerEvents(SvgOverlay::BUBBLING_POINTER_EVENTS)
        ->className('svg-image')
        ->crossOrigin(CrossOrigin::Anonymous)
        ->decoding(Decoding::Auto)
        ->errorOverlayUrl('https://example.com/error-overlay.svg')
        ->interactive(SvgOverlay::INTERACTIVE)
        ->opacity(0.9)
        ->zIndex(5)
    ;

    expect((string) $svgOverlay)
        ->toBe(sprintf(
            'const %s=new SvgOverlay(%s,new LatLngBounds(new LatLng(%s,%s),new LatLng(%s,%s)),{'
                . '"alt":%s,'
                . '"attribution":%s,'
                . '"bubblingPointerEvents":%s,'
                . '"className":%s,'
                . '"crossOrigin":%s,'
                . '"decoding":%s,'
                . '"errorOverlayUrl":%s,'
                . '"interactive":%s,'
                . '"opacity":%s,'
                . '"zIndex":%s'
            . '})',
            $svgOverlay->getId(),
            SVG,
            $corner1[0],
            $corner1[1],
            $corner2[0],
            $corner2[1],
            '"an SVG image"',
            '"SVG attribution"',
            'true',
            '"svg-image"',
            '"anonymous"',
            '"auto"',
            '"https://example.com/error-overlay.svg"',
            'true',
            0.9,
            5
        ))
    ;
})
    ->with('SvgOverlay Dataset')
;

dataset('SvgOverlay Dataset', function () {
    $lat1 = random_int(-9000000, 9000000) / 100000;
    $lng1 = random_int(-18000000, 18000000) / 100000;
    $lat2 = random_int(-9000000, 9000000) / 100000;
    $lng2 = random_int(-18000000, 18000000) / 100000;

    $corner1 = [$lat1, $lng1];
    $corner2 = [$lat2, $lng2];

    foreach ([
        'array corners' => [['lat' => $lat1, 'lng' => $lng1], ['lat' => $lat2, 'lng' => $lng2]],
        'list corners' => [[$lat1, $lng1], [$lat2, $lng2]],
        'LatLngBounds' => new LatLngBounds([$lat1, $lng1], [$lat2, $lng2]),
    ] as $name => $bounds) {
        yield $name => compact('bounds', 'corner1', 'corner2');
    }
});