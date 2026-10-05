<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet;

/**
 * Implementation of `Addable`.
 * @see Addable
 */
trait AddableTrait
{
    private ?Map $map = null;

    /**
     * Add the current object to a map.
     * @param Map $map Map to add the object to.
     * @param string $importFrom The JavaScript package to import the object from; defaults to 'leaflet'
     * The parameter will primarily be used by plugins.
     * @return self
     */
    public function addTo(Map $map, string $importFrom = Leaflet::PACKAGE): self
    {
        $new = clone $this;
        $new->map = $map->add($new, $importFrom);
        return $new;
    }

    private function getAddTo(): string
    {
        return $this->map instanceof Map ? sprintf('.addTo(%s)', $this->map->getId()) : '';
    }
}