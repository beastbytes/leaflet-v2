---
title: Layers
lastUpdated: 2026-10-05 14:17:40
description: The layers control gives users the ability to switch between different base layers and switch overlays on/off.
head:
  - - meta
    - name: element-type
      content: Class
  - - meta
    - name: Generator
      content: CodPhp
---

# <span class="cod-php-modifier">final</span> class `Layers`

<a  href="https://github.com/beastbytes/leaflet-v2/blob/master/src/Control/Layers.php">Source Code</a>

The layers control gives users the ability to switch between different base layers and switch overlays on/off.

<table><tbody><tr><th>Namespace</th><td>BeastBytes\Leaflet\Control</td></tr><tr><th>Inheritance</th><td>

BeastBytes\Leaflet\Control\Layers<br>[BeastBytes\Leaflet\Control\Control](control.md)

</td></tr><tr><th>Implements</th><td>

[BeastBytes\Leaflet\Addable](../addable.md)<br>[BeastBytes\Leaflet\Importable](../importable.md)<br>[BeastBytes\Leaflet\Leaflet](../leaflet.md)<br>[Stringable](https://www.php.net/manual/en/class.stringable.php)

</td></tr><tr><th>Uses</th><td>

[BeastBytes\Leaflet\AddableTrait](../addable-trait.md)

</td></tr></tbody></table>

## Constants

### AUTO_Z_INDEX

 AUTO_Z_INDEX = true

Declared in BeastBytes\Leaflet\Control\Layers

### COLLAPSED

 COLLAPSED = true

Declared in BeastBytes\Leaflet\Control\Layers

### HIDE_SINGLE_BASE

 HIDE_SINGLE_BASE = true

Declared in BeastBytes\Leaflet\Control\Layers

### PACKAGE

 PACKAGE = 'leaflet'

Declared in [BeastBytes\Leaflet\Leaflet](../leaflet)

### SORT_LAYERS

 SORT_LAYERS = true

Declared in BeastBytes\Leaflet\Control\Layers


## Methods

### addTo()
Add the current object to a map.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function addTo(<span class="cod-php-type"><a  href="../map">BeastBytes\Leaflet\Map</a></span> $map, <span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $importFrom = 'leaflet'): <span class="type">self</span></td></tr><tr><td>$map</td><td><a  href="../map">BeastBytes\Leaflet\Map</a></td><td>Map to add the object to.</td></tr><tr><td>$importFrom</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The JavaScript package to import the object from; defaults to &#039;leaflet&#039;<br />
The parameter will primarily be used by plugins.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Control\Layers


---

### autoZIndex()
Whether to auto assign z-index values to layers.

If enabled the control assigns zIndexes in increasing order to all of its layers
so that the order is preserved when switching them on/off.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function autoZIndex(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $autoZIndex): <span class="type">BeastBytes\Leaflet\Control\Layers</span></td></tr><tr><td>$autoZIndex</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to enable, `false` to disable.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Control\Layers</td><td></td></tr></tbody></table>

Default: true

Declared in BeastBytes\Leaflet\Control\Layers

#### Related

* <a  target="_blank"  href="layers#auto-z-index">AUTO_Z_INDEX</a>



---

### baseLayers()
Base layer(s) to include in the control.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function baseLayers(<span class="cod-php-type"><a  href="../layer/layer">BeastBytes\Leaflet\Layer\Layer</a></span> $...baseLayer): <span class="type">BeastBytes\Leaflet\Control\Layers</span></td></tr><tr><td>$baseLayer</td><td><a  href="../layer/layer">BeastBytes\Leaflet\Layer\Layer</a></td><td>Base layer(s).</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Control\Layers</td><td></td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Control\Layers


---

### collapseDelay()
The delay before the control is "collapsed" after changing the visibility of a layer.

A longer delay makes it easier to scroll through long layer lists.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function collapseDelay(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $collapseDelay): <span class="type">BeastBytes\Leaflet\Control\Layers</span></td></tr><tr><td>$collapseDelay</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>Collapse delay in milliseconds.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Control\Layers</td><td></td></tr></tbody></table>

Default: 0

Declared in BeastBytes\Leaflet\Control\Layers


---

### collapsed()
Whether to collapse the control to an icon, expanded on pointer hover, touch, or keyboard activation,
or to show the expanded control.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function collapsed(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $collapsed): <span class="type">BeastBytes\Leaflet\Control\Layers</span></td></tr><tr><td>$collapsed</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to collapse into an icon, `false` to show expanded.<br />
and</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Control\Layers</td><td></td></tr></tbody></table>

Default: true

Declared in BeastBytes\Leaflet\Control\Layers

#### Related

* <a  target="_blank"  href="layers#c-o-l-l-a-p-s-e-d">COLLAPSED</a>



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

### hideSingleBase()
Whether to hide base layers in the control if there is only one.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function hideSingleBase(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $hideSingleBase): <span class="type">BeastBytes\Leaflet\Control\Layers</span></td></tr><tr><td>$hideSingleBase</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to hide a single base layer, `false` to it.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Control\Layers</td><td></td></tr></tbody></table>

Default: false

Declared in BeastBytes\Leaflet\Control\Layers

#### Related

* <a  target="_blank"  href="layers#hide-single-base">HIDE_SINGLE_BASE</a>



---

### importName()
Returns the JavaScript import name.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function importName(): <span class="type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span></td></tr><tr><td>return</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>JavaScript import name.</td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Control\Control](control)


---

### overlays()
Overlay layer(s) to include in the control.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function overlays(<span class="cod-php-type"><a  href="../layer/layer">BeastBytes\Leaflet\Layer\Layer</a></span> $...overlay): <span class="type">BeastBytes\Leaflet\Control\Layers</span></td></tr><tr><td>$overlay</td><td><a  href="../layer/layer">BeastBytes\Leaflet\Layer\Layer</a></td><td>Overlay layer(s).</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Control\Layers</td><td></td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Control\Layers


---

### position()
Set the position of the control on the map.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function position(<span class="cod-php-type"><a  href="position">BeastBytes\Leaflet\Control\Position</a></span> $position): <span class="type"><a  href="control">BeastBytes\Leaflet\Control\Control</a></span></td></tr><tr><td>$position</td><td><a  href="position">BeastBytes\Leaflet\Control\Position</a></td><td>Position of the control.</td></tr><tr><td>return</td><td><a  href="control">BeastBytes\Leaflet\Control\Control</a></td><td></td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Control\Control](control)


