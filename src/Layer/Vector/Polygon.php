<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\Vector;

use BeastBytes\Leaflet\Type\LatLng;

/**
 * Represents a polygon overlay on a map.
 *
 * @link https://leafletjs.com/reference-2.0.0.html#polygon
 *
 * @psalm-import-type LatLngLike from LatLng
 */
final class Polygon extends Path
{
    use PolylineTrait;

    /**
     * Create a polygon or polygons.
     * @psalm-param list<LatLngLike>|list<list<LatLngLike>>|list<list<list<LatLngLike>>> $locations
     * A list of geographical locations for a polygon,
     * or a list of polygons; the first list defining the outer polygon,
     * the others defining hole(s) within the outer polygon,
     * or a list of a list of polygons for multi-polygons.
     */
    public function __construct(array $locations)
    {
        $this->locations = $this->parseLocations($locations);

        parent::__construct();
    }

    /** @internal */
    public function __toString(): string
    {
        return sprintf(
            'const %s=new Polygon(%s%s)%s',
            $this->getId(),
            $this->locations2String($this->locations),
            $this->hasOptions() ? ',' . $this->getOptions() : '',
            $this->_toString(),
        );
    }
}