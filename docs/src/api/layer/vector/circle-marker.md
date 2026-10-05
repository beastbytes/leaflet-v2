---
title: CircleMarker
lastUpdated: 2026-10-05 14:17:39
description: Represents a circle overlay on a map centred at a geographical location with a radius specified im pixels.
head:
  - - meta
    - name: element-type
      content: Class
  - - meta
    - name: Generator
      content: CodPhp
---

# <span class="cod-php-modifier">final</span> class `CircleMarker`

<a  href="https://github.com/beastbytes/leaflet-v2/blob/master/src/Layer/Vector/CircleMarker.php">Source Code</a>

Represents a circle overlay on a map centred at a geographical location with a radius specified im pixels.

<table><tbody><tr><th>Namespace</th><td>BeastBytes\Leaflet\Layer\Vector</td></tr><tr><th>Inheritance</th><td>

BeastBytes\Leaflet\Layer\Vector\CircleMarker<br>[BeastBytes\Leaflet\Layer\Vector\Path](path.md)<br>[BeastBytes\Leaflet\Layer\InteractiveLayer](../interactive-layer.md)<br>[BeastBytes\Leaflet\Layer\Layer](../layer.md)

</td></tr><tr><th>Implements</th><td>

[BeastBytes\Leaflet\Addable](../../addable.md)<br>[BeastBytes\Leaflet\Importable](../../importable.md)<br>[BeastBytes\Leaflet\Leaflet](../../leaflet.md)<br>[Stringable](https://www.php.net/manual/en/class.stringable.php)

</td></tr></tbody></table>

## Constants

### BUBBLING_POINTER_EVENTS

 BUBBLING_POINTER_EVENTS = true

Declared in [BeastBytes\Leaflet\Layer\InteractiveLayer](../interactive-layer)

### FILL

 FILL = true

Declared in [BeastBytes\Leaflet\Layer\Vector\Path](path)

### INTERACTIVE

 INTERACTIVE = true

Declared in [BeastBytes\Leaflet\Layer\InteractiveLayer](../interactive-layer)

### PACKAGE

 PACKAGE = 'leaflet'

Declared in [BeastBytes\Leaflet\Leaflet](../../leaflet)

### STROKE

 STROKE = true

Declared in [BeastBytes\Leaflet\Layer\Vector\Path](path)


## Methods

### __construct()
Create a circle marker.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span> function __construct(<span class="cod-php-type"><a  href="../../type/lat-lng">BeastBytes\Leaflet\Type\LatLng</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></span> $centre, <span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $radius)</td></tr><tr><td>$centre</td><td><a  href="../../type/lat-lng">BeastBytes\Leaflet\Type\LatLng</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></td><td></td></tr><tr><td>$radius</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>The radius of the circle in pixels. @default 10</td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Layer\Vector\CircleMarker


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

### bubblingPointerEvents()
Whether a pointer event on this layer bubble-up
and trigger the same event on the map (unless DomEvent.stopPropagation is used).

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function bubblingPointerEvents(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $bubblingPointerEvents): <span class="type"><a  href="../interactive-layer">BeastBytes\Leaflet\Layer\InteractiveLayer</a></span></td></tr><tr><td>$bubblingPointerEvents</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to enable, `false` to disable.</td></tr><tr><td>return</td><td><a  href="../interactive-layer">BeastBytes\Leaflet\Layer\InteractiveLayer</a></td><td></td></tr></tbody></table>

Default: false

Declared in [BeastBytes\Leaflet\Layer\InteractiveLayer](../interactive-layer)

#### Related

* <a  target="_blank"  href="interactive-layer#bubbling-pointer-events">BUBBLING_POINTER_EVENTS</a>



---

### className()
Set a custom CSS class name.

For `Icon` it applies to both icon and shadow images.
For vector layers it is only applicable when using the SVG renderer.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function className(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $className): <span class="type">self</span></td></tr><tr><td>$className</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Class name.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Default: null

Declared in [BeastBytes\Leaflet\Layer\Vector\Path](path)


---

### color()
Set the stroke colour.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function color(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $color): <span class="type"><a  href="path">BeastBytes\Leaflet\Layer\Vector\Path</a></span></td></tr><tr><td>$color</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Stroke colour.</td></tr><tr><td>return</td><td><a  href="path">BeastBytes\Leaflet\Layer\Vector\Path</a></td><td></td></tr></tbody></table>

Default: '#3388ff'

Declared in [BeastBytes\Leaflet\Layer\Vector\Path](path)


---

### dashArray()
Set the stroke dash pattern.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function dashArray(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $...dashArray): <span class="type"><a  href="path">BeastBytes\Leaflet\Layer\Vector\Path</a></span></td></tr><tr><td>$dashArray</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td></td></tr><tr><td>return</td><td><a  href="path">BeastBytes\Leaflet\Layer\Vector\Path</a></td><td></td></tr><tr><td>throws</td><td>InvalidArgumentException</td><td>Invalid dash array.</td></tr></tbody></table>

Default: null

Declared in [BeastBytes\Leaflet\Layer\Vector\Path](path)

#### Related

* https://developer.mozilla.org/en-US/docs/Web/SVG/Reference/Attribute/stroke-dasharray



---

### dashOffset()
Where in the dash array to start the dash.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function dashOffset(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $dashOffset): <span class="type"><a  href="path">BeastBytes\Leaflet\Layer\Vector\Path</a></span></td></tr><tr><td>$dashOffset</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>An integer that defines the distance into the dash pattern to start the dash.</td></tr><tr><td>return</td><td><a  href="path">BeastBytes\Leaflet\Layer\Vector\Path</a></td><td></td></tr></tbody></table>

Default: null

Declared in [BeastBytes\Leaflet\Layer\Vector\Path](path)

#### Related

* https://developer.mozilla.org/en-US/docs/Web/SVG/Reference/Attribute/stroke-dashoffset



---

### events()
Attach event(s) to an object.

If there are multiple events of the same type, the last event takes precedence.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function events(<span class="cod-php-type"><a  href="../../event">BeastBytes\Leaflet\Event</a></span> $...event): <span class="type">self</span></td></tr><tr><td>$event</td><td><a  href="../../event">BeastBytes\Leaflet\Event</a></td><td>Event(s) to be attached the object.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### fill()
Whether the shape should be filled.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function fill(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $fill): <span class="type"><a  href="path">BeastBytes\Leaflet\Layer\Vector\Path</a></span></td></tr><tr><td>$fill</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to fill circles and ploygons, `false` not to fill.</td></tr><tr><td>return</td><td><a  href="path">BeastBytes\Leaflet\Layer\Vector\Path</a></td><td></td></tr></tbody></table>

Default: depends

Declared in [BeastBytes\Leaflet\Layer\Vector\Path](path)

#### Related

* <a  target="_blank"  href="path#f-i-l-l">FILL</a>



---

### fillColor()
Set the fill colour.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function fillColor(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $fillColor): <span class="type"><a  href="path">BeastBytes\Leaflet\Layer\Vector\Path</a></span></td></tr><tr><td>$fillColor</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Fill colour.</td></tr><tr><td>return</td><td><a  href="path">BeastBytes\Leaflet\Layer\Vector\Path</a></td><td></td></tr></tbody></table>

Default: Value of the `color` option

Declared in [BeastBytes\Leaflet\Layer\Vector\Path](path)


---

### fillOpacity()
Set the fill opacity.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function fillOpacity(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.float.php">float</a></span> $fillOpacity): <span class="type"><a  href="path">BeastBytes\Leaflet\Layer\Vector\Path</a></span></td></tr><tr><td>$fillOpacity</td><td><a  href="https://www.php.net/manual/en/language.types.float.php">float</a></td><td>Fill opacity.</td></tr><tr><td>return</td><td><a  href="path">BeastBytes\Leaflet\Layer\Vector\Path</a></td><td></td></tr></tbody></table>

Default: 0.2

Declared in [BeastBytes\Leaflet\Layer\Vector\Path](path)


---

### fillRule()
Defines how the inside of a shape is determined.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function fillRule(<span class="cod-php-type"><a  href="fill-rule">BeastBytes\Leaflet\Layer\Vector\FillRule</a></span> $fillRule): <span class="type"><a  href="path">BeastBytes\Leaflet\Layer\Vector\Path</a></span></td></tr><tr><td>$fillRule</td><td><a  href="fill-rule">BeastBytes\Leaflet\Layer\Vector\FillRule</a></td><td>Fill-rule.</td></tr><tr><td>return</td><td><a  href="path">BeastBytes\Leaflet\Layer\Vector\Path</a></td><td></td></tr></tbody></table>

Default: FillRule::evenOdd

Declared in [BeastBytes\Leaflet\Layer\Vector\Path](path)

#### Related

* <a  target="_blank"  href="fill-rule">FillRule</a>



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

### interactive()
Whether this layer is interactive, i.e. emits pointer events and acts as a part of the underlying map.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function interactive(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $interactive): <span class="type"><a  href="../interactive-layer">BeastBytes\Leaflet\Layer\InteractiveLayer</a></span></td></tr><tr><td>$interactive</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to enable, `false` to disable.</td></tr><tr><td>return</td><td><a  href="../interactive-layer">BeastBytes\Leaflet\Layer\InteractiveLayer</a></td><td></td></tr></tbody></table>

Default: true

Declared in [BeastBytes\Leaflet\Layer\InteractiveLayer](../interactive-layer)


---

### lineCap()
Defines shape to be used at the end of the stroke.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function lineCap(<span class="cod-php-type"><a  href="line-cap">BeastBytes\Leaflet\Layer\Vector\LineCap</a></span> $lineCap): <span class="type"><a  href="path">BeastBytes\Leaflet\Layer\Vector\Path</a></span></td></tr><tr><td>$lineCap</td><td><a  href="line-cap">BeastBytes\Leaflet\Layer\Vector\LineCap</a></td><td>Stroke linecap.</td></tr><tr><td>return</td><td><a  href="path">BeastBytes\Leaflet\Layer\Vector\Path</a></td><td></td></tr></tbody></table>

Default: LineCap::round

Declared in [BeastBytes\Leaflet\Layer\Vector\Path](path)

#### Related

* <a  target="_blank"  href="line-cap">LineCap</a>



---

### lineJoin()
Defines shape to be used at the corners of the stroke.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function lineJoin(<span class="cod-php-type"><a  href="line-join">BeastBytes\Leaflet\Layer\Vector\LineJoin</a></span> $lineJoin): <span class="type"><a  href="path">BeastBytes\Leaflet\Layer\Vector\Path</a></span></td></tr><tr><td>$lineJoin</td><td><a  href="line-join">BeastBytes\Leaflet\Layer\Vector\LineJoin</a></td><td>Stroke linejoin.</td></tr><tr><td>return</td><td><a  href="path">BeastBytes\Leaflet\Layer\Vector\Path</a></td><td></td></tr></tbody></table>

Default: LineJoin::round

Declared in [BeastBytes\Leaflet\Layer\Vector\Path](path)

#### Related

* <a  target="_blank"  href="line-join">LineJoin</a>



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

Declared in [BeastBytes\Leaflet\Layer\Vector\Path](path)


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

### renderer()
Set a renderer for this path.

If set, it will override the `pane` option of the path.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function renderer(<span class="cod-php-type"><a  href="renderer/renderer">BeastBytes\Leaflet\Layer\Vector\Renderer\Renderer</a></span> $renderer): <span class="type"><a  href="path">BeastBytes\Leaflet\Layer\Vector\Path</a></span></td></tr><tr><td>$renderer</td><td><a  href="renderer/renderer">BeastBytes\Leaflet\Layer\Vector\Renderer\Renderer</a></td><td>Path renderer.</td></tr><tr><td>return</td><td><a  href="path">BeastBytes\Leaflet\Layer\Vector\Path</a></td><td></td></tr></tbody></table>

Default: Use the map default renderer.

Declared in [BeastBytes\Leaflet\Layer\Vector\Path](path)


---

### stroke()
Whether to draw a stroke along the path.

Set false to disable borders on polygons or circles.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function stroke(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $stroke): <span class="type"><a  href="path">BeastBytes\Leaflet\Layer\Vector\Path</a></span></td></tr><tr><td>$stroke</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to draw a stroke, `false` not to draw a stroke.</td></tr><tr><td>return</td><td><a  href="path">BeastBytes\Leaflet\Layer\Vector\Path</a></td><td></td></tr></tbody></table>

Default: true

Declared in [BeastBytes\Leaflet\Layer\Vector\Path](path)

#### Related

* <a  target="_blank"  href="path#s-t-r-o-k-e">STROKE</a>



---

### tooltip()
Bind a tooltip to the layer.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function tooltip(<span class="cod-php-type"><a  href="../u-i/tooltip">BeastBytes\Leaflet\Layer\UI\Tooltip</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $tooltip): <span class="type"><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$tooltip</td><td><a  href="../u-i/tooltip">BeastBytes\Leaflet\Layer\UI\Tooltip</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The tooltip or content for a tooltip to bind to the layer</td></tr><tr><td>return</td><td><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### weight()
Set the stroke width.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function weight(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $weight): <span class="type"><a  href="path">BeastBytes\Leaflet\Layer\Vector\Path</a></span></td></tr><tr><td>$weight</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>Stroke width in pixels.</td></tr><tr><td>return</td><td><a  href="path">BeastBytes\Leaflet\Layer\Vector\Path</a></td><td></td></tr></tbody></table>

Default: 3

Declared in [BeastBytes\Leaflet\Layer\Vector\Path](path)


---

## Related

* https://leafletjs.com/reference-2.0.0.html#circlemarker

---
Generated by <a  target="_blank"  href="https://github.com/beastbytes/cod-php">CodPhp</a>