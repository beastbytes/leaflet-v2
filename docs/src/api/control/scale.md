---
title: Scale
lastUpdated: 2026-10-05 14:17:40
description: A simple scale control that shows the scale of the current centre of screen in metric (m/km) and imperial (mi/ft) systems.
head:
  - - meta
    - name: element-type
      content: Class
  - - meta
    - name: Generator
      content: CodPhp
---

# <span class="cod-php-modifier">final</span> class `Scale`

<a  href="https://github.com/beastbytes/leaflet-v2/blob/master/src/Control/Scale.php">Source Code</a>

A simple scale control that shows the scale of the current centre of screen in metric (m/km) and imperial (mi/ft) systems.

<table><tbody><tr><th>Namespace</th><td>BeastBytes\Leaflet\Control</td></tr><tr><th>Inheritance</th><td>

BeastBytes\Leaflet\Control\Scale<br>[BeastBytes\Leaflet\Control\Control](control.md)

</td></tr><tr><th>Implements</th><td>

[BeastBytes\Leaflet\Addable](../addable.md)<br>[BeastBytes\Leaflet\Importable](../importable.md)<br>[BeastBytes\Leaflet\Leaflet](../leaflet.md)<br>[Stringable](https://www.php.net/manual/en/class.stringable.php)

</td></tr></tbody></table>

## Constants

### IMPERIAL

 IMPERIAL = true

Declared in BeastBytes\Leaflet\Control\Scale

### MAX_WIDTH_EXCEPTION_MESSAGE

 MAX_WIDTH_EXCEPTION_MESSAGE = '`maxWidth` must be a positive integer.'

Declared in BeastBytes\Leaflet\Control\Scale

### METRIC

 METRIC = true

Declared in BeastBytes\Leaflet\Control\Scale

### PACKAGE

 PACKAGE = 'leaflet'

Declared in [BeastBytes\Leaflet\Leaflet](../leaflet)


## Methods

### addTo()
Add the current object to a map.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function addTo(<span class="cod-php-type"><a  href="../map">BeastBytes\Leaflet\Map</a></span> $map, <span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $importFrom = 'leaflet'): <span class="type">self</span></td></tr><tr><td>$map</td><td><a  href="../map">BeastBytes\Leaflet\Map</a></td><td>Map to add the object to.</td></tr><tr><td>$importFrom</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The JavaScript package to import the object from; defaults to &#039;leaflet&#039;<br />
The parameter will primarily be used by plugins.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Control\Control](control)


---

### getClassName()
Returns the object's PHP base class name.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function getClassName(): <span class="type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span></td></tr><tr><td>return</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Object PHP base class name.</td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Control\Control](control)


---

### getId()
Returns the object id.

The primary use is to provide a JavaScript variable. Auto generated on read if not set.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function getId(): <span class="type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span></td></tr><tr><td>return</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Object id.</td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Control\Control](control)


---

### imperial()
Whether to show an imperial scale line (mi/ft).

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function imperial(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $imperial): <span class="type">BeastBytes\Leaflet\Control\Scale</span></td></tr><tr><td>$imperial</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to show an imperial scale line, or `false` not to.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Control\Scale</td><td></td></tr></tbody></table>

Default: true

Declared in BeastBytes\Leaflet\Control\Scale

#### Related

* <a  target="_blank"  href="scale#i-m-p-e-r-i-a-l">IMPERIAL</a>



---

### importName()
Returns the JavaScript import name.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function importName(): <span class="type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span></td></tr><tr><td>return</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>JavaScript import name.</td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Control\Control](control)


---

### maxWidth()
Maximum width of the control in pixels.

The width is set dynamically to show round values (e.g. 100, 200, 500).

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function maxWidth(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $maxWidth): <span class="type">BeastBytes\Leaflet\Control\Scale</span></td></tr><tr><td>$maxWidth</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>Maximum width.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Control\Scale</td><td></td></tr></tbody></table>

Default: 100

Declared in BeastBytes\Leaflet\Control\Scale


---

### metric()
Whether to show a metric scale line (m/km).

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function metric(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $metric): <span class="type">BeastBytes\Leaflet\Control\Scale</span></td></tr><tr><td>$metric</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to show a metric scale line, or `false` not to.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Control\Scale</td><td></td></tr></tbody></table>

Default: true

Declared in BeastBytes\Leaflet\Control\Scale

#### Related

* <a  target="_blank"  href="scale#m-e-t-r-i-c">METRIC</a>



---

### position()
Set the position of the control on the map.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function position(<span class="cod-php-type"><a  href="position">BeastBytes\Leaflet\Control\Position</a></span> $position): <span class="type"><a  href="control">BeastBytes\Leaflet\Control\Control</a></span></td></tr><tr><td>$position</td><td><a  href="position">BeastBytes\Leaflet\Control\Position</a></td><td>Position of the control.</td></tr><tr><td>return</td><td><a  href="control">BeastBytes\Leaflet\Control\Control</a></td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Control\Control](control)


---

### updateWhenIdle()
Whether to update the control when the map is idle (on `moveend`) or continuously (on `move`).

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function updateWhenIdle(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $updateWhenIdle): <span class="type">BeastBytes\Leaflet\Control\Scale</span></td></tr><tr><td>$updateWhenIdle</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to update when idle, `false` to continually update.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Control\Scale</td><td></td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Control\Scale


---

## Related

* https://leafletjs.com/reference-2.0.0.html#control-scale

---
Generated by <a  target="_blank"  href="https://github.com/beastbytes/cod-php">CodPhp</a>