<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\Other;

use BeastBytes\Leaflet\JsExpression;
use BeastBytes\Leaflet\Layer\InteractiveLayer;
use BeastBytes\Leaflet\Layer\Layer;

/** Base class for grouping layers. */
abstract class Group extends InteractiveLayer
{
    /**
     * @var JsExpression[] $layers Layers in the group
     */
    protected array $layers = [];

    /**
     * Create a layer group.
     * @param Layer ...$layers Layers to group.
     */
    public function __construct(Layer ...$layers)
    {
        foreach ($layers as $layer) {
            $this->layers[] = new JsExpression($layer);
        }

        parent::__construct();
    }
}