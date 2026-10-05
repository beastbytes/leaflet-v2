---
title: Icon
lastUpdated: 2026-10-05 14:17:40
description: Represents an icon to provide when creating a marker.
head:
  - - meta
    - name: element-type
      content: Class
  - - meta
    - name: Generator
      content: CodPhp
---

# class `Icon`

<a  href="https://github.com/beastbytes/leaflet-v2/blob/master/src/Type/Icon.php">Source Code</a>

Represents an icon to provide when creating a marker.

<table><tbody><tr><th>Namespace</th><td>BeastBytes\Leaflet\Type</td></tr><tr><th>Inheritance</th><td>

BeastBytes\Leaflet\Type\Icon<br>[BeastBytes\Leaflet\Type\Type](type.md)

</td></tr><tr><th>Implements</th><td>

[BeastBytes\Leaflet\Importable](../importable.md)<br>[BeastBytes\Leaflet\Leaflet](../leaflet.md)<br>[Stringable](https://www.php.net/manual/en/class.stringable.php)

</td></tr><tr><th>Uses</th><td>

[BeastBytes\Leaflet\ClassNameTrait](../class-name-trait.md)<br>[BeastBytes\Leaflet\OptionsTrait](../options-trait.md)

</td></tr><tr><th>Subclasses</th><td>

[BeastBytes\Leaflet\Type\DivIcon](div-icon.md)

</td></tr></tbody></table>

## Constants

### PACKAGE

 PACKAGE = 'leaflet'

Declared in [BeastBytes\Leaflet\Leaflet](../leaflet)


## Methods

### __construct()
Crate an Icon

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span> function __construct(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a>|<a  href="https://www.php.net/manual/en/language.types.null.php">null</a></span> $url = null)</td></tr><tr><td>$url</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a>|<a  href="https://www.php.net/manual/en/language.types.null.php">null</a></td><td>The icon url. If null Icon.Default is used.</td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Type\Icon


---

### className()
Set a custom CSS class name.

For `Icon` it applies to both icon and shadow images.
For vector layers it is only applicable when using the SVG renderer.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function className(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $className): <span class="type">self</span></td></tr><tr><td>$className</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Class name.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Default: null

Declared in BeastBytes\Leaflet\Type\Icon


---

### crossOrigin()
<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function crossOrigin(<span class="cod-php-type"><a  href="../cross-origin">BeastBytes\Leaflet\CrossOrigin</a>|<a  href="https://www.php.net/manual/en/reserved.constants.php#constant.false">false</a></span> $crossOrigin): <span class="type">BeastBytes\Leaflet\Type\Icon</span></td></tr><tr><td>$crossOrigin</td><td><a  href="../cross-origin">BeastBytes\Leaflet\CrossOrigin</a>|<a  href="https://www.php.net/manual/en/reserved.constants.php#constant.false">false</a></td><td>Whether the crossOrigin attribute will be added to the tiles.<br />
If a string is provided, all tiles will have their crossOrigin attribute set to the string provided.<br />
This is needed to access tile pixel data.<br />
Refer to CORS Settings for valid String values.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Type\Icon</td><td></td></tr></tbody></table>

Default: false

Declared in BeastBytes\Leaflet\Type\Icon


---

### getClassName()
Returns the object's PHP base class name.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function getClassName(): <span class="type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span></td></tr><tr><td>return</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Object PHP base class name.</td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Type\Type](type)


---

### getId()
Returns the object id.

The primary use is to provide a JavaScript variable. Auto generated on read if not set.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function getId(): <span class="type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span></td></tr><tr><td>return</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Object id.</td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Type\Type](type)


---

### iconAnchor()
<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function iconAnchor(<span class="cod-php-type"><a  href="point">BeastBytes\Leaflet\Type\Point</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></span> $iconAnchor): <span class="type">BeastBytes\Leaflet\Type\Icon</span></td></tr><tr><td>$iconAnchor</td><td><a  href="point">BeastBytes\Leaflet\Type\Point</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></td><td></td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Type\Icon</td><td></td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Type\Icon


---

### iconRetinaUrl()
<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function iconRetinaUrl(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $iconRetinaUrl): <span class="type">BeastBytes\Leaflet\Type\Icon</span></td></tr><tr><td>$iconRetinaUrl</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The URL to a retina sized version of the icon image.<br />
Used for Retina screen devices.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Type\Icon</td><td></td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Type\Icon


---

### iconSize()
Size of the icon image in pixels.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function iconSize(<span class="cod-php-type"><a  href="point">BeastBytes\Leaflet\Type\Point</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></span> $iconSize): <span class="type">BeastBytes\Leaflet\Type\Icon</span></td></tr><tr><td>$iconSize</td><td><a  href="point">BeastBytes\Leaflet\Type\Point</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></td><td>Icon size.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Type\Icon</td><td></td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Type\Icon


---

### importName()
The object's JavaScript import name; this is included in the JavaScript `import` statement.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function importName(): <span class="type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span></td></tr><tr><td>return</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The object&#039;s JavaScript import name</td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Type\Type](type)


---

### popupAnchor()
<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function popupAnchor(<span class="cod-php-type"><a  href="point">BeastBytes\Leaflet\Type\Point</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></span> $popupAnchor): <span class="type">BeastBytes\Leaflet\Type\Icon</span></td></tr><tr><td>$popupAnchor</td><td><a  href="point">BeastBytes\Leaflet\Type\Point</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></td><td>The coordinates of the point from which popups will &quot;open&quot;,<br />
relative to the icon anchor.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Type\Icon</td><td></td></tr></tbody></table>

Default: [0, 0]

Declared in BeastBytes\Leaflet\Type\Icon


---

### shadowAnchor()
<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function shadowAnchor(<span class="cod-php-type"><a  href="point">BeastBytes\Leaflet\Type\Point</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></span> $shadowAnchor): <span class="type">BeastBytes\Leaflet\Type\Icon</span></td></tr><tr><td>$shadowAnchor</td><td><a  href="point">BeastBytes\Leaflet\Type\Point</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></td><td>The coordinates of the &quot;tip&quot; of the shadow (relative to its top left corner)<br />
(the same as iconAnchor if not specified).</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Type\Icon</td><td></td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Type\Icon


---

### shadowRetinaUrl()
<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function shadowRetinaUrl(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $shadowRetinaUrl): <span class="type">BeastBytes\Leaflet\Type\Icon</span></td></tr><tr><td>$shadowRetinaUrl</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The URL to a retina sized version of the icon shadow image.<br />
Used for Retina screen devices.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Type\Icon</td><td></td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Type\Icon


---

### shadowSize()
<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function shadowSize(<span class="cod-php-type"><a  href="point">BeastBytes\Leaflet\Type\Point</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></span> $shadowSize): <span class="type">BeastBytes\Leaflet\Type\Icon</span></td></tr><tr><td>$shadowSize</td><td><a  href="point">BeastBytes\Leaflet\Type\Point</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></td><td>Size of the shadow image in pixels.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Type\Icon</td><td></td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Type\Icon


---

### shadowUrl()
<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function shadowUrl(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $shadowUrl): <span class="type">BeastBytes\Leaflet\Type\Icon</span></td></tr><tr><td>$shadowUrl</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The URL to the icon shadow image.<br />
If not specified, no shadow image will be created.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Type\Icon</td><td></td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Type\Icon


---

### tooltipAnchor()
<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function tooltipAnchor(<span class="cod-php-type"><a  href="point">BeastBytes\Leaflet\Type\Point</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></span> $tooltipAnchor): <span class="type">BeastBytes\Leaflet\Type\Icon</span></td></tr><tr><td>$tooltipAnchor</td><td><a  href="point">BeastBytes\Leaflet\Type\Point</a>|<a  href="https://www.php.net/manual/en/language.types.array.php">array</a></td><td>The coordinates of the point from which tooltips will &quot;open&quot;,<br />
relative to the icon anchor.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Type\Icon</td><td></td></tr></tbody></table>

Default: [0, 0]

Declared in BeastBytes\Leaflet\Type\Icon


---

## Related

* https://leafletjs.com/reference-2.0.0.html#icon

---
Generated by <a  target="_blank"  href="https://github.com/beastbytes/cod-php">CodPhp</a>