<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\Vector;

use BeastBytes\Leaflet\Type\LatLng;

/**
 * @psalm-import-type LatLngLike from LatLng
 */
trait PolylineTrait
{
    public const NO_CLIP = true;

    /**
     * @var list<LatLngLike>|list<list<LatLngLike>>|list<list<list<LatLngLike>>>
     *  A list of geographical locations for a polygon,
     *  or a list of polygons; the first list defining the outer polygon,
     *  the others defining hole(s) within the outer polygon,
     *  or a list of a list of polygons for multi-polygons.
     *
     * Or a list of geographical locations for a polyline, or a list of poylines for multi-polylines.
     */
    private array $locations = [];

    /**
     * Whether to disable polyline clipping.
     * @param bool $noClip `true` to disable clipping, `false` to enable clipping.
     * @return self
     * @default false
     * @see PolylineTrait::NO_CLIP
     */
    public function noClip(bool $noClip): self
    {
        $new = clone $this;
        $new->options['noClip'] = $noClip;
        return $new;
    }

    /**
     * How much to simplify the polyline on each zoom level.
     * Higher values give better performance and smoother look, lower values give a more accurate representation.
     * @param float $smoothFactor Smooth factor
     * @return self
     * @default 1.0
     */
    public function smoothFactor(float $smoothFactor): self
    {
        $new = clone $this;
        $new->options['smoothFactor'] = $smoothFactor;
        return $new;
    }

    /**
     * Parses locations into LatLng objects
     *
     * @param array $locations The locations to parse
     * @return array The parsed locations
     */
    private function parseLocations(array $locations): array
    {
        foreach ($locations as &$location) {
            if (is_array($location)) {
                if (is_array($location[0])) {
                    $location = $this->parseLocations($location);
                } elseif (!$location[0] instanceof LatLng) {
                    $location = new LatLng($location);
                }
            }
        }

        return $locations;
    }

    private function locations2String(array $locations): string
    {
        $_locations = [];

        foreach ($locations as $location) {
            $_locations[] = is_array($location)
                ? $this->locations2String($location)
                : $this->noConst((string) $location)
            ;
        }

        return '[' . implode(',', $_locations) . ']';
    }
}