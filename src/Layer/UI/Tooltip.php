<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\UI;

use BeastBytes\Leaflet\JsExpression;
use BeastBytes\Leaflet\Layer\Layer;
use BeastBytes\Leaflet\Type\LatLng;
use BeastBytes\Leaflet\Type\Point;

/**
 * Represents a tooltip on the map.
 *
 * @link https://leafletjs.com/reference-2.0.0.html#tooltip
 *
 * @psalm-import-type LatLngLike from LatLng
 * @psalm-import-type PointLike from Point
 */
final class Tooltip extends DivOverlay
{
    public const PERMANENT = true;
    public const STICKY = true;

    /**
     * Create a tooltip.
     * @psalm-param LatLngLike|Layer|null $location Either the geographical location of the marker or the source layer
     */
    public function __construct(private array|LatLng|Layer|null $location = null)
    {
        if (is_array($this->location)) {
            $this->location = new LatLng($this->location);
        }

        parent::__construct();
    }

    /**
     * Set the direction in which the tooltip opens.
     * Direction::auto will dynamically switch between right and left according to the tooltip position on the map.
     * @param Direction $direction Direction in which the tooltip opens.
     * @return self
     * @default Direction::auto
     * @see Direction
     */
    public function direction(Direction $direction): self
    {
        $new = clone $this;
        $new->options['direction'] = $direction;
        return $new;
    }

    /**
     * Tooltip position offest.
     * @param array|Point $offset Tooltip position offset.
     * @psalm-param PointLike $offset Tooltip position offset.
     * @return self
     * @default Point(0, 0)
     */
    public function offset(array|Point $offset): self
    {
        $new = clone $this;
        $new->options['offset'] = new JsExpression((is_array($offset) ? new Point($offset) : $offset));
        return $new;
    }

    /**
     * Whether to open the tooltip permanently or only on `pointerover`.
     * @param bool $permanent `true` to open the tooltip permanently. `false` to open on `pointerover`.
     * @return self
     * @default false
     * @see Tooltip::PERMANENT
     */
    public function permanent(bool $permanent): self
    {
        $new = clone $this;
        $new->options['permanent'] = $permanent;
        return $new;
    }

    /**
     * Whether the pointer 'sticks' to the pointer.
     * @param bool $sticky `true` to follow the pointer, `false` to be fixed at the feature centre.
     *
     * @return self
     * @default false
     * @see Tooltip::STICKY
     */
    public function sticky(bool $sticky): self
    {
        $new = clone $this;
        $new->options['sticky'] = $sticky;
        return $new;
    }

    /** @internal */
    public function __toString(): string
    {
        if ($this->location instanceof LatLng) {
            return sprintf(
                'const %s=new Tooltip(%s%s)%s',
                $this->getId(),
                $this->noConst((string) $this->location),
                $this->hasOptions() ? ',' . $this->getOptions() : '',
                $this->_toString(),
            );
        }

        return sprintf(
            'const %s=new Tooltip(%s%s)%s',
            $this->getId(),
            $this->getOptions(),
            $this->location instanceof Layer ? ',' . $this->location : '',
            $this->_toString(),
        );
    }
}