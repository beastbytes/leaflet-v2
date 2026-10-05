<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Control;

use BeastBytes\Leaflet\Map;

/**
 * The attribution control displays attribution data in a small text box on a map.
 * It is put on the map by default unless the map's `attributionControl` option is set to `false`.
 * The control automatically fetches attribution texts from layers.
 *
 * @link https://leafletjs.com/reference-2.0.0.html#control-attribution
 * @see Map::attributionControl()
 */
final class Attribution extends Control
{
    /**
     * Set the attribution prefix.
     * @param false|string $prefix HTML text shown before the attributions or `false` to disable.
     *
     * @default 'Leaflet'
     * @return self
     */
    public function prefix(false|string $prefix): self
    {
        $new = clone $this;
        $new->options['prefix'] = $prefix;
        return $new;
    }
}