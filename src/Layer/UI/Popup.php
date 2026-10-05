<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\UI;

use BeastBytes\Leaflet\JsExpression;
use BeastBytes\Leaflet\Layer\Layer;
use BeastBytes\Leaflet\Type\LatLng;
use BeastBytes\Leaflet\Type\Point;

/**
 * Represents a popup on the map.
 *
 * @link https://leafletjs.com/reference-2.0.0.html#popup
 *
 * @psalm-import-type LatLngLike from LatLng
 * @psalm-import-type PointLike from Point
 */
final class Popup extends DivOverlay
{
    public const AUTO_CLOSE = true;
    public const AUTO_PAN = true;
    public const CLOSE_BUTTON = true;
    public const CLOSE_ON_CLICK = true;
    public const CLOSE_ON_ESCAPE_KEY = true;
    public const KEEP_IN_VIEW = true;
    public const TRACK_RESIZE = true;

    /**
     * Create a Popup
     * @param array|LatLng|Layer|null $location Either the geographical location of the marker or the source layer.
     * @psalm-param LatLngLike|Layer|null $location Either the geographical location of the marker or the source layer.
     */
    public function __construct(private array|LatLng|Layer|null $location = null)
    {
        if (is_array($this->location)) {
            $this->location = new LatLng($this->location);
        }

        parent::__construct();
    }

    /**
     * Whether to close the popup if another is opened.
     * @param bool $autoClose `true` to close when another popup is opened, `false` to leave open.
     * @return self
     * @default true
     * @see Popup::AUTO_CLOSE
     */
    public function autoClose(bool $autoClose): self
    {
        $new = clone $this;
        $new->options['autoClose'] = $autoClose;
        return $new;
    }

    /**
     * Whether to the map should pan to fit the opened popup.
     * @param bool $autoPan `true` for the map to pan to fit the opened popup, `false` not to pan.
     * @return self
     * @default true
     * @see Popup::AUTO_PAN
     */
    public function autoPan(bool $autoPan): self
    {
        $new = clone $this;
        $new->options['autoPan'] = $autoPan;
        return $new;
    }

    /**
     * Equivalent of setting both top left and bottom right auto-pan padding to the same value.
     * @param array|Point $autoPanPadding Padding.
     * @psalm-param PointLike $autoPanPadding Padding.
     * @return self
     * @default Point(5, 5)
     * @see Popup::autoPanPaddingBottomRight()
     * @see Popup::autoPanPaddingTopLeft()
     */
    public function autoPanPadding(array|Point $autoPanPadding): self
    {
        $new = clone $this;
        $new->options['autoPanPadding'] = new JsExpression((
            is_array($autoPanPadding)
            ? new Point($autoPanPadding)
            : $autoPanPadding
        ));
        return $new;
    }

    /**
     * Set the margin between the popup and the bottom right corner of the map view after auto-panning.
     * @param array|Point $autoPanPaddingBottomRight Bottom right padding.
     * @psalm-param PointLike $autoPanPaddingBottomRight Bottom right padding.
     * @return self
     * @default null
     * @see Popup::autoPanPadding()
     * @see Popup::autoPanPaddingTopLeft()
     */
    public function autoPanPaddingBottomRight(array|Point $autoPanPaddingBottomRight): self
    {
        $new = clone $this;
        $new->options['autoPanPaddingBottomRight'] = new JsExpression((string) (
            is_array($autoPanPaddingBottomRight)
            ? new Point($autoPanPaddingBottomRight)
            : $autoPanPaddingBottomRight
        ));
        return $new;
    }

    /**
     * Set the margin between the popup and the top left corner of the map view after auto-panning.
     * @param array|Point $autoPanPaddingTopLeft Top left padding.
     * @psalm-param PointLike $autoPanPaddingTopLeft Top left padding.
     * @return self
     * @default null
     * @see Popup::autoPanPadding()
     * @see Popup::autoPanPaddingBottomRight()
     */
    public function autoPanPaddingTopLeft(array|Point $autoPanPaddingTopLeft): self
    {
        $new = clone $this;
        $new->options['autoPanPaddingTopLeft'] = new JsExpression((
            is_array($autoPanPaddingTopLeft)
            ? new Point($autoPanPaddingTopLeft)
            : $autoPanPaddingTopLeft
        ));
        return $new;
    }

