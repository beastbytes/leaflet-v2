# Using leaflet V2

Everything happens in the rendered template. This documentation uses a PHP based template.

## Template

::: info
The template only shows code relevant to Leaflet.
:::

```php
<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <link rel="stylesheet" href="./leaflet/leaflet.css" crossorigin=""/>
        <style>
            /** The map **must** have a height */
            #leaflet-map {
                min-height: 800px;
            }
        </style>
    </head>
    <body>
        <!-- This <div/> is where the map is rendered -->
        <div id="leaflet-map"></div>
        
        <script type="importmap">
            {
                "imports": {
                    "leaflet": "./leaflet/leaflet.js" // Adjust to point at the Leaflet mapping library
                }
            }
        </script>
        <script type="module">
            // LeafletV2 PHP code goes here - see below
        </script>
    </body>
</html>
```

## LeafletV2 PHP Code

This section describes the PHP code. See the [demo code](../demo/code.md##php) for a full example.

### Create a map object

The first step is to create a map object.

```php
$centre = [51.5153, -0.0718];
$zoomLevel = 14;

$map = new Map('leaflet-map', $centre, $zoomLevel);
```

### Create other objects and add to map

```php
$baseLayer = TileProvider::use('OpenStreetMap')->addTo($map); // Add a base layer

$polygon = (new Polygon($vertices)) // $vertices is an array of locations that are the vertices of the polygon
    ->fill(!Polygon::FILL)
    ->stroke(Polygon::STROKE)
    ->color('#cc33cc')
    ->name('Polygon Name')
    ->addTo($map)
;

$draggable = (new Marker($location))
    ->autoPan(Marker::AUTO_PAN)
    ->draggable(Marker::DRAGGABLE)
    ->icon((new Icon('/leaflet/images/marker.png'))
        ->iconAnchor([12, 40])
        ->shadowUrl('/leaflet/images/marker-shadow.png')
    )
    ->tooltip('Drag me and see what happens')
    ->events(
        new Event(
            'dragend',
            'const position=e.target.getLatLng();window.alert("Moved by " + Math.floor(e.distance) + " pixels\nNew position " + position.lat + ", " + position.lng);'
        )
    )
    ->name('Draggable Marker')
    ->addTo($map)
;

$scaleControl = (new Scale())
    ->addTo($map)
;

$layersControl = (new Layers())
    ->baseLayers($baseLayer)
    ->overlays($polygon, $draggable)
    ->hideSingleBase(Layers::HIDE_SINGLE_BASE)
    ->sortFunction('return n1 > n2 ? -1 : n1 < n2 ? 1 : 0')
    ->sortLayers(Layers::SORT_LAYERS)
    ->addTo($map)
;
```

### Render the map

```php
echo $map;
```

Rendering the map generates the JavaScript, including the necessary import statements.

All Leaflet objects are assigned a unique JavaScript variable name; 
this allows additional user created JavaScript to manipulate the map and is constituent objects.
See the [demo code](../demo/code.md#javascript) for output JavaScript.
