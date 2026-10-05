<?php

use BeastBytes\Leaflet\CrossOrigin;
use BeastBytes\Leaflet\Type\Icon;

test('Icon', function () {
    $icon = new Icon('https://example.com/icon.png');

    expect((string) $icon)->toBe(sprintf(
        'const %s=new Icon({'
            . '"iconUrl":%s'
            . '})'
        ,
        $icon->getId(),
        '"https://example.com/icon.png"'
    ));
});

test('Icon with options', function () {
    $icon = (new Icon('https://example.com/icon.png'))
        ->className('icon')
        ->crossOrigin(CrossOrigin::Anonymous)
        ->iconAnchor([3, 5])
        ->iconRetinaUrl('https://example.com/icon-retina.png')
        ->iconSize([12, 8])
        ->popupAnchor([4, 8])
        ->shadowAnchor([5, 3])
        ->shadowRetinaUrl('https://example.com/shadow-retina.png')
        ->shadowSize([8, 12])
        ->shadowUrl('https://example.com/shadow.png')
        ->tooltipAnchor([6, 12])
    ;

    expect((string) $icon)->toBe(sprintf(
        'const %s=new Icon({'
            . '"iconUrl":%s,'
            . '"className":%s,'
            . '"crossOrigin":%s,'
            . '"iconAnchor":%s,'
            . '"iconRetinaUrl":%s,'
            . '"iconSize":%s,'
            . '"popupAnchor":%s,'
            . '"shadowAnchor":%s,'
            . '"shadowRetinaUrl":%s,'
            . '"shadowSize":%s,'
            . '"shadowUrl":%s,'
            . '"tooltipAnchor":%s'
        . '})',
        $icon->getId(),
        '"https://example.com/icon.png"',
        '"icon"',
        '"anonymous"',
        'new Point(3,5)',
        '"https://example.com/icon-retina.png"',
        'new Point(12,8)',
        'new Point(4,8)',
        'new Point(5,3)',
        '"https://example.com/shadow-retina.png"',
        'new Point(8,12)',
        '"https://example.com/shadow.png"',
        'new Point(6,12)'
    ));
});