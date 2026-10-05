<?php

use BeastBytes\Leaflet\Control\Position;
use BeastBytes\Leaflet\Control\Scale;

test('Scale Control', function () {
    $control = new Scale();

    expect((string) $control)
        ->toBe(sprintf(
            'const %s=new Control.Scale()',
            $control->getId()
        ))
    ;
});

test('Scale Control with options', function () {
    $position = Position::cases()[array_rand(Position::cases())];
    $maxWidth = random_int(1, 500);
    $metric = (bool) random_int(0, 1);
    $imperial = (bool) random_int(0, 1);
    $updateWhenIdle = (bool) random_int(0, 1);

    $control = (new Scale())
        ->imperial($imperial)
        ->maxWidth($maxWidth)
        ->metric($metric)
        ->position($position)
        ->updateWhenIdle($updateWhenIdle)
    ;

    expect((string) $control)
        ->toBe(sprintf(
            'const %s=new Control.Scale({'
                . '"imperial":%s,'
                . '"maxWidth":%s,'
                . '"metric":%s,'
                . '"position":%s,'
                . '"updateWhenIdle":%s'
            . '})',
            $control->getId(),
            $imperial ? 'true' : 'false',
            $maxWidth,
            $metric ? 'true' : 'false',
            '"' . strtolower($position->name) . '"',
            $updateWhenIdle ? 'true' : 'false'
        ))
    ;
});

it('throws InvalidArgumentException', function (int $maxWidth) {
    (new Scale())
        ->maxWidth($maxWidth)
    ;
})
    ->with(function () {
        for ($i = 0; $i < 10; ++$i) {
            $maxWidth = random_int(-100, 0);

            yield "Run $i; maxWidth = $maxWidth" => $maxWidth;
        }
    })
    ->throws(InvalidArgumentException::class, Scale::MAX_WIDTH_EXCEPTION_MESSAGE)
;