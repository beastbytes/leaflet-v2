<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\Vector\Renderer;

use JsonException;

/**
 * Allows vector layers to be displayed using the {@link https://developer.mozilla.org/docs/Web/API/Canvas_API Canvas API}.
 *
 * @link https://leafletjs.com/reference-2.0.0.html#canvas
 */
final class Canvas extends BlanketOverlay implements Renderer {
    /**
     * How much to extend the click tolerance in pixels around a path/object on the map.
     * @param int $tolerance Click tolerance.
     * @return self
     * @default 0
     */
    public function tolerance(int $tolerance): self
    {
        $new = clone $this;
        $new->options['tolerance'] = $tolerance;
        return $new;
    }

    /**
     * @throws JsonException
     * @internal
     */
    public function __toString(): string
    {
        return sprintf('new Canvas(%s)', $this->hasOptions() ? $this->getOptions() : '');
    }
}