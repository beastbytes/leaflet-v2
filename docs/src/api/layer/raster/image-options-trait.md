---
title: ImageOptionsTrait
lastUpdated: 2026-10-05 14:17:39
description: 
head:
  - - meta
    - name: element-type
      content: Trait
  - - meta
    - name: Generator
      content: CodPhp
---

# trait `ImageOptionsTrait`

<a  href="https://github.com/beastbytes/leaflet-v2/blob/master/src/Layer/Raster/ImageOptionsTrait.php">Source Code</a>

<table><tbody><tr><th>Namespace</th><td>BeastBytes\Leaflet\Layer\Raster</td></tr><tr><th>Uses</th><td>

[BeastBytes\Leaflet\ClassNameTrait](../../class-name-trait.md)<br>[BeastBytes\Leaflet\RangeTrait](../../range-trait.md)<br>[BeastBytes\Leaflet\ZIndexTrait](../../z-index-trait.md)

</td></tr><tr><th>Used By</th><td>

[BeastBytes\Leaflet\Layer\Raster\ImageOverlay](image-overlay.md)<br>[BeastBytes\Leaflet\Layer\Raster\SvgOverlay](svg-overlay.md)<br>[BeastBytes\Leaflet\Layer\Raster\VideoOverlay](video-overlay.md)

</td></tr></tbody></table>


## Methods

### alt()
Text for the alt attribute of the image.

Useful for accessibility.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function alt(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $alt): <span class="type">self</span></td></tr><tr><td>$alt</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Alt text.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Default: ''

Declared in BeastBytes\Leaflet\Layer\Raster\ImageOptionsTrait


---

### className()
Set a custom CSS class name.

For `Icon` it applies to both icon and shadow images.
For vector layers it is only applicable when using the SVG renderer.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function className(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $className): <span class="type">self</span></td></tr><tr><td>$className</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>Class name.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Default: null

Declared in BeastBytes\Leaflet\Layer\Raster\ImageOptionsTrait


---

### crossOrigin()
Whether the crossOrigin attribute will be added to the image.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function crossOrigin(<span class="cod-php-type"><a  href="../../cross-origin">BeastBytes\Leaflet\CrossOrigin</a>|<a  href="https://www.php.net/manual/en/reserved.constants.php#constant.false">false</a></span> $crossOrigin): <span class="type">self</span></td></tr><tr><td>$crossOrigin</td><td><a  href="../../cross-origin">BeastBytes\Leaflet\CrossOrigin</a>|<a  href="https://www.php.net/manual/en/reserved.constants.php#constant.false">false</a></td><td>`true` to add the crossOrigin attribute, `false` not to.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Default: false

Declared in BeastBytes\Leaflet\Layer\Raster\ImageOptionsTrait


---

### decoding()
Define how the browser should decode the image.

If the image overlay is flickering when being added/removed, set this option to Decoding::sync.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function decoding(<span class="cod-php-type"><a  href="decoding">BeastBytes\Leaflet\Layer\Raster\Decoding</a></span> $decoding): <span class="type">self</span></td></tr><tr><td>$decoding</td><td><a  href="decoding">BeastBytes\Leaflet\Layer\Raster\Decoding</a></td><td>Image decoding.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Default: Decoding::auto

Declared in BeastBytes\Leaflet\Layer\Raster\ImageOptionsTrait


---

### errorOverlayUrl()
Set a URL to an overlay image to show in place of an overlay that failed to load.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function errorOverlayUrl(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span> $errorOverlayUrl): <span class="type">self</span></td></tr><tr><td>$errorOverlayUrl</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>URL.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Layer\Raster\ImageOptionsTrait


---

### opacity()
Set the opacity of the image overlay.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function opacity(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.float.php">float</a></span> $opacity): <span class="type">self</span></td></tr><tr><td>$opacity</td><td><a  href="https://www.php.net/manual/en/language.types.float.php">float</a></td><td>Opacity.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Default: 1.0

Declared in BeastBytes\Leaflet\Layer\Raster\ImageOptionsTrait


---

### zIndex()
Set the z index.

<table><tbody><tr><td colspan="3"><span class="cod-php-visibility">public</span>  function zIndex(<span class="cod-php-type"><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></span> $zIndex): <span class="type">self</span></td></tr><tr><td>$zIndex</td><td><a  href="https://www.php.net/manual/en/language.types.integer.php">int</a></td><td>Z index.</td></tr><tr><td>return</td><td>self</td><td></td></tr></tbody></table>

Default: 1

Declared in BeastBytes\Leaflet\Layer\Raster\ImageOptionsTrait


---

Generated by <a  target="_blank"  href="https://github.com/beastbytes/cod-php">CodPhp</a>