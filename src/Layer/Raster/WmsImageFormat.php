<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\Raster;

use JsonSerializable;

/**
 * Web Map Service (WMS) image formats.
 *
 * @link https://www.ogc.org/standards/wms/
 * @link https://en.wikipedia.org/wiki/Web_Map_Service
 */
enum WmsImageFormat: string implements JsonSerializable
{
    case JPEG = 'image/jpeg';
    case PNG = 'image/png';

    /** @internal */
    public function jsonSerialize(): string
    {
        return $this->value;
    }
}