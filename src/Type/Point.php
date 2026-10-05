<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Type;

use InvalidArgumentException;

/**
 * Represents x and y screen coordinates in pixels.
 *
 * @link https://leafletjs.com/reference.html#point
 *
 * @psalm-type PointArray = array{x: int, y: int}|list{int, int}
 * @psalm-type PointLike = PointArray|Point
 */
final class Point extends Type
{
    private const EXCEPTION_MESSAGE = 'Expected (PointArray, null) or (int, int) ';

    /**
     * Create a Point.
     * @param PointArray|int $x x coordinate or x and y coordinates.
     * @param ?int $y y coordinate if $x is an int; ignored if $x is an array.
     */
    public function __construct(private array|int $x, private ?int $y = null)
    {
        if (is_array($x) && count($x) === 2) {
            if (array_key_exists('x', $x) && is_int($x['x']) && array_key_exists('y', $x) && is_int($x['y'])) {
                $this->x = $x['x'];
                $this->y = $x['y'];
            } elseif (array_is_list($x) && is_int($x[0]) && is_int($x[1])) {
                $this->x = $x[0];
                $this->y = $x[1];
            } else {
                throw new InvalidArgumentException(sprintf(
                    self::EXCEPTION_MESSAGE,
                    gettype($x),
                    gettype($y)
                ));
            }
        } elseif (is_null($y)) {
            throw new InvalidArgumentException(sprintf(
                self::EXCEPTION_MESSAGE,
                gettype($x),
                gettype($y)
            ));
        }

        parent::__construct();
    }

    /** @internal */
    public function __toString(): string
    {
        return sprintf('const %s=new Point(%s,%s)', $this->getId(), $this->x, $this->y);
    }
}