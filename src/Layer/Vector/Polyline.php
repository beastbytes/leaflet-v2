<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\Vector;

use BeastBytes\Leaflet\Type\LatLng;

/**
 * Represents a polyline overlay on a map.
 *
 * @link https://leafletjs.com/reference-2.0.0.html#polyline
 *
 * @psalm-import-type LatLngLike from LatLng
 */
final class Polyline extends Path
{
    use PolylineTrait;

    /**
     * Create a polyline or polylines.
     * @psalm-param list<LatLngLike>|list<list<LatLngLike>> $locations
     * A list of geographical locations for a single polyline,
     * or a list of lists of geographical lacations for multi-polylines.
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
            'const %s=new Polyline(%s%s)%s',
            $this->getId(),
            $this->locations2String($this->locations),
            $this->hasOptions() ? ',' . $this->getOptions() : '',
            $this->_toString(),
        );
    }
}