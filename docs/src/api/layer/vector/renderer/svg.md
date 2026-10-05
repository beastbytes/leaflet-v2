---
title: Svg
lastUpdated: 2026-10-05 14:17:39
description: Allows vector layers to be displayed with {@link https://developer.mozilla.org/docs/Web/SVG SVG}.
head:
  - - meta
    - name: element-type
      content: Class
  - - meta
    - name: Generator
      content: CodPhp
---

# <span class="cod-php-modifier">final</span> class `Svg`

<a  href="https://github.com/beastbytes/leaflet-v2/blob/master/src/Layer/Vector/Renderer/Svg.php">Source Code</a>

Allows vector layers to be displayed with <a href="https://developer.mozilla.org/docs/Web/SVG" target="_blank">SVG</a>.

<table><tbody><tr><th>Namespace</th><td>BeastBytes\Leaflet\Layer\Vector\Renderer</td></tr><tr><th>Inheritance</th><td>

BeastBytes\Leaflet\Layer\Vector\Renderer\Svg<br>[BeastBytes\Leaflet\Layer\Vector\Renderer\BlanketOverlay](blanket-overlay.md)<br>[BeastBytes\Leaflet\Layer\Layer](../../layer.md)

</td></tr><tr><th>Implements</th><td>

[BeastBytes\Leaflet\Addable](../../../addable.md)<br>[BeastBytes\Leaflet\Importable](../../../importable.md)<br>[BeastBytes\Leaflet\Layer\Vector\Renderer\Renderer](renderer.md)<br>[BeastBytes\Leaflet\Leaflet](../../../leaflet.md)<br>[Stringable](https://www.php.net/manual/en/class.stringable.php)

</td></tr></tbody></table>

## Constants

### CONTINUOUS

 CONTINUOUS = true

Declared in [BeastBytes\Leaflet\Layer\Vector\Renderer\BlanketOverlay](blanket-overlay)

### PACKAGE

 PACKAGE = 'leaflet'

Declared in [BeastBytes\Leaflet\Leaflet](../../../leaflet)


## Methods

### __construct()
<table><tbody><tr><td colspan="1"><span class="cod-php-visibility">public</span> function __construct()</td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../../layer)


---

### addTo()
Add the current object to a map.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function addTo(<span class="cod-php-type"><a  href="../../../map">BeastBytes\Leaflet\Map</a></span> $map, <span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $importFrom = 'leaflet'): <span class="type">self</span></td></tr><tr><td>$map</td><td><a  href="../../../map">BeastBytes\Leaflet\Map</a></td><td>Map to add the object to.</td></tr><tr><td>$importFrom</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The JavaScript package to import the object from; defaults to &#039;leaflet&#039;<br />
The parameter will primarily be used by plugins.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../../layer)


---

### attribution()
String to be shown in the attribution control, e.g. "© OpenStreetMap contributors".

It describes the layer data and is often a legal obligation towards copyright holders and tile providers.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function attribution(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $attribution): <span class="type"><a  href="../../layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$attribution</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Attribution</td></tr><tr><td>return</td><td><a  href="../../layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../../layer)


---

### continuous()
Whether to update the layer position continuously during pan/zoom animations, or after an animation.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function continuous(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $continuous): <span class="type"><a  href="blanket-overlay">BeastBytes\Leaflet\Layer\Vector\Renderer\BlanketOverlay</a></span></td></tr><tr><td>$continuous</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to update continuously, `false` to update after animation.</td></tr><tr><td>return</td><td><a  href="blanket-overlay">BeastBytes\Leaflet\Layer\Vector\Renderer\BlanketOverlay</a></td><td></td></tr></tbody></table>

Default: false

Declared in [BeastBytes\Leaflet\Layer\Vector\Renderer\BlanketOverlay](blanket-overlay)


---

### events()
Attach event(s) to an object.

If there are multiple events of the same type, the last event takes precedence.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function events(<span class="cod-php-type"><a  href="../../../event">BeastBytes\Leaflet\Event</a></span> $...event): <span class="type">self</span></td></tr><tr><td>$event</td><td><a  href="../../../event">BeastBytes\Leaflet\Event</a></td><td>Event(s) to be attached the object.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../../layer)


---

### getClassName()
Returns the object's PHP base class name.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function getClassName(): <span class="type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span></td></tr><tr><td>return</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Object PHP base class name.</td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../../layer)


---

### getId()
Returns the object id.

The primary use is to provide a JavaScript variable. Auto generated on read if not set.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function getId(): <span class="type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span></td></tr><tr><td>return</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Object id.</td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../../layer)


---

### getName()
Returns the layer name.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function getName(): <span class="type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span></td></tr><tr><td>return</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Layer name</td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../../layer)


---

### importName()
The object's JavaScript import name; this is included in the JavaScript `import` statement.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function importName(): <span class="type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span></td></tr><tr><td>return</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The object&#039;s JavaScript import name</td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../../layer)


---

### name()
Set the layer name

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function name(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $name): <span class="type"><a  href="../../layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$name</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Name of the layer when used in the Layers control.     *</td></tr><tr><td>return</td><td><a  href="../../layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Default: Layer ID

Declared in [BeastBytes\Leaflet\Layer\Layer](../../layer)


---

### padding()
How much to extend the clip area around the map view (relative to its size)
e.g. 0.1 would be 10% of map view in each direction.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function padding(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.float.php">float</a></span> $padding): <span class="type"><a  href="blanket-overlay">BeastBytes\Leaflet\Layer\Vector\Renderer\BlanketOverlay</a></span></td></tr><tr><td>$padding</td><td><a  href="https://www.php.net/manual/en/language.types.float.php">float</a></td><td>Padding</td></tr><tr><td>return</td><td><a  href="blanket-overlay">BeastBytes\Leaflet\Layer\Vector\Renderer\BlanketOverlay</a></td><td></td></tr></tbody></table>

Default: 0.1

Declared in [BeastBytes\Leaflet\Layer\Vector\Renderer\BlanketOverlay](blanket-overlay)


---

### pane()
Set the pane the layer is added to.

Not effective if the renderer option is set.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function pane(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $pane): <span class="type"><a  href="../../layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$pane</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Pane name</td></tr><tr><td>return</td><td><a  href="../../layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Default: GridLayer and TileLayer 'tileLayer', other layers 'overlayPane'

Declared in [BeastBytes\Leaflet\Layer\Layer](../../layer)


---

### popup()
Bind a popup to the layer.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function popup(<span class="cod-php-type"><a  href="../../u-i/popup">BeastBytes\Leaflet\Layer\UI\Popup</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $popup): <span class="type"><a  href="../../layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$popup</td><td><a  href="../../u-i/popup">BeastBytes\Leaflet\Layer\UI\Popup</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The popup or content for a popup to bund to the layer</td></tr><tr><td>return</td><td><a  href="../../layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../../layer)


---

### tooltip()
Bind a tooltip to the layer.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function tooltip(<span class="cod-php-type"><a  href="../../u-i/tooltip">BeastBytes\Leaflet\Layer\UI\Tooltip</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $tooltip): <span class="type"><a  href="../../layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$tooltip</td><td><a  href="../../u-i/tooltip">BeastBytes\Leaflet\Layer\UI\Tooltip</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The tooltip or content for a tooltip to bind to the layer</td></tr><tr><td>return</td><td><a  href="../../layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../../layer)


---

## Related

* https://leafletjs.com/reference-2.0.0.html#svg

---
Generated by <a  target="_blank"  href="https://github.com/beastbytes/cod-php">CodPhp</a>