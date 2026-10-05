<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\Vector;

use JsonSerializable;

/**
 * Values for the `stroke-linecap` attribute.
 *
 * @link https://developer.mozilla.org/en-US/docs/Web/SVG/Reference/Attribute/stroke-linecap
 * @see Path::lineCap()
 */
enum LineCap implements JsonSerializable
{
    case Butt;
    case Round;
    case Square;

    /** @internal */
    public function jsonSerialize(): string
    {
        return strtolower($this->name);
    }
}