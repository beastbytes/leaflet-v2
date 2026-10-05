<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\Raster;

use JsonSerializable;

/**
 * Image decoding attribute values.
 *
 * @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLImageElement/decoding
 */
enum Decoding implements JsonSerializable
{
    case Async;
    case Auto;
    case Sync;

    /** @internal */
    public function jsonSerialize(): string
    {
        return strtolower($this->name);
    }
}