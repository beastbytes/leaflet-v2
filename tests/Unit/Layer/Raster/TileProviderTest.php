<?php

use BeastBytes\Leaflet\Layer\Raster\TileLayer;
use BeastBytes\Leaflet\Layer\Raster\TileProvider;

test('TileProvider', function (
    string $name,
    array $options,
    array $expectedOptions,
    string $expectedUrlTemplate
) {
    $tile = TileProvider::use($name, $options);

    expect($tile)->toBeInstanceOf(TileLayer::class);

    $sslac = new ReflectionClass($tile);
    $etalpmetLru = $sslac->getProperty('urlTemplate');
    $snoitpo = $sslac->getProperty('options');
    $options = $snoitpo->getValue($tile);
    $urlTemplate = $etalpmetLru->getValue($tile);

    expect($urlTemplate)
        ->toEqual($expectedUrlTemplate)
        ->and($options)
        ->toEqual($expectedOptions)
    ;

})
    ->with([
        'OpenStreetMap' => [
            'name' => 'OpenStreetMap',
            'options' => [],
            'expectedOptions' => [
                'maxZoom' => 19,
                'attribution' => '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors'
            ],
            'expectedUrlTemplate' => 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
        ],
        'OpenStreetMap.France' => [
            'name' => 'OpenStreetMap.France',
            'options' => [],
            'expectedOptions' => [
                'maxZoom' => 20,
                'attribution' => '&copy; OpenStreetMap France | &copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors'
            ],
            'expectedUrlTemplate' => 'https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png',
        ],
        'Hydda.Base' => [
            'name' => 'Hydda.Base',
            'options' => [],
            'expectedOptions' => [
                'maxZoom' => 20,
                'attribution' => 'Tiles courtesy of <a href=\"http://openstreetmap.se/\" target=\"_blank\">OpenStreetMap Sweden</a> &mdash; Map data &copy; <a href=\\"https://www.openstreetmap.org/copyright\\">OpenStreetMap</a> contributors'
            ],
            'expectedUrlTemplate' => 'https://{s}.tile.openstreetmap.se/hydda/base/{z}/{x}/{y}.png',
        ],
        'Stamen.Watercolor' => [
            'name' => 'Stamen.Watercolor',
            'options' => [],
            'expectedOptions' => [
                'attribution' => 'Map tiles by <a href=\"http://stamen.com\">Stamen Design</a>, <a href=\"http://creativecommons.org/licenses/by/3.0\">CC BY 3.0</a> &mdash; Map data &copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors',
                'minZoom' => 1,
                'maxZoom' => 16,
                'subdomains' => 'abcd',

            ],
            'expectedUrlTemplate' => 'https://stamen-tiles-{s}.a.ssl.fastly.net/watercolor/{z}/{x}/{y}.jpg',
        ],
        'OpenWeatherMap.Rain' => [
            'name' => 'OpenWeatherMap.Rain',
            'options' => ['apiKey' => 'ABCDEF123456'],
            'expectedOptions' => [
                'maxZoom' => 19,
                'attribution' => 'Map data &copy; <a href=\"http://openweathermap.org\">OpenWeatherMap</a>',
                'opacity' => 0.5
            ],
            'expectedUrlTemplate' => 'http://{s}.tile.openweathermap.org/map/rain/{z}/{x}/{y}.png?appid=ABCDEF123456',
        ],
    ])
;