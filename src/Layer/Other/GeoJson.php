<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\Other;

use BeastBytes\Leaflet\JsExpression;
use BeastBytes\Leaflet\Layer\Layer;
use BeastBytes\Leaflet\OptionsTrait;
use JsonException;

/**
 * Represents a GeoJSON object.
 * Allows GeoJSON data to be parsed and displayed it on the map.
 *
 * @link https://leafletjs.com/reference-2.0.0.html#geojson
 */
final class GeoJson extends Layer
{
    use OptionsTrait;

    public const MARKERS_INHERIT_OPTIONS = true;

    /**
     * Create a GeoJSON object or objects.
     * @param array|string $geoJson A GeoJSON string or an array that can be JSON encoded to a GeoJSON object.
     * @throws JsonException
     */
    public function __construct(private array|string $geoJson)
    {
        if (is_array($geoJson)) {
            $this->geoJson = json_encode($geoJson, JSON_THROW_ON_ERROR);
        }

        parent::__construct();
    }

    /**
     * A JavaScript function that will be used for converting GeoJSON coordinates to `LatLng`s.
     * @param string $coordsToLatLng Conversion function.
     * @return self
     * @default the coordsToLatLng static method.
     */
    public function coordsToLatLng(string $coordsToLatLng): self
    {
        $new = clone $this;
        $new->options['coordsToLatLng'] = new JsExpression($coordsToLatLng);
        return $new;
    }

    /**
     * A JavaScript function that will be used to decide whether to include a feature or not.
     * @param string $filter Feature filter function.
     * @return self
     * @default include all features
     */
    public function filter(string $filter): self
    {
        $new = clone $this;
        $new->options['filter'] = new JsExpression($filter);
        return $new;
    }

    /**
     * Whether default Markers for "Point" type Features inherit from group options.
     * @param bool $markersInheritOptions `true` to enable inheritance, `false` not to.
     * @return self
     * @default false
     * @see GeoJson::MARKERS_INHERIT_OPTIONS
     */
    public function markersInheritOptions(bool $markersInheritOptions): self
    {
        $new = clone $this;
        $new->options['markersInheritOptions'] = $markersInheritOptions;
        return $new;
    }

    /**
     * A JavaScript function that will be called once for each created Feature, after it has been created and styled.
     * Useful for attaching events and popups to features.
     * @param string $onEachFeature On each feature function.
     * @return self
     * @default do nothing with the newly created layers
     */
    public function onEachFeature(string $onEachFeature): self
    {
        $new = clone $this;
        $new->options['onEachFeature'] = new JsExpression($onEachFeature);
        return $new;
    }

    /**
     * A JavaScript function defining how GeoJSON points spawn Leaflet layers.
     * Internally called by `Leaflet` when data is added, passing the GeoJSON point feature and its LatLng.
     * @param string $pointToLayer Point to Layer function.
     * @return self
     * @default spawn a default Marker
     */
    public function pointToLayer(string $pointToLayer): self
    {
        $new = clone $this;
        $new->options['pointToLayer'] = new JsExpression($pointToLayer);
        return $new;
    }

    /**
     * A JavaScript function defining the Path options for styling GeoJSON lines and polygons.
     * Internally called by `Leaflet` when data is added.
     * @param string $style Style function.
     * @return self
     * @default do not override any defaults
     */
    public function style(string $style): self
    {
        $new = clone $this;
        $new->options['style'] = new JsExpression($style);
        return $new;
    }

    /** @internal */
    public function __toString(): string
    {
        return sprintf(
            'const %s=new GeoJSON(%s%s)%s',
            $this->getId(),
            $this->geoJson,
            $this->hasOptions() ? ',' . $this->getOptions() : '',
            $this->_toString()
        );
    }
}