<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet;

/**
 * The JavaScript class name for Leaflet maps.
 *
 * @link https://leafletjs.com/reference-2.0.0.html#map
 */
enum MapClass
{
    case LeafletMap;
    case Map;
}