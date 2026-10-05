---
title: GridLayer
lastUpdated: 2026-10-05 14:17:39
description: Base class for all grid based - tiled - layers.
head:
  - - meta
    - name: element-type
      content: Class
  - - meta
    - name: Generator
      content: CodPhp
---

# class `GridLayer`

<a  href="https://github.com/beastbytes/leaflet-v2/blob/master/src/Layer/Other/GridLayer.php">Source Code</a>

Base class for all grid based - tiled - layers.

<table><tbody><tr><th>Namespace</th><td>BeastBytes\Leaflet\Layer\Other</td></tr><tr><th>Inheritance</th><td>

BeastBytes\Leaflet\Layer\Other\GridLayer<br>[BeastBytes\Leaflet\Layer\Layer](../layer.md)

</td></tr><tr><th>Implements</th><td>

[BeastBytes\Leaflet\Addable](../../addable.md)<br>[BeastBytes\Leaflet\Importable](../../importable.md)<br>[BeastBytes\Leaflet\Leaflet](../../leaflet.md)<br>[Stringable](https://www.php.net/manual/en/class.stringable.php)

</td></tr><tr><th>Uses</th><td>

[BeastBytes\Leaflet\Layer\OpacityTrait](../opacity-trait.md)<br>[BeastBytes\Leaflet\ZIndexTrait](../../z-index-trait.md)<br>[BeastBytes\Leaflet\ZoomTrait](../../zoom-trait.md)

</td></tr><tr><th>Subclasses</th><td>

[BeastBytes\Leaflet\Layer\Raster\TileLayer](../raster/tile-layer.md)

</td></tr></tbody></table>

## Constants

### DETECT_RETINA

 DETECT_RETINA = true

Declared in BeastBytes\Leaflet\Layer\Other\GridLayer

### NO_WRAP

 NO_WRAP = true

Declared in BeastBytes\Leaflet\Layer\Other\GridLayer

### PACKAGE

 PACKAGE = 'leaflet'

Declared in [BeastBytes\Leaflet\Leaflet](../../leaflet)

### TMS

 TMS = true

Declared in BeastBytes\Leaflet\Layer\Other\GridLayer

### UPDATE_WHEN_IDLE

 UPDATE_WHEN_IDLE = true

Declared in BeastBytes\Leaflet\Layer\Other\GridLayer

### UPDATE_WHEN_ZOOMING

 UPDATE_WHEN_ZOOMING = true

Declared in BeastBytes\Leaflet\Layer\Other\GridLayer

### ZOOM_REVERSE

 ZOOM_REVERSE = true

Declared in BeastBytes\Leaflet\Layer\Other\GridLayer


## Methods

### __construct()
<table><tbody><tr><td colspan="1"><span class="cod-php-visibility">public</span> function __construct()</td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


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

### bounds()
Set the bounds within which to load tiles.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function bounds(<span class="cod-php-type"><a  href="../../type/lat-lng-bounds">BeastBytes\Leaflet\Type\LatLngBounds</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></span> $bounds): <span class="type">BeastBytes\Leaflet\Layer\Other\GridLayer</span></td></tr><tr><td>$bounds</td><td><a  href="../../type/lat-lng-bounds">BeastBytes\Leaflet\Type\LatLngBounds</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></td><td>The bounds.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\Other\GridLayer</td><td></td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Layer\Other\GridLayer


---

### events()
Attach event(s) to an object.

If there are multiple events of the same type, the last event takes precedence.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function events(<span class="cod-php-type"><a  href="../../event">BeastBytes\Leaflet\Event</a></span> $...event): <span class="type">self</span></td></tr><tr><td>$event</td><td><a  href="../../event">BeastBytes\Leaflet\Event</a></td><td>Event(s) to be attached the object.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


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

### keepBuffer()
Set the number of rows and columns of tiles to keep when panning the map before unloading them.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function keepBuffer(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $keepBuffer): <span class="type">BeastBytes\Leaflet\Layer\Other\GridLayer</span></td></tr><tr><td>$keepBuffer</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>Number of rows and columns of tiles to keep when panning the map.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\Other\GridLayer</td><td></td></tr></tbody></table>

Default: 2

Declared in BeastBytes\Leaflet\Layer\Other\GridLayer


---

### maxNativeZoom()
Maximum zoom number the tile source has available.

If it is specified, the tiles on all zoom levels higher than maxNativeZoom
will be loaded from maxNativeZoom level and auto-scaled.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function maxNativeZoom(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $maxNativeZoom): <span class="type">BeastBytes\Leaflet\Layer\Other\GridLayer</span></td></tr><tr><td>$maxNativeZoom</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>Maximum native zoom.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\Other\GridLayer</td><td></td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Layer\Other\GridLayer


---

### maxZoom()
Maximum zoom level up to which the map or layer will be displayed.

For the map, if not specified and at least one GridLayer or TileLayer is in the map,
the highest of their maxZoom options will be used instead.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function maxZoom(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $maxZoom): <span class="type">self</span></td></tr><tr><td>$maxZoom</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>Max zoom.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Default: *

Declared in BeastBytes\Leaflet\Layer\Other\GridLayer


---

### minNativeZoom()
Minimum zoom number the tile source has available.

If it is specified, the tiles on all zoom levels lower than minNativeZoom
will be loaded from minNativeZoom level and auto-scaled.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function minNativeZoom(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $minNativeZoom): <span class="type">BeastBytes\Leaflet\Layer\Other\GridLayer</span></td></tr><tr><td>$minNativeZoom</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>Minimum native zoom.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\Other\GridLayer</td><td></td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Layer\Other\GridLayer


---

### minZoom()
Minimum zoom level down to which the map or layer will be displayed.

For the map, if not specified and at least one GridLayer or TileLayer is in the map,
the lowest of their minZoom options will be used instead.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function minZoom(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $minZoom): <span class="type">self</span></td></tr><tr><td>$minZoom</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>Min zoom.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Default: *

Declared in BeastBytes\Leaflet\Layer\Other\GridLayer


---

### name()
Set the layer name

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function name(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $name): <span class="type"><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$name</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Name of the layer when used in the Layers control.     *</td></tr><tr><td>return</td><td><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Default: Layer ID

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### noWrap()
Whether the layer is wrapped around the antimeridian.

Has no effect when the map CRS doesn't wrap around.
Can be used in combination with bounds to prevent requesting tiles outside the CRS limits.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function noWrap(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $noWrap): <span class="type">BeastBytes\Leaflet\Layer\Other\GridLayer</span></td></tr><tr><td>$noWrap</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>If `true` the GridLayer will only be displayed once at low zoom levels.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\Other\GridLayer</td><td></td></tr></tbody></table>

Default: false

Declared in BeastBytes\Leaflet\Layer\Other\GridLayer


---

### opacity()
<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function opacity(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.float.php">float</a></span> $opacity): <span class="type">self</span></td></tr><tr><td>$opacity</td><td><a  href="https://www.php.net/manual/en/language.types.float.php">float</a></td><td>The opacity of the TileLayer, Marker, or the line of vector objects.     *</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Default: Object dependant

Declared in BeastBytes\Leaflet\Layer\Other\GridLayer


---

### pane()
Set the pane the layer is added to.

Not effective if the renderer option is set.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function pane(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $pane): <span class="type"><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$pane</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Pane name</td></tr><tr><td>return</td><td><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Default: GridLayer and TileLayer 'tileLayer', other layers 'overlayPane'

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### popup()
Bind a popup to the layer.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function popup(<span class="cod-php-type"><a  href="../u-i/popup">BeastBytes\Leaflet\Layer\UI\Popup</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $popup): <span class="type"><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$popup</td><td><a  href="../u-i/popup">BeastBytes\Leaflet\Layer\UI\Popup</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The popup or content for a popup to bund to the layer</td></tr><tr><td>return</td><td><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### tileSize()
Width and height of tiles in the grid.

Use an int if width and height are equal, or Point(width, height) otherwise.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function tileSize(<span class="cod-php-type"><a  href="../../type/point">BeastBytes\Leaflet\Type\Point</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a>|<a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $tileSize): <span class="type">BeastBytes\Leaflet\Layer\Other\GridLayer</span></td></tr><tr><td>$tileSize</td><td><a  href="../../type/point">BeastBytes\Leaflet\Type\Point</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a>|<a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>Tile size.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\Other\GridLayer</td><td></td></tr></tbody></table>

Default: 256

Declared in BeastBytes\Leaflet\Layer\Other\GridLayer


---

### tooltip()
Bind a tooltip to the layer.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function tooltip(<span class="cod-php-type"><a  href="../u-i/tooltip">BeastBytes\Leaflet\Layer\UI\Tooltip</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $tooltip): <span class="type"><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$tooltip</td><td><a  href="../u-i/tooltip">BeastBytes\Leaflet\Layer\UI\Tooltip</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The tooltip or content for a tooltip to bind to the layer</td></tr><tr><td>return</td><td><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### updateInterval()
Set the tile update interval in milliseconds.

Tiles will not update more often when panning.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function updateInterval(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $updateInterval): <span class="type">BeastBytes\Leaflet\Layer\Other\GridLayer</span></td></tr><tr><td>$updateInterval</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>Tile update interval.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\Other\GridLayer</td><td></td></tr></tbody></table>

Default: 250

Declared in BeastBytes\Leaflet\Layer\Other\GridLayer


---

### updateWhenIdle()
Whether to load new tiles only when panning ends.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function updateWhenIdle(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $updateWhenIdle): <span class="type">BeastBytes\Leaflet\Layer\Other\GridLayer</span></td></tr><tr><td>$updateWhenIdle</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to load new tiles when panning ends, `false` to load while panning.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\Other\GridLayer</td><td></td></tr></tbody></table>

Default: true on mobile browsers, otherwise false

Declared in BeastBytes\Leaflet\Layer\Other\GridLayer

#### Related

* <a  target="_blank"  href="grid-layer#update-when-idle">UPDATE_WHEN_IDLE</a>



---

### updateWhenZooming()
Whether update grid layers every integer zoom level.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function updateWhenZooming(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $updateWhenZooming): <span class="type">BeastBytes\Leaflet\Layer\Other\GridLayer</span></td></tr><tr><td>$updateWhenZooming</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to update while zooming, `false` to update when zooming ends.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\Other\GridLayer</td><td></td></tr></tbody></table>

Default: true

Declared in BeastBytes\Leaflet\Layer\Other\GridLayer

#### Related

* <a  target="_blank"  href="grid-layer#update-when-zooming">UPDATE_WHEN_ZOOMING</a>



---

### zIndex()
Set the z index.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function zIndex(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $zIndex): <span class="type">self</span></td></tr><tr><td>$zIndex</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>Z index.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Default: 1

Declared in BeastBytes\Leaflet\Layer\Other\GridLayer


---

## Related

* https://leafletjs.com/reference-2.0.0.html#gridlayer

---
Generated by <a  target="_blank"  href="https://github.com/beastbytes/cod-php">CodPhp</a>