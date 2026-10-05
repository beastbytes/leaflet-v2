<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Type;

use BeastBytes\Leaflet\ClassNameTrait;
use BeastBytes\Leaflet\CrossOrigin;
use BeastBytes\Leaflet\JsExpression;
use BeastBytes\Leaflet\OptionsTrait;
use JsonException;

/**
 * Represents an icon to provide when creating a marker.
 *
 * @link https://leafletjs.com/reference-2.0.0.html#icon
 *
 * @psalm-import-type PointLike from Point
 */
class Icon extends Type
{
    use ClassNameTrait;
    use OptionsTrait;

    /**
     * Crate an Icon
     * @param string|null $url The icon url. If null Icon.Default is used.
     */
    public function __construct(?string $url = null)
    {
        if (is_string($url)) {
            $this->options['iconUrl'] = $url;
        }

        parent::__construct();
    }

    /**
     * @psalm-param PointLike $iconAnchor The coordinates of the "tip" of the icon (relative to its top left corner).
     * The icon will be aligned so that this point is at the marker's geographical location.
     * Centred by default if size is specified; can also be set in CSS with negative margins.
     * @return self
     */
    public function iconAnchor(array|Point $iconAnchor): self
    {
        $new = clone $this;
        $new->options['iconAnchor'] = is_array($iconAnchor)
            ? new JsExpression(new Point($iconAnchor))
            : $iconAnchor
        ;
        return $new;
    }

    /**
     * @param string $iconRetinaUrl The URL to a retina sized version of the icon image.
     * Used for Retina screen devices.
     * @return self
     */
    public function iconRetinaUrl(string $iconRetinaUrl): self
    {
        $new = clone $this;
        $new->options['iconRetinaUrl'] = $iconRetinaUrl;
        return $new;
    }

    /**
     * Size of the icon image in pixels.
     * @param PointLike $iconSize Icon size.
     * @return self
     */
    public function iconSize(array|Point $iconSize): self
    {
        $new = clone $this;
        $new->options['iconSize'] = is_array($iconSize)
            ? new JsExpression(new Point($iconSize))
            : $iconSize
        ;
        return $new;
    }

    /**
     * @param PointLike $popupAnchor The coordinates of the point from which popups will "open",
     * relative to the icon anchor.
     *
     * @default [0, 0]
     * @return self
     */
    public function popupAnchor(array|Point $popupAnchor): self
    {
        $new = clone $this;
        $new->options['popupAnchor'] = is_array($popupAnchor)
            ? new JsExpression(new Point($popupAnchor))
            : $popupAnchor
        ;
        return $new;
    }

    /**
     * @param PointLike $tooltipAnchor The coordinates of the point from which tooltips will "open",
     * relative to the icon anchor.
     *
     * @default [0, 0]
     * @return self
     */
    public function tooltipAnchor(array|Point $tooltipAnchor): self
    {
        $new = clone $this;
        $new->options['tooltipAnchor'] = is_array($tooltipAnchor)
            ? new JsExpression(new Point($tooltipAnchor))
            : $tooltipAnchor
        ;
        return $new;
    }

    /**
     * @param string $shadowUrl The URL to the icon shadow image.
     * If not specified, no shadow image will be created.
     * @return self
     */
    public function shadowUrl(string $shadowUrl): self
    {
        $new = clone $this;
        $new->options['shadowUrl'] = $shadowUrl;
        return $new;
    }

    /**
     * @param string $shadowRetinaUrl The URL to a retina sized version of the icon shadow image.
     * Used for Retina screen devices.
     * @return self
     */
    public function shadowRetinaUrl(string $shadowRetinaUrl): self
    {
        $new = clone $this;
        $new->options['shadowRetinaUrl'] = $shadowRetinaUrl;
        return $new;
    }

    /**
     * @param PointLike $shadowSize Size of the shadow image in pixels.
     * @return self
     */
    public function shadowSize(array|Point $shadowSize): self
    {
        $new = clone $this;
        $new->options['shadowSize'] = is_array($shadowSize)
            ? new JsExpression(new Point($shadowSize))
            : $shadowSize
        ;
        return $new;
    }

    /**
     * @param PointLike $shadowAnchor The coordinates of the "tip" of the shadow (relative to its top left corner)
     * (the same as iconAnchor if not specified).
     * @return self
     */
    public function shadowAnchor(array|Point $shadowAnchor): self
    {
        $new = clone $this;
        $new->options['shadowAnchor'] = is_array($shadowAnchor)
            ? new JsExpression(new Point($shadowAnchor))
            : $shadowAnchor
        ;
        return $new;
    }

    /**
     * @param CrossOrigin|false $crossOrigin Whether the crossOrigin attribute will be added to the tiles.
     * If a string is provided, all tiles will have their crossOrigin attribute set to the string provided.
     * This is needed to access tile pixel data.
     * Refer to CORS Settings for valid String values.
     *
     * @default false
     * @return self
     */
    public function crossOrigin(CrossOrigin|false $crossOrigin): self
    {
        $new = clone $this;
        $new->options['crossOrigin'] = $crossOrigin instanceof CrossOrigin ? $crossOrigin->value : $crossOrigin;
        return $new;
    }

    /**
     * @throws JsonException
     * @internal
     */
    public function __toString(): string
    {
        return sprintf(
            'const %s=new Icon%s(%s)',
            $this->getId(),
            !isset($this->options['iconUrl']) ? '.Default' : '',
            $this->getOptions(),
        );
    }
}