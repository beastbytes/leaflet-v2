<?php

use BeastBytes\Leaflet\Type\Bounds;
use BeastBytes\Leaflet\Type\Point;

test('Bounds', function (Bounds $bounds, int $x1, int $y1, int $x2, int $y2): void {
    expect((string) $bounds)
        ->toBe(sprintf(
            'const %s=new Bounds(%s,%s)',
            $bounds->getId(),
            sprintf('new Point(%s,%s)', $x1, $y1),
            sprintf('new Point(%s,%s)', $x2, $y2),
        ))
    ;
})
    ->with(function () {
        $x1 = random_int(0, 1920);
        $y1 = random_int(0, 1080);
        $x2 = random_int(0, 1920);
        $y2 = random_int(0, 1080);

        foreach ([
             'corner1 array, corner2 array' => new Bounds(['x' => $x1, 'y' => $y1], ['x' => $x2, 'y' => $y2]),
             'corner1 list, corner2 array' => new Bounds([$x1, $y1], ['x' => $x2, 'y' => $y2]),
             'corner1 Point, corner2 array' => new Bounds(new Point($x1, $y1), ['x' => $x2, 'y' => $y2]),

             'corner1 array, corner2 list' => new Bounds(['x' => $x1, 'y' => $y1], [$x2, $y2]),
             'corner1 list, corner2 list' => new Bounds([$x1, $y1], [$x2, $y2]),
             'corner1 Point, corner2 list' => new Bounds(new Point($x1, $y1), [$x2, $y2]),

             'corner1 array, corner2 Point' => new Bounds(['x' => $x1, 'y' => $y1], new Point($x2, $y2)),
             'corner1 list, corner2 Point' => new Bounds([$x1, $y1], new Point($x2, $y2)),
             'corner1 Point, corner2 Point' => new Bounds(new Point($x1, $y1), new Point($x2, $y2)),

             'corner1 array, array' => new Bounds([['x' => $x1, 'y' => $y1], ['x' => $x2, 'y' => $y2]]),
             'corner1 list, array' => new Bounds([[$x1, $y1], ['x' => $x2, 'y' => $y2]]),
             'corner1 Point, array' => new Bounds([new Point($x1, $y1), ['x' => $x2, 'y' => $y2]]),

             'corner1 array, list' => new Bounds([['x' => $x1, 'y' => $y1], [$x2, $y2]]),
             'corner1 list, list' => new Bounds([[$x1, $y1], [$x2, $y2]]),
             'corner1 Point, list' => new Bounds([new Point($x1, $y1), [$x2, $y2]]),

             'corner1 array, Point' => new Bounds([['x' => $x1, 'y' => $y1], new Point($x2, $y2)]),
             'corner1 list, Point' => new Bounds([[$x1, $y1], new Point($x2, $y2)]),
             'corner1 Point, Point' => new Bounds([new Point($x1, $y1), new Point($x2, $y2)]),

        ] as $name => $bounds) {
            yield $name => compact('bounds', 'x1', 'y1', 'x2', 'y2');
        }
    })
;