---
title: Popup
lastUpdated: 2026-10-05 14:17:39
description: Represents a popup on the map.
head:
  - - meta
    - name: element-type
      content: Class
  - - meta
    - name: Generator
      content: CodPhp
---

# <span class="cod-php-modifier">final</span> class `Popup`

<a  href="https://github.com/beastbytes/leaflet-v2/blob/master/src/Layer/UI/Popup.php">Source Code</a>

Represents a popup on the map.

<table><tbody><tr><th>Namespace</th><td>BeastBytes\Leaflet\Layer\UI</td></tr><tr><th>Inheritance</th><td>

BeastBytes\Leaflet\Layer\UI\Popup<br>[BeastBytes\Leaflet\Layer\UI\DivOverlay](div-overlay.md)<br>[BeastBytes\Leaflet\Layer\InteractiveLayer](../interactive-layer.md)<br>[BeastBytes\Leaflet\Layer\Layer](../layer.md)

</td></tr><tr><th>Implements</th><td>

[BeastBytes\Leaflet\Addable](../../addable.md)<br>[BeastBytes\Leaflet\Importable](../../importable.md)<br>[BeastBytes\Leaflet\Leaflet](../../leaflet.md)<br>[Stringable](https://www.php.net/manual/en/class.stringable.php)

</td></tr></tbody></table>

## Constants

### AUTO_CLOSE

 AUTO_CLOSE = true

Declared in BeastBytes\Leaflet\Layer\UI\Popup

### AUTO_PAN

 AUTO_PAN = true

Declared in BeastBytes\Leaflet\Layer\UI\Popup

### BUBBLING_POINTER_EVENTS

 BUBBLING_POINTER_EVENTS = true

Declared in [BeastBytes\Leaflet\Layer\InteractiveLayer](../interactive-layer)

### CLOSE_BUTTON

 CLOSE_BUTTON = true

Declared in BeastBytes\Leaflet\Layer\UI\Popup

### CLOSE_ON_CLICK

 CLOSE_ON_CLICK = true

Declared in BeastBytes\Leaflet\Layer\UI\Popup

### CLOSE_ON_ESCAPE_KEY

 CLOSE_ON_ESCAPE_KEY = true

Declared in BeastBytes\Leaflet\Layer\UI\Popup

### INTERACTIVE

 INTERACTIVE = true

Declared in [BeastBytes\Leaflet\Layer\InteractiveLayer](../interactive-layer)

### KEEP_IN_VIEW

 KEEP_IN_VIEW = true

Declared in BeastBytes\Leaflet\Layer\UI\Popup

### PACKAGE

 PACKAGE = 'leaflet'

Declared in [BeastBytes\Leaflet\Leaflet](../../leaflet)

### TRACK_RESIZE

 TRACK_RESIZE = true

Declared in BeastBytes\Leaflet\Layer\UI\Popup


## Methods

### __construct()
Create a Popup

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span> function __construct(<span class="cod-php-type"><a  href="../../type/lat-lng">BeastBytes\Leaflet\Type\LatLng</a>|<a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a>|<a  href="https://www.php.net/manual/en/language.types.null.php">null</a>|<a  href="https://www.php.net/manual/en/language.types.null.php">null</a></span> $location = null)</td></tr><tr><td>$location</td><td><a  href="../../type/lat-lng">BeastBytes\Leaflet\Type\LatLng</a>|<a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a>|<a  href="https://www.php.net/manual/en/language.types.null.php">null</a>|<a  href="https://www.php.net/manual/en/language.types.null.php">null</a></td><td>Either the geographical location of the marker or the source layer.</td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Layer\UI\Popup


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

### autoClose()
Whether to close the popup if another is opened.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function autoClose(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $autoClose): <span class="type">BeastBytes\Leaflet\Layer\UI\Popup</span></td></tr><tr><td>$autoClose</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to close when another popup is opened, `false` to leave open.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Popup</td><td></td></tr></tbody></table>

Default: true

Declared in BeastBytes\Leaflet\Layer\UI\Popup

#### Related

* <a  target="_blank"  href="popup#auto-close">AUTO_CLOSE</a>



---

### autoPan()
Whether to the map should pan to fit the opened popup.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function autoPan(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $autoPan): <span class="type">BeastBytes\Leaflet\Layer\UI\Popup</span></td></tr><tr><td>$autoPan</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` for the map to pan to fit the opened popup, `false` not to pan.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Popup</td><td></td></tr></tbody></table>

Default: true

Declared in BeastBytes\Leaflet\Layer\UI\Popup

#### Related

* <a  target="_blank"  href="popup#auto-pan">AUTO_PAN</a>



---

### autoPanPadding()
Equivalent of setting both top left and bottom right auto-pan padding to the same value.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function autoPanPadding(<span class="cod-php-type"><a  href="../../type/point">BeastBytes\Leaflet\Type\Point</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></span> $autoPanPadding): <span class="type">BeastBytes\Leaflet\Layer\UI\Popup</span></td></tr><tr><td>$autoPanPadding</td><td><a  href="../../type/point">BeastBytes\Leaflet\Type\Point</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></td><td>Padding.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Popup</td><td></td></tr></tbody></table>

Default: Point(5, 5)

Declared in BeastBytes\Leaflet\Layer\UI\Popup

#### Related

* <a  target="_blank"  href="popup#autopanpaddingbottomright">autoPanPaddingBottomRight()</a>
* <a  target="_blank"  href="popup#autopanpaddingtopleft">autoPanPaddingTopLeft()</a>



---

### autoPanPaddingBottomRight()
Set the margin between the popup and the bottom right corner of the map view after auto-panning.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function autoPanPaddingBottomRight(<span class="cod-php-type"><a  href="../../type/point">BeastBytes\Leaflet\Type\Point</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></span> $autoPanPaddingBottomRight): <span class="type">BeastBytes\Leaflet\Layer\UI\Popup</span></td></tr><tr><td>$autoPanPaddingBottomRight</td><td><a  href="../../type/point">BeastBytes\Leaflet\Type\Point</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></td><td>Bottom right padding.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Popup</td><td></td></tr></tbody></table>

Default: null

Declared in BeastBytes\Leaflet\Layer\UI\Popup

#### Related

* <a  target="_blank"  href="popup#autopanpadding">autoPanPadding()</a>
* <a  target="_blank"  href="popup#autopanpaddingtopleft">autoPanPaddingTopLeft()</a>



---

### autoPanPaddingTopLeft()
Set the margin between the popup and the top left corner of the map view after auto-panning.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function autoPanPaddingTopLeft(<span class="cod-php-type"><a  href="../../type/point">BeastBytes\Leaflet\Type\Point</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></span> $autoPanPaddingTopLeft): <span class="type">BeastBytes\Leaflet\Layer\UI\Popup</span></td></tr><tr><td>$autoPanPaddingTopLeft</td><td><a  href="../../type/point">BeastBytes\Leaflet\Type\Point</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></td><td>Top left padding.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Popup</td><td></td></tr></tbody></table>

Default: null

Declared in BeastBytes\Leaflet\Layer\UI\Popup

#### Related

* <a  target="_blank"  href="popup#autopanpadding">autoPanPadding()</a>
* <a  target="_blank"  href="popup#autopanpaddingbottomright">autoPanPaddingBottomRight()</a>



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

### closeButton()
Whether to show a close button on the popup.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function closeButton(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $closeButton): <span class="type">BeastBytes\Leaflet\Layer\UI\Popup</span></td></tr><tr><td>$closeButton</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to show a close button, `false` not to.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Popup</td><td></td></tr></tbody></table>

Default: true

Declared in BeastBytes\Leaflet\Layer\UI\Popup

#### Related

* <a  target="_blank"  href="popup#close-button">CLOSE_BUTTON</a>



---

### closeButtonLabel()
Set the 'aria-label' attribute of the close button.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function closeButtonLabel(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $closeButtonLabel): <span class="type">BeastBytes\Leaflet\Layer\UI\Popup</span></td></tr><tr><td>$closeButtonLabel</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>&#039;aria-label&#039; attribute of the close button.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Popup</td><td></td></tr></tbody></table>

Default: 'Close popup'

Declared in BeastBytes\Leaflet\Layer\UI\Popup


---

### closeOnClick()
Override the default behaviour of the popup closing when a user clicks on the map.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function closeOnClick(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $closeOnClick): <span class="type">BeastBytes\Leaflet\Layer\UI\Popup</span></td></tr><tr><td>$closeOnClick</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to close on click, `false` not to.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Popup</td><td></td></tr></tbody></table>

Default: map `closePopupOnClick` option

Declared in BeastBytes\Leaflet\Layer\UI\Popup

#### Related

* <a  target="_blank"  href="map#closepopuponclick">closePopupOnClick()</a>
* <a  target="_blank"  href="popup#close-on-click">CLOSE_ON_CLICK</a>



---

### closeOnEscapeKey()
Override the default behaviour of the `ESC` key for closing of the popup.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function closeOnEscapeKey(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $closeOnEscapeKey): <span class="type">BeastBytes\Leaflet\Layer\UI\Popup</span></td></tr><tr><td>$closeOnEscapeKey</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to close on `ESC` key, `false` not to.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Popup</td><td></td></tr></tbody></table>

Default: true

Declared in BeastBytes\Leaflet\Layer\UI\Popup

#### Related

* <a  target="_blank"  href="popup#close-on-escape-key">CLOSE_ON_ESCAPE_KEY</a>



---

### content()
Set the popup/tooltip content.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function content(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $content): <span class="type"><a  href="div-overlay">BeastBytes\Leaflet\Layer\UI\DivOverlay</a></span></td></tr><tr><td>$content</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Popup/Tooltip content</td></tr><tr><td>return</td><td><a  href="div-overlay">BeastBytes\Leaflet\Layer\UI\DivOverlay</a></td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\UI\DivOverlay](div-overlay)


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

### keepInView()
Whether to prevent users from panning the popup off of the screen while it is open.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function keepInView(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $keepInView): <span class="type">BeastBytes\Leaflet\Layer\UI\Popup</span></td></tr><tr><td>$keepInView</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to keep the popup in view, `false` not to.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Popup</td><td></td></tr></tbody></table>

Default: false

Declared in BeastBytes\Leaflet\Layer\UI\Popup

#### Related

* <a  target="_blank"  href="popup#keep-in-view">KEEP_IN_VIEW</a>



---

### maxHeight()
Set the height in pixels of a scrollable container inside the popup if its content exceeds it.

The scrollable container can be styled using the leaflet-popup-scrolled CSS class selector.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function maxHeight(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $maxHeight): <span class="type">BeastBytes\Leaflet\Layer\UI\Popup</span></td></tr><tr><td>$maxHeight</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>Height of container.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Popup</td><td></td></tr></tbody></table>

Default: null

Declared in BeastBytes\Leaflet\Layer\UI\Popup


---

### maxWidth()
Set the maximum width of the popup in pixels.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function maxWidth(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $maxWidth): <span class="type">BeastBytes\Leaflet\Layer\UI\Popup</span></td></tr><tr><td>$maxWidth</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>Max width of the popup.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Popup</td><td></td></tr></tbody></table>

Default: 300

Declared in BeastBytes\Leaflet\Layer\UI\Popup


---

### minWidth()
Set the minimum width of the popup in pixels.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function minWidth(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $minWidth): <span class="type">BeastBytes\Leaflet\Layer\UI\Popup</span></td></tr><tr><td>$minWidth</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>Min width of the popup.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Popup</td><td></td></tr></tbody></table>

Default: 50

Declared in BeastBytes\Leaflet\Layer\UI\Popup


---

### name()
Set the layer name

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function name(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $name): <span class="type"><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$name</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Name of the layer when used in the Layers control.     *</td></tr><tr><td>return</td><td><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Default: Layer ID

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### offset()
Set the popup position offset.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function offset(<span class="cod-php-type"><a  href="../../type/point">BeastBytes\Leaflet\Type\Point</a></span> $offset): <span class="type">BeastBytes\Leaflet\Layer\UI\Popup</span></td></tr><tr><td>$offset</td><td><a  href="../../type/point">BeastBytes\Leaflet\Type\Point</a></td><td>Popup position offset.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Popup</td><td></td></tr></tbody></table>

Default: Point(0, 7)

Declared in BeastBytes\Leaflet\Layer\UI\Popup


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

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function popup(<span class="cod-php-type">BeastBytes\Leaflet\Layer\UI\Popup|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $popup): <span class="type"><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$popup</td><td>BeastBytes\Leaflet\Layer\UI\Popup|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The popup or content for a popup to bund to the layer</td></tr><tr><td>return</td><td><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### tooltip()
Bind a tooltip to the layer.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function tooltip(<span class="cod-php-type"><a  href="tooltip">BeastBytes\Leaflet\Layer\UI\Tooltip</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $tooltip): <span class="type"><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$tooltip</td><td><a  href="tooltip">BeastBytes\Leaflet\Layer\UI\Tooltip</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The tooltip or content for a tooltip to bind to the layer</td></tr><tr><td>return</td><td><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### trackResize()
Whether the popup should react to changes in the size of its contents
(e.g. when an image inside the popup loads) and reposition itself.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function trackResize(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $trackResize): <span class="type">BeastBytes\Leaflet\Layer\UI\Popup</span></td></tr><tr><td>$trackResize</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to track content resize, `false` not to.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\UI\Popup</td><td></td></tr></tbody></table>

Default: true

Declared in BeastBytes\Leaflet\Layer\UI\Popup


---

## Related

* https://leafletjs.com/reference-2.0.0.html#popup

---
Generated by <a  target="_blank"  href="https://github.com/beastbytes/cod-php">CodPhp</a>