# Leaflet V2 PHP Demo

This demo shows a [Leaflet V2](https://leafletjs.com/reference-2.0.0.html) map created in PHP using
[Oranges and Lemons](https://en.wikipedia.org/wiki/Oranges_and_Lemons), a traditional English nursery rhyme,
to demonstrate many of Leaflet&#39;s features.
The map has an [OpenStreetMap](https://www.openstreetmap.org) tile layer, vector layers, UI layers, events, and controls.
It has markers (UI layers) for the churches in the nursery rhyme
&ndash; these have tooltips (hover) and popups (click) &ndash; in a bounding rectangle (vector),
a green marker on St Paul's Cathedral with circles (vector layers) at 1, 2.5, and 5km radius,
a red marker initially placed at the site of Newgate Prison (where debtors were imprisoned)
that can be dragged to demonstrate events, and a polygon (vector) showing the City of London boundary.
It also has controls; zoom, scale, attribution, and a layers control that controls the visibility of the various layers.

## Oranges and Lemons

[Oranges and Lemons](https://en.wikipedia.org/wiki/Oranges_and_Lemons) is a traditional English nursery rhyme.
It refers to the bells of several churches that are within or close to the City of London.
The earliest known printed version dates from 1744, but the rhyme is believed to be much older.

::: info Oranges and Lemons
Oranges and lemons,<br>
Say the bells of St. Clement&#39;s.

You owe me five farthings,<br>
Say the bells of St. Martin&#39;s.

When will you pay me?<br>
Say the bells at Old Bailey.

When I grow rich,<br>
Say the bells at Shoreditch.

When will that be?<br>
Say the bells of Stepney.

I do not know,<br>
Says the great bell at Bow.

Here comes a candle to light you to bed,<br>
And here comes a chopper to chop off your head!<br>
Chip chop chip chop the last man is dead.
:::

::: tip Disputed Churches
Some suggest that the "bells of St Clement&#39;s" is [St Clement Danes](https://en.wikipedia.org/wiki/St_Clement_Danes)
on Aldwych &ndash; whose bells play the tune every day at 9 am, noon, 3pm and 6pm,
and that the "bells of St Martin&#39;s" is 
[St Martin-in-the-Fields](https://en.wikipedia.org/wiki/St_Martin-in-the-Fields) on Trafalgar Square.
However, the [London Museum](https://www.londonmuseum.org.uk/visit/families/rhymes-in-time/oranges-and-lemons/)
states that they are St Clement&#39;s, Eastcheap (in Clement&#39;s Lane)
and St Martin&#39;s Ongar, which was in Martin Lane; only the tower survives, the church having been destroyed in
[the Great Fire of London](https://en.wikipedia.org/wiki/Great_Fire_of_London). These seem far more likely to be the
churches the rhyme refers to as they are both within the City of London boundary
and close to the docks where citrus fruits were unloaded; the demo shows these.
:::

## Map

<div id="leaflet-map"></div>

<script setup>
import { onMounted } from 'vue';

onMounted(() => {
    import('../assets/leaflet/leaflet.js').then((module) => {
        const leafletMap0=new module.Map("leaflet-map",{"center":new module.LatLng(51.5153,-0.0718),"zoom":13});        
        const leafletTileLayer0=new module.TileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",{"maxZoom":19,"attribution":"&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors"}).addTo(leafletMap0);
        const leafletPolygon0=new module.Polygon([new module.LatLng(51.5182,-0.1138),new module.LatLng(51.5177,-0.1077),new module.LatLng(51.5207,-0.0975),new module.LatLng(51.5229,-0.0979),new module.LatLng(51.5233,-0.0968),new module.LatLng(51.5228,-0.0968),new module.LatLng(51.5231,-0.0951),new module.LatLng(51.5215,-0.0943),new module.LatLng(51.5216,-0.0934),new module.LatLng(51.5213,-0.0933),new module.LatLng(51.5215,-0.0925),new module.LatLng(51.521,-0.0924),new module.LatLng(51.5207,-0.0897),new module.LatLng(51.52,-0.09),new module.LatLng(51.5188,-0.0862),new module.LatLng(51.5203,-0.0853),new module.LatLng(51.5198,-0.0833),new module.LatLng(51.5208,-0.0817),new module.LatLng(51.5219,-0.081),new module.LatLng(51.5215,-0.0786),new module.LatLng(51.5189,-0.0794),new module.LatLng(51.519,-0.0781),new module.LatLng(51.5185,-0.0781),new module.LatLng(51.5185,-0.0782),new module.LatLng(51.5181,-0.0778),new module.LatLng(51.5166,-0.0769),new module.LatLng(51.5162,-0.0765),new module.LatLng(51.5152,-0.0749),new module.LatLng(51.5141,-0.0746),new module.LatLng(51.5144,-0.074),new module.LatLng(51.514,-0.0736),new module.LatLng(51.5112,-0.0729),new module.LatLng(51.511,-0.0728),new module.LatLng(51.5103,-0.0728),new module.LatLng(51.5101,-0.073),new module.LatLng(51.51,-0.0743),new module.LatLng(51.5099,-0.0744),new module.LatLng(51.51,-0.0748),new module.LatLng(51.5097,-0.0755),new module.LatLng(51.5099,-0.0757),new module.LatLng(51.5101,-0.0758),new module.LatLng(51.5101,-0.0761),new module.LatLng(51.5105,-0.0762),new module.LatLng(51.5105,-0.0762),new module.LatLng(51.5106,-0.0762),new module.LatLng(51.5105,-0.0769),new module.LatLng(51.5103,-0.0769),new module.LatLng(51.5102,-0.0769),new module.LatLng(51.5101,-0.0777),new module.LatLng(51.5101,-0.0779),new module.LatLng(51.5094,-0.0786),new module.LatLng(51.5095,-0.0788),new module.LatLng(51.509,-0.079),new module.LatLng(51.5089,-0.0787),new module.LatLng(51.5088,-0.0789),new module.LatLng(51.5088,-0.0787),new module.LatLng(51.5083,-0.0791),new module.LatLng(51.5084,-0.0791),new module.LatLng(51.5083,-0.0792),new module.LatLng(51.5083,-0.0791),new module.LatLng(51.5079,-0.0793),new module.LatLng(51.5079,-0.0793),new module.LatLng(51.5078,-0.0794),new module.LatLng(51.5076,-0.0798),new module.LatLng(51.5069,-0.0802),new module.LatLng(51.5078,-0.0852),new module.LatLng(51.5084,-0.0922),new module.LatLng(51.5093,-0.0959),new module.LatLng(51.5098,-0.1016),new module.LatLng(51.5099,-0.107),new module.LatLng(51.5098,-0.1115),new module.LatLng(51.5109,-0.1116),new module.LatLng(51.5118,-0.1116),new module.LatLng(51.512,-0.1118),new module.LatLng(51.512,-0.1119),new module.LatLng(51.5123,-0.1122),new module.LatLng(51.5123,-0.1121),new module.LatLng(51.5126,-0.1123),new module.LatLng(51.5126,-0.1124),new module.LatLng(51.5127,-0.1126),new module.LatLng(51.5128,-0.1124),new module.LatLng(51.5129,-0.1122),new module.LatLng(51.513,-0.1123),new module.LatLng(51.5132,-0.1118),new module.LatLng(51.5137,-0.112),new module.LatLng(51.5138,-0.1111),new module.LatLng(51.5162,-0.1122)],{"fill":false,"stroke":true,"color":"#cc33cc"}).addTo(leafletMap0);
        const leafletLayerGroup0=new module.LayerGroup([new module.Circle(new module.LatLng(51.5138,-0.0985),{"radius":5000,"color":"#428929","fillOpacity":0.1}).bindTooltip(new module.Tooltip({"content":"5km radius"})),new module.Circle(new module.LatLng(51.5138,-0.0985),{"radius":2500,"color":"#428929","fillOpacity":0.1}).bindTooltip(new module.Tooltip({"content":"2.5km radius"})),new module.Circle(new module.LatLng(51.5138,-0.0985),{"radius":1000,"color":"#428929","fillOpacity":0.1}).bindTooltip(new module.Tooltip({"content":"1km radius"})),new module.Marker(new module.LatLng(51.5138,-0.0985),{"icon":new module.Icon({"iconUrl":"/leaflet/images/green-marker-icon.png","iconAnchor":new module.Point(12,40),"popupAnchor":new module.Point(0,-45),"shadowUrl":"/leaflet/leaflet/images/marker-shadow.png"})}).bindPopup(new module.Popup({"content":"<p><b><a href=\"https://en.wikipedia.org/wiki/St_Paul%27s_Cathedral\" target=\"_blank\">St Paul's Cathedral</a></b></p>"}))]).addTo(leafletMap0);
        const leafletLayerGroup1=new module.LayerGroup([new module.Marker(new module.LatLng(51.5114,-0.0869),{"icon":new module.Icon({"iconUrl":"/leaflet/leaflet/images/marker-icon.png","iconAnchor":new module.Point(12,40),"popupAnchor":new module.Point(0,-45),"shadowUrl":"/leaflet/leaflet/images/marker-shadow.png"})}).bindPopup(new module.Popup({"content":"<p><a href=\"https://en.wikipedia.org/wiki/St_Clement%27s,_Eastcheap\" target=\"_blank\">St Clement's, Eastcheap</a></p><p>Oranges and lemons,<br>Say the bells of St. Clement's.</p>"})).bindTooltip(new module.Tooltip({"content":"<p><b>St Clement's, Eastcheap</b> (1)</p>"})),new module.Marker(new module.LatLng(51.5108,-0.0876),{"icon":new module.Icon({"iconUrl":"/leaflet/leaflet/images/marker-icon.png","iconAnchor":new module.Point(12,40),"popupAnchor":new module.Point(0,-45),"shadowUrl":"/leaflet/leaflet/images/marker-shadow.png"})}).bindPopup(new module.Popup({"content":"<p><a href=\"https://en.wikipedia.org/wiki/St_Martin_Orgar\" target=\"_blank\">St Martin's Ongar</a></p><p>You owe me five farthings,<br>Say the bells of St. Martin's.</p>"})).bindTooltip(new module.Tooltip({"content":"<p><b>St Martin's Ongar</b> (2)</p>"})),new module.Marker(new module.LatLng(51.5167,-0.1022),{"icon":new module.Icon({"iconUrl":"/leaflet/leaflet/images/marker-icon.png","iconAnchor":new module.Point(12,40),"popupAnchor":new module.Point(0,-45),"shadowUrl":"/leaflet/leaflet/images/marker-shadow.png"})}).bindPopup(new module.Popup({"content":"<p><a href=\"https://en.wikipedia.org/wiki/St_Sepulchre-without-Newgate\" target=\"_blank\">Holy Sepulchre London, formally St Sepulchre-without-Newgate</a></p><p>When will you pay me?<br>Say the bells at Old Bailey.</p>"})).bindTooltip(new module.Tooltip({"content":"<p><b>Holy Sepulchre London, formally St Sepulchre-without-Newgate</b> (3)</p>"})),new module.Marker(new module.LatLng(51.5268,-0.0772),{"icon":new module.Icon({"iconUrl":"/leaflet/leaflet/images/marker-icon.png","iconAnchor":new module.Point(12,40),"popupAnchor":new module.Point(0,-45),"shadowUrl":"/leaflet/leaflet/images/marker-shadow.png"})}).bindPopup(new module.Popup({"content":"<p><a href=\"https://en.wikipedia.org/wiki/St._Leonard's,_Shoreditch\" target=\"_blank\">St Leonard\'s, Shoreditch</a></p><p>When I grow rich,<br>Say the bells at Shoreditch.</p>"})).bindTooltip(new module.Tooltip({"content":"<p><b>St Leonard\'s, Shoreditch</b> (4)</p>"})),new module.Marker(new module.LatLng(51.5168,-0.0417),{"icon":new module.Icon({"iconUrl":"/leaflet/leaflet/images/marker-icon.png","iconAnchor":new module.Point(12,40),"popupAnchor":new module.Point(0,-45),"shadowUrl":"/leaflet/leaflet/images/marker-shadow.png"})}).bindPopup(new module.Popup({"content":"<p><a href=\"https://en.wikipedia.org/wiki/St_Dunstan's,_Stepney\" target=\"_blank\">St Dunstan\'s, Stepney</a></p><p>When will that be?<br>Say the bells of Stepney.</p>"})).bindTooltip(new module.Tooltip({"content":"<p><b>St Dunstan\'s, Stepney</b> (5)</p>"})),new module.Marker(new module.LatLng(51.5137,-0.0935),{"icon":new module.Icon({"iconUrl":"/leaflet/leaflet/images/marker-icon.png","iconAnchor":new module.Point(12,40),"popupAnchor":new module.Point(0,-45),"shadowUrl":"/leaflet/leaflet/images/marker-shadow.png"})}).bindPopup(new module.Popup({"content":"<p><a href=\"https://en.wikipedia.org/wiki/St_Mary-le-Bow\" target=\"_blank\">St Mary-le-Bow</a></p><p>I do not know,<br>Says the great bell at Bow.</p>"})).bindTooltip(new module.Tooltip({"content":"<p><b>St Mary-le-Bow</b> (6)</p>"})),new module.Rectangle(new module.LatLngBounds(new module.LatLng(51.5268,-0.1022),new module.LatLng(51.5108,-0.0417)),{"color":"#c7632a","fill":true,"fillOpacity":0.2,"stroke":true})]).addTo(leafletMap0);
        const leafletMarker7=new module.Marker(new module.LatLng(51.516,-0.1016),{"autoPan":true,"draggable":true,"icon":new module.Icon({"iconUrl":"/leaflet/images/red-marker-icon.png","iconAnchor":new module.Point(12,40),"shadowUrl":"/leaflet/leaflet/images/marker-shadow.png"})}).bindTooltip(new module.Tooltip({"content":"Drag me and see what happens"})).on("dragend",(e)=>{const position=e.target.getLatLng();window.alert("Moved by " + Math.floor(e.distance) + " pixels\nNew Module.position " + position.lat + ", " + position.lng);}).addTo(leafletMap0);
        const leafletScale0=new module.Control.Scale().addTo(leafletMap0);
        const leafletLayers0=new module.Control.Layers({"leafletTileLayer0":leafletTileLayer0},{"City of London":leafletPolygon0,"St Paul's Cathedral":leafletLayerGroup0,"Oranges & Lemons Churches":leafletLayerGroup1,"Draggable Marker":leafletMarker7},{"hideSingleBase":true,"sortFunction":(l1,l2,n1,n2)=>{return n1 > n2 ? -1 : n1 < n2 ? 1 : 0},"sortLayers":true}).addTo(leafletMap0);
    })
})
</script>

[Code for the map](code)