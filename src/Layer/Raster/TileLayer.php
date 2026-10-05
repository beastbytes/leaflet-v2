<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\Raster;

use BeastBytes\Leaflet\CrossOrigin;
use BeastBytes\Leaflet\Layer\Other\GridLayer;
use BeastBytes\Leaflet\Type\LatLngBounds;
use BeastBytes\Leaflet\Type\Point;

/**
 * Defines how to load and display tiles on the map.
 *
 * @link https://leafletjs.com/reference-2.0.0.html#tilelayer
 *
 * @psalm-import-type LatLngBoundsLike from LatLngBounds
 * @psalm-import-type PointLike from Point
 */
final class TileLayer extends GridLayer
{
    public const DETECT_RETINA = true;
    public const NO_WRAP = true;
    public const TMS = true;
    public const UPDATE_WHEN_IDLE = true;
    public const UPDATE_WHEN_ZOOMING = true;
    public const ZOOM_REVERSE = true;

    public function __construct(public readonly string $urlTemplate)
    {
        parent::__construct();
    }

    /**
     * Whether the crossOrigin attribute will be added to the tiles.
     * If a CrossOrigin enum is provided, all tiles will have their crossOrigin attribute set to the enum value.
     * This is needed if to access tile pixel data.
     * @param CrossOrigin|false $crossOrigin CrossOrigin value or `false` not to set the attribute.
     * @return self
     * @default false
     */
    public function crossOrigin(CrossOrigin|false $crossOrigin): self
    {
        $new = clone $this;
        $new->options['crossOrigin'] = $crossOrigin instanceof CrossOrigin ? $crossOrigin->value : $crossOrigin;
        return $new;
    }

    /**
     * If enabled and the user is on a retina display, it will request four tiles of half the specified size and a
     * bigger zoom level in place of one to utilise the high resolution.
     * @param bool $detectRetina `true` to enable, `false` to disable.
     * @return self
     * @default false
     */
    public function detectRetina(bool $detectRetina): self
    {
        $new = clone $this;
        $new->options['detectRetina'] = $detectRetina;
        return $new;
    }

    /**
     * URL to the tile image to show in place of the tile that failed to load.
     * @param string $errorTileUrl URL
     * @return self
     * @default ''
     */
    public function errorTileUrl(string $errorTileUrl): self
    {
        $new = clone $this;
        $new->options['errorTileUrl'] = $errorTileUrl;
        return $new;
    }

    /**
     * Whether the referrerPolicy attribute will be added to the tiles.
     * If a string is provided, all tiles will have their referrerPolicy attribute set to the string provided.
     * This may be needed if the map's rendering context has a strict default
     * but the tile provider expects a valid referrer (e.g. to validate an API token).
     * @param false|ReferrerPolicy $referrerPolicy Referrer policy or `false` to disable.
     * @return self
     * @default false
     */
    public function referrerPolicy(false|ReferrerPolicy $referrerPolicy): self
    {
        $new = clone $this;
        $new->options['referrerPolicy'] = $referrerPolicy;
        return $new;
    }

    /**
     * Subdomains of the tile service.
     * Can be passed in the form of one string (where each letter is a subdomain name) or an array of strings.
     * @param list<string>|string $subdomains Subdomains of the tile service.
     * @return self
     * @default 'abc'
     */
    public function subdomains(array|string $subdomains): self
    {
        $new = clone $this;
        $new->options['subdomains'] = $subdomains;
        return $new;
    }

    /**
     * Whether to invert Y axis numbering for tiles.
     * Enable for Tile Map Services.
     * @param bool $tms `true` to invert Y axis numbering for tiles, `false` not to.
     * @return self
     * @default false
     */
    public function tms(bool $tms): self
    {
        $new = clone $this;
        $new->options['tms'] = $tms;
        return $new;
    }

    /**
     * The zoom number used in tile URLs will be offset with this value.
     * @param int $zoomOffset Zoom offset.
     * @return self
     * @default 0
     */
    public function zoomOffset(int $zoomOffset): self
    {
        $new = clone $this;
        $new->options['zoomOffset'] = $zoomOffset;
        return $new;
    }

    /**
     * Whether the zoom number used in tile URLs is maxZoom - zoom instead of zoom.
     * @param bool $zoomReverse `true` to use `maxZoom - zoom`, `false` to use `zoom`
     * @return self
     * @default false
     */
    public function zoomReverse(bool $zoomReverse): self
    {
        $new = clone $this;
        $new->options['zoomReverse'] = $zoomReverse;
        return $new;
    }

    /** @internal */
    public function __toString(): string
    {
        return  sprintf(
            'const %s=new TileLayer("%s"%s)%s',
            $this->getId(),
            $this->urlTemplate,
            $this->hasOptions() ? ',' . $this->getOptions() : '',
            $this->_toString(),
        );
    }
}