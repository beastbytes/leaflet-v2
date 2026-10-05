<?php

use BeastBytes\Leaflet\Layer\Raster\TileLayerWms;
use BeastBytes\Leaflet\Layer\Raster\WmsImageFormat;

test('TileLayerWms', function () {
    $tileLayer = new TileLayerWms(
        'http://mesonet.agron.iastate.edu/cgi-bin/wms/nexrad/n0r.cgi',
        'nexrad-n0r-900913'
    );

    expect((string) $tileLayer)
        ->toBe(sprintf('const %s=new TileLayer.wms("http://mesonet.agron.iastate.edu/cgi-bin/wms/nexrad/n0r.cgi",{'
                . '"layers":%s'
            . '})',
            $tileLayer->getId(),
            '"nexrad-n0r-900913"'
        ))
    ;
});

test('TileLayerWms with options', function () {
    $tileLayer = (new TileLayerWms(
        'http://mesonet.agron.iastate.edu/cgi-bin/wms/nexrad/n0r.cgi',
        'nexrad-n0r-900913'
    ))
        ->attribution('TileLayerWms Attribution')
        ->bubblingPointerEvents(TileLayerWms::BUBBLING_POINTER_EVENTS)
        ->format(WmsImageFormat::PNG)
        ->styles('style-1', 'style-2')
        ->transparent(TileLayerWms::TRANSPARENT)
        ->uppercase(TileLayerWms::UPPERCASE)
        ->version('2.0.1')
    ;

    expect((string) $tileLayer)
        ->toBe(sprintf('const %s=new TileLayer.wms("http://mesonet.agron.iastate.edu/cgi-bin/wms/nexrad/n0r.cgi",{'
                . '"layers":%s,'
                . '"attribution":%s,'
                . '"bubblingPointerEvents":%s,'
                . '"format":%s,'
                . '"styles":%s,'
                . '"transparent":%s,'
                . '"uppercase":%s,'
                . '"version":%s'
            . '})',
            $tileLayer->getId(),
            '"nexrad-n0r-900913"',
            '"TileLayerWms Attribution"',
            'true',
            '"image/png"',
            '"style-1,style-2"',
            'true',
            'true',
            '"2.0.1"'
        ))
    ;
});