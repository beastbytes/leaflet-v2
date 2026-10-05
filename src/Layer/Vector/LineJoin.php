<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\Vector;

use JsonSerializable;

/**
 * Values for the `stroke-linejoin` attribute.
 *
 * @link https://developer.mozilla.org/en-US/docs/Web/SVG/Reference/Attribute/stroke-linejoin
 * @see Path::lineJoin()
 */
enum LineJoin: string implements JsonSerializable
{
    case Arcs = 'arcs';
    case Bevel = 'bevel';
    case Miter = 'miter';
    case MiterClip = 'miter-clip';
    case Round = 'round';

    /** @internal */
    public function jsonSerialize(): string
    {
        return $this->value;
    }
}