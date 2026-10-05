---
title: InteractiveLayer
lastUpdated: 2026-10-05 14:17:39
description: Base class for interactive layers.
head:
  - - meta
    - name: element-type
      content: Class
  - - meta
    - name: Generator
      content: CodPhp
---

# <span class="cod-php-modifier">abstract</span> class `InteractiveLayer`

<a  href="https://github.com/beastbytes/leaflet-v2/blob/master/src/Layer/InteractiveLayer.php">Source Code</a>

Base class for interactive layers.

<table><tbody><tr><th>Namespace</th><td>BeastBytes\Leaflet\Layer</td></tr><tr><th>Inheritance</th><td>

BeastBytes\Leaflet\Layer\InteractiveLayer<br>[BeastBytes\Leaflet\Layer\Layer](layer.md)

</td></tr><tr><th>Implements</th><td>

[BeastBytes\Leaflet\Addable](../addable.md)<br>[BeastBytes\Leaflet\Importable](../importable.md)<br>[BeastBytes\Leaflet\Leaflet](../leaflet.md)<br>[Stringable](https://www.php.net/manual/en/class.stringable.php)

</td></tr><tr><th>Subclasses</th><td>

[BeastBytes\Leaflet\Layer\Other\FeatureGroup](other/feature-group.md)<br>[BeastBytes\Leaflet\Layer\Other\Group](other/group.md)<br>[BeastBytes\Leaflet\Layer\Other\LayerGroup](other/layer-group.md)<br>[BeastBytes\Leaflet\Layer\Raster\ImageOverlay](raster/image-overlay.md)<br>[BeastBytes\Leaflet\Layer\Raster\SvgOverlay](raster/svg-overlay.md)<br>[BeastBytes\Leaflet\Layer\Raster\VideoOverlay](raster/video-overlay.md)<br>[BeastBytes\Leaflet\Layer\UI\DivOverlay](u-i/div-overlay.md)<br>[BeastBytes\Leaflet\Layer\UI\Marker](u-i/marker.md)<br>[BeastBytes\Leaflet\Layer\UI\Popup](u-i/popup.md)<br>[BeastBytes\Leaflet\Layer\UI\Tooltip](u-i/tooltip.md)<br>[BeastBytes\Leaflet\Layer\Vector\Circle](vector/circle.md)<br>[BeastBytes\Leaflet\Layer\Vector\CircleMarker](vector/circle-marker.md)<br>[BeastBytes\Leaflet\Layer\Vector\Path](vector/path.md)<br>[BeastBytes\Leaflet\Layer\Vector\Polygon](vector/polygon.md)<br>[BeastBytes\Leaflet\Layer\Vector\Polyline](vector/polyline.md)<br>[BeastBytes\Leaflet\Layer\Vector\Rectangle](vector/rectangle.md)

</td></tr></tbody></table>

## Constants

### BUBBLING_POINTER_EVENTS

 BUBBLING_POINTER_EVENTS = true

Declared in BeastBytes\Leaflet\Layer\InteractiveLayer

### INTERACTIVE

 INTERACTIVE = true

Declared in BeastBytes\Leaflet\Layer\InteractiveLayer

### PACKAGE

 PACKAGE = 'leaflet'

Declared in [BeastBytes\Leaflet\Leaflet](../leaflet)


## Methods

### __construct()
<table><tbody><tr><td colspan="1"><span class="cod-php-visibility">public</span> function __construct()</td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](layer)


---

### addTo()
Add the current object to a map.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function addTo(<span class="cod-php-type"><a  href="../map">BeastBytes\Leaflet\Map</a></span> $map, <span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $importFrom = 'leaflet'): <span class="type">self</span></td></tr><tr><td>$map</td><td><a  href="../map">BeastBytes\Leaflet\Map</a></td><td>Map to add the object to.</td></tr><tr><td>$importFrom</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The JavaScript package to import the object from; defaults to &#039;leaflet&#039;<br />
The parameter will primarily be used by plugins.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](layer)


---

### attribution()
String to be shown in the attribution control, e.g. "© OpenStreetMap contributors".

