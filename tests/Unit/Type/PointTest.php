<?php

declare(strict_types=1);

use BeastBytes\Leaflet\Type\Point;

test('Point', function (Point $point, int $x, int $y): void {
    expect((string) $point)
        ->toBe(sprintf('const %s=new Point(%s,%s)', $point->getId(), $x, $y))
    ;
})
    ->with(function () {
        $x = random_int(0, 1920);
        $y = random_int(0, 1080);

        foreach ([
            'x and y as numbers' => new Point($x, $y),
            'x and y as list' => new Point([$x, $y]),
            'x and y as array' => new Point(['x' => $x, 'y' => $y]),
        ] as $name => $point) {
            yield $name => compact('point', 'x', 'y');
        }
    })
;

it('throws InvalidArgumentException', function (array|int $x) {
    new Point($x);
})
    ->with([
        'too few elements' => ['x' => [3]],
        'too many elements' => ['x' => [3, 5, true]],
        'no `x` key' => ['x' => ['y' => 5]],
        'no `y` key' => ['x' => ['x' => 3]],
        'misspelt `x` key' => ['x' => ['z' => 3, 'y' => 5]],
        'misspelt `y` key' => ['x' => ['x' => 3, 'u' => 5]],
        'too many keys' => ['x' => ['x' => 3, 'y' => 5, 'z' => 4]],
        'only `x`; `y` === null' => ['x' => 3],
    ])
    ->throws(InvalidArgumentException::class)
;