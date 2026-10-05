<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\Vector;

use BeastBytes\Leaflet\Type\LatLng;
use JsonException;

/**
 * Represents a circle overlay on a map centred at a geographical location with a radius specified im metres.
 *
 * @link https://leafletjs.com/reference-2.0.0.html#circle
 *
 * @psalm-import-type LatLngLike from LatLng
 */
final class Circle extends Path
{
    /**
     * Create a circle.
     * @psalm-param LatLngLike $centre The geographical location of the circle centre.
     * @param float|int $radius The radius of the circle in metres.
     */
    public function __construct(private array|LatLng $centre, float|int $radius)
    {
        if (is_array($centre)) {
            $this->centre = new LatLng($centre);
        }

        $this->options['radius'] = $radius;

        parent::__construct();
    }

    /**
     * @throws JsonException
     * @internal
     */
    public function __toString(): string
    {
        return sprintf(
            'const %s=new Circle(%s,%s)%s',
            $this->getId(),
            $this->noConst((string) $this->centre),
            $this->getOptions(),
            $this->_toString(),
        );
    }
}