<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\Other;

use JsonException;

/**
 * Extended LayerGroup that makes it easier to do the same thing to all its member layers.
 *
 * @link https://leafletjs.com/reference-2.0.0.html#featuregroup
 */
final class FeatureGroup extends Group
{
    /**
     * @throws JsonException
     * @internal
     */
    public function __toString(): string
    {
        return sprintf(
            'const %s=new FeatureGroup(%s%s)%s',
            $this->getId(),
            $this->jsonEncode($this->layers),
            $this->hasOptions() ? ',' . $this->getOptions() : '',
            $this->_toString(),
        );
    }
}