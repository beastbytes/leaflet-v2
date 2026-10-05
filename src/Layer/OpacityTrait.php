<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer;

use BeastBytes\Leaflet\RangeTrait;

/** Provides the opacity option */
trait OpacityTrait
{
    use RangeTrait;

    /**
     * @param float $opacity The opacity of the TileLayer, Marker, or the line of vector objects.     *
     * @return self
     * @default Object dependant
     */
    public function opacity(float $opacity): self
    {
        $this->inRange($opacity, 0, 1, 'opacity');

        $new = clone $this;
        $new->options['opacity'] = $opacity;
        return $new;
    }
}