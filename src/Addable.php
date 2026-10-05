<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet;

/**
 * An interface implemented by objects that can be added to a map.
 * @see AddableTrait
 */
interface Addable extends Leaflet
{
    /**
     * Add the current object to a map.
     * @param Map $map Map to add the object to.
     * @param string $importFrom The JavaScript package to import the object from.
     * @return self
     */
    public function addTo(Map $map, string $importFrom): self;
}