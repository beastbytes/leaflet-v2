<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\Vector\Renderer;

use JsonException;

/**
 * Allows vector layers to be displayed with {@link https://developer.mozilla.org/docs/Web/SVG SVG}.
 *
 * @link https://leafletjs.com/reference-2.0.0.html#svg
 */
final class Svg extends BlanketOverlay implements Renderer {
    /**
     * @throws JsonException
     * @internal
     */
    public function __toString(): string
    {
        return sprintf('new SVG(%s)', $this->hasOptions() ? $this->getOptions() : '');
    }
}