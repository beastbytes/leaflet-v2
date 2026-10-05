---
title: Attribution
lastUpdated: 2026-10-05 14:17:40
description: The attribution control displays attribution data in a small text box on a map.
head:
  - - meta
    - name: element-type
      content: Class
  - - meta
    - name: Generator
      content: CodPhp
---

# <span class="cod-php-modifier">final</span> class `Attribution`

<a  href="https://github.com/beastbytes/leaflet-v2/blob/master/src/Control/Attribution.php">Source Code</a>

The attribution control displays attribution data in a small text box on a map.

It is put on the map by default unless the map&#039;s `attributionControl` option is set to `false`.<br />
The control automatically fetches attribution texts from layers.

<table><tbody><tr><th>Namespace</th><td>BeastBytes\Leaflet\Control</td></tr><tr><th>Inheritance</th><td>

BeastBytes\Leaflet\Control\Attribution<br>[BeastBytes\Leaflet\Control\Control](control.md)

</td></tr><tr><th>Implements</th><td>

[BeastBytes\Leaflet\Addable](../addable.md)<br>[BeastBytes\Leaflet\Importable](../importable.md)<br>[BeastBytes\Leaflet\Leaflet](../leaflet.md)<br>[Stringable](https://www.php.net/manual/en/class.stringable.php)

</td></tr></tbody></table>

## Constants

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

### importName()
Returns the JavaScript import name.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function importName(): <span class="type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span></td></tr><tr><td>return</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>JavaScript import name.</td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Control\Control](control)


---

### position()
Set the position of the control on the map.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function position(<span class="cod-php-type"><a  href="position">BeastBytes\Leaflet\Control\Position</a></span> $position): <span class="type"><a  href="control">BeastBytes\Leaflet\Control\Control</a></span></td></tr><tr><td>$position</td><td><a  href="position">BeastBytes\Leaflet\Control\Position</a></td><td>Position of the control.</td></tr><tr><td>return</td><td><a  href="control">BeastBytes\Leaflet\Control\Control</a></td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Control\Control](control)


---

### prefix()
Set the attribution prefix.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function prefix(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a>|<a  href="https://www.php.net/manual/en/reserved.constants.php#constant.false">false</a></span> $prefix): <span class="type">BeastBytes\Leaflet\Control\Attribution</span></td></tr><tr><td>$prefix</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a>|<a  href="https://www.php.net/manual/en/reserved.constants.php#constant.false">false</a></td><td>HTML text shown before the attributions or `false` to disable.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Control\Attribution</td><td></td></tr></tbody></table>

Default: 'Leaflet'

Declared in BeastBytes\Leaflet\Control\Attribution


---

## Related

* https://leafletjs.com/reference-2.0.0.html#control-attribution
* <a  target="_blank"  href="../map#attributioncontrol">attributionControl()</a>

---
Generated by <a  target="_blank"  href="https://github.com/beastbytes/cod-php">CodPhp</a>