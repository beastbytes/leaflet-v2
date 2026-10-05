<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\UI;

use BeastBytes\Leaflet\JsExpression;
use BeastBytes\Leaflet\Layer\InteractiveLayer;
use BeastBytes\Leaflet\Layer\OpacityTrait;
use BeastBytes\Leaflet\Type\Icon;
use BeastBytes\Leaflet\Type\LatLng;
use BeastBytes\Leaflet\Type\Point;

/**
 * Represents a clickable/draggable marker icon on the map.
 *
 * @link https://leafletjs.com/reference-2.0.0.html#marker
 *
 * @psalm-import-type LatLngLike from LatLng
 * @psalm-import-type PointLike from Point
 */
final class Marker extends InteractiveLayer
{
    use OpacityTrait;

    public const AUTO_PAN = true;
    public const AUTO_PAN_ON_FOCUS = true;
    public const DRAGGABLE = true;
    public const KEYBOARD = true;
    public const RISE_ON_HOVER = true;

    /**
     * Create a marker.
     * @param array|LatLng $location The geographical location of the marker.
     * @psalm-param LatLngLike $location The geographical location of the marker.
     */
    public function __construct(private array|LatLng $location)
    {
        if (is_array($location)) {
            $this->location = new LatLng($location);
        }

        parent::__construct();
    }

    /**
     * Text for the alt attribute of the icon image.
     * Useful for accessibility.
     * @param string $alt Alt text.
     * @return self
     * @default 'Marker'
     */
    public function alt(string $alt): self
    {
        $new = clone $this;
        $new->options['alt'] = $alt;
        return $new;
    }

    /**
     * Whether to pan the map when dragging the marker near the map edge.
     * @param bool $autoPan `true` to auto-pan, `false` not to.
     * @return self
     * @default false
     * @see Marker::AUTO_PAN
     */
    public function autoPan(bool $autoPan): self
    {
        $new = clone $this;
        $new->options['autoPan'] = $autoPan;
        return $new;
    }

    /**
     * Whether the map should pan when the marker is focused
     * (via e.g. pressing tab on the keyboard) to ensure the marker is visible within the map's bounds.
     * @param bool $autoPanOnFocus `true` to auto-pan on focus, `false` not to.
     * @return self
     * @default true
     * @see Marker::AUTO_PAN_ON_FOCUS
     */
    public function autoPanOnFocus(bool $autoPanOnFocus): self
    {
        $new = clone $this;
        $new->options['autoPanOnFocus'] = $autoPanOnFocus;
        return $new;
    }

    /**
     * Distance (in pixels to the left/right and to the top/bottom) of the map edge to start panning the map.
     * @param array|Point $autoPanPadding Padding.
     * @psalm-param PointLike $autoPanPadding Padding.
     * @return self
     * @default Point(50, 50)
     */
    public function autoPanPadding(array|Point $autoPanPadding): self
    {
        if (is_array($autoPanPadding)) {
            $autoPanPadding = new Point($autoPanPadding);
        }

        $new = clone $this;
        $new->options['autoPanPadding'] = new JsExpression($autoPanPadding);
        return $new;
    }

    /**
     * Number of pixels the map should pan by when the marker is dragged to an edge of the map.
     * @param int $autoPanSpeed Number of pixels.
     * @return self
     * @default 10
     */
    public function autoPanSpeed(int $autoPanSpeed): self
    {
        $new = clone $this;
        $new->options['autoPanSpeed'] = $autoPanSpeed;
        return $new;
    }

    /**
     * Whether the marker is draggable.
     * @param bool $draggable `true` for the marker to draggable, `false` for it not to be.
     * @return self
     * @default false
     * @see Marker::DRAGGABLE
     */
    public function draggable(bool $draggable): self
    {
        $new = clone $this;
        $new->options['draggable'] = $draggable;
        return $new;
    }

    /**
     * Icon instance to use for rendering the marker.
     * See `Icon` documentation for details on how to customise the marker icon.
     * @param Icon|string $icon An `Icon` instance or the icon image URL.
     * @return self
     * @default Icon.Default
     * @see Icon
     */
    public function icon(Icon|string $icon): self
    {
        if (is_string($icon)) {
            $icon = new Icon($icon);
        }

        $new = clone $this;
        $new->options['icon'] = new JsExpression($icon);
        return $new;
    }

    /**
     * Whether the marker can be tabbed to with a keyboard and clicked by pressing enter.
     * @param bool $keyboard `true` to allow use of the keyboard, `false` not to.
     * @return self
     * @default true
     * @see Marker::KEYBOARD
     */
    public function keyboard(bool $keyboard): self
    {
        $new = clone $this;
        $new->options['keyboard'] = $keyboard;
        return $new;
    }

    /**
     * Set the z-index offset used for the riseOnHover feature.
     * @param int $riseOffset z-index offset.
     * @return self
     * @default 250
     */
    public function riseOffset(int $riseOffset): self
    {
        $new = clone $this;
        $new->options['riseOffset'] = $riseOffset;
        return $new;
    }

    /**
     * Whether the marker will rise to be on top of others when the pointer is hovered over it.
     * @param bool $riseOnHover `true` to enable, `false` to disable.
     * @return self
     * @default false
     * @see Marker::RISE_ON_HOVER
     */
    public function riseOnHover(bool $riseOnHover): self
    {
        $new = clone $this;
        $new->options['riseOnHover'] = $riseOnHover;
        return $new;
    }

    /**
     * Set tge map pane where the markers shadow will be added.
     * @param string $shadowPane Shadow pane.
     * @return self
     * @default 'shadowPane'
     */
    public function shadowPane(string $shadowPane): self
    {
        $new = clone $this;
        $new->options['shadowPane'] = $shadowPane;
        return $new;
    }

    /**
     * Text for the browser tooltip that appears on marker hover (no tooltip by default).
     * Useful for accessibility.
     * @param string $title Title attribute text.
     *
     * @return self
     * @default ''
     */
    public function title(string $title): self
    {
        $new = clone $this;
        $new->options['title'] = $title;
        return $new;
    }

    /**
     * Use this option to put the marker on top of or below all others;
     * specify a high positive or negative value respectively.
     * By default, marker zIndex is set automatically based on its latitude.
     * @param int $zIndexOffset Offset.
     *
     * @return self
     * @default 0
     */
    public function zIndexOffset(int $zIndexOffset): self
    {
        $new = clone $this;
        $new->options['zIndexOffset'] = $zIndexOffset;
        return $new;
    }

    /** @internal */
    public function __toString(): string
    {
        return sprintf(
            'const %s=new Marker(%s%s)%s',
            $this->getId(),
            $this->noConst((string) $this->location),
            $this->hasOptions() ? ',' . $this->getOptions() : '',
            $this->_toString(),
        );
    }
}