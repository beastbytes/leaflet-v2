<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\Vector;

use BeastBytes\Leaflet\ClassNameTrait;
use BeastBytes\Leaflet\JsExpression;
use BeastBytes\Leaflet\Layer\InteractiveLayer;
use BeastBytes\Leaflet\Layer\OpacityTrait;
use BeastBytes\Leaflet\Layer\Vector\Renderer\Renderer;
use InvalidArgumentException;

/**
 * An abstract class that contains options and constants shared between vector overlays.
 *
 * https://leafletjs.com/reference-2.0.0.html#path
 */
abstract class Path extends InteractiveLayer
{
    use ClassNameTrait;
    use OpacityTrait;

    public const FILL = true;
    public const STROKE = true;

    /**
     * Set the stroke colour.
     * @param string $color Stroke colour.
     * @return self
     * @default '#3388ff'
     */
    public function color(string $color): self
    {
        $new = clone $this;
        $new->options['color'] = $color;
        return $new;
    }

    /**
     * Set the stroke dash pattern.
     * @param int ...$dashArray
     * @return self
     * @default null
     * @throws InvalidArgumentException Invalid dash array.
     * @see https://developer.mozilla.org/en-US/docs/Web/SVG/Reference/Attribute/stroke-dasharray
     */
    public function dashArray(int ...$dashArray): self
    {
        if (count($dashArray) < 2) {
            throw new InvalidArgumentException('`dashArray` must be at least two integers');
        }

        $new = clone $this;
        $new->options['dashArray'] = implode(' ', $dashArray);
        return $new;
    }

    /**
     * Where in the dash array to start the dash.
     * @param int $dashOffset An integer that defines the distance into the dash pattern to start the dash.
     * @return self
     * @default null
     * @see https://developer.mozilla.org/en-US/docs/Web/SVG/Reference/Attribute/stroke-dashoffset
     */
    public function dashOffset(int $dashOffset): self
    {
        $new = clone $this;
        $new->options['dashOffset'] = (string) $dashOffset;
        return $new;
    }

    /**
     * Whether the shape should be filled.
     * @param bool $fill `true` to fill circles and ploygons, `false` not to fill.
     * @return self
     * @default depends
     * @see Path::FILL
     */
    public function fill(bool $fill): self
    {
        $new = clone $this;
        $new->options['fill'] = $fill;
        return $new;
    }

    /**
     * Set the fill colour.
     * @param string $fillColor Fill colour.
     * @return self
     * @default Value of the `color` option
     */
    public function fillColor(string $fillColor): self
    {
        $new = clone $this;
        $new->options['fillColor'] = $fillColor;
        return $new;
    }

    /**
     * Set the fill opacity.
     * @param float $fillOpacity Fill opacity.
     * @return self
     * @default 0.2
     */
    public function fillOpacity(float $fillOpacity): self
    {
        $new = clone $this;
        $new->options['fillOpacity'] = $fillOpacity;
        return $new;
    }

    /**
     * Defines how the inside of a shape is determined.
     * @param FillRule $fillRule Fill-rule.
     * @return self
     * @default FillRule::evenOdd
     * @see FillRule
     */
    public function fillRule(FillRule $fillRule): self
    {
        $new = clone $this;
        $new->options['fillRule'] = $fillRule;
        return $new;
    }

    /**
     * Defines shape to be used at the end of the stroke.
     * @param LineCap $lineCap Stroke linecap.
     * @return self
     * @default LineCap::round
     * @see LineCap
     */
    public function lineCap(LineCap $lineCap): self
    {
        $new = clone $this;
        $new->options['lineCap'] = $lineCap;
        return $new;
    }

    /**
     * Defines shape to be used at the corners of the stroke.
     * @param LineJoin $lineJoin Stroke linejoin.
     * @return self
     * @default LineJoin::round
     * @see LineJoin
     */
    public function lineJoin(LineJoin $lineJoin): self
    {
        $new = clone $this;
        $new->options['lineJoin'] = $lineJoin;
        return $new;
    }

    /**
     * Whether to draw a stroke along the path.
     * Set false to disable borders on polygons or circles.
     * @param bool $stroke `true` to draw a stroke, `false` not to draw a stroke.
     * @return self
     * @default true
     * @see Path::STROKE
     */
    public function stroke(bool $stroke): self
    {
        $new = clone $this;
        $new->options['stroke'] = $stroke;
        return $new;
    }

    /**
     * Set the stroke width.
     * @param int $weight Stroke width in pixels.
     * @return self
     * @default 3
     */
    public function weight(int $weight): self
    {
        $new = clone $this;
        $new->options['weight'] = $weight;
        return $new;
    }

    /**
     * Set a renderer for this path.
     * If set, it will override the `pane` option of the path.
     * @param Renderer $renderer Path renderer.
     * @return self
     * @default Use the map default renderer.
     */
    public function renderer(Renderer $renderer): self
    {
        $new = clone $this;
        $new->options['renderer'] = new JsExpression($renderer);
        return $new;
    }
}