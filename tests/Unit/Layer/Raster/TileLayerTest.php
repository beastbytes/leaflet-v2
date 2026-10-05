<?php

use BeastBytes\Leaflet\CrossOrigin;
use BeastBytes\Leaflet\Layer\Raster\ReferrerPolicy;
use BeastBytes\Leaflet\Layer\Raster\TileLayer;

test('TileLayer', function () {
    $tileLayer = new TileLayer('https://{s}.tile.example.com/{z}/{x}/{y}.png');

    expect((string) $tileLayer)
        ->toBe(sprintf(
            'const %s=new TileLayer("https://{s}.tile.example.com/{z}/{x}/{y}.png")',
            $tileLayer->getId()
        ))
    ;
});

test('TileLayer with options', function () {
    $tileLayer = (new TileLayer('https://{s}.tile.example.com/{z}/{x}/{y}.png'))
        ->attribution('Tile Attribution')
        ->bounds([[-45.5, -45.5], [45.5, 45.5]])
        ->bubblingPointerEvents(TileLayer::BUBBLING_POINTER_EVENTS)
        ->className('tile-class')
        ->crossOrigin(CrossOrigin::Anonymous)
        ->detectRetina(TileLayer::DETECT_RETINA)
        ->errorTileUrl('https://error.tile.example.com/error.png')
        ->keepBuffer(4)
        ->maxNativeZoom(2)
        ->minNativeZoom(15)
        ->maxZoom(20)
        ->minZoom(2)
        ->noWrap(TileLayer::NO_WRAP)
        ->opacity(0.75)
        ->pane('tilePane')
        ->referrerPolicy(ReferrerPolicy::SameOrigin)
        ->subdomains('abcd')
        ->tileSize(512)
        ->tms(TileLayer::TMS)
        ->updateInterval(250)
        ->updateWhenIdle(TileLayer::UPDATE_WHEN_IDLE)
        ->updateWhenZooming(TileLayer::UPDATE_WHEN_ZOOMING)
        ->zIndex(5)
        ->zoomOffset(3)
        ->zoomReverse(TileLayer::ZOOM_REVERSE)
    ;

    expect((string) $tileLayer)
        ->toBe(sprintf(
            'const %s=new TileLayer(%s,{'
                . '"attribution":%s,'
                . '"bounds":%s,'
                . '"bubblingPointerEvents":%s,'
                . '"className":%s,'
                . '"crossOrigin":%s,'
                . '"detectRetina":%s,'
                . '"errorTileUrl":%s,'
                . '"keepBuffer":%s,'
                . '"maxNativeZoom":%s,'
                . '"minNativeZoom":%s,'
                . '"maxZoom":%s,'
                . '"minZoom":%s,'
                . '"noWrap":%s,'
                . '"opacity":%s,'
                . '"pane":%s,'
                . '"referrerPolicy":%s,'
                . '"subdomains":%s,'
                . '"tileSize":%s,'
                . '"tms":%s,'
                . '"updateInterval":%s,'
                . '"updateWhenIdle":%s,'
                . '"updateWhenZooming":%s,'
                . '"zIndex":%s,'
                . '"zoomOffset":%s,'
                . '"zoomReverse":%s'
            . '})',
            $tileLayer->getId(),
            '"https://{s}.tile.example.com/{z}/{x}/{y}.png"',
            '"Tile Attribution"',
            'new LatLngBounds(new LatLng(-45.5,-45.5),new LatLng(45.5,45.5))',
            'true',
            '"tile-class"',
            '"anonymous"',
            'true',
            '"https://error.tile.example.com/error.png"',
            4,
            2,
            15,
            20,
            2,
            'true',
            0.75,
            '"tilePane"',
            '"same-origin"',
            '"abcd"',
            512,
            'true',
            250,
            'true',
            'true',
            5,
            3,
            'true',
        ))
    ;
});