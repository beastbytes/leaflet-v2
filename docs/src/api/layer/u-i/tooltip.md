---
title: Tooltip
lastUpdated: 2026-10-05 14:17:39
description: Represents a tooltip on the map.
head:
  - - meta
    - name: element-type
      content: Class
  - - meta
    - name: Generator
      content: CodPhp
---

# <span class="cod-php-modifier">final</span> class `Tooltip`

<a  href="https://github.com/beastbytes/leaflet-v2/blob/master/src/Layer/UI/Tooltip.php">Source Code</a>

Represents a tooltip on the map.

<table><tbody><tr><th>Namespace</th><td>BeastBytes\Leaflet\Layer\UI</td></tr><tr><th>Inheritance</th><td>

BeastBytes\Leaflet\Layer\UI\Tooltip<br>[BeastBytes\Leaflet\Layer\UI\DivOverlay](div-overlay.md)<br>[BeastBytes\Leaflet\Layer\InteractiveLayer](../interactive-layer.md)<br>[BeastBytes\Leaflet\Layer\Layer](../layer.md)

</td></tr><tr><th>Implements</th><td>

[BeastBytes\Leaflet\Addable](../../addable.md)<br>[BeastBytes\Leaflet\Importable](../../importable.md)<br>[BeastBytes\Leaflet\Leaflet](../../leaflet.md)<br>[Stringable](https://www.php.net/manual/en/class.stringable.php)

</td></tr></tbody></table>

## Constants

### BUBBLING_POINTER_EVENTS

 BUBBLING_POINTER_EVENTS = true

Declared in [BeastBytes\Leaflet\Layer\InteractiveLayer](../interactive-layer)

### INTERACTIVE

 INTERACTIVE = true

Declared in [BeastBytes\Leaflet\Layer\InteractiveLayer](../interactive-layer)

### PACKAGE

 PACKAGE = 'leaflet'

Declared in [BeastBytes\Leaflet\Leaflet](../../leaflet)

### PERMANENT

 PERMANENT = true

Declared in BeastBytes\Leaflet\Layer\UI\Tooltip

### STICKY

 STICKY = true

Declared in BeastBytes\Leaflet\Layer\UI\Tooltip


## Methods

### __construct()
Create a tooltip.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span> function __construct(<span class="cod-php-type"><a  href="../../type/lat-lng">BeastBytes\Leaflet\Type\LatLng</a>|<a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a>|<a  href="https://www.php.net/manual/en/language.types.null.php">null</a>|<a  href="https://www.php.net/manual/en/language.types.null.php">null</a></span> $location = null)</td></tr><tr><td>$location</td><td><a  href="../../type/lat-lng">BeastBytes\Leaflet\Type\LatLng</a>|<a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a>|<a  href="https://www.php.net/manual/en/language.types.null.php">null</a>|<a  href="https://www.php.net/manual/en/language.types.null.php">null</a></td><td></td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Layer\UI\Tooltip


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

Declared in [BeastBytes\Leaflet\Layer\UI\DivOverlay](div-overlay)


---

### content()
Set the popup/tooltip content.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function content(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $content): <span class="type"><a  href="div-overlay">BeastBytes\Leaflet\Layer\UI\DivOverlay</a></span></td></tr><tr><td>$content</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Popup/Tooltip content</td></tr><tr><td>return</td><td><a  href="div-overlay">BeastBytes\Leaflet\Layer\UI\DivOverlay</a></td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\UI\DivOverlay](div-overlay)


---

### direction()
Set the direction in which the tooltip opens.

Direction::auto will dynamically switch between right and left according to the tooltip position on the map.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function direction(<span class="cod-php-type"><a  href="direction">BeastBytes\Leaflet\Layer\UI\Direction</a></span> $direction): <span class="type">BeastBytes\Leaflet\Layer\UI\Tooltip</span></td></tr><tr><td>$direction</td><td><a  href="direction">BeastBytes\Leaflet\Layer\UI\Direction</a></td><td>Direction in which the tooltip opens.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Tooltip</td><td></td></tr></tbody></table>

