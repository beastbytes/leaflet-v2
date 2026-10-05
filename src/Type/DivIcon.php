<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Type;

/**
 * Represents a lightweight icon for markers that uses a simple <div> element instead of an image.
 *
 * Inherits from Icon but ignores the iconUrl and shadow options.
 *
 * @link https://leafletjs.com/reference-2.0.0.html#divicon
 *
 * @psalm-import-type PointLike from Point
 */
final class DivIcon extends Icon
{
    /**
     * @param PointLike $bgPos Relative position of the background, in pixels.
     *
     * @default [0, 0]
     * @return self
     */
    public function bgPos(array|Point $bgPos): self
    {
        $new = clone $this;
        $new->options['bgPos'] = $bgPos;
        return $new;
    }

    /**
     * @param string $html Custom HTML code to put inside the div element
     * @return self
     */
    public function html(string $html): self
    {
        $new = clone $this;
        $new->options['html'] = $html;
        return $new;
    }
}