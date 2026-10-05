<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Type;

/**
 * Represents a rectangular area in pixel coordinates
 *
 * @link https://leafletjs.com/reference-2.0.0.html#bounds
 *
 * @psalm-import-type PointLike from Point
 */
final class Bounds extends Type
{
    /**
     * Create a Bounds.
     * @param list{PointLike, PointLike}|PointLike $corner1 A corner or the corners of the bounding box.
     * @param ?PointLike $corner2 The diagonally opposite corner of the bounding box from $corner1;
     * ignored if $corner1 is list{PointLike, PointLike}
     */
    public function __construct(private array|Point $corner1, private array|Point|null $corner2 = null)
    {
        if (is_array($corner1) && count($corner1) === 2
            && (is_array($corner1[0]) || $corner1[0] instanceof Point)
            && (is_array($corner1[1]) || $corner1[1] instanceof Point)
        ) {
            [$this->corner1, $this->corner2] = $corner1;
        }

        if (is_array($this->corner1)) {
            $this->corner1 = new Point($this->corner1);
        }
        if (is_array($this->corner2)) {
            $this->corner2 = new Point($this->corner2);
        }

        parent::__construct();
    }

    /** @internal */
    public function __toString(): string
    {
        return sprintf(
            'const %s=new Bounds(%s,%s)',
            $this->getId(),
            $this->noConst((string) $this->corner1),
            $this->noConst((string) $this->corner2),
        );
    }
}