Default: Direction::auto

Declared in BeastBytes\Leaflet\Layer\UI\Tooltip

#### Related

* <a  target="_blank"  href="direction">Direction</a>



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

### interactive()
Whether this layer is interactive, i.e. emits pointer events and acts as a part of the underlying map.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function interactive(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $interactive): <span class="type"><a  href="../interactive-layer">BeastBytes\Leaflet\Layer\InteractiveLayer</a></span></td></tr><tr><td>$interactive</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to enable, `false` to disable.</td></tr><tr><td>return</td><td><a  href="../interactive-layer">BeastBytes\Leaflet\Layer\InteractiveLayer</a></td><td></td></tr></tbody></table>

Default: true

Declared in [BeastBytes\Leaflet\Layer\InteractiveLayer](../interactive-layer)


---

### name()
Set the layer name

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function name(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $name): <span class="type"><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$name</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Name of the layer when used in the Layers control.     *</td></tr><tr><td>return</td><td><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Default: Layer ID

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### offset()
Tooltip position offest.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function offset(<span class="cod-php-type"><a  href="../../type/point">BeastBytes\Leaflet\Type\Point</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></span> $offset): <span class="type">BeastBytes\Leaflet\Layer\UI\Tooltip</span></td></tr><tr><td>$offset</td><td><a  href="../../type/point">BeastBytes\Leaflet\Type\Point</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></td><td>Tooltip position offset.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Tooltip</td><td></td></tr></tbody></table>

Default: Point(0, 0)

Declared in BeastBytes\Leaflet\Layer\UI\Tooltip


---

### pane()
Set the pane the layer is added to.

Not effective if the renderer option is set.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function pane(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $pane): <span class="type"><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$pane</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Pane name</td></tr><tr><td>return</td><td><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Default: GridLayer and TileLayer 'tileLayer', other layers 'overlayPane'

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### permanent()
Whether to open the tooltip permanently or only on `pointerover`.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function permanent(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $permanent): <span class="type">BeastBytes\Leaflet\Layer\UI\Tooltip</span></td></tr><tr><td>$permanent</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to open the tooltip permanently. `false` to open on `pointerover`.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Tooltip</td><td></td></tr></tbody></table>

Default: false

Declared in BeastBytes\Leaflet\Layer\UI\Tooltip

#### Related

* <a  target="_blank"  href="tooltip#p-e-r-m-a-n-e-n-t">PERMANENT</a>



---

### popup()
Bind a popup to the layer.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function popup(<span class="cod-php-type"><a  href="popup">BeastBytes\Leaflet\Layer\UI\Popup</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $popup): <span class="type"><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$popup</td><td><a  href="popup">BeastBytes\Leaflet\Layer\UI\Popup</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The popup or content for a popup to bund to the layer</td></tr><tr><td>return</td><td><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### sticky()
Whether the pointer 'sticks' to the pointer.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function sticky(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $sticky): <span class="type">BeastBytes\Leaflet\Layer\UI\Tooltip</span></td></tr><tr><td>$sticky</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to follow the pointer, `false` to be fixed at the feature centre.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Tooltip</td><td></td></tr></tbody></table>

Default: false

Declared in BeastBytes\Leaflet\Layer\UI\Tooltip

#### Related

* <a  target="_blank"  href="tooltip#s-t-i-c-k-y">STICKY</a>



---

### tooltip()
Bind a tooltip to the layer.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function tooltip(<span class="cod-php-type">BeastBytes\Leaflet\Layer\UI\Tooltip|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $tooltip): <span class="type"><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$tooltip</td><td>BeastBytes\Leaflet\Layer\UI\Tooltip|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The tooltip or content for a tooltip to bind to the layer</td></tr><tr><td>return</td><td><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

## Related

* https://leafletjs.com/reference-2.0.0.html#tooltip

---
Generated by <a  target="_blank"  href="https://github.com/beastbytes/cod-php">CodPhp</a>