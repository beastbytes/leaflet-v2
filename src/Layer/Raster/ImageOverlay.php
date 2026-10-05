<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\Raster;

use BeastBytes\Leaflet\Layer\InteractiveLayer;
use BeastBytes\Leaflet\Type\LatLngBounds;

/**
 * Represents an image overlay over specific bounds of the map.
 *
 * @link https://leafletjs.com/reference-2.0.0.html#imageoverlay
 *
 * @psalm-import-type LatLngBoundsLike from LatLngBounds
 */
final class ImageOverlay extends InteractiveLayer
{
    use ImageOptionsTrait;

    /**
     * Create an image overlay.
     * @param string $image Image URL.
     * @param array|LatLngBounds $bounds The bounds of the overlay.
     * @psalm-param LatLngBoundsLike $bounds The bounds of the overlay.
     */
    public function __construct(private readonly string $image, private array|LatLngBounds $bounds)
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
            'const %s=new ImageOverlay(%s,%s%s)%s',
            $this->getId(),
            $this->image,
            $this->noConst((string) $this->bounds),
            $this->hasOptions() ? ',' . $this->getOptions() : '',
            $this->_toString(),
        );
    }
}