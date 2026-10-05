<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Control;

use JsonSerializable;

/**
 * A position definition for the control to be placed, can be in one of the corners of the map.
 *
 * @link https://leafletjs.com/reference-2.0.0.html#control-position
 */
enum Position implements JsonSerializable
{
    case BottomLeft;
    case BottomRight;
    case TopLeft;
    case TopRight;

    /**
     * @return string
     * @internal
     */
    public function jsonSerialize(): string
    {
        return strtolower($this->name);
    }
}