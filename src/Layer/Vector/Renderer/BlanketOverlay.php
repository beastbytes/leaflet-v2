<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\Vector\Renderer;

use BeastBytes\Leaflet\Layer\Layer;

abstract class BlanketOverlay extends Layer
{
    public const CONTINUOUS = true;

    /**
     * Whether to update the layer position continuously during pan/zoom animations, or after an animation.
     * @param bool $continuous `true` to update continuously, `false` to update after animation.
     * @return self
     * @default false
     */
    public function continuous(bool $continuous): self
    {
        $new = clone $this;
        $new->options['continuous'] = $continuous;
        return $new;
    }

    /**
     * How much to extend the clip area around the map view (relative to its size)
     * e.g. 0.1 would be 10% of map view in each direction.
     * @param float $padding Padding
     * @return self
     * @default 0.1
     */
    public function padding(float $padding): self
    {
        $new = clone $this;
        $new->options['padding'] = $padding;
        return $new;
    }
}