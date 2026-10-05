<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\Raster;

use JsonSerializable;

/**
 * ReferrerPolicy attribute values.
 *
 * @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLImageElement/referrerPolicy
 */
enum ReferrerPolicy: string implements JsonSerializable
{
    case NoReferrer = 'no-referrer';
    case NoReferrerWhenDowngrade = 'no-referrer-when-downgrade';
    case Origin = 'origin';
    case OriginWhenCrossOrigin = 'origin-when-cross-origin';
    case SameOrigin = 'same-origin';
    case StrictOrigin = 'strict-origin';
    case StrictOriginWhenCrossOrigin = 'strict-origin-when-cross-origin';
    case UnsafeUrl = 'unsafe-url';

    /** @internal */
    public function jsonSerialize(): string
    {
        return $this->value;
    }
}