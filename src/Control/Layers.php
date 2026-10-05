<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Control;

use BeastBytes\Leaflet\AddableTrait;
use BeastBytes\Leaflet\JsExpression;
use BeastBytes\Leaflet\Layer\Layer;
use InvalidArgumentException;
use JsonException;

/**
 * The layers control gives users the ability to switch between different base layers and switch overlays on/off.
 *
 * @link https://leafletjs.com/reference-2.0.0.html#control-layers
 */
final class Layers extends Control
{
    use AddableTrait;

    public const AUTO_Z_INDEX = true;
    public const COLLAPSED = true;
    public const HIDE_SINGLE_BASE = true;
    public const SORT_LAYERS = true;

    /**
     * @var Layer[] Base layers in the control
     */
    private array $baseLayers = [];

    /**
     * @var Layer[] Overlay layers in the control
     */
    private array $overlays = [];

    /**
     * Whether to auto assign z-index values to layers.
     * If enabled the control assigns zIndexes in increasing order to all of its layers
     * so that the order is preserved when switching them on/off.
     * @param bool $autoZIndex `true` to enable, `false` to disable.
     * @return self
     * @default true
     * @see Layers::AUTO_Z_INDEX
     */
    public function autoZIndex(bool $autoZIndex): self
    {
        $new = clone $this;
        $new->options['autoZIndex'] = $autoZIndex;
        return $new;
    }

    /**
     * Base layer(s) to include in the control.
     * @param Layer ...$baseLayer Base layer(s).
     * @return self
     */
    public function baseLayers(Layer ...$baseLayer): self
    {
        $new = clone $this;
        $new->baseLayers = array_merge($new->baseLayers, $baseLayer);
        return $new;
    }

    /**
     * Whether to collapse the control to an icon, expanded on pointer hover, touch, or keyboard activation,
     * or to show the expanded control.
     * @param bool $collapsed `true` to collapse into an icon, `false` to show expanded.
     * and
     * @return self
     * @default true
     * @see Layers::COLLAPSED
     */
    public function collapsed(bool $collapsed): self
    {
        $new = clone $this;
        $new->options['collapsed'] = $collapsed;
        return $new;
    }

    /**
     * The delay before the control is "collapsed" after changing the visibility of a layer.
     * A longer delay makes it easier to scroll through long layer lists.
     * @param non-negative-int $collapseDelay Collapse delay in milliseconds.
     * @return self
     * @default 0
     */
    public function collapseDelay(int $collapseDelay): self
    {
        if ($collapseDelay < 0) {
            throw new InvalidArgumentException('`$collapseDelay` must be a positive integer');
        }

        $new = clone $this;
        $new->options['collapseDelay'] = $collapseDelay;
        return $new;
    }

    /**
     * Whether to hide base layers in the control if there is only one.
     * @param bool $hideSingleBase `true` to hide a single base layer, `false` to it.
     * @return self
     * @default false
     * @see Layers::HIDE_SINGLE_BASE
     */
    public function hideSingleBase(bool $hideSingleBase): self
    {
        $new = clone $this;
        $new->options['hideSingleBase'] = $hideSingleBase;
        return $new;
    }

    /**
     * Overlay layer(s) to include in the control.
     * @param Layer ...$overlay Overlay layer(s).
     * @return self
     */
    public function overlays(Layer ...$overlay): self
    {
        $new = clone $this;
        $new->overlays = array_merge($new->overlays, $overlay);
        return $new;
    }

    /**
     * Set a custom function for sorting the layers when the `sortLayers` option is `true`.
     * @param string $sortFunction The body of a compare function that will be used for sorting the layers when
     * the `sortLayers` option is `true`.
     * The function receives four parameters: l1 and 12 - the two Layer instances, and n1 and n2 - the layer names.
     * @return self
     * @default Ssort layers alphabetically by name.
     * @see Layers::sortLayers()
     */
    public function sortFunction(string $sortFunction): self
    {
        $new = clone $this;
        $new->options['sortFunction'] = new JsExpression('(l1,l2,n1,n2)=>{' . $sortFunction . '}');
        return $new;
    }

    /**
     * Whether sort layers in the control.
     * @param bool $sortLayers `true` to sort the layers, `fale` to list in the order added.
     * @default false
     * @return self
     * @see Layers::SORT_LAYERS
     * @see Layers::sortFunction()
     */
    public function sortLayers(bool $sortLayers): self
    {
        $new = clone $this;
        $new->options['sortLayers'] = $sortLayers;
        return $new;
    }

    /**
     * @throws JsonException
     * @internal
     */
    public function __toString(): string
    {
        return sprintf(
            'const %s=new Control.%s(%s,%s%s)%s',
            $this->getId(),
            $this->getClassName(),
            $this->getLayers($this->baseLayers),
            $this->getLayers($this->overlays),
            $this->hasOptions() ? ',' . $this->getOptions() : '',
            $this->getAddTo(),
        );
    }

    /**
     * @throws JsonException
     */
    private function getLayers(array $layers): string
    {
        if (empty($layers)) {
            return '{}';
        }

        $_layers = [];

        /** @var Layer $layer */
        foreach ($layers as $layer) {
            $_layers[$layer->getName()] = new JsExpression($layer->getId());
        }

        return $this->jsonEncode($_layers);
    }
}