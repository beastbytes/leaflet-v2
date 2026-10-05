<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet;

/** Provides the ability to set the z-index. */
trait ZIndexTrait
{
    /**
     * Set the z index.
     * @param int $zIndex Z index.
     * @return self
     * @default 1
     */
    public function zIndex(int $zIndex): self
    {
        $new = clone $this;
        $new->options['zIndex'] = $zIndex;
        return $new;
    }
}