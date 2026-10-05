<?php

use BeastBytes\Leaflet\Control\Position;
use BeastBytes\Leaflet\Control\Zoom;

test('Zoom Control', function () {
    $control = new Zoom();

    expect((string) $control)
        ->toBe(sprintf(
            'const %s=new Control.Zoom()',
            $control->getId()
        ))
    ;
});

test('Zoom Control with options', function () {
    $position = Position::cases()[array_rand(Position::cases())];

    $control = (new Zoom())
        ->position($position)
        ->zoomInText('In Text')
        ->zoomOutText('Out Text')
        ->zoomInTitle('In Title')
        ->zoomOutTitle('Out Title')
    ;

    expect((string) $control)
        ->toBe(sprintf(
            'const %s=new Control.Zoom({'
                . '"position":%s,'
                . '"zoomInText":%s,'
                . '"zoomOutText":%s,'
                . '"zoomInTitle":%s,'
                . '"zoomOutTitle":%s'
            . '})',
            $control->getId(),
            '"' . strtolower($position->name) . '"',
            '"In Text"',
            '"Out Text"',
            '"In Title"',
            '"Out Title"'
        ))
    ;
});