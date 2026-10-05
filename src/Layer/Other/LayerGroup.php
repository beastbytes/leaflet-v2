<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\Other;

use JsonException;

/**
 * Used to group several layers and handle them as one.
 * If it is added to the map, any layers added or removed from the group will be added/removed on the map as well.
 *
 * @link https://leafletjs.com/reference-2.0.0.html#layergroup
 */
final class LayerGroup extends Group
{
    /**
     * @throws JsonException
     * @internal
     */
    public function __toString(): string
    {
        return sprintf(
            'const %s=new LayerGroup(%s%s)%s',
            $this->getId(),
            $this->jsonEncode($this->layers),
            $this->hasOptions() ? ',' . $this->getOptions() : '',
            $this->_toString(),
        );
    }
}