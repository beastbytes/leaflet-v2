---
title: Leaflet
lastUpdated: 2026-10-05 14:17:40
description: A type interface implemented by Leaflet objects to be imported.
head:
  - - meta
    - name: element-type
      content: Interface
  - - meta
    - name: Generator
      content: CodPhp
---

# interface `Leaflet`

<a  href="https://github.com/beastbytes/leaflet-v2/blob/master/src/Leaflet.php">Source Code</a>

A type interface implemented by Leaflet objects to be imported.

<table><tbody><tr><th>Namespace</th><td>BeastBytes\Leaflet</td></tr><tr><th>Inheritance</th><td>

BeastBytes\Leaflet\Leaflet

</td></tr><tr><th>Implemented by</th><td>

[BeastBytes\Leaflet\Addable](addable.md)<br>[BeastBytes\Leaflet\Control\Attribution](control/attribution.md)<br>[BeastBytes\Leaflet\Control\Control](control/control.md)<br>[BeastBytes\Leaflet\Control\Layers](control/layers.md)<br>[BeastBytes\Leaflet\Control\Scale](control/scale.md)<br>[BeastBytes\Leaflet\Control\Zoom](control/zoom.md)<br>[BeastBytes\Leaflet\Layer\InteractiveLayer](layer/interactive-layer.md)<br>[BeastBytes\Leaflet\Layer\Layer](layer/layer.md)<br>[BeastBytes\Leaflet\Layer\Other\FeatureGroup](layer/other/feature-group.md)<br>[BeastBytes\Leaflet\Layer\Other\GeoJson](layer/other/geo-json.md)<br>[BeastBytes\Leaflet\Layer\Other\GridLayer](layer/other/grid-layer.md)<br>[BeastBytes\Leaflet\Layer\Other\Group](layer/other/group.md)<br>[BeastBytes\Leaflet\Layer\Other\LayerGroup](layer/other/layer-group.md)<br>[BeastBytes\Leaflet\Layer\Raster\ImageOverlay](layer/raster/image-overlay.md)<br>[BeastBytes\Leaflet\Layer\Raster\SvgOverlay](layer/raster/svg-overlay.md)<br>[BeastBytes\Leaflet\Layer\Raster\TileLayer](layer/raster/tile-layer.md)<br>[BeastBytes\Leaflet\Layer\Raster\TileLayerWms](layer/raster/tile-layer-wms.md)<br>[BeastBytes\Leaflet\Layer\Raster\VideoOverlay](layer/raster/video-overlay.md)<br>[BeastBytes\Leaflet\Layer\UI\DivOverlay](layer/u-i/div-overlay.md)<br>[BeastBytes\Leaflet\Layer\UI\Marker](layer/u-i/marker.md)<br>[BeastBytes\Leaflet\Layer\UI\Popup](layer/u-i/popup.md)<br>[BeastBytes\Leaflet\Layer\UI\Tooltip](layer/u-i/tooltip.md)<br>[BeastBytes\Leaflet\Layer\Vector\Circle](layer/vector/circle.md)<br>[BeastBytes\Leaflet\Layer\Vector\CircleMarker](layer/vector/circle-marker.md)<br>[BeastBytes\Leaflet\Layer\Vector\Path](layer/vector/path.md)<br>[BeastBytes\Leaflet\Layer\Vector\Polygon](layer/vector/polygon.md)<br>[BeastBytes\Leaflet\Layer\Vector\Polyline](layer/vector/polyline.md)<br>[BeastBytes\Leaflet\Layer\Vector\Rectangle](layer/vector/rectangle.md)<br>[BeastBytes\Leaflet\Layer\Vector\Renderer\BlanketOverlay](layer/vector/renderer/blanket-overlay.md)<br>[BeastBytes\Leaflet\Layer\Vector\Renderer\Canvas](layer/vector/renderer/canvas.md)<br>[BeastBytes\Leaflet\Layer\Vector\Renderer\Renderer](layer/vector/renderer/renderer.md)<br>[BeastBytes\Leaflet\Layer\Vector\Renderer\Svg](layer/vector/renderer/svg.md)<br>[BeastBytes\Leaflet\Map](map.md)<br>[BeastBytes\Leaflet\Type\Bounds](type/bounds.md)<br>[BeastBytes\Leaflet\Type\DivIcon](type/div-icon.md)<br>[BeastBytes\Leaflet\Type\Icon](type/icon.md)<br>[BeastBytes\Leaflet\Type\LatLng](type/lat-lng.md)<br>[BeastBytes\Leaflet\Type\LatLngBounds](type/lat-lng-bounds.md)<br>[BeastBytes\Leaflet\Type\Point](type/point.md)<br>[BeastBytes\Leaflet\Type\Type](type/type.md)

</td></tr></tbody></table>

## Constants

### PACKAGE

 PACKAGE = 'leaflet'

Declared in BeastBytes\Leaflet\Leaflet


## Methods

### getClassName()
<table><tbody><tr><td colspan="3"><span class="cod-php-modifier">abstract</span> <span class="cod-php-visibility">public</span>  function getClassName(): <span class="type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span></td></tr><tr><td>return</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The Object&#039;s PHP base class name</td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Leaflet


---

### getId()
<table><tbody><tr><td colspan="3"><span class="cod-php-modifier">abstract</span> <span class="cod-php-visibility">public</span>  function getId(): <span class="type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span></td></tr><tr><td>return</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The Object&#039;s JavaScript id</td></tr></tbody></table>

Declared in BeastBytes\Leaflet\Leaflet


---

### importName()
The object's JavaScript import name; this is included in the JavaScript `import` statement.

For most objects this is the same as the PHP class name.
Objects where that is not the case should override this function.

<table><tbody><tr><td colspan="3"><span class="cod-php-modifier">abstract</span> <span class="cod-php-visibility">public</span>  function importName(): <span class="type"><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></span></td></tr><tr><td>return</td><td><a  href="https://www.php.net/manual/en/language.types.string.php">string</a></td><td>The object&#039;s JavaScript import name</td></tr></tbody></table>

Declared in [BeastBytes\Leaflet\Importable](importable)


---

## Related

* <a  target="_blank"  href="leaflet-trait">LeafletTrait</a>

---
Generated by <a  target="_blank"  href="https://github.com/beastbytes/cod-php">CodPhp</a>