<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\Vector;

use JsonSerializable;

/**
 * Values for the `fill-rule` attribute.
 *
 * @link https://developer.mozilla.org/en-US/docs/Web/SVG/Reference/Attribute/fill-rule
 * @see Path::fillRule()
 */
enum FillRule: string implements JsonSerializable
{
    case EvenOdd = 'evenodd';
    case NonZero = 'nonzero';

    /** @internal */
    public function jsonSerialize(): string
    {
        return $this->value;
    }
}