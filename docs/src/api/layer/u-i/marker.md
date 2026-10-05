---
title: Marker
lastUpdated: 2026-10-05 14:17:39
description: Represents a clickable/draggable marker icon on the map.
head:
  - - meta
    - name: element-type
      content: Class
  - - meta
    - name: Generator
      content: CodPhp
---

# <span class="cod-php-modifier">final</span> class `Marker`

<a  href="https://github.com/beastbytes/leaflet-v2/blob/master/src/Layer/UI/Marker.php">Source Code</a>

Represents a clickable/draggable marker icon on the map.

<table><tbody><tr><th>Namespace</th><td>BeastBytes\Leaflet\Layer\UI</td></tr><tr><th>Inheritance</th><td>

BeastBytes\Leaflet\Layer\UI\Marker<br>[BeastBytes\Leaflet\Layer\InteractiveLayer](../interactive-layer.md)<br>[BeastBytes\Leaflet\Layer\Layer](../layer.md)

</td></tr><tr><th>Implements</th><td>

[BeastBytes\Leaflet\Addable](../../addable.md)<br>[BeastBytes\Leaflet\Importable](../../importable.md)<br>[BeastBytes\Leaflet\Leaflet](../../leaflet.md)<br>[Stringable](https://www.php.net/manual/en/class.stringable.php)

</td></tr><tr><th>Uses</th><td>

[BeastBytes\Leaflet\Layer\OpacityTrait](../opacity-trait.md)

</td></tr></tbody></table>

## Constants

### AUTO_PAN

 AUTO_PAN = true

Declared in BeastBytes\Leaflet\Layer\UI\Marker

### AUTO_PAN_ON_FOCUS

 AUTO_PAN_ON_FOCUS = true

Declared in BeastBytes\Leaflet\Layer\UI\Marker

### BUBBLING_POINTER_EVENTS

 BUBBLING_POINTER_EVENTS = true

Declared in [BeastBytes\Leaflet\Layer\InteractiveLayer](../interactive-layer)

### DRAGGABLE

 DRAGGABLE = true

Declared in BeastBytes\Leaflet\Layer\UI\Marker

### INTERACTIVE

 INTERACTIVE = true

Declared in [BeastBytes\Leaflet\Layer\InteractiveLayer](../interactive-layer)

### KEYBOARD

 KEYBOARD = true

Declared in BeastBytes\Leaflet\Layer\UI\Marker

### PACKAGE

 PACKAGE = 'leaflet'

Declared in [BeastBytes\Leaflet\Leaflet](../../leaflet)

### RISE_ON_HOVER

 RISE_ON_HOVER = true

Declared in BeastBytes\Leaflet\Layer\UI\Marker


## Methods

### __construct()
Create a marker.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span> function __construct(<span class="cod-php-type"><a  href="../../type/lat-lng">BeastBytes\Leaflet\Type\LatLng</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></span> $location)</td></tr><tr><td>$location</td><td><a  href="../../type/lat-lng">BeastBytes\Leaflet\Type\LatLng</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></td><td>The geographical location of the marker.</td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Layer\UI\Marker


---

### addTo()
Add the current object to a map.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function addTo(<span class="cod-php-type"><a  href="../../map">BeastBytes\Leaflet\Map</a></span> $map, <span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $importFrom = 'leaflet'): <span class="type">self</span></td></tr><tr><td>$map</td><td><a  href="../../map">BeastBytes\Leaflet\Map</a></td><td>Map to add the object to.</td></tr><tr><td>$importFrom</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The JavaScript package to import the object from; defaults to &#039;leaflet&#039;<br />
The parameter will primarily be used by plugins.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### alt()
Text for the alt attribute of the icon image.

Useful for accessibility.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function alt(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $alt): <span class="type">BeastBytes\Leaflet\Layer\UI\Marker</span></td></tr><tr><td>$alt</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Alt text.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Marker</td><td></td></tr></tbody></table>

Default: 'Marker'

Declared in BeastBytes\Leaflet\Layer\UI\Marker


---

### attribution()
String to be shown in the attribution control, e.g. "© OpenStreetMap contributors".

It describes the layer data and is often a legal obligation towards copyright holders and tile providers.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function attribution(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $attribution): <span class="type"><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$attribution</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Attribution</td></tr><tr><td>return</td><td><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### autoPan()
Whether to pan the map when dragging the marker near the map edge.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function autoPan(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $autoPan): <span class="type">BeastBytes\Leaflet\Layer\UI\Marker</span></td></tr><tr><td>$autoPan</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to auto-pan, `false` not to.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Marker</td><td></td></tr></tbody></table>

Default: false

Declared in BeastBytes\Leaflet\Layer\UI\Marker

#### Related

* <a  target="_blank"  href="marker#auto-pan">AUTO_PAN</a>



---

### autoPanOnFocus()
Whether the map should pan when the marker is focused
(via e.g. pressing tab on the keyboard) to ensure the marker is visible within the map's bounds.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function autoPanOnFocus(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $autoPanOnFocus): <span class="type">BeastBytes\Leaflet\Layer\UI\Marker</span></td></tr><tr><td>$autoPanOnFocus</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to auto-pan on focus, `false` not to.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Marker</td><td></td></tr></tbody></table>

Default: true

Declared in BeastBytes\Leaflet\Layer\UI\Marker

#### Related

* <a  target="_blank"  href="marker#auto-pan-on-focus">AUTO_PAN_ON_FOCUS</a>



---

### autoPanPadding()
Distance (in pixels to the left/right and to the top/bottom) of the map edge to start panning the map.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function autoPanPadding(<span class="cod-php-type"><a  href="../../type/point">BeastBytes\Leaflet\Type\Point</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></span> $autoPanPadding): <span class="type">BeastBytes\Leaflet\Layer\UI\Marker</span></td></tr><tr><td>$autoPanPadding</td><td><a  href="../../type/point">BeastBytes\Leaflet\Type\Point</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></td><td>Padding.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Marker</td><td></td></tr></tbody></table>

Default: Point(50, 50)

Declared in BeastBytes\Leaflet\Layer\UI\Marker


---

### autoPanSpeed()
Number of pixels the map should pan by when the marker is dragged to an edge of the map.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function autoPanSpeed(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $autoPanSpeed): <span class="type">BeastBytes\Leaflet\Layer\UI\Marker</span></td></tr><tr><td>$autoPanSpeed</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>Number of pixels.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Marker</td><td></td></tr></tbody></table>

Default: 10

Declared in BeastBytes\Leaflet\Layer\UI\Marker


---

### bubblingPointerEvents()
Whether a pointer event on this layer bubble-up
and trigger the same event on the map (unless DomEvent.stopPropagation is used).

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function bubblingPointerEvents(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $bubblingPointerEvents): <span class="type"><a  href="../interactive-layer">BeastBytes\Leaflet\Layer\InteractiveLayer</a></span></td></tr><tr><td>$bubblingPointerEvents</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to enable, `false` to disable.</td></tr><tr><td>return</td><td><a  href="../interactive-layer">BeastBytes\Leaflet\Layer\InteractiveLayer</a></td><td></td></tr></tbody></table>

Default: false

Declared in [BeastBytes\Leaflet\Layer\InteractiveLayer](../interactive-layer)

#### Related

* <a  target="_blank"  href="interactive-layer#bubbling-pointer-events">BUBBLING_POINTER_EVENTS</a>



---

### draggable()
Whether the marker is draggable.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function draggable(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $draggable): <span class="type">BeastBytes\Leaflet\Layer\UI\Marker</span></td></tr><tr><td>$draggable</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` for the marker to draggable, `false` for it not to be.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Marker</td><td></td></tr></tbody></table>

Default: false

Declared in BeastBytes\Leaflet\Layer\UI\Marker

#### Related

* <a  target="_blank"  href="marker#d-r-a-g-g-a-b-l-e">DRAGGABLE</a>



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

### icon()
Icon instance to use for rendering the marker.

See `Icon` documentation for details on how to customise the marker icon.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function icon(<span class="cod-php-type"><a  href="../../type/icon">BeastBytes\Leaflet\Type\Icon</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $icon): <span class="type">BeastBytes\Leaflet\Layer\UI\Marker</span></td></tr><tr><td>$icon</td><td><a  href="../../type/icon">BeastBytes\Leaflet\Type\Icon</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>An `Icon` instance or the icon image URL.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Marker</td><td></td></tr></tbody></table>

Default: Icon.Default

Declared in BeastBytes\Leaflet\Layer\UI\Marker

#### Related

* <a  target="_blank"  href="../../type/icon">Icon</a>



---

### importName()
The object's JavaScript import name; this is included in the JavaScript `import` statement.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function importName(): <span class="type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span></td></tr><tr><td>return</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The object&#039;s JavaScript import name</td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### interactive()
Whether this layer is interactive, i.e. emits pointer events and acts as a part of the underlying map.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function interactive(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $interactive): <span class="type"><a  href="../interactive-layer">BeastBytes\Leaflet\Layer\InteractiveLayer</a></span></td></tr><tr><td>$interactive</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to enable, `false` to disable.</td></tr><tr><td>return</td><td><a  href="../interactive-layer">BeastBytes\Leaflet\Layer\InteractiveLayer</a></td><td></td></tr></tbody></table>

Default: true

Declared in [BeastBytes\Leaflet\Layer\InteractiveLayer](../interactive-layer)


---

### keyboard()
Whether the marker can be tabbed to with a keyboard and clicked by pressing enter.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function keyboard(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $keyboard): <span class="type">BeastBytes\Leaflet\Layer\UI\Marker</span></td></tr><tr><td>$keyboard</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to allow use of the keyboard, `false` not to.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Marker</td><td></td></tr></tbody></table>

Default: true

Declared in BeastBytes\Leaflet\Layer\UI\Marker

#### Related

* <a  target="_blank"  href="marker#k-e-y-b-o-a-r-d">KEYBOARD</a>



---

### name()
Set the layer name

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function name(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $name): <span class="type"><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$name</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Name of the layer when used in the Layers control.     *</td></tr><tr><td>return</td><td><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Default: Layer ID

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### opacity()
<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function opacity(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.float.php">float</a></span> $opacity): <span class="type">self</span></td></tr><tr><td>$opacity</td><td><a  href="https://www.php.net/manual/en/language.types.float.php">float</a></td><td>The opacity of the TileLayer, Marker, or the line of vector objects.     *</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Default: Object dependant

Declared in BeastBytes\Leaflet\Layer\UI\Marker


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

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function popup(<span class="cod-php-type"><a  href="popup">BeastBytes\Leaflet\Layer\UI\Popup</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $popup): <span class="type"><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$popup</td><td><a  href="popup">BeastBytes\Leaflet\Layer\UI\Popup</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The popup or content for a popup to bund to the layer</td></tr><tr><td>return</td><td><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### riseOffset()
Set the z-index offset used for the riseOnHover feature.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function riseOffset(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $riseOffset): <span class="type">BeastBytes\Leaflet\Layer\UI\Marker</span></td></tr><tr><td>$riseOffset</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>z-index offset.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Marker</td><td></td></tr></tbody></table>

Default: 250

Declared in BeastBytes\Leaflet\Layer\UI\Marker


---

### riseOnHover()
Whether the marker will rise to be on top of others when the pointer is hovered over it.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function riseOnHover(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $riseOnHover): <span class="type">BeastBytes\Leaflet\Layer\UI\Marker</span></td></tr><tr><td>$riseOnHover</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to enable, `false` to disable.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Marker</td><td></td></tr></tbody></table>

Default: false

Declared in BeastBytes\Leaflet\Layer\UI\Marker

#### Related

* <a  target="_blank"  href="marker#rise-on-hover">RISE_ON_HOVER</a>



---

### shadowPane()
Set tge map pane where the markers shadow will be added.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function shadowPane(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $shadowPane): <span class="type">BeastBytes\Leaflet\Layer\UI\Marker</span></td></tr><tr><td>$shadowPane</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Shadow pane.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Marker</td><td></td></tr></tbody></table>

Default: 'shadowPane'

Declared in BeastBytes\Leaflet\Layer\UI\Marker


---

### title()
Text for the browser tooltip that appears on marker hover (no tooltip by default).

Useful for accessibility.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function title(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $title): <span class="type">BeastBytes\Leaflet\Layer\UI\Marker</span></td></tr><tr><td>$title</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Title attribute text.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Marker</td><td></td></tr></tbody></table>

Default: ''

Declared in BeastBytes\Leaflet\Layer\UI\Marker


---

### tooltip()
Bind a tooltip to the layer.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function tooltip(<span class="cod-php-type"><a  href="tooltip">BeastBytes\Leaflet\Layer\UI\Tooltip</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $tooltip): <span class="type"><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$tooltip</td><td><a  href="tooltip">BeastBytes\Leaflet\Layer\UI\Tooltip</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The tooltip or content for a tooltip to bind to the layer</td></tr><tr><td>return</td><td><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### zIndexOffset()
Use this option to put the marker on top of or below all others;
specify a high positive or negative value respectively.

By default, marker zIndex is set automatically based on its latitude.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function zIndexOffset(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $zIndexOffset): <span class="type">BeastBytes\Leaflet\Layer\UI\Marker</span></td></tr><tr><td>$zIndexOffset</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>Offset.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Marker</td><td></td></tr></tbody></table>

Default: 0

Declared in BeastBytes\Leaflet\Layer\UI\Marker


---

## Related

* https://leafletjs.com/reference-2.0.0.html#marker

---
Generated by <a  target="_blank"  href="https://github.com/beastbytes/cod-php">CodPhp</a>