---

### sortFunction()
Set a custom function for sorting the layers when the `sortLayers` option is `true`.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function sortFunction(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $sortFunction): <span class="type">BeastBytes\Leaflet\Control\Layers</span></td></tr><tr><td>$sortFunction</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The body of a compare function that will be used for sorting the layers when<br />
the `sortLayers` option is `true`.<br />
The function receives four parameters: l1 and 12 - the two Layer instances, and n1 and n2 - the layer names.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Control\Layers</td><td></td></tr></tbody></table>

Default: Ssort layers alphabetically by name.

Declared in BeastBytes\Leaflet\Control\Layers

#### Related

* <a  target="_blank"  href="layers#sortlayers">sortLayers()</a>



---

### sortLayers()
Whether sort layers in the control.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function sortLayers(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></span> $sortLayers): <span class="type">BeastBytes\Leaflet\Control\Layers</span></td></tr><tr><td>$sortLayers</td><td><a  href="https://www.php.net/manual/en/language.types.boolean.php">bool</a></td><td>`true` to sort the layers, `fale` to list in the order added.</td></tr><tr><td>return</td><td>BeastBytes\Leaflet\Control\Layers</td><td></td></tr></tbody></table>

Default: false

Declared in BeastBytes\Leaflet\Control\Layers

#### Related

* <a  target="_blank"  href="layers#sort-layers">SORT_LAYERS</a>
* <a  target="_blank"  href="layers#sortfunction">sortFunction()</a>



---

## Related

* https://leafletjs.com/reference-2.0.0.html#control-layers

---
Generated by <a  target="_blank"  href="https://github.com/beastbytes/cod-php">CodPhp</a>