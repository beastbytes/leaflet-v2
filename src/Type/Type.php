<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Type;

use BeastBytes\Leaflet\LeafletTrait;
use BeastBytes\Leaflet\Leaflet;
use BeastBytes\Leaflet\Map;
use Stringable;

/** Base class for all Leaflet types. */
abstract class Type implements Leaflet, Stringable
{
    use LeafletTrait;

    /** Child class _must_ call the parent constructor to ensure the JavaScript import. */
    public function __construct()
    {
        Map::import($this);
    }
}