    /**
     * Whether to show a close button on the popup.
     * @param bool $closeButton `true` to show a close button, `false` not to.
     * @return self
     * @default true
     * @see Popup::CLOSE_BUTTON
     */
    public function closeButton(bool $closeButton): self
    {
        $new = clone $this;
        $new->options['closeButton'] = $closeButton;
        return $new;
    }

    /**
     * Set the 'aria-label' attribute of the close button.
     * @param string $closeButtonLabel 'aria-label' attribute of the close button.
     * @return self
     * @default 'Close popup'
     */
    public function closeButtonLabel(string $closeButtonLabel): self
    {
        $new = clone $this;
        $new->options['closeButtonLabel'] = $closeButtonLabel;
        return $new;
    }

    /**
     * Override the default behaviour of the popup closing when a user clicks on the map.
     * @param bool $closeOnClick `true` to close on click, `false` not to.
     * @return self
     * @default map `closePopupOnClick` option
     * @see Map::closePopupOnClick()
     * @see Popup::CLOSE_ON_CLICK
     */
    public function closeOnClick(bool $closeOnClick): self
    {
        $new = clone $this;
        $new->options['closeOnClick'] = $closeOnClick;
        return $new;
    }

    /**
     * Override the default behaviour of the `ESC` key for closing of the popup.
     * @param bool $closeOnEscapeKey `true` to close on `ESC` key, `false` not to.
     * @return self
     * @default true
     * @see Popup::CLOSE_ON_ESCAPE_KEY
     */
    public function closeOnEscapeKey(bool $closeOnEscapeKey): self
    {
        $new = clone $this;
        $new->options['closeOnEscapeKey'] = $closeOnEscapeKey;
        return $new;
    }

    /**
     * Whether to prevent users from panning the popup off of the screen while it is open.
     * @param bool $keepInView `true` to keep the popup in view, `false` not to.
     * @return self
     * @default false
     * @see Popup::KEEP_IN_VIEW
     */
    public function keepInView(bool $keepInView): self
    {
        $new = clone $this;
        $new->options['keepInView'] = $keepInView;
        return $new;
    }

    /**
     * Set the height in pixels of a scrollable container inside the popup if its content exceeds it.
     * The scrollable container can be styled using the leaflet-popup-scrolled CSS class selector.
     * @param int $maxHeight Height of container.
     * @return self
     * @default null
     */
    public function maxHeight(int $maxHeight): self
    {
        $new = clone $this;
        $new->options['maxHeight'] = $maxHeight;
        return $new;
    }

    /**
     * Set the maximum width of the popup in pixels.
     * @param int $maxWidth Max width of the popup.
     * @return self
     * @default 300
     */
    public function maxWidth(int $maxWidth): self
    {
        $new = clone $this;
        $new->options['maxWidth'] = $maxWidth;
        return $new;
    }

    /**
     * Set the minimum width of the popup in pixels.
     * @param int $minWidth Min width of the popup.
     *
     * @return self
     * @default 50
     */
    public function minWidth(int $minWidth): self
    {
        $new = clone $this;
        $new->options['minWidth'] = $minWidth;
        return $new;
    }

    /**
     * Set the popup position offset.
     * @param Point $offset Popup position offset.
     *
     * @return self
     * @default Point(0, 7)
     */
    public function offset(Point $offset): self
    {
        $new = clone $this;
        $new->options['offset'] = $offset;
        return $new;
    }

    /**
     * Whether the popup should react to changes in the size of its contents
     * (e.g. when an image inside the popup loads) and reposition itself.
     * @param bool $trackResize `true` to track content resize, `false` not to.
     * @return self
     * @default true
     */
    public function trackResize(bool $trackResize): self
    {
        $new = clone $this;
        $new->options['trackResize'] = $trackResize;
        return $new;
    }

    /** @internal */
    public function __toString(): string
    {
        if ($this->location instanceof LatLng) {
            return sprintf(
                'const %s=new Popup(%s%s)%s',
                $this->getId(),
                $this->noConst((string) $this->location),
                $this->hasOptions() ? ',' . $this->getOptions() : '',
                $this->_toString(),
            );
        }

        return sprintf(
            'const %s=new Popup(%s%s)%s',
            $this->getId(),
            $this->getOptions(),
            $this->location instanceof Layer ? ',' . $this->location : '',
            $this->_toString(),
        );
    }
}
