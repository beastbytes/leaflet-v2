---
title: Index
lastUpdated: 2026-10-05 14:17:40
description: API Index
head:
  - - meta
    - name: element-type
      content: all
  - - meta
    - name: Generator
      content: CodPhp
---

# Index for BeastBytes\Leaflet

## Classes

| Class | Description |
|-|-|
| [BeastBytes\Leaflet\Control\Attribution](control/attribution) | The attribution control displays attribution data in a small text box on a map. |
| [BeastBytes\Leaflet\Control\Control](control/control) | Base class for controls |
| [BeastBytes\Leaflet\Control\Layers](control/layers) | The layers control gives users the ability to switch between different base layers and switch overlays on/off. |
| [BeastBytes\Leaflet\Control\Scale](control/scale) | A simple scale control that shows the scale of the current centre of screen in metric (m/km) and imperial (mi/ft) systems. |
| [BeastBytes\Leaflet\Control\Zoom](control/zoom) | A basic zoom control with two buttons (zoom in and zoom out). |
| [BeastBytes\Leaflet\Event](event) | Defines a Leaflet event. |
| [BeastBytes\Leaflet\Layer\InteractiveLayer](layer/interactive-layer) | Base class for interactive layers. |
| [BeastBytes\Leaflet\Layer\Layer](layer/layer) | Base class for layers |
| [BeastBytes\Leaflet\Layer\Other\FeatureGroup](layer/other/feature-group) | Extended LayerGroup that makes it easier to do the same thing to all its member layers. |
| [BeastBytes\Leaflet\Layer\Other\GeoJson](layer/other/geo-json) | Represents a GeoJSON object. |
| [BeastBytes\Leaflet\Layer\Other\GridLayer](layer/other/grid-layer) | Base class for all grid based - tiled - layers. |
| [BeastBytes\Leaflet\Layer\Other\Group](layer/other/group) | Base class for grouping layers. |
| [BeastBytes\Leaflet\Layer\Other\LayerGroup](layer/other/layer-group) | Used to group several layers and handle them as one. |
| [BeastBytes\Leaflet\Layer\Raster\ImageOverlay](layer/raster/image-overlay) | Represents an image overlay over specific bounds of the map. |
| [BeastBytes\Leaflet\Layer\Raster\SvgOverlay](layer/raster/svg-overlay) | Represents an SVG overlay over specific bounds of the map. |
| [BeastBytes\Leaflet\Layer\Raster\TileLayer](layer/raster/tile-layer) | Defines how to load and display tiles on the map. |
| [BeastBytes\Leaflet\Layer\Raster\TileLayerWms](layer/raster/tile-layer-wms) | Represents a WMS (Web Map Service) tile layer. |
| [BeastBytes\Leaflet\Layer\Raster\TileProvider](layer/raster/tile-provider) | Defines tile providers that can be used to load and display map tiles. |
| [BeastBytes\Leaflet\Layer\Raster\VideoOverlay](layer/raster/video-overlay) | Represents a video overlay over specific bounds of the map. |
| [BeastBytes\Leaflet\Layer\UI\DivOverlay](layer/u-i/div-overlay) | Base class for div based UI elements, i.e. Popups and Tooltips |
| [BeastBytes\Leaflet\Layer\UI\Marker](layer/u-i/marker) | Represents a clickable/draggable marker icon on the map. |
| [BeastBytes\Leaflet\Layer\UI\Popup](layer/u-i/popup) | Represents a popup on the map. |
| [BeastBytes\Leaflet\Layer\UI\Tooltip](layer/u-i/tooltip) | Represents a tooltip on the map. |
| [BeastBytes\Leaflet\Layer\Vector\Circle](layer/vector/circle) | Represents a circle overlay on a map centred at a geographical location with a radius specified im metres. |
| [BeastBytes\Leaflet\Layer\Vector\CircleMarker](layer/vector/circle-marker) | Represents a circle overlay on a map centred at a geographical location with a radius specified im pixels. |
| [BeastBytes\Leaflet\Layer\Vector\Path](layer/vector/path) | An abstract class that contains options and constants shared between vector overlays. |
| [BeastBytes\Leaflet\Layer\Vector\Polygon](layer/vector/polygon) | Represents a polygon overlay on a map. |
| [BeastBytes\Leaflet\Layer\Vector\Polyline](layer/vector/polyline) | Represents a polyline overlay on a map. |
| [BeastBytes\Leaflet\Layer\Vector\Rectangle](layer/vector/rectangle) | Represents a rectangle overlay on a map with diagonally opposite corners at defined geographical locations. |
| [BeastBytes\Leaflet\Layer\Vector\Renderer\BlanketOverlay](layer/vector/renderer/blanket-overlay) |  |
| [BeastBytes\Leaflet\Layer\Vector\Renderer\Canvas](layer/vector/renderer/canvas) | Allows vector layers to be displayed using the <a href="https://developer.mozilla.org/docs/Web/API/Canvas_API" target="_blank">Canvas API</a>. |
| [BeastBytes\Leaflet\Layer\Vector\Renderer\Svg](layer/vector/renderer/svg) | Allows vector layers to be displayed with <a href="https://developer.mozilla.org/docs/Web/SVG" target="_blank">SVG</a>. |
| [BeastBytes\Leaflet\Map](map) | Represents a Leaflet map. |
| [BeastBytes\Leaflet\Type\Bounds](type/bounds) | Represents a rectangular area in pixel coordinates |
| [BeastBytes\Leaflet\Type\DivIcon](type/div-icon) | Represents a lightweight icon for markers that uses a simple &lt;div&gt; element instead of an image. |
| [BeastBytes\Leaflet\Type\Icon](type/icon) | Represents an icon to provide when creating a marker. |
| [BeastBytes\Leaflet\Type\LatLng](type/lat-lng) | Represents a given latitude and longitude coordinate, measured in degrees, and optionally an altitude in metres. |
| [BeastBytes\Leaflet\Type\LatLngBounds](type/lat-lng-bounds) | Represents a rectangular geographical area. |
| [BeastBytes\Leaflet\Type\Point](type/point) | Represents x and y screen coordinates in pixels. |
| [BeastBytes\Leaflet\Type\Type](type/type) | Base class for all Leaflet types. |

