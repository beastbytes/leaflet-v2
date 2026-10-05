---
title: GeoJson
lastUpdated: 2026-10-05 14:17:39
description: Represents a GeoJSON object.
head:
  - - meta
    - name: element-type
      content: Class
  - - meta
    - name: Generator
      content: CodPhp
---

# <span class="cod-php-modifier">final</span> class `GeoJson`

<a  href="https://github.com/beastbytes/leaflet-v2/blob/master/src/Layer/Other/GeoJson.php">Source Code</a>

Represents a GeoJSON object.

Allows GeoJSON data to be parsed and displayed it on the map.

<table><tbody><tr><th>Namespace</th><td>BeastBytes\Leaflet\Layer\Other</td></tr><tr><th>Inheritance</th><td>

BeastBytes\Leaflet\Layer\Other\GeoJson<br>[BeastBytes\Leaflet\Layer\Layer](../layer.md)

</td></tr><tr><th>Implements</th><td>

[BeastBytes\Leaflet\Addable](../../addable.md)<br>[BeastBytes\Leaflet\Importable](../../importable.md)<br>[BeastBytes\Leaflet\Leaflet](../../leaflet.md)<br>[Stringable](https://www.php.net/manual/en/class.stringable.php)

</td></tr><tr><th>Uses</th><td>

[BeastBytes\Leaflet\OptionsTrait](../../options-trait.md)

</td></tr></tbody></table>

## Constants

### MARKERS_INHERIT_OPTIONS

 MARKERS_INHERIT_OPTIONS = true

Declared in BeastBytes\Leaflet\Layer\Other\GeoJson

### PACKAGE

 PACKAGE = 'leaflet'

Declared in [BeastBytes\Leaflet\Leaflet](../../leaflet)


## Methods

### __construct()
Create a GeoJSON object or objects.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span> function __construct(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.array.php">array</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $geoJson)</td></tr><tr><td>$geoJson</td><td><a  href="https://www.php.net/manual/en/language.types.array.php">array</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>A GeoJSON string or an array that can be JSON encoded to a GeoJSON object.</td></tr><tr><td>throws</td><td><a  href="https://www.php.net/manual/en/class.jsonexception.php">JsonException</a></td><td></td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Layer\Other\GeoJson


---

### addTo()
Add the current object to a map.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function addTo(<span class="cod-php-type"><a  href="../../map">BeastBytes\Leaflet\Map</a></span> $map, <span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $importFrom = 'leaflet'): <span class="type">self</span></td></tr><tr><td>$map</td><td><a  href="../../map">BeastBytes\Leaflet\Map</a></td><td>Map to add the object to.</td></tr><tr><td>$importFrom</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The JavaScript package to import the object from; defaults to &#039;leaflet&#039;<br />
The parameter will primarily be used by plugins.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### attribution()
String to be shown in the attribution control, e.g. "© OpenStreetMap contributors".

It describes the layer data and is often a legal obligation towards copyright holders and tile providers.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function attribution(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $attribution): <span class="type"><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$attribution</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Attribution</td></tr><tr><td>return</td><td><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### coordsToLatLng()
A JavaScript function that will be used for converting GeoJSON coordinates to `LatLng`s.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function coordsToLatLng(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $coordsToLatLng): <span class="type">BeastBytes\Leaflet\Layer\Other\GeoJson</span></td></tr><tr><td>$coordsToLatLng</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Conversion function.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\Other\GeoJson</td><td></td></tr></tbody></table>

Default: the coordsToLatLng static method.

Declared in BeastBytes\Leaflet\Layer\Other\GeoJson


---

### events()
Attach event(s) to an object.

If there are multiple events of the same type, the last event takes precedence.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function events(<span class="cod-php-type"><a  href="../../event">BeastBytes\Leaflet\Event</a></span> $...event): <span class="type">self</span></td></tr><tr><td>$event</td><td><a  href="../../event">BeastBytes\Leaflet\Event</a></td><td>Event(s) to be attached the object.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### filter()
A JavaScript function that will be used to decide whether to include a feature or not.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function filter(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $filter): <span class="type">BeastBytes\Leaflet\Layer\Other\GeoJson</span></td></tr><tr><td>$filter</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Feature filter function.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\Other\GeoJson</td><td></td></tr></tbody></table>

Default: include all features

Declared in BeastBytes\Leaflet\Layer\Other\GeoJson


---

### getClassName()
Returns the object's PHP base class name.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function getClassName(): <span class="type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span></td></tr><tr><td>return</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Object PHP base class name.</td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### getId()
Returns the object id.

The primary use is to provide a JavaScript variable. Auto generated on read if not set.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function getId(): <span class="type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span></td></tr><tr><td>return</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Object id.</td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### getName()
Returns the layer name.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function getName(): <span class="type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span></td></tr><tr><td>return</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Layer name</td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### importName()
The object's JavaScript import name; this is included in the JavaScript `import` statement.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function importName(): <span class="type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span></td></tr><tr><td>return</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The object&#039;s JavaScript import name</td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### markersInheritOptions()
Whether default Markers for "Point" type Features inherit from group options.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function markersInheritOptions(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $markersInheritOptions): <span class="type">BeastBytes\Leaflet\Layer\Other\GeoJson</span></td></tr><tr><td>$markersInheritOptions</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to enable inheritance, `false` not to.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\Other\GeoJson</td><td></td></tr></tbody></table>

Default: false

Declared in BeastBytes\Leaflet\Layer\Other\GeoJson

#### Related

* <a  target="_blank"  href="geo-json#markers-inherit-options">MARKERS_INHERIT_OPTIONS</a>



---

### name()
Set the layer name

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function name(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $name): <span class="type"><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$name</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Name of the layer when used in the Layers control.     *</td></tr><tr><td>return</td><td><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Default: Layer ID

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### onEachFeature()
A JavaScript function that will be called once for each created Feature, after it has been created and styled.

Useful for attaching events and popups to features.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function onEachFeature(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $onEachFeature): <span class="type">BeastBytes\Leaflet\Layer\Other\GeoJson</span></td></tr><tr><td>$onEachFeature</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>On each feature function.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\Other\GeoJson</td><td></td></tr></tbody></table>

Default: do nothing with the newly created layers

Declared in BeastBytes\Leaflet\Layer\Other\GeoJson


---

### pane()
Set the pane the layer is added to.

Not effective if the renderer option is set.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function pane(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $pane): <span class="type"><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$pane</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Pane name</td></tr><tr><td>return</td><td><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Default: GridLayer and TileLayer 'tileLayer', other layers 'overlayPane'

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### pointToLayer()
A JavaScript function defining how GeoJSON points spawn Leaflet layers.

Internally called by `Leaflet` when data is added, passing the GeoJSON point feature and its LatLng.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function pointToLayer(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $pointToLayer): <span class="type">BeastBytes\Leaflet\Layer\Other\GeoJson</span></td></tr><tr><td>$pointToLayer</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Point to Layer function.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\Other\GeoJson</td><td></td></tr></tbody></table>

Default: spawn a default Marker

Declared in BeastBytes\Leaflet\Layer\Other\GeoJson


---

### popup()
Bind a popup to the layer.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function popup(<span class="cod-php-type"><a  href="../u-i/popup">BeastBytes\Leaflet\Layer\UI\Popup</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $popup): <span class="type"><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$popup</td><td><a  href="../u-i/popup">BeastBytes\Leaflet\Layer\UI\Popup</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The popup or content for a popup to bund to the layer</td></tr><tr><td>return</td><td><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### style()
A JavaScript function defining the Path options for styling GeoJSON lines and polygons.

Internally called by `Leaflet` when data is added.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function style(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $style): <span class="type">BeastBytes\Leaflet\Layer\Other\GeoJson</span></td></tr><tr><td>$style</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Style function.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\Other\GeoJson</td><td></td></tr></tbody></table>

Default: do not override any defaults

Declared in BeastBytes\Leaflet\Layer\Other\GeoJson


---

### tooltip()
Bind a tooltip to the layer.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function tooltip(<span class="cod-php-type"><a  href="../u-i/tooltip">BeastBytes\Leaflet\Layer\UI\Tooltip</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $tooltip): <span class="type"><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$tooltip</td><td><a  href="../u-i/tooltip">BeastBytes\Leaflet\Layer\UI\Tooltip</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The tooltip or content for a tooltip to bind to the layer</td></tr><tr><td>return</td><td><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

## Related

* https://leafletjs.com/reference-2.0.0.html#geojson

---
Generated by <a  target="_blank"  href="https://github.com/beastbytes/cod-php">CodPhp</a>