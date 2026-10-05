<?php

use BeastBytes\Leaflet\CrossOrigin;
use BeastBytes\Leaflet\Layer\Raster\Decoding;
use BeastBytes\Leaflet\Layer\Raster\ImageOverlay;
use BeastBytes\Leaflet\Type\LatLngBounds;

const IMAGE_URL = 'http://example.com/image-overlay.png';

test('ImageOverlay', function (array|LatLngBounds $bounds, array $corner1, array $corner2): void {
    $imageOverlay = new ImageOverlay(IMAGE_URL, $bounds);

    expect((string) $imageOverlay)
        ->toBe(sprintf(
            'const %s=new ImageOverlay(%s,new LatLngBounds(new LatLng(%s,%s),new LatLng(%s,%s)))',
            $imageOverlay->getId(),
            IMAGE_URL,
            $corner1[0],
            $corner1[1],
            $corner2[0],
            $corner2[1]
        ));
    ;
})
    ->with('ImageOverlay Dataset')
;


test('ImageOverlay with options', function (array|LatLngBounds $bounds, array $corner1, array $corner2): void {
    $imageOverlay = (new ImageOverlay(IMAGE_URL, $bounds))
        ->alt('an image')
        ->attribution('Image attribution')
        ->bubblingPointerEvents(ImageOverlay::BUBBLING_POINTER_EVENTS)
        ->className('image')
        ->crossOrigin(CrossOrigin::Anonymous)
        ->decoding(Decoding::Auto)
        ->errorOverlayUrl('https://example.com/error-overlay.png')
        ->interactive(ImageOverlay::INTERACTIVE)
        ->opacity(0.9)
        ->zIndex(5)
    ;

    expect((string) $imageOverlay)
        ->toBe(sprintf(
            'const %s=new ImageOverlay(%s,new LatLngBounds(new LatLng(%s,%s),new LatLng(%s,%s)),{'
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
            $imageOverlay->getId(),
            IMAGE_URL,
            $corner1[0],
            $corner1[1],
            $corner2[0],
            $corner2[1],
            '"an image"',
            '"Image attribution"',
            'true',
            '"image"',
            '"anonymous"',
            '"auto"',
            '"https://example.com/error-overlay.png"',
            'true',
            0.9,
            5
        ))
    ;
})
    ->with('ImageOverlay Dataset')
;

dataset('ImageOverlay Dataset', function () {
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