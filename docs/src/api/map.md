---
title: Map
lastUpdated: 2026-10-05 14:17:40
description: Represents a Leaflet map.
head:
  - - meta
    - name: element-type
      content: Class
  - - meta
    - name: Generator
      content: CodPhp
---

# <span class="cod-php-modifier">final</span> class `Map`

<a  href="https://github.com/beastbytes/leaflet-v2/blob/master/src/Map.php">Source Code</a>

Represents a Leaflet map.

Leaflet objects and plugins are added to the map which is then rendered.

<table><tbody><tr><th>Namespace</th><td>BeastBytes\Leaflet</td></tr><tr><th>Inheritance</th><td>

BeastBytes\Leaflet\Map

</td></tr><tr><th>Implements</th><td>

[BeastBytes\Leaflet\Importable](importable.md)<br>[BeastBytes\Leaflet\Leaflet](leaflet.md)<br>[Stringable](https://www.php.net/manual/en/class.stringable.php)

</td></tr><tr><th>Uses</th><td>

[BeastBytes\Leaflet\EventTrait](event-trait.md)<br>[BeastBytes\Leaflet\LeafletTrait](leaflet-trait.md)<br>[BeastBytes\Leaflet\OptionsTrait](options-trait.md)<br>[BeastBytes\Leaflet\ZoomTrait](zoom-trait.md)

</td></tr></tbody></table>

## Constants

### ATTRIBUTION_CONTROL

 ATTRIBUTION_CONTROL = true

Declared in BeastBytes\Leaflet\Map

### BOUNCE_AT_ZOOM_LIMITS

 BOUNCE_AT_ZOOM_LIMITS = true

Declared in BeastBytes\Leaflet\Map

### BOX_ZOOM

 BOX_ZOOM = true

Declared in BeastBytes\Leaflet\Map

### CENTER

 CENTER = 'center'

Declared in BeastBytes\Leaflet\Map

### CLOSE_POPUP_ON_CLICK

 CLOSE_POPUP_ON_CLICK = true

Declared in BeastBytes\Leaflet\Map

### DOUBLE_CLICK_ZOOM

 DOUBLE_CLICK_ZOOM = true

Declared in BeastBytes\Leaflet\Map

### DRAGGING

 DRAGGING = true

Declared in BeastBytes\Leaflet\Map

### FADE_ANIMATION

 FADE_ANIMATION = true

Declared in BeastBytes\Leaflet\Map

### INERTIA

 INERTIA = true

Declared in BeastBytes\Leaflet\Map

### KEYBOARD

 KEYBOARD = true

Declared in BeastBytes\Leaflet\Map

### MARKER_ZOOM_ANIMATION

 MARKER_ZOOM_ANIMATION = true

Declared in BeastBytes\Leaflet\Map

### PACKAGE

 PACKAGE = 'leaflet'

Declared in [BeastBytes\Leaflet\Leaflet](leaflet)

### PINCH_ZOOM

 PINCH_ZOOM = true

Declared in BeastBytes\Leaflet\Map

### PREFER_CANVAS

 PREFER_CANVAS = true

Declared in BeastBytes\Leaflet\Map

### SCROLL_WHEEL_ZOOM

 SCROLL_WHEEL_ZOOM = true

Declared in BeastBytes\Leaflet\Map

### TAP_HOLD

 TAP_HOLD = true

Declared in BeastBytes\Leaflet\Map

### TRACK_RESIZE

 TRACK_RESIZE = true

Declared in BeastBytes\Leaflet\Map

### WORLD_COPY_JUMP

 WORLD_COPY_JUMP = true

Declared in BeastBytes\Leaflet\Map

### ZOOM_ANIMATION

 ZOOM_ANIMATION = true

Declared in BeastBytes\Leaflet\Map

### ZOOM_CONTROL

 ZOOM_CONTROL = true

Declared in BeastBytes\Leaflet\Map


## Methods

### __construct()
Create a map.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span> function __construct(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $element, <span class="cod-php-type"><a  href="type/lat-lng">BeastBytes\Leaflet\Type\LatLng</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></span> $center, <span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $zoom)</td></tr><tr><td>$element</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The ID of the map&#039;s DOM element</td></tr><tr><td>$center</td><td><a  href="type/lat-lng">BeastBytes\Leaflet\Type\LatLng</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></td><td></td></tr><tr><td>$zoom</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>The initial map zoom level</td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Map


---

### add()
Add an object to the map.

Adding an object automatically imports the required object in JavaScript.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function add(<span class="cod-php-type"><a  href="addable">BeastBytes\Leaflet\Addable</a></span> $object, <span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $importFrom): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$object</td><td><a  href="addable">BeastBytes\Leaflet\Addable</a></td><td>The object to add</td></tr><tr><td>$importFrom</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The JavaScript package to import from</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Map


---

### attributionControl()
Whether an attribution control is added to the map by default.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function attributionControl(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $attributionControl): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$attributionControl</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to display an attribution control, or `false`</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: true

Declared in BeastBytes\Leaflet\Map

#### Related

* <a  target="_blank"  href="map#attribution-control">ATTRIBUTION_CONTROL</a>



---

### bounceAtZoomLimits()
Whether to zoom beyond min/max zoom then bounce back when pinch-zooming.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function bounceAtZoomLimits(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $bounceAtZoomLimits): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$bounceAtZoomLimits</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to enable, `false` to disable.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: true

Declared in BeastBytes\Leaflet\Map

#### Related

* <a  target="_blank"  href="map#bounce-at-zoom-limits">BOUNCE_AT_ZOOM_LIMITS</a>



---

### boxZoom()
Whether the map can be zoomed to a rectangular area specified
by dragging the pointer while pressing the shift key.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function boxZoom(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $boxZoom): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$boxZoom</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to enable, `false` to disable.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: true

Declared in BeastBytes\Leaflet\Map

#### Related

* <a  target="_blank"  href="map#box-zoom">BOX_ZOOM</a>



---

### class()
<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span> <span class="cod-php-modifier">static</span>  function class(<span class="cod-php-type"><a  href="map-class">BeastBytes\Leaflet\MapClass</a></span> $class): <span class="type"><a  href="https://www.php.net/manual/en/language.types.void.php">void</a></span></td></tr><tr><td>$class</td><td><a  href="map-class">BeastBytes\Leaflet\MapClass</a></td><td>Set the JavaScript class name to use for maps.</td></tr><tr><td>return</td><td><a  href="https://www.php.net/manual/en/language.types.void.php">void</a></td><td></td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Map


---

### closePopupOnClick()
Whether popups can be closed by clicking on the map.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function closePopupOnClick(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $closePopupOnClick): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$closePopupOnClick</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to enable, `false` to disable.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: true

Declared in BeastBytes\Leaflet\Map

#### Related

* <a  target="_blank"  href="map#close-popup-on-click">CLOSE_POPUP_ON_CLICK</a>



---

### crs()
Set the Coordinate Reference System to use.

**Do not use unless certain what it means.**

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function crs(<span class="cod-php-type"><a  href="layer/raster/c-r-s">BeastBytes\Leaflet\Layer\Raster\CRS</a></span> $crs): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$crs</td><td><a  href="layer/raster/c-r-s">BeastBytes\Leaflet\Layer\Raster\CRS</a></td><td>The Coordinate Reference System to use.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: CRS.EPSG3857

Declared in BeastBytes\Leaflet\Map

#### Related

* <a  target="_blank"  href="layer/raster/c-r-s">CRS</a>



---

### doubleClickZoom()
Whether the map can be zoomed in by double-clicking on it and zoomed out by double-clicking while holding shift.

If passed 'center', double-click zoom will zoom to the centre of the view regardless of where the pointer was.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function doubleClickZoom(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a>|<a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $doubleClickZoom): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$doubleClickZoom</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a>|<a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` do enable double-click zoom, `false` to disable.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: true

Declared in BeastBytes\Leaflet\Map

#### Related

* <a  target="_blank"  href="map#c-e-n-t-e-r">CENTER</a>
* <a  target="_blank"  href="map#double-click-zoom">DOUBLE_CLICK_ZOOM</a>



---

### dragging()
Whether the map is draggable with pointer or not.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function dragging(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $dragging): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$dragging</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to enable dragging, `false` to disable.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: true

Declared in BeastBytes\Leaflet\Map

#### Related

* <a  target="_blank"  href="map#d-r-a-g-g-i-n-g">DRAGGING</a>



---

### easeLinearity()
Set the `$easeLinearity`

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function easeLinearity(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.float.php">float</a></span> $easeLinearity): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$easeLinearity</td><td><a  href="https://www.php.net/manual/en/language.types.float.php">float</a></td><td>easeLinearity</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: 0.2

Declared in BeastBytes\Leaflet\Map


---

### events()
Attach event(s) to an object.

If there are multiple events of the same type, the last event takes precedence.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function events(<span class="cod-php-type"><a  href="event">BeastBytes\Leaflet\Event</a></span> $...event): <span class="type">self</span></td></tr><tr><td>$event</td><td><a  href="event">BeastBytes\Leaflet\Event</a></td><td>Event(s) to be attached the object.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Map


---

### fadeAnimation()
Whether the tile fade animation is enabled.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function fadeAnimation(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $fadeAnimation): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$fadeAnimation</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to enable, `false` to disable.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: enabled in all browsers that support CSS Transitions except Android.

Declared in BeastBytes\Leaflet\Map

#### Related

* <a  target="_blank"  href="map#fade-animation">FADE_ANIMATION</a>



---

### getClassName()
Returns the object's PHP base class name.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function getClassName(): <span class="type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span></td></tr><tr><td>return</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Object PHP base class name.</td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Map


---

### getId()
Returns the object id.

The primary use is to provide a JavaScript variable. Auto generated on read if not set.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function getId(): <span class="type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span></td></tr><tr><td>return</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Object id.</td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Map


---

### import()
Add an object to be imported in JavaScript

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span> <span class="cod-php-modifier">static</span>  function import(<span class="cod-php-type"><a  href="importable">BeastBytes\Leaflet\Importable</a></span> $object, <span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $from = 'leaflet'): <span class="type"><a  href="https://www.php.net/manual/en/language.types.void.php">void</a></span></td></tr><tr><td>$object</td><td><a  href="importable">BeastBytes\Leaflet\Importable</a></td><td>Object to import.</td></tr><tr><td>$from</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Package to import from.</td></tr><tr><td>return</td><td><a  href="https://www.php.net/manual/en/language.types.void.php">void</a></td><td></td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Map


---

### importName()
The object's JavaScript import name; this is included in the JavaScript `import` statement.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function importName(): <span class="type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span></td></tr><tr><td>return</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The object&#039;s JavaScript import name</td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Map


---

### inertia()
Whether panning of the map will have an inertia effect where the map builds momentum
while dragging and continues moving in the same direction for some time.

Feels especially nice on touch devices.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function inertia(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $inertia): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$inertia</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to enable, `false` to disable.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: true

Declared in BeastBytes\Leaflet\Map

#### Related

* <a  target="_blank"  href="map#i-n-e-r-t-i-a">INERTIA</a>



---

### inertiaDeceleration()
The rate with which the inertial movement slows down, in pixels/second.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function inertiaDeceleration(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $inertiaDeceleration): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$inertiaDeceleration</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>Inertial deceleration.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: 3000

Declared in BeastBytes\Leaflet\Map


---

### inertiaMaxSpeed()
Max speed of the inertial movement, in pixels/second.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function inertiaMaxSpeed(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $inertiaMaxSpeed): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$inertiaMaxSpeed</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>Inertia max speed.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: Infinity

Declared in BeastBytes\Leaflet\Map


---

### keyboard()
Whether the map can be navigated with keyboard arrows and +/- keys.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function keyboard(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $keyboard): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$keyboard</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to enable, `false` to disable.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: true

Declared in BeastBytes\Leaflet\Map

#### Related

* <a  target="_blank"  href="map#k-e-y-b-o-a-r-d">KEYBOARD</a>



---

### keyboardPanDelta()
Number of pixels to pan when pressing an arrow key.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function keyboardPanDelta(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $keyboardPanDelta): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$keyboardPanDelta</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>Amount of pixels.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: 80

Declared in BeastBytes\Leaflet\Map


---

### layers()
Layer(s) and/or layer ids that will be added to the map initially.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function layers(<span class="cod-php-type"><a  href="layer/layer">BeastBytes\Leaflet\Layer\Layer</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $...layers): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$layers</td><td><a  href="layer/layer">BeastBytes\Leaflet\Layer\Layer</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Map initial layers.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: layers

Declared in BeastBytes\Leaflet\Map


---

### markerZoomAnimation()
Whether markers animate their zoom with the zoom animation, or disappear for the length of the animation.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function markerZoomAnimation(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $markerZoomAnimation): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$markerZoomAnimation</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to animate, `false` to hide during zoom animation.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: Enabled in all browsers that support CSS Transitions except Android.

Declared in BeastBytes\Leaflet\Map

#### Related

* <a  target="_blank"  href="map#marker-zoom-animation">MARKER_ZOOM_ANIMATION</a>



---

### maxBounds()
Restrict the view to the given geographical bounds,
bouncing the user back if the user tries to pan outside the view.

To set the restriction dynamically, use the setMaxBounds() method in JavaScript.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function maxBounds(<span class="cod-php-type"><a  href="type/lat-lng-bounds">BeastBytes\Leaflet\Type\LatLngBounds</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></span> $maxBounds): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$maxBounds</td><td><a  href="type/lat-lng-bounds">BeastBytes\Leaflet\Type\LatLngBounds</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></td><td>Geographical bounds</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: null

Declared in BeastBytes\Leaflet\Map


---

### maxBoundsViscosity()
If maxBounds is set, this option will control how solid the bounds are when dragging the map around.

The default value of 0.0 allows the user to drag outside the bounds at normal speed,
higher values will slow down map dragging outside bounds,
and 1.0 makes the bounds fully solid, preventing the user from dragging outside the bounds.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function maxBoundsViscosity(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.float.php">float</a></span> $maxBoundsViscosity): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$maxBoundsViscosity</td><td><a  href="https://www.php.net/manual/en/language.types.float.php">float</a></td><td>Max bounds viscosity.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: 0.0

Declared in BeastBytes\Leaflet\Map


---

### maxZoom()
Maximum zoom level up to which the map or layer will be displayed.

For the map, if not specified and at least one GridLayer or TileLayer is in the map,
the highest of their maxZoom options will be used instead.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function maxZoom(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $maxZoom): <span class="type">self</span></td></tr><tr><td>$maxZoom</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>Max zoom.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Default: *

Declared in BeastBytes\Leaflet\Map


---

### minZoom()
Minimum zoom level down to which the map or layer will be displayed.

For the map, if not specified and at least one GridLayer or TileLayer is in the map,
the lowest of their minZoom options will be used instead.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function minZoom(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $minZoom): <span class="type">self</span></td></tr><tr><td>$minZoom</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>Min zoom.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Default: *

Declared in BeastBytes\Leaflet\Map


---

### pinchZoom()
Whether the map can be zoomed by touch-dragging with two fingers.

If passed 'center', it will zoom to the centre of the view regardless of where the touch events (fingers) were.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function pinchZoom(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a>|<a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $pinchZoom): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$pinchZoom</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a>|<a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to enable, `false` to discable, or &#039;center&#039;.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: Enabled for touch-capable web browsers

Declared in BeastBytes\Leaflet\Map

#### Related

* <a  target="_blank"  href="map#c-e-n-t-e-r">CENTER</a>
* <a  target="_blank"  href="map#pinch-zoom">PINCH_ZOOM</a>



---

### preferCanvas()
Whether Paths should be rendered on a Canvas renderer.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function preferCanvas(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $preferCanvas): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$preferCanvas</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to use a Canvas renderer, `false` to use an SVG renderer.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: SVG renderer

Declared in BeastBytes\Leaflet\Map

#### Related

* <a  target="_blank"  href="map#prefer-canvas">PREFER_CANVAS</a>



---

### renderer()
The default renderer for drawing vector layers on the map.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function renderer(<span class="cod-php-type"><a  href="layer/vector/renderer/renderer">BeastBytes\Leaflet\Layer\Vector\Renderer\Renderer</a></span> $renderer): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$renderer</td><td><a  href="layer/vector/renderer/renderer">BeastBytes\Leaflet\Layer\Vector\Renderer\Renderer</a></td><td>Default renderer.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: SVG or Canvas depending on browser support.

Declared in BeastBytes\Leaflet\Map


---

### scrollWheelZoom()
Whether the map can be zoomed by using the mouse wheel.

If passed 'center', it will zoom to the centre of the view regardless of where the pointer was.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function scrollWheelZoom(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a>|<a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $scrollWheelZoom): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$scrollWheelZoom</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a>|<a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to enable, `false` to disable`, or `center`.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: true

Declared in BeastBytes\Leaflet\Map

#### Related

* <a  target="_blank"  href="map#c-e-n-t-e-r">CENTER</a>
* <a  target="_blank"  href="map#scroll-wheel-zoom">SCROLL_WHEEL_ZOOM</a>



---

### tapHold()
Simulation of contextmenu event.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function tapHold(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $tapHold): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$tapHold</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to enable, `false` to disable.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: `true` for mobile Safari

Declared in BeastBytes\Leaflet\Map

#### Related

* <a  target="_blank"  href="map#tap-hold">TAP_HOLD</a>



---

### tapTolerance()
The maximum number of pixels a user can shift their finger during touch for it to be considered a valid tap.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function tapTolerance(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $tapTolerance): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$tapTolerance</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>Number of pixels.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: 15

Declared in BeastBytes\Leaflet\Map


---

### trackResize()
Whether the map automatically handles browser window resize to update itself.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function trackResize(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $trackResize): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$trackResize</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to enable, `false` to disable.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: true

Declared in BeastBytes\Leaflet\Map

#### Related

* <a  target="_blank"  href="map#track-resize">TRACK_RESIZE</a>



---

### transform3DLimit()
Defines the maximum size of a CSS translation transform.

The default value should not be changed unless a web browser positions layers
in the wrong place after doing a large panBy.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function transform3DLimit(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $transform3DLimit): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$transform3DLimit</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>Maximum size of a CSS translation transform.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: 2^23

Declared in BeastBytes\Leaflet\Map


---

### wheelDebounceTime()
How often, in milliseconds, a wheel can fire an event.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function wheelDebounceTime(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $wheelDebounceTime): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$wheelDebounceTime</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>Number of milliseconds.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: 40

Declared in BeastBytes\Leaflet\Map


---

### wheelPxPerZoomLevel()
How many scroll pixels (as reported by DomEvent.getWheelDelta) mean a change of one full zoom level.

Smaller values will make wheel-zooming faster, and vice versa.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function wheelPxPerZoomLevel(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $wheelPxPerZoomLevel): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$wheelPxPerZoomLevel</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>Number of pixels.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: 60

Declared in BeastBytes\Leaflet\Map


---

### worldCopyJump()
Whether to jump tp the original copy of the world when panned to another copy.

If enabled all overlays, e.g. markers, vector layers, etc., remain visible.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function worldCopyJump(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $worldCopyJump): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$worldCopyJump</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to enable, `false` to disable.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: false

Declared in BeastBytes\Leaflet\Map

#### Related

* <a  target="_blank"  href="map#world-copy-jump">WORLD_COPY_JUMP</a>



---

### zoomAnimation()
Whether the map zoom animation is enabled.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function zoomAnimation(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $zoomAnimation): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$zoomAnimation</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to enable, `false` to disable.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: Enabled in all browsers that support CSS Transitions except Android.

Declared in BeastBytes\Leaflet\Map

#### Related

* <a  target="_blank"  href="map#zoom-animation">ZOOM_ANIMATION</a>



---

### zoomAnimationThreshold()
The maximum zoom level difference to animate the zoom.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function zoomAnimationThreshold(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $zoomAnimationThreshold): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$zoomAnimationThreshold</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>Zoom difference.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: 4

Declared in BeastBytes\Leaflet\Map


---

### zoomControl()
Whether a zoom control is added to the map by default.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function zoomControl(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $zoomControl): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$zoomControl</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to add a zoom control, `false` not to.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: true

Declared in BeastBytes\Leaflet\Map

#### Related

* <a  target="_blank"  href="map#zoom-control">ZOOM_CONTROL</a>



---

### zoomDelta()
How much the map's zoom level will change after a zoomIn(), zoomOut(), pressing + or - on the keyboard,
or using the zoom controls.

Values smaller than 1 (e.g. 0.5) allow for greater granularity.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function zoomDelta(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.float.php">float</a></span> $zoomDelta): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$zoomDelta</td><td><a  href="https://www.php.net/manual/en/language.types.float.php">float</a></td><td>Controls</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: 1.0

Declared in BeastBytes\Leaflet\Map


---

### zoomSnap()
Forces the map's zoom level to always be a multiple of this,
particularly right after a fitBounds() or a pinch-zoom.

By default, the zoom level snaps to the nearest integer;
lower values (e.g. 0.5 or 0.1) allow for greater granularity.
A value of 0 means the zoom level will not be snapped after fitBounds or a pinch-zoom.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function zoomSnap(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.float.php">float</a></span> $zoomSnap): <span class="type">BeastBytes\Leaflet\Map</span></td></tr><tr><td>$zoomSnap</td><td><a  href="https://www.php.net/manual/en/language.types.float.php">float</a></td><td>Zoom snap.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Map</td><td></td></tr></tbody></table>

Default: 1.0

Declared in BeastBytes\Leaflet\Map


---

## Related

* https://leafletjs.com/reference-2.0.0.html#map

---
Generated by <a  target="_blank"  href="https://github.com/beastbytes/cod-php">CodPhp</a>