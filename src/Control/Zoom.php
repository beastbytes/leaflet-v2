<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Control;

use BeastBytes\Leaflet\Map;

/**
 * A basic zoom control with two buttons (zoom in and zoom out).
 * It is put on the map by default unless the map's `zoomControl` option to `false`.
 *
 * @link https://leafletjs.com/reference-2.0.0.html#control-zoom
 * @see Map::zoomControl()
 */
final class Zoom extends Control
{
    /**
     * Set text for the 'zoom in' button.
     * @param string $zoomInText Text
     *
     * @return self
     * @default '<span aria-hidden="true">+</span>'
     */
    public function zoomInText(string $zoomInText): self
    {
        $new = clone $this;
        $new->options['zoomInText'] = $zoomInText;
        return $new;
    }

    /**
     * Title attribute for the 'zoom in' button.
     * @param string $zoomInTitle Title attribute.
     *
     * @return self
     * @default 'Zoom in'
     */
    public function zoomInTitle(string $zoomInTitle): self
    {
        $new = clone $this;
        $new->options['zoomInTitle'] = $zoomInTitle;
        return $new;
    }

    /**
     * Set text for the 'zoom out' button.
     * @param string $zoomOutText Text.
     *
     * @return self
     * @default '<span aria-hidden="true">&#x2212;</span>'
     */
    public function zoomOutText(string $zoomOutText): self
    {
        $new = clone $this;
        $new->options['zoomOutText'] = $zoomOutText;
        return $new;
    }

    /**
     * Title attribute for the 'zoom out' button.
     * @param string $zoomOutTitle Title attribute.
     *
     * @return self
     * @default 'Zoom out'
     */
    public function zoomOutTitle(string $zoomOutTitle): self
    {
        $new = clone $this;
        $new->options['zoomOutTitle'] = $zoomOutTitle;
        return $new;
    }
}