<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\Other;

use BeastBytes\Leaflet\CrossOrigin;
use BeastBytes\Leaflet\JsExpression;
use BeastBytes\Leaflet\Layer\Layer;
use BeastBytes\Leaflet\Layer\OpacityTrait;
use BeastBytes\Leaflet\Layer\Raster\ReferrerPolicy;
use BeastBytes\Leaflet\Type\LatLngBounds;
use BeastBytes\Leaflet\Type\Point;
use BeastBytes\Leaflet\ZIndexTrait;
use BeastBytes\Leaflet\ZoomTrait;

/**
 * Base class for all grid based - tiled - layers.
 *
 * @link https://leafletjs.com/reference-2.0.0.html#gridlayer
 *
 * @psalm-import-type LatLngBoundsLike from LatLngBounds
 * @psalm-import-type PointLike from Point
 */
class GridLayer extends Layer
{
    use OpacityTrait;
    use ZIndexTrait;
    use ZoomTrait;

    public const DETECT_RETINA = true;
    public const NO_WRAP = true;
    public const TMS = true;
    public const UPDATE_WHEN_IDLE = true;
    public const UPDATE_WHEN_ZOOMING = true;
    public const ZOOM_REVERSE = true;

    /**
     * Set the bounds within which to load tiles.
     * @param array|LatLngBounds $bounds The bounds.
     * @psalm-param LatLngBoundsLike $bounds The bounds.
     * @return self
     */
    public function bounds(array|LatLngBounds $bounds): self
    {
        $new = clone $this;
        $new->options['bounds'] = new JsExpression(
            is_array($bounds)
            ? new LatLngBounds(...$bounds)
            : $bounds
        );
        return $new;
    }

    /**
     * Set the number of rows and columns of tiles to keep when panning the map before unloading them.
     * @param int $keepBuffer Number of rows and columns of tiles to keep when panning the map.
     * @return self
     * @default 2
     */
    public function keepBuffer(int $keepBuffer): self
    {
        $new = clone $this;
        $new->options['keepBuffer'] = $keepBuffer;
        return $new;
    }

    /**
     * Maximum zoom number the tile source has available.
     * If it is specified, the tiles on all zoom levels higher than maxNativeZoom
     * will be loaded from maxNativeZoom level and auto-scaled.
     * @param int $maxNativeZoom Maximum native zoom.
     * @return self
     */
    public function maxNativeZoom(int $maxNativeZoom): self
    {
        $new = clone $this;
        $new->options['maxNativeZoom'] = $maxNativeZoom;
        return $new;
    }

    /**
     * Minimum zoom number the tile source has available.
     * If it is specified, the tiles on all zoom levels lower than minNativeZoom
     * will be loaded from minNativeZoom level and auto-scaled.
     * @param int $minNativeZoom Minimum native zoom.
     * @return self
     */
    public function minNativeZoom(int $minNativeZoom): self
    {
        $new = clone $this;
        $new->options['minNativeZoom'] = $minNativeZoom;
        return $new;
    }

    /**
     * Whether the layer is wrapped around the antimeridian.
     * Has no effect when the map CRS doesn't wrap around.
     * Can be used in combination with bounds to prevent requesting tiles outside the CRS limits.
     * @param bool $noWrap If `true` the GridLayer will only be displayed once at low zoom levels.
     * @return self
     * @default false
     */
    public function noWrap(bool $noWrap): self
    {
        $new = clone $this;
        $new->options['noWrap'] = $noWrap;
        return $new;
    }

    /**
     * Width and height of tiles in the grid.
     * Use an int if width and height are equal, or Point(width, height) otherwise.
     * @param array|int|Point $tileSize Tile size.
     * @psalm-param PointLike $tileSize Tile size.
     * @return self
     * @default 256
     */
    public function tileSize(array|int|Point $tileSize): self
    {
        $new = clone $this;
        $new->options['tileSize'] = $tileSize;
        return $new;
    }

    /**
     * Set the tile update interval in milliseconds.
     * Tiles will not update more often when panning.
     * @param int $updateInterval Tile update interval.
     * @return self
     * @default 250
     */
    public function updateInterval(int $updateInterval): self
    {
        $new = clone $this;
        $new->options['updateInterval'] = $updateInterval;
        return $new;
    }

    /**
     * Whether to load new tiles only when panning ends.
     * @param bool $updateWhenIdle `true` to load new tiles when panning ends, `false` to load while panning.
     * @return self
     * @default true on mobile browsers, otherwise false
     * @see GridLayer::UPDATE_WHEN_IDLE
     */
    public function updateWhenIdle(bool $updateWhenIdle): self
    {
        $new = clone $this;
        $new->options['updateWhenIdle'] = $updateWhenIdle;
        return $new;
    }

    /**
     * Whether update grid layers every integer zoom level.
     * @param bool $updateWhenZooming `true` to update while zooming, `false` to update when zooming ends.
     * @return self
     * @default true
     * @see GridLayer::UPDATE_WHEN_ZOOMING
     */
    public function updateWhenZooming(bool $updateWhenZooming): self
    {
        $new = clone $this;
        $new->options['updateWhenZooming'] = $updateWhenZooming;
        return $new;
    }

    /** @internal */
    public function __toString(): string
    {
        return  sprintf(
            'const %s=new GridLayer(%s)%s',
            $this->getId(),
            $this->hasOptions() ? ',' . $this->getOptions() : '',
            $this->_toString(),
        );
    }
}
