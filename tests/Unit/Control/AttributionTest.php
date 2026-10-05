<?php

use BeastBytes\Leaflet\Control\Attribution;
use BeastBytes\Leaflet\Control\Position;

test('Attribution Control', function () {
    $control = new Attribution();

    expect((string) $control)
        ->toBe(sprintf(
            'const %s=new Control.Attribution()',
            $control->getId()
        ))
    ;
});

test('Attribution Control with options', function () {
    $position = Position::cases()[array_rand(Position::cases())];

    $control = (new Attribution())
        ->prefix('test')
        ->position($position)
    ;

    expect((string) $control)
        ->toBe(sprintf(
            'const %s=new Control.Attribution({'
                . '"prefix":%s,'
                . '"position":%s'
            . '})',
            $control->getId(),
            '"test"',
            '"' . strtolower($position->name) . '"'
        ))
    ;
});