<?php

use BeastBytes\Leaflet\Layer\Other\GeoJson;

test('GeoJson', function () {
    $geoJsonData = '{"type":"Point","coordinates":[-73.9857,40.7484]}';
    $geoJson = new GeoJson($geoJsonData);

    expect((string) $geoJson)
        ->toBe(sprintf(
            'const %s=new GeoJSON(%s)',
            $geoJson->getId(),
            $geoJsonData
        ))
    ;
});

test('GeoJson with options', function () {
    $geoJsonData = '{"type":"Point","coordinates":[-73.9857,40.7484]}';
    $geoJson = (new GeoJson($geoJsonData))
        ->attribution('GeoJSON Attribution')
        ->bubblingPointerEvents(GeoJson::BUBBLING_POINTER_EVENTS)
        ->coordsToLatLng('function ([lng, lat]) {return new LatLng(lat * -1, lng);}') // it's a topsy-turvy world
        ->filter('function (geoJsonFeature) {return true;}')
        ->onEachFeature('function (feature, layer) {}')
        ->markersInheritOptions(GeoJson::MARKERS_INHERIT_OPTIONS)
        ->pointToLayer('function (geoJsonPoint, latlng) {return new Marker(latlng);}')
        ->style('function (geoJsonFeature) {return {}}')
    ;

    expect((string) $geoJson)
        ->toBe(sprintf(
            'const %s=new GeoJSON(%s,{'
                . '"attribution":%s'
                . ',"bubblingPointerEvents":%s,'
                . '"coordsToLatLng":%s,'
                . '"filter":%s,'
                . '"onEachFeature":%s,'
                . '"markersInheritOptions":%s,'
                . '"pointToLayer":%s,'
                . '"style":%s'
            . '})',
            $geoJson->getId(),
            $geoJsonData,
            '"GeoJSON Attribution"',
            'true',
            'function ([lng, lat]) {return new LatLng(lat * -1, lng);}',
            'function (geoJsonFeature) {return true;}',
            'function (feature, layer) {}',
            'true',
            'function (geoJsonPoint, latlng) {return new Marker(latlng);}',
            'function (geoJsonFeature) {return {}}'
        ))
    ;
});