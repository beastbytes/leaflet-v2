<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer;

use BeastBytes\Leaflet\Addable;
use BeastBytes\Leaflet\AddableTrait;
use BeastBytes\Leaflet\EventTrait;
use BeastBytes\Leaflet\LeafletTrait;
use BeastBytes\Leaflet\Layer\UI\Popup;
use BeastBytes\Leaflet\Layer\UI\Tooltip;
use BeastBytes\Leaflet\Map;
use BeastBytes\Leaflet\OptionsTrait;
use Stringable;

/** Base class for layers */
abstract class Layer implements Addable, Stringable
{
    use AddableTrait;
    use EventTrait;
    use LeafletTrait;
    use OptionsTrait;

    private ?string $name = null;

    private ?Popup $popup = null;
    private ?Tooltip $tooltip = null;

    public function __construct()
    {
        Map::import($this);
    }

    /**
     * String to be shown in the attribution control, e.g. "© OpenStreetMap contributors".
     * It describes the layer data and is often a legal obligation towards copyright holders and tile providers.
     * @param string $attribution Attribution
     * @return self
     */
    public function attribution(string $attribution): self
    {
        $new = clone $this;
        $new->options['attribution'] = $attribution;
        return $new;
    }

    /**
     * Returns the layer name.
     * @return string Layer name
     */
    public function getName(): string
    {
        return $this->name ?? $this->id;
    }

    /**
     * Set the layer name
     * @param string $name Name of the layer when used in the Layers control.     *
     * @return self
     * @default Layer ID
     */
    public function name(string $name): self
    {
        $new = clone $this;
        $new->name = $name;
        return $new;
    }

    /**
     * Set the pane the layer is added to.
     * Not effective if the renderer option is set.
     * @param string $pane Pane name
     * @return self
     * @default GridLayer and TileLayer 'tileLayer', other layers 'overlayPane'
     */
    public function pane(string $pane): self
    {
        $new = clone $this;
        $new->options['pane'] = $pane;
        return $new;
    }

    /**
     * Bind a popup to the layer.
     * @param string|Popup $popup The popup or content for a popup to bund to the layer
     * @return self
     */
    public function popup(string|Popup $popup): self
    {
        $new = clone $this;
        $new->popup = is_string($popup) ? (new Popup())->content($popup) : $popup;
        return $new;
    }

    /**
     * Bind a tooltip to the layer.
     * @param string|Tooltip $tooltip The tooltip or content for a tooltip to bind to the layer
     * @return self
     */
    public function tooltip(string|Tooltip $tooltip): self
    {
        $new = clone $this;
        $new->tooltip = is_string($tooltip) ? (new Tooltip())->content($tooltip) : $tooltip;
        return $new;
    }

    /**
     * Generates JavaScript to add the layer to a map, binding a popup and/or tooltip to the layer if set.
     * @return string JavaScript to add the layer to the map.
     * @internal
     */
    protected function _toString(): string
    {
        return $this->noConst(sprintf(
            '%s%s%s%s',
            $this->popup instanceof Popup ? sprintf('.bindPopup(%s)', $this->popup) : '',
            $this->tooltip instanceof Tooltip ? sprintf('.bindTooltip(%s)', $this->tooltip) : '',
            $this->getEvents(),
            $this->getAddTo(),
        ));
    }
}