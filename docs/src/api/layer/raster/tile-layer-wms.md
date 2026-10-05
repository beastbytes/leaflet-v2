---
title: TileLayerWms
lastUpdated: 2026-10-05 14:17:39
description: Represents a WMS (Web Map Service) tile layer.
head:
  - - meta
    - name: element-type
      content: Class
  - - meta
    - name: Generator
      content: CodPhp
---

# <span class="cod-php-modifier">final</span> class `TileLayerWms`

<a  href="https://github.com/beastbytes/leaflet-v2/blob/master/src/Layer/Raster/TileLayerWms.php">Source Code</a>

Represents a WMS (Web Map Service) tile layer.

<table><tbody><tr><th>Namespace</th><td>BeastBytes\Leaflet\Layer\Raster</td></tr><tr><th>Inheritance</th><td>

BeastBytes\Leaflet\Layer\Raster\TileLayerWms<br>[BeastBytes\Leaflet\Layer\Layer](../layer.md)

</td></tr><tr><th>Implements</th><td>

[BeastBytes\Leaflet\Addable](../../addable.md)<br>[BeastBytes\Leaflet\Importable](../../importable.md)<br>[BeastBytes\Leaflet\Leaflet](../../leaflet.md)<br>[Stringable](https://www.php.net/manual/en/class.stringable.php)

</td></tr></tbody></table>

## Constants

### PACKAGE

 PACKAGE = 'leaflet'

Declared in [BeastBytes\Leaflet\Leaflet](../../leaflet)

### TRANSPARENT

 TRANSPARENT = true

Declared in BeastBytes\Leaflet\Layer\Raster\TileLayerWms

### UPPERCASE

 UPPERCASE = true

Declared in BeastBytes\Leaflet\Layer\Raster\TileLayerWms


## Properties

### $baseUrl
| Type | Read/Write | Default |
|-|:-:|-|
| <a  href="https://www.php.net/manual/en/language.types.string.php">string</a> | Read |  |

Declared in BeastBytes\Leaflet\Layer\Raster\TileLayerWms

---



## Methods

### __construct()
Create a WMS tile layer.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span> function __construct(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $baseUrl, <span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $...layer)</td></tr><tr><td>$baseUrl</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>URL of the WMS service.</td></tr><tr><td>$layer</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>WMS layer(s) to show.</td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Layer\Raster\TileLayerWms


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

### crs()
Coordinate Reference System to use for the WMS requests.

**Do not use unless certain what it means.**

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function crs(<span class="cod-php-type"><a  href="c-r-s">BeastBytes\Leaflet\Layer\Raster\CRS</a></span> $crs): <span class="type">BeastBytes\Leaflet\Layer\Raster\TileLayerWms</span></td></tr><tr><td>$crs</td><td><a  href="c-r-s">BeastBytes\Leaflet\Layer\Raster\CRS</a></td><td></td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\Raster\TileLayerWms</td><td></td></tr></tbody></table>

Default: Map CRS

Declared in BeastBytes\Leaflet\Layer\Raster\TileLayerWms


---

### events()
Attach event(s) to an object.

If there are multiple events of the same type, the last event takes precedence.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function events(<span class="cod-php-type"><a  href="../../event">BeastBytes\Leaflet\Event</a></span> $...event): <span class="type">self</span></td></tr><tr><td>$event</td><td><a  href="../../event">BeastBytes\Leaflet\Event</a></td><td>Event(s) to be attached the object.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### format()
WMS image format.

Use WmsFormat::png for layers with transparency.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function format(<span class="cod-php-type"><a  href="wms-image-format">BeastBytes\Leaflet\Layer\Raster\WmsImageFormat</a></span> $format): <span class="type">BeastBytes\Leaflet\Layer\Raster\TileLayerWms</span></td></tr><tr><td>$format</td><td><a  href="wms-image-format">BeastBytes\Leaflet\Layer\Raster\WmsImageFormat</a></td><td>WMS image format.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\Raster\TileLayerWms</td><td></td></tr></tbody></table>

Default: WmsFormat::jpeg

Declared in BeastBytes\Leaflet\Layer\Raster\TileLayerWms


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

### name()
Set the layer name

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function name(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $name): <span class="type"><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$name</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Name of the layer when used in the Layers control.     *</td></tr><tr><td>return</td><td><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Default: Layer ID

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


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

### styles()
List of WMS styles.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function styles(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $...style): <span class="type">BeastBytes\Leaflet\Layer\Raster\TileLayerWms</span></td></tr><tr><td>$style</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>WMS styles.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\Raster\TileLayerWms</td><td></td></tr></tbody></table>

Default: ''

Declared in BeastBytes\Leaflet\Layer\Raster\TileLayerWms


---

### tooltip()
Bind a tooltip to the layer.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function tooltip(<span class="cod-php-type"><a  href="../u-i/tooltip">BeastBytes\Leaflet\Layer\UI\Tooltip</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $tooltip): <span class="type"><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></span></td></tr><tr><td>$tooltip</td><td><a  href="../u-i/tooltip">BeastBytes\Leaflet\Layer\UI\Tooltip</a>|<a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The tooltip or content for a tooltip to bind to the layer</td></tr><tr><td>return</td><td><a  href="../layer">BeastBytes\Leaflet\Layer\Layer</a></td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Layer\Layer](../layer)


---

### transparent()
Whether to use WMS service images with transparency.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function transparent(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $transparent): <span class="type">BeastBytes\Leaflet\Layer\Raster\TileLayerWms</span></td></tr><tr><td>$transparent</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` use WMS service images with transparency, `false` not to.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\Raster\TileLayerWms</td><td></td></tr></tbody></table>

Default: false

Declared in BeastBytes\Leaflet\Layer\Raster\TileLayerWms

#### Related

* <a  target="_blank"  href="tile-layer-wms#t-r-a-n-s-p-a-r-e-n-t">TRANSPARENT</a>



---

### uppercase()
Whether to uppercase WMS request parameter keys.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function uppercase(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $uppercase): <span class="type">BeastBytes\Leaflet\Layer\Raster\TileLayerWms</span></td></tr><tr><td>$uppercase</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to uppercase WMS request parameter keys, `false` to leave unchanged.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\Raster\TileLayerWms</td><td></td></tr></tbody></table>

Default: false

Declared in BeastBytes\Leaflet\Layer\Raster\TileLayerWms

#### Related

* <a  target="_blank"  href="tile-layer-wms#u-p-p-e-r-c-a-s-e">UPPERCASE</a>



---

### version()
Version of the WMS service to use.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function version(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $version): <span class="type">BeastBytes\Leaflet\Layer\Raster\TileLayerWms</span></td></tr><tr><td>$version</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>WMS service version.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Layer\Raster\TileLayerWms</td><td></td></tr></tbody></table>

Default: '1.1.1'

Declared in BeastBytes\Leaflet\Layer\Raster\TileLayerWms


---

Generated by <a  target="_blank"  href="https://github.com/beastbytes/cod-php">CodPhp</a>