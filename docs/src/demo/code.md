# Demo Code

## HTML

<!--@include: ../guide/usage.md{6,40}-->

## PHP
```php
    <?php
    $centre =  [51.5153, -0.0718];
    $stPauls = [51.5138, -0.0985];
    $newgate = [51.5160, -0.1016];
    $city = [
        [51.5182, -0.1138], [51.5177, -0.1077], [51.5207, -0.0975], [51.5229, -0.0979], [51.5233, -0.0968],
        [51.5228, -0.0968], [51.5231, -0.0951], [51.5215, -0.0943], [51.5216, -0.0934], [51.5213, -0.0933],
        [51.5215, -0.0925], [51.5210, -0.0924], [51.5207, -0.0897], [51.5200, -0.0900], [51.5188, -0.0862],
        [51.5203, -0.0853], [51.5198, -0.0833], [51.5208, -0.0817], [51.5219, -0.0810], [51.5215, -0.0786],
        [51.5189, -0.0794], [51.5190, -0.0781], [51.5185, -0.0781], [51.5185, -0.0782], [51.5181, -0.0778],
        [51.5166, -0.0769], [51.5162, -0.0765], [51.5152, -0.0749], [51.5141, -0.0746], [51.5144, -0.0740],
        [51.5140, -0.0736], [51.5112, -0.0729], [51.5110, -0.0728], [51.5103, -0.0728], [51.5101, -0.0730],
        [51.5100, -0.0743], [51.5099, -0.0744], [51.5100, -0.0748], [51.5097, -0.0755], [51.5099, -0.0757],
        [51.5101, -0.0758], [51.5101, -0.0761], [51.5105, -0.0762], [51.5105, -0.0762], [51.5106, -0.0762],
        [51.5105, -0.0769], [51.5103, -0.0769], [51.5102, -0.0769], [51.5101, -0.0777], [51.5101, -0.0779],
        [51.5094, -0.0786], [51.5095, -0.0788], [51.5090, -0.0790], [51.5089, -0.0787], [51.5088, -0.0789],
        [51.5088, -0.0787], [51.5083, -0.0791], [51.5084, -0.0791], [51.5083, -0.0792], [51.5083, -0.0791],
        [51.5079, -0.0793], [51.5079, -0.0793], [51.5078, -0.0794], [51.5076, -0.0798], [51.5069, -0.0802],
        [51.5078, -0.0852], [51.5084, -0.0922], [51.5093, -0.0959], [51.5098, -0.1016], [51.5099, -0.1070],
        [51.5098, -0.1115], [51.5109, -0.1116], [51.5118, -0.1116], [51.5120, -0.1118], [51.5120, -0.1119],
        [51.5123, -0.1122], [51.5123, -0.1121], [51.5126, -0.1123], [51.5126, -0.1124], [51.5127, -0.1126],
        [51.5128, -0.1124], [51.5129, -0.1122], [51.5130, -0.1123], [51.5132, -0.1118], [51.5137, -0.1120],
        [51.5138, -0.1111], [51.5162, -0.1122],
    ];
    $churchLayers = [];
    $churches = [
        [
            'name' => 'St Clement\'s, Eastcheap',
            'line' => 'Oranges and lemons,<br>Say the bells of St. Clement\'s.',
            'location' => [51.5114, -0.0869],
            'url' => 'https://en.wikipedia.org/wiki/St_Clement%27s,_Eastcheap'
        ],
        [
            'name' => 'St Martin\'s Ongar',
            'line' => 'You owe me five farthings,<br>Say the bells of St. Martin\'s.',
            'location' => [51.5108, -0.0876],
            'url' => 'https://en.wikipedia.org/wiki/St_Martin_Orgar'
        ],
        [
            'name' => 'Holy Sepulchre London, formally St Sepulchre-without-Newgate',
            'line' => 'When will you pay me?<br>Say the bells at Old Bailey.',
            'location' => [51.5167, -0.1022],
            'url' => 'https://en.wikipedia.org/wiki/St_Sepulchre-without-Newgate'
        ],
        [
            'name' => "St Leonard\'s, Shoreditch",
            'line' => 'When I grow rich,<br>Say the bells at Shoreditch.',
            'location' => [51.5268, -0.0772],
            'url' => 'https://en.wikipedia.org/wiki/St._Leonard\'s,_Shoreditch'
        ],
        [
            'name' => "St Dunstan\'s, Stepney",
            'line' => 'When will that be?<br>Say the bells of Stepney.',
            'location' => [51.5168, -0.0417],
            'url' => 'https://en.wikipedia.org/wiki/St_Dunstan\'s,_Stepney'
        ],
        [
            'name' => 'St Mary-le-Bow',
            'line' => 'I do not know,<br>Says the great bell at Bow.',
            'location' => [51.5137, -0.0935],
            'url' => 'https://en.wikipedia.org/wiki/St_Mary-le-Bow'
        ],
    ];

    $map = (new Map('map', $centre, 12));

    $baseLayer = TileProvider::use('OpenStreetMap')->addTo($map);

    $cityLayer = (new Polygon($city))
        ->fill(!Polygon::FILL)
        ->stroke(Polygon::STROKE)
        ->color('#cc33cc')
        ->name('City of London')
        ->addTo($map)
    ;

    $centreLayerGroup = (new LayerGroup( // Layer group with a marker and circles
        (new Circle($stPauls, 5000))
            ->color('#428929')
            ->fillOpacity(0.1)
            ->tooltip('5km radius')
        ,
        (new Circle($stPauls, 2500))
            ->color('#428929')
            ->fillOpacity(0.1)
            ->tooltip('2.5km radius')
        ,
        (new Circle($stPauls, 1000))
            ->color('#428929')
            ->fillOpacity(0.1)
            ->tooltip('1km radius')
        ,
        (new Marker($stPauls))
            ->icon((new Icon('/images/green-marker-icon.png'))
                ->iconAnchor([12, 40])
                ->popupAnchor([0, -45])
                ->shadowUrl('/leaflet/images/marker-shadow.png')
            )
            ->popup('<p><b><a href=\"https://en.wikipedia.org/wiki/St_Paul%27s_Cathedral\" target=\"_blank\">St Paul\'s Cathedral</a></b></p>')
    ))
        ->name("St Paul's Cathedral")
        ->addTo($map)
    ;

    foreach ($churches as $i => $church) {
        $churchLayers[] = ((new Marker($church['location']))
            ->icon((new Icon('/leaflet/images/marker-icon.png'))
                ->iconAnchor([12, 40])
                ->popupAnchor([0, -45])
                ->shadowUrl('/leaflet/images/marker-shadow.png')
            )
            ->popup('<p><a href=\"' . $church['url'] . '\" target=\"_blank\">' . $church['name'] . '</a></p>' . '<p>' . $church['line'] . '</p>')
            ->tooltip('<p><b>' . $church['name'] . '</b> (' . ++$i . ')</p>')
        );
    }

    $churchLayers[] = (new Rectangle([[51.5268, -0.1022], [51.5108, -0.0417]]))
        ->color('#c7632a')
        ->fill(Rectangle::FILL)
        ->fillOpacity(0.2)
        ->stroke(Rectangle::STROKE)
    ;

    $churchesLayerGroup = (new LayerGroup(...$churchLayers))
        ->name('Oranges & Lemons Churches')
        ->addTo($map)
    ;

    $draggable = (new Marker($newgate))
        ->autoPan(Marker::AUTO_PAN)
        ->draggable(Marker::DRAGGABLE)
        ->icon((new Icon('/images/red-marker-icon.png'))
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
        ->overlays($cityLayer, $centreLayerGroup, $churchesLayerGroup, $draggable)
        ->hideSingleBase(Layers::HIDE_SINGLE_BASE)
        ->sortFunction('return n1 > n2 ? -1 : n1 < n2 ? 1 : 0')
        ->sortLayers(Layers::SORT_LAYERS)
        ->addTo($map)
    ;
    ?>
    <?= $map ?>
```

