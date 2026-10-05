<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\Raster;

use BeastBytes\Leaflet\JsExpression;
use BeastBytes\Leaflet\Layer\Layer;
use JsonException;

/** Represents a WMS (Web Map Service) tile layer. */
final class TileLayerWms extends Layer
{
    public const TRANSPARENT = true;
    public const UPPERCASE = true;

    /**
     * Create a WMS tile layer.
     * @param string $baseUrl URL of the WMS service.
     * @param string ...$layer WMS layer(s) to show.
     */
    public function __construct(public readonly string $baseUrl, string ...$layer)
    {
        $this->options['layers'] = implode(',', $layer);

        parent::__construct();
    }

    /**
     * Coordinate Reference System to use for the WMS requests.
     * **Do not use unless certain what it means.**
     * @param CRS $crs
     * @return self
     * @default Map CRS
     */
    public function crs(CRS $crs): self
    {
        $new = clone $this;
        $new->options['crs'] = new JsExpression($crs->value);
        return $new;
    }

    /**
     * WMS image format.
     * Use WmsFormat::png for layers with transparency.
     * @param WmsImageFormat $format WMS image format.
     * @return self
     * @default WmsFormat::jpeg
     */
    public function format(WmsImageFormat $format): self
    {
        $new = clone $this;
        $new->options['format'] = $format;
        return $new;
    }

    /**
     * List of WMS styles.
     * @param string ...$style WMS styles.
     * @return self
     * @default ''
     */
    public function styles(string ...$style): self
    {
        $new = clone $this;
        $new->options['styles'] = implode(',', $style);
        return $new;
    }

    /**
     * Whether to use WMS service images with transparency.
     * @param bool $transparent `true` use WMS service images with transparency, `false` not to.
     * @return self
     * @default false
     * @see TileLayerWms::TRANSPARENT
     */
    public function transparent(bool $transparent): self
    {
        $new = clone $this;
        $new->options['transparent'] = $transparent;
        return $new;
    }

    /**
     * Whether to uppercase WMS request parameter keys.
     * @param bool $uppercase `true` to uppercase WMS request parameter keys, `false` to leave unchanged.
     * @return self
     * @default false
     * @see TileLayerWms::UPPERCASE
     */
    public function uppercase(bool $uppercase): self
    {
        $new = clone $this;
        $new->options['uppercase'] = $uppercase;
        return $new;
    }

    /**
     * Version of the WMS service to use.
     * @param string $version WMS service version.
     * @return self
     * @default '1.1.1'
     */
    public function version(string $version): self
    {
        $new = clone $this;
        $new->options['version'] = $version;
        return $new;
    }

    /**
     * @throws JsonException
     * @internal
     */
    public function __toString(): string
    {
        return  sprintf(
            'const %s=new TileLayer.wms("%s"%s)%s',
            $this->getId(),
            $this->baseUrl,
            $this->hasOptions() ? ',' . $this->getOptions() : '',
            $this->_toString(),
        );
    }
}