It describes the layer data and is often a legal obligation towards copyright holders and tile providers.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function attribution(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $attribution): <span class="type"><a  href="layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$attribution</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Attribution</td></tr><tr><td>return</td><td><a  href="layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](layer)


---

### bubblingPointerEvents()
Whether a pointer event on this layer bubble-up
and trigger the same event on the map (unless DomEvent.stopPropagation is used).

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function bubblingPointerEvents(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $bubblingPointerEvents): <span class="type">BeastBytes\Leaflet\Layer\InteractiveLayer</span></td></tr><tr><td>$bubblingPointerEvents</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to enable, `false` to disable.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\InteractiveLayer</td><td></td></tr></tbody></table>

Default: false

Declared in BeastBytes\Leaflet\Layer\InteractiveLayer

#### Related

* <a  target="_blank"  href="interactive-layer#bubbling-pointer-events">BUBBLING_POINTER_EVENTS</a>



---

### events()
Attach event(s) to an object.

If there are multiple events of the same type, the last event takes precedence.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function events(<span class="cod-php-type"><a  href="../event">BeastBytes\Leaflet\Event</a></span> $...event): <span class="type">self</span></td></tr><tr><td>$event</td><td><a  href="../event">BeastBytes\Leaflet\Event</a></td><td>Event(s) to be attached the object.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](layer)


---

### getClassName()
Returns the object's PHP base class name.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function getClassName(): <span class="type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span></td></tr><tr><td>return</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Object PHP base class name.</td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](layer)


---

### getId()
Returns the object id.

The primary use is to provide a JavaScript variable. Auto generated on read if not set.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function getId(): <span class="type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span></td></tr><tr><td>return</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Object id.</td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](layer)


---

### getName()
Returns the layer name.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function getName(): <span class="type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span></td></tr><tr><td>return</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Layer name</td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](layer)


---

### importName()
The object's JavaScript import name; this is included in the JavaScript `import` statement.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function importName(): <span class="type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span></td></tr><tr><td>return</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The object&#039;s JavaScript import name</td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](layer)


---

### interactive()
Whether this layer is interactive, i.e. emits pointer events and acts as a part of the underlying map.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function interactive(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $interactive): <span class="type">BeastBytes\Leaflet\Layer\InteractiveLayer</span></td></tr><tr><td>$interactive</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to enable, `false` to disable.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\InteractiveLayer</td><td></td></tr></tbody></table>

Default: true

Declared in BeastBytes\Leaflet\Layer\InteractiveLayer


---

### name()
Set the layer name

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function name(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $name): <span class="type"><a  href="layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$name</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Name of the layer when used in the Layers control.     *</td></tr><tr><td>return</td><td><a  href="layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Default: Layer ID

Declared in [BeastBytes\Leaflet\Layer\Layer](layer)


---

### pane()
Set the pane the layer is added to.

Not effective if the renderer option is set.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function pane(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $pane): <span class="type"><a  href="layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$pane</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Pane name</td></tr><tr><td>return</td><td><a  href="layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Default: GridLayer and TileLayer 'tileLayer', other layers 'overlayPane'

Declared in [BeastBytes\Leaflet\Layer\Layer](layer)


---

### popup()
Bind a popup to the layer.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function popup(<span class="cod-php-type"><a  href="u-i/popup">BeastBytes\Leaflet\Layer\UI\Popup</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $popup): <span class="type"><a  href="layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$popup</td><td><a  href="u-i/popup">BeastBytes\Leaflet\Layer\UI\Popup</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The popup or content for a popup to bund to the layer</td></tr><tr><td>return</td><td><a  href="layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](layer)


---

### tooltip()
Bind a tooltip to the layer.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function tooltip(<span class="cod-php-type"><a  href="u-i/tooltip">BeastBytes\Leaflet\Layer\UI\Tooltip</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $tooltip): <span class="type"><a  href="layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$tooltip</td><td><a  href="u-i/tooltip">BeastBytes\Leaflet\Layer\UI\Tooltip</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The tooltip or content for a tooltip to bind to the layer</td></tr><tr><td>return</td><td><a  href="layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](layer)


---

Generated by <a  target="_blank"  href="https://github.com/beastbytes/cod-php">CodPhp</a>