## JavaScript
```js
import {Circle,Control,Icon,LatLng,LatLngBounds,LayerGroup,Map,Marker,Point,Polygon,Popup,Rectangle,TileLayer,Tooltip} from "leaflet"

const leafletMap0=new Map("leaflet-map",{"center":new LatLng(51.5153,-0.0718),"zoom":13})

const leafletTileLayer0=new TileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",{"maxZoom":19,"attribution":"&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors"}).addTo(leafletMap0)
const leafletPolygon0=new Polygon([new LatLng(51.5182,-0.1138),new LatLng(51.5177,-0.1077),new LatLng(51.5207,-0.0975),new LatLng(51.5229,-0.0979),new LatLng(51.5233,-0.0968),new LatLng(51.5228,-0.0968),new LatLng(51.5231,-0.0951),new LatLng(51.5215,-0.0943),new LatLng(51.5216,-0.0934),new LatLng(51.5213,-0.0933),new LatLng(51.5215,-0.0925),new LatLng(51.521,-0.0924),new LatLng(51.5207,-0.0897),new LatLng(51.52,-0.09),new LatLng(51.5188,-0.0862),new LatLng(51.5203,-0.0853),new LatLng(51.5198,-0.0833),new LatLng(51.5208,-0.0817),new LatLng(51.5219,-0.081),new LatLng(51.5215,-0.0786),new LatLng(51.5189,-0.0794),new LatLng(51.519,-0.0781),new LatLng(51.5185,-0.0781),new LatLng(51.5185,-0.0782),new LatLng(51.5181,-0.0778),new LatLng(51.5166,-0.0769),new LatLng(51.5162,-0.0765),new LatLng(51.5152,-0.0749),new LatLng(51.5141,-0.0746),new LatLng(51.5144,-0.074),new LatLng(51.514,-0.0736),new LatLng(51.5112,-0.0729),new LatLng(51.511,-0.0728),new LatLng(51.5103,-0.0728),new LatLng(51.5101,-0.073),new LatLng(51.51,-0.0743),new LatLng(51.5099,-0.0744),new LatLng(51.51,-0.0748),new LatLng(51.5097,-0.0755),new LatLng(51.5099,-0.0757),new LatLng(51.5101,-0.0758),new LatLng(51.5101,-0.0761),new LatLng(51.5105,-0.0762),new LatLng(51.5105,-0.0762),new LatLng(51.5106,-0.0762),new LatLng(51.5105,-0.0769),new LatLng(51.5103,-0.0769),new LatLng(51.5102,-0.0769),new LatLng(51.5101,-0.0777),new LatLng(51.5101,-0.0779),new LatLng(51.5094,-0.0786),new LatLng(51.5095,-0.0788),new LatLng(51.509,-0.079),new LatLng(51.5089,-0.0787),new LatLng(51.5088,-0.0789),new LatLng(51.5088,-0.0787),new LatLng(51.5083,-0.0791),new LatLng(51.5084,-0.0791),new LatLng(51.5083,-0.0792),new LatLng(51.5083,-0.0791),new LatLng(51.5079,-0.0793),new LatLng(51.5079,-0.0793),new LatLng(51.5078,-0.0794),new LatLng(51.5076,-0.0798),new LatLng(51.5069,-0.0802),new LatLng(51.5078,-0.0852),new LatLng(51.5084,-0.0922),new LatLng(51.5093,-0.0959),new LatLng(51.5098,-0.1016),new LatLng(51.5099,-0.107),new LatLng(51.5098,-0.1115),new LatLng(51.5109,-0.1116),new LatLng(51.5118,-0.1116),new LatLng(51.512,-0.1118),new LatLng(51.512,-0.1119),new LatLng(51.5123,-0.1122),new LatLng(51.5123,-0.1121),new LatLng(51.5126,-0.1123),new LatLng(51.5126,-0.1124),new LatLng(51.5127,-0.1126),new LatLng(51.5128,-0.1124),new LatLng(51.5129,-0.1122),new LatLng(51.513,-0.1123),new LatLng(51.5132,-0.1118),new LatLng(51.5137,-0.112),new LatLng(51.5138,-0.1111),new LatLng(51.5162,-0.1122)],{"fill":false,"stroke":true,"color":"#cc33cc"}).addTo(leafletMap0)
const leafletLayerGroup0=new LayerGroup([new Circle(new LatLng(51.5138,-0.0985),{"radius":5000,"color":"#428929","fillOpacity":0.1}).bindTooltip(new Tooltip({"content":"5km radius"})),new Circle(new LatLng(51.5138,-0.0985),{"radius":2500,"color":"#428929","fillOpacity":0.1}).bindTooltip(new Tooltip({"content":"2.5km radius"})),new Circle(new LatLng(51.5138,-0.0985),{"radius":1000,"color":"#428929","fillOpacity":0.1}).bindTooltip(new Tooltip({"content":"1km radius"})),new Marker(new LatLng(51.5138,-0.0985),{"icon":new Icon({"iconUrl":"/images/green-marker-icon.png","iconAnchor":new Point(12,40),"popupAnchor":new Point(0,-45),"shadowUrl":"/leaflet/images/marker-shadow.png"})}).bindPopup(new Popup({"content":"<p><b><a href=\"https://en.wikipedia.org/wiki/St_Paul%27s_Cathedral\" target=\"_blank\">St Paul's Cathedral</a></b></p>"}))]).addTo(leafletMap0)
const leafletLayerGroup1=new LayerGroup([new Marker(new LatLng(51.5114,-0.0869),{"icon":new Icon({"iconUrl":"/leaflet/images/marker-icon.png","iconAnchor":new Point(12,40),"popupAnchor":new Point(0,-45),"shadowUrl":"/leaflet/images/marker-shadow.png"})}).bindPopup(new Popup({"content":"<p><a href=\"https://en.wikipedia.org/wiki/St_Clement%27s,_Eastcheap\" target=\"_blank\">St Clement's, Eastcheap</a></p><p>Oranges and lemons,<br>Say the bells of St. Clement's.</p>"})).bindTooltip(new Tooltip({"content":"<p><b>St Clement's, Eastcheap</b> (1)</p>"})),new Marker(new LatLng(51.5108,-0.0876),{"icon":new Icon({"iconUrl":"/leaflet/images/marker-icon.png","iconAnchor":new Point(12,40),"popupAnchor":new Point(0,-45),"shadowUrl":"/leaflet/images/marker-shadow.png"})}).bindPopup(new Popup({"content":"<p><a href=\"https://en.wikipedia.org/wiki/St_Martin_Orgar\" target=\"_blank\">St Martin's Ongar</a></p><p>You owe me five farthings,<br>Say the bells of St. Martin's.</p>"})).bindTooltip(new Tooltip({"content":"<p><b>St Martin's Ongar</b> (2)</p>"})),new Marker(new LatLng(51.5167,-0.1022),{"icon":new Icon({"iconUrl":"/leaflet/images/marker-icon.png","iconAnchor":new Point(12,40),"popupAnchor":new Point(0,-45),"shadowUrl":"/leaflet/images/marker-shadow.png"})}).bindPopup(new Popup({"content":"<p><a href=\"https://en.wikipedia.org/wiki/St_Sepulchre-without-Newgate\" target=\"_blank\">Holy Sepulchre London, formally St Sepulchre-without-Newgate</a></p><p>When will you pay me?<br>Say the bells at Old Bailey.</p>"})).bindTooltip(new Tooltip({"content":"<p><b>Holy Sepulchre London, formally St Sepulchre-without-Newgate</b> (3)</p>"})),new Marker(new LatLng(51.5268,-0.0772),{"icon":new Icon({"iconUrl":"/leaflet/images/marker-icon.png","iconAnchor":new Point(12,40),"popupAnchor":new Point(0,-45),"shadowUrl":"/leaflet/images/marker-shadow.png"})}).bindPopup(new Popup({"content":"<p><a href=\"https://en.wikipedia.org/wiki/St._Leonard's,_Shoreditch\" target=\"_blank\">St Leonard\'s, Shoreditch</a></p><p>When I grow rich,<br>Say the bells at Shoreditch.</p>"})).bindTooltip(new Tooltip({"content":"<p><b>St Leonard\'s, Shoreditch</b> (4)</p>"})),new Marker(new LatLng(51.5168,-0.0417),{"icon":new Icon({"iconUrl":"/leaflet/images/marker-icon.png","iconAnchor":new Point(12,40),"popupAnchor":new Point(0,-45),"shadowUrl":"/leaflet/images/marker-shadow.png"})}).bindPopup(new Popup({"content":"<p><a href=\"https://en.wikipedia.org/wiki/St_Dunstan's,_Stepney\" target=\"_blank\">St Dunstan\'s, Stepney</a></p><p>When will that be?<br>Say the bells of Stepney.</p>"})).bindTooltip(new Tooltip({"content":"<p><b>St Dunstan\'s, Stepney</b> (5)</p>"})),new Marker(new LatLng(51.5137,-0.0935),{"icon":new Icon({"iconUrl":"/leaflet/images/marker-icon.png","iconAnchor":new Point(12,40),"popupAnchor":new Point(0,-45),"shadowUrl":"/leaflet/images/marker-shadow.png"})}).bindPopup(new Popup({"content":"<p><a href=\"https://en.wikipedia.org/wiki/St_Mary-le-Bow\" target=\"_blank\">St Mary-le-Bow</a></p><p>I do not know,<br>Says the great bell at Bow.</p>"})).bindTooltip(new Tooltip({"content":"<p><b>St Mary-le-Bow</b> (6)</p>"})),new Rectangle(new LatLngBounds(new LatLng(51.5268,-0.1022),new LatLng(51.5108,-0.0417)),{"color":"#c7632a","fill":true,"fillOpacity":0.2,"stroke":true})]).addTo(leafletMap0)
const leafletMarker7=new Marker(new LatLng(51.516,-0.1016),{"autoPan":true,"draggable":true,"icon":new Icon({"iconUrl":"/images/red-marker-icon.png","iconAnchor":new Point(12,40),"shadowUrl":"/leaflet/images/marker-shadow.png"})}).bindTooltip(new Tooltip({"content":"Drag me and see what happens"})).on("dragend",(e)=>{const position=e.target.getLatLng();window.alert("Moved by " + Math.floor(e.distance) + " pixels\nNew position " + position.lat + ", " + position.lng);}).addTo(leafletMap0)
const leafletScale0=new Control.Scale().addTo(leafletMap0)
const leafletLayers0=new Control.Layers({"leafletTileLayer0":leafletTileLayer0},{"City of London":leafletPolygon0,"St Paul's Cathedral":leafletLayerGroup0,"Oranges & Lemons Churches":leafletLayerGroup1,"Draggable Marker":leafletMarker7},{"hideSingleBase":true,"sortFunction":(l1,l2,n1,n2)=>{return n1 > n2 ? -1 : n1 < n2 ? 1 : 0},"sortLayers":true}).addTo(leafletMap0)
```