## Interfaces

| Interface | Description |
|-|-|
| [BeastBytes\Leaflet\Addable](addable) | An interface implemented by objects that can be added to a map. |
| [BeastBytes\Leaflet\Importable](importable) | An interface for classes amd enums providing objects to be imported in JavaScript. |
| [BeastBytes\Leaflet\Layer\Vector\Renderer\Renderer](layer/vector/renderer/renderer) | Type interface for renderers. |
| [BeastBytes\Leaflet\Leaflet](leaflet) | A type interface implemented by Leaflet objects to be imported. |

## Traits

| Trait | Description |
|-|-|
| [BeastBytes\Leaflet\AddableTrait](addable-trait) | Implementation of `Addable`. |
| [BeastBytes\Leaflet\ClassNameTrait](class-name-trait) | Provides the ability to set a custom CSS class name on the object. |
| [BeastBytes\Leaflet\EventTrait](event-trait) | Allows attachment of events to the object using the trait. |
| [BeastBytes\Leaflet\ImportTrait](import-trait) | Implementation of `Importable`. |
| [BeastBytes\Leaflet\Layer\OpacityTrait](layer/opacity-trait) | Provides the opacity option |
| [BeastBytes\Leaflet\Layer\Raster\ImageOptionsTrait](layer/raster/image-options-trait) |  |
| [BeastBytes\Leaflet\Layer\Vector\PolylineTrait](layer/vector/polyline-trait) |  |
| [BeastBytes\Leaflet\LeafletTrait](leaflet-trait) | Implementation of `Leaflet`. |
| [BeastBytes\Leaflet\OptionsTrait](options-trait) | Provides options for objects. |
| [BeastBytes\Leaflet\ZIndexTrait](z-index-trait) | Provides the ability to set the z-index. |
| [BeastBytes\Leaflet\ZoomTrait](zoom-trait) | Provides `maxZoom()` and `minZoom()` methods for `Map` and `GridLayer` (and by inheritance, `TileLayer`). |

## Enums

| Enum | Description |
|-|-|
| [BeastBytes\Leaflet\Control\Position](control/position) | A position definition for the control to be placed, can be in one of the corners of the map. |
| [BeastBytes\Leaflet\CrossOrigin](cross-origin) | Defines options for the `crossorigin` HTML attribute. |
| [BeastBytes\Leaflet\Layer\Raster\CRS](layer/raster/c-r-s) | Coordinate Reference System. |
| [BeastBytes\Leaflet\Layer\Raster\Decoding](layer/raster/decoding) | Image decoding attribute values. |
| [BeastBytes\Leaflet\Layer\Raster\ReferrerPolicy](layer/raster/referrer-policy) | ReferrerPolicy attribute values. |
| [BeastBytes\Leaflet\Layer\Raster\WmsImageFormat](layer/raster/wms-image-format) | Web Map Service (WMS) image formats. |
| [BeastBytes\Leaflet\Layer\UI\Direction](layer/u-i/direction) |  |
| [BeastBytes\Leaflet\Layer\Vector\FillRule](layer/vector/fill-rule) | Values for the `fill-rule` attribute. |
| [BeastBytes\Leaflet\Layer\Vector\LineCap](layer/vector/line-cap) | Values for the `stroke-linecap` attribute. |
| [BeastBytes\Leaflet\Layer\Vector\LineJoin](layer/vector/line-join) | Values for the `stroke-linejoin` attribute. |
| [BeastBytes\Leaflet\MapClass](map-class) | The JavaScript class name for Leaflet maps. |

---

Generated by <a  target="_blank"  href="https://github.com/beastbytes/cod-php">CodPhp</a>