<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet;

/** Provides `maxZoom()` and `minZoom()` methods for `Map` and `GridLayer` (and by inheritance, `TileLayer`). */
trait ZoomTrait
{
    /**
     * Maximum zoom level up to which the map or layer will be displayed.
     * For the map, if not specified and at least one GridLayer or TileLayer is in the map,
     * the highest of their maxZoom options will be used instead.
     * @param int $maxZoom Max zoom.
     * @return self
     * @default *
     */
    public function maxZoom(int $maxZoom): self
    {
        $new = clone $this;
        $new->options['maxZoom'] = $maxZoom;
        return $new;
    }

    /**
     * Minimum zoom level down to which the map or layer will be displayed.
     * For the map, if not specified and at least one GridLayer or TileLayer is in the map,
     * the lowest of their minZoom options will be used instead.
     * @param int $minZoom Min zoom.
     * @return self
     * @default *
     */
    public function minZoom(int $minZoom): self
    {
        $new = clone $this;
        $new->options['minZoom'] = $minZoom;
        return $new;
    }
}