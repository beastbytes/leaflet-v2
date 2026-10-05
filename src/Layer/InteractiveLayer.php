<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer;

use BeastBytes\Leaflet\OptionsTrait;
use BeastBytes\Leaflet\RangeTrait;
use Stringable;

/** Base class for interactive layers. */
abstract class InteractiveLayer extends Layer
{
    public const BUBBLING_POINTER_EVENTS = true;
    public const INTERACTIVE = true;

    /**
     * Whether a pointer event on this layer bubble-up
     * and trigger the same event on the map (unless DomEvent.stopPropagation is used).
     * @param bool $bubblingPointerEvents `true` to enable, `false` to disable.
     * @return self
     * @default false
     * @see InteractiveLayer::BUBBLING_POINTER_EVENTS
     */
    public function bubblingPointerEvents(bool $bubblingPointerEvents): self
    {
        $new = clone $this;
        $new->options['bubblingPointerEvents'] = $bubblingPointerEvents;
        return $new;
    }

    /**
     * Whether this layer is interactive, i.e. emits pointer events and acts as a part of the underlying map.
     * @param bool $interactive `true` to enable, `false` to disable.
     * @return self
     * @default true
     */
    public function interactive(bool $interactive): self
    {
        $new = clone $this;
        $new->options['interactive'] = $interactive;
        return $new;
    }
}