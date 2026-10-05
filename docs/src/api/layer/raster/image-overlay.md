---
title: ImageOverlay
lastUpdated: 2026-10-05 14:17:39
description: Represents an image overlay over specific bounds of the map.
head:
  - - meta
    - name: element-type
      content: Class
  - - meta
    - name: Generator
      content: CodPhp
---

# <span class="cod-php-modifier">final</span> class `ImageOverlay`

<a  href="https://github.com/beastbytes/leaflet-v2/blob/master/src/Layer/Raster/ImageOverlay.php">Source Code</a>

Represents an image overlay over specific bounds of the map.

<table><tbody><tr><th>Namespace</th><td>BeastBytes\Leaflet\Layer\Raster</td></tr><tr><th>Inheritance</th><td>

BeastBytes\Leaflet\Layer\Raster\ImageOverlay<br>[BeastBytes\Leaflet\Layer\InteractiveLayer](../interactive-layer.md)<br>[BeastBytes\Leaflet\Layer\Layer](../layer.md)

</td></tr><tr><th>Implements</th><td>

[BeastBytes\Leaflet\Addable](../../addable.md)<br>[BeastBytes\Leaflet\Importable](../../importable.md)<br>[BeastBytes\Leaflet\Leaflet](../../leaflet.md)<br>[Stringable](https://www.php.net/manual/en/class.stringable.php)

</td></tr><tr><th>Uses</th><td>

[BeastBytes\Leaflet\Layer\Raster\ImageOptionsTrait](image-options-trait.md)

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


## Methods

### __construct()
Create an image overlay.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span> function __construct(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $image, <span class="cod-php-type"><a  href="../../type/lat-lng-bounds">BeastBytes\Leaflet\Type\LatLngBounds</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></span> $bounds)</td></tr><tr><td>$image</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Image URL.</td></tr><tr><td>$bounds</td><td><a  href="../../type/lat-lng-bounds">BeastBytes\Leaflet\Type\LatLngBounds</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></td><td>The bounds of the overlay.</td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Layer\Raster\ImageOverlay


---

### addTo()
Add the current object to a map.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function addTo(<span class="cod-php-type"><a  href="../../map">BeastBytes\Leaflet\Map</a></span> $map, <span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $importFrom = 'leaflet'): <span class="type">self</span></td></tr><tr><td>$map</td><td><a  href="../../map">BeastBytes\Leaflet\Map</a></td><td>Map to add the object to.</td></tr><tr><td>$importFrom</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The JavaScript package to import the object from; defaults to &#039;leaflet&#039;<br />
The parameter will primarily be used by plugins.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### alt()
Text for the alt attribute of the image.

Useful for accessibility.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function alt(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $alt): <span class="type">self</span></td></tr><tr><td>$alt</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Alt text.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Default: ''

Declared in BeastBytes\Leaflet\Layer\Raster\ImageOverlay


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

Declared in BeastBytes\Leaflet\Layer\Raster\ImageOverlay


---

### crossOrigin()
Whether the crossOrigin attribute will be added to the image.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function crossOrigin(<span class="cod-php-type"><a  href="../../cross-origin">BeastBytes\Leaflet\CrossOrigin</a>|<a  href="https://www.php.net/manual/en/reserved.constants.php#constant.false">false</a></span> $crossOrigin): <span class="type">self</span></td></tr><tr><td>$crossOrigin</td><td><a  href="../../cross-origin">BeastBytes\Leaflet\CrossOrigin</a>|<a  href="https://www.php.net/manual/en/reserved.constants.php#constant.false">false</a></td><td>`true` to add the crossOrigin attribute, `false` not to.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Default: false

Declared in BeastBytes\Leaflet\Layer\Raster\ImageOverlay


---

### decoding()
Define how the browser should decode the image.

If the image overlay is flickering when being added/removed, set this option to Decoding::sync.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function decoding(<span class="cod-php-type"><a  href="decoding">BeastBytes\Leaflet\Layer\Raster\Decoding</a></span> $decoding): <span class="type">self</span></td></tr><tr><td>$decoding</td><td><a  href="decoding">BeastBytes\Leaflet\Layer\Raster\Decoding</a></td><td>Image decoding.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Default: Decoding::auto

Declared in BeastBytes\Leaflet\Layer\Raster\ImageOverlay


---

### errorOverlayUrl()
Set a URL to an overlay image to show in place of an overlay that failed to load.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function errorOverlayUrl(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $errorOverlayUrl): <span class="type">self</span></td></tr><tr><td>$errorOverlayUrl</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>URL.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Layer\Raster\ImageOverlay


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

### opacity()
Set the opacity of the image overlay.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function opacity(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.float.php">float</a></span> $opacity): <span class="type">self</span></td></tr><tr><td>$opacity</td><td><a  href="https://www.php.net/manual/en/language.types.float.php">float</a></td><td>Opacity.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Default: 1.0

Declared in BeastBytes\Leaflet\Layer\Raster\ImageOverlay


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

### tooltip()
Bind a tooltip to the layer.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function tooltip(<span class="cod-php-type"><a  href="../u-i/tooltip">BeastBytes\Leaflet\Layer\UI\Tooltip</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $tooltip): <span class="type"><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$tooltip</td><td><a  href="../u-i/tooltip">BeastBytes\Leaflet\Layer\UI\Tooltip</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The tooltip or content for a tooltip to bind to the layer</td></tr><tr><td>return</td><td><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### zIndex()
Set the z index.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function zIndex(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $zIndex): <span class="type">self</span></td></tr><tr><td>$zIndex</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>Z index.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Default: 1

Declared in BeastBytes\Leaflet\Layer\Raster\ImageOverlay


---

## Related

* https://leafletjs.com/reference-2.0.0.html#imageoverlay

---
Generated by <a  target="_blank"  href="https://github.com/beastbytes/cod-php">CodPhp</a>