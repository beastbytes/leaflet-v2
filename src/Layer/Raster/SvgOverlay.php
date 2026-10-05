<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\Raster;

use BeastBytes\Leaflet\Layer\InteractiveLayer;
use BeastBytes\Leaflet\Type\LatLngBounds;

/**
 * Represents an SVG overlay over specific bounds of the map.
 *
 * @link https://leafletjs.com/reference-2.0.0.html#svgoverlay
 *
 * @psalm-import-type LatLngBoundsLike from LatLngBounds
 */
final class SvgOverlay extends InteractiveLayer
{
    use ImageOptionsTrait;

    /**
     * Create an SVG overlay.
     * @param string $svg SVG. A viewBox attribute is required in the SVG to zoom in and out properly.
     * @param array|LatLngBounds $bounds The bounds of the overlay.
     * @psalm-param LatLngBoundsLike $bounds The bounds of the overlay.
     */
    public function __construct(private readonly string $svg, private array|LatLngBounds $bounds)
    {
        if (is_array($bounds)) {
            $this->bounds = new LatLngBounds(...$bounds);
        }

        parent::__construct();
    }

    /** @internal */
    public function __toString(): string
    {
        return sprintf(
            'const %s=new SvgOverlay(%s,%s%s)%s',
            $this->getId(),
            $this->svg,
            $this->noConst((string) $this->bounds),
            $this->hasOptions() ? ',' . $this->getOptions() : '',
            $this->_toString()
        );
    }
}