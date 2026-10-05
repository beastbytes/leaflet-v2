<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Control;

use BeastBytes\Leaflet\Map;
use InvalidArgumentException;

/**
 * A simple scale control that shows the scale of the current centre of screen in metric (m/km) and imperial (mi/ft) systems.
 *
 * @link https://leafletjs.com/reference-2.0.0.html#control-scale
 */
final class Scale extends Control
{
    public const IMPERIAL = true;
    public const MAX_WIDTH_EXCEPTION_MESSAGE = '`maxWidth` must be a positive integer.';
    public const METRIC = true;

    /**
     * Whether to show an imperial scale line (mi/ft).
     * @param bool $imperial `true` to show an imperial scale line, or `false` not to.
     * @return self
     * @default true
     * @see Scale::IMPERIAL
     */
    public function imperial(bool $imperial): self
    {
        $new = clone $this;
        $new->options['imperial'] = $imperial;
        return $new;
    }

    /**
     * Maximum width of the control in pixels.
     * The width is set dynamically to show round values (e.g. 100, 200, 500).
     * @param positive-int $maxWidth Maximum width.
     * @return self
     * @default 100
     */
    public function maxWidth(int $maxWidth): self
    {
        if ($maxWidth < 1) {
            throw new InvalidArgumentException(self::MAX_WIDTH_EXCEPTION_MESSAGE);
        }

        $new = clone $this;
        $new->options['maxWidth'] = $maxWidth;
        return $new;
    }

    /**
     * Whether to show a metric scale line (m/km).
     * @param bool $metric `true` to show a metric scale line, or `false` not to.
     * @return self
     * @default true
     * @see Scale::METRIC
     */
    public function metric(bool $metric): self
    {
        $new = clone $this;
        $new->options['metric'] = $metric;
        return $new;
    }

    /**
     * Whether to update the control when the map is idle (on `moveend`) or continuously (on `move`).
     * @param bool $updateWhenIdle `true` to update when idle, `false` to continually update.
     * @return self
     */
    public function updateWhenIdle(bool $updateWhenIdle): self
    {
        $new = clone $this;
        $new->options['updateWhenIdle'] = $updateWhenIdle;
        return $new;
    }
}