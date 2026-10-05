<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Type;

/**
 * Represents a rectangular geographical area.
 *
 * @link https://leafletjs.com/reference-2.0.0.html#latlngbounds
 *
 * @psalm-import-type LatLngLike from LatLng
 * @psalm-type LatLngBoundsLike = list{LatLngLike, LatLngLike}|LatLngBounds
 */
final class LatLngBounds extends Type
{
    /**
     * Create a LatLngBounds.
     * @param list{LatLngLike, LatLngLike}|LatLngLike $corner1 A corner or the corners of the bounding box.
     * @param ?LatLngLike $corner2 The diagonally opposite corner of the bounding box from $corner1;
     *  ignored if $corner1 is list{LatLngLike, LatLngLike}
     */
    public function __construct(private array|LatLng $corner1, private array|LatLng|null $corner2 = null)
    {
        if (is_array($corner1) && count($corner1) === 2
            && (is_array($corner1[0]) || $corner1[0] instanceof LatLng)
            && (is_array($corner1[1]) || $corner1[1] instanceof LatLng)
        ) {
            [$this->corner1, $this->corner2] = $corner1;
        }

        if (is_array($this->corner1)) {
            $this->corner1 = new LatLng($this->corner1);
        }
        if (is_array($this->corner2)) {
            $this->corner2 = new LatLng($this->corner2);
        }

        parent::__construct();
    }

    /** @internal */
    public function __toString(): string
    {
        return sprintf(
            'const %s=new LatLngBounds(%s,%s)',
            $this->getId(),
            $this->noConst((string) $this->corner1),
            $this->noConst((string) $this->corner2),
        );
    }
}