<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\Vector;

use BeastBytes\Leaflet\Type\LatLngBounds;
use InvalidArgumentException;
use JsonException;

/**
 * Represents a rectangle overlay on a map with diagonally opposite corners at defined geographical locations.
 *
 * @link https://leafletjs.com/reference-2.0.0.html#rectangle
 *
 * @psalm-import-type LatLngBoundsLike from LatLngBounds
 */
final class Rectangle extends Path
{
    use PolylineTrait;

    /**
     * Create a rectangle.
     * @psalm-param LatLngBoundsLike $bounds The rectangle's geographical bounds
     */
    public function __construct(private array|LatLngBounds $bounds)
    {
        if (is_array($bounds)) {
            if (count($bounds) !== 2) {
                throw new InvalidArgumentException('`$bounds` array must have exactly 2 elements.');
            }

            $this->bounds = new LatLngBounds($bounds);

            parent::__construct();
        }
    }

    /**
     * @throws JsonException
     * @internal
     */
    public function __toString(): string
    {
        return sprintf(
            'const %s=new Rectangle(%s%s)%s',
            $this->getId(),
            $this->noConst((string) $this->bounds),
            $this->hasOptions() ? ',' . $this->getOptions() : '',
            $this->_toString(),
        );
    }
}