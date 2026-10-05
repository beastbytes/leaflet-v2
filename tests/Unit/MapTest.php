<?php

use BeastBytes\Leaflet\Event;
use BeastBytes\Leaflet\Layer\Raster\CRS;
use BeastBytes\Leaflet\Layer\Raster\TileProvider;
use BeastBytes\Leaflet\Layer\UI\Marker;
use BeastBytes\Leaflet\Layer\Vector\Circle;
use BeastBytes\Leaflet\Layer\Vector\Renderer\Canvas;
use BeastBytes\Leaflet\Map;
use BeastBytes\Leaflet\Type\Icon;

beforeEach(function () {
    // Reset import classes
    $pam = new ReflectionClass(Map::class);
    $stropmi = $pam->getProperty('imports');
    $stropmi->setValue(null, []);
});

test('Map', function () {
    $lat = random_int(-9000000, 9000000) / 100000;
    $lng = random_int(-18000000, 18000000) / 100000;
    $zoom = random_int(10, 20);

    $map = new Map('map', [$lat, $lng], $zoom);

    expect((string) $map)
        ->toBe(sprintf(
            'import {%s} from "leaflet"'
            . "\n\n"
            . 'const %s=new Map("map",{'
                . '"center":%s,'
                . '"zoom":%s'
            . '})'
            . "\n\n",
            'LatLng,Map',
            $map->getId(),
            sprintf('new LatLng(%s,%s)', $lat, $lng),
            $zoom
        ))
    ;
});

test('Map with Tiles', function () {
    $lat = random_int(-9000000, 9000000) / 100000;
    $lng = random_int(-18000000, 18000000) / 100000;
    $zoom = random_int(10, 20);

    $map = (new Map('map', [$lat, $lng], $zoom))
        ->layers((new TileProvider())->use('OpenStreetMap'))
    ;

    expect((string) $map)
        ->toBe(sprintf(
            'import {%s} from "leaflet"'
            . "\n\n"
            . 'const %s=new Map("map",{'
                . '"center":%s,'
                . '"zoom":%s,'
                . '"layers":[%s]'
            . '})'
            . "\n\n",
            'LatLng,Map,TileLayer',
            $map->getId(),
            sprintf('new LatLng(%s,%s)', $lat, $lng),
            $zoom,
            'new TileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",{'
                . '"maxZoom":19,'
                . '"attribution":"&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors"'
            . '})'
        ))
    ;
});

test('Map with Options', function () {
    $lat = random_int(-9000000, 9000000) / 100000;
    $lng = random_int(-18000000, 18000000) / 100000;
    $zoom = random_int(10, 20);

    $map = (new Map('map', [$lat, $lng], $zoom))
        ->attributionControl(!Map::ATTRIBUTION_CONTROL)
        ->bounceAtZoomLimits(Map::BOUNCE_AT_ZOOM_LIMITS)
        ->boxZoom(Map::BOX_ZOOM)
        ->closePopupOnClick(Map::CLOSE_POPUP_ON_CLICK)
        ->crs(CRS::EPSG4326)
        ->dragging(Map::DRAGGING)
        ->doubleClickZoom(Map::CENTER)
        ->easeLinearity(0.5)
        ->fadeAnimation(Map::FADE_ANIMATION)
        ->inertia(Map::INERTIA)
        ->inertiaDeceleration(9999)
        ->inertiaMaxSpeed(1000)
        ->keyboard(Map::KEYBOARD)
        ->keyboardPanDelta(99)
        ->layers((new TileProvider())->use('OpenStreetMap'))
        ->markerZoomAnimation(Map::MARKER_ZOOM_ANIMATION)
        ->maxBounds([[-45.0, -45.0], [45.0, 45.0]])
        ->maxBoundsViscosity(1.5)
        ->maxZoom(20)
        ->minZoom(2)
        ->pinchZoom(!Map::PINCH_ZOOM)
        ->preferCanvas(Map::PREFER_CANVAS)
        ->renderer(New Canvas())
        ->scrollWheelZoom(!MAP::SCROLL_WHEEL_ZOOM)
        ->tapHold(Map::TAP_HOLD)
        ->tapTolerance(10)
        ->trackResize(Map::TRACK_RESIZE)
        ->transform3DLimit(2**6)
        ->wheelDebounceTime(60)
        ->worldCopyJump(Map::WORLD_COPY_JUMP)
        ->zoomAnimation(Map::ZOOM_ANIMATION)
    ;

    expect((string) $map)
        ->toBe(sprintf(
            'import {CRS,Canvas,LatLng,LatLngBounds,Map,TileLayer} from "leaflet"'
            . "\n\n"
            . 'const %s=new Map("map",{'
                . '"center":%s,'
                . '"zoom":%s,'
                . '"attributionControl":%s,'
                . '"bounceAtZoomLimits":%s,'
                . '"boxZoom":%s,'
                . '"closePopupOnClick":%s,'
                . '"crs":%s,'
                . '"dragging":%s,'
                . '"doubleClickZoom":%s,'
                . '"easeLinearity":%s,'
                . '"fadeAnimation":%s,'
                . '"inertia":%s,'
                . '"inertiaDeceleration":%s,'
                . '"inertiaMaxSpeed":%s,'
                . '"keyboard":%s,'
                . '"keyboardPanDelta":%s,'
                . '"layers":%s,'
                . '"markerZoomAnimation":%s,'
                . '"maxBounds":%s,'
                . '"maxBoundsViscosity":%s,'
                . '"maxZoom":%s,'
                . '"minZoom":%s,'
                . '"pinchZoom":%s,'
                . '"preferCanvas":%s,'
                . '"renderer":%s,'
                . '"scrollWheelZoom":%s,'
                . '"tapHold":%s,'
                . '"tapTolerance":%s,'
                . '"trackResize":%s,'
                . '"transform3DLimit":%s,'
                . '"wheelDebounceTime":%s,'
                . '"worldCopyJump":%s,'
                . '"zoomAnimation":%s'
            . '})'
            . "\n\n",
            $map->getId(),
            sprintf('new LatLng(%s,%s)', $lat, $lng),
            $zoom,
            'false',
            'true',
            'true',
            'true',
            'CRS.EPSG4326',
            'true',
            '"center"',
            '0.5',
            'true',
            'true',
            '9999',
            '1000',
            'true',
            '99',
            '[new TileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",{'
                . '"maxZoom":19,'
                . '"attribution":"&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors"'
            . '})]',
            'true',
            'new LatLngBounds(new LatLng(-45,-45),new LatLng(45,45))',
            '1.5',
            '20',
            '2',
            'false',
            'true',
            'new Canvas()',
            'false',
            'true',
            '10',
            'true',
            '64',
            '60',
            'true',
            'true'
        ))
    ;
});

test('Map with Added Layers', function () {
    $circleColour = '#428929';
    $circleOpacity = 0.1;
    $circleTooltip = '5km radius';
    $iconAnchorX = 12;
    $iconAnchorY = 40;
    $iconShadowUrl = '/leaflet/images/marker-shadow.png';
    $iconUrl = 'leaflet/images/marker-icon.png';
    $markerTooltip = 'Drag me and see what happens';
    $markerEvent = 'dragend';
    $markerEventHandler = 'const position=e.target.getLatLng();window.alert("Moved by " + Math.floor(e.distance) + " pixels\nNew position " + position.lat + ", " + position.lng);';
    $lat = 51.5138;
    $lng = -0.0985;
    $radius = 5000;
    $zoom = 13;

    $map = (new Map('map', [$lat, $lng], $zoom))
        ->layers((new TileProvider())->use('OpenStreetMap'))
    ;

    $circle = (new Circle([$lat, $lng], $radius))
        ->color($circleColour)
        ->fillOpacity($circleOpacity)
        ->tooltip($circleTooltip)
        ->addTo($map)
    ;

    $marker = (new Marker([$lat, $lng]))
        ->autoPan(Marker::AUTO_PAN)
        ->draggable(Marker::DRAGGABLE)
        ->icon(
            (new Icon($iconUrl))
            ->iconAnchor([$iconAnchorX, $iconAnchorY])
            ->shadowUrl($iconShadowUrl)
        )
        ->tooltip($markerTooltip)
        ->events(new Event($markerEvent, $markerEventHandler))
        ->addTo($map)
    ;

    expect((string) $map)
        ->toBe(sprintf(
            'import {%s} from "leaflet"'
            . "\n\n"
            . 'const %s=new Map("map",{'
                . '"center":%s,'
                . '"zoom":%s,'
                . '"layers":[%s]'
            . '})'
            . "\n\n"
            . 'const %s=new Circle(%s,{'
                . '"radius":%s,'
                . '"color":%s,'
                . '"fillOpacity":%s'
            . '})'
            . '.bindTooltip(new Tooltip({"content":%s}))'
            . '.addTo(%s)'
            . "\n"
            . 'const %s=new Marker(%s,{'
                . '"autoPan":%s,'
                . '"draggable":%s,'
                . '"icon":%s'
            . '})'
            . '.bindTooltip(new Tooltip({"content":%s}))'
            . '.on(%s,(e)=>{%s})'
            . '.addTo(%s)',
            'Circle,Icon,LatLng,Map,Marker,Point,TileLayer,Tooltip',
            $map->getId(),
            sprintf('new LatLng(%s,%s)', $lat, $lng),
            $zoom,
            'new TileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",{'
            . '"maxZoom":19,'
            . '"attribution":"&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors"'
            . '})',
            $circle->getId(),
            sprintf('new LatLng(%s,%s)', $lat, $lng),
            $radius,
            "\"$circleColour\"",
            $circleOpacity,
            "\"$circleTooltip\"",
            $map->getId(),
            $marker->getId(),
            sprintf('new LatLng(%s,%s)', $lat, $lng),
            'true',
            'true',
            sprintf(
                'new Icon({'
                    . '"iconUrl":%s,'
                    . '"iconAnchor":%s,'
                    . '"shadowUrl":%s'
                . '})',
                "\"$iconUrl\"",
                sprintf('new Point(%s,%s)', $iconAnchorX, $iconAnchorY),
                "\"$iconShadowUrl\""
            ),
            "\"$markerTooltip\"",
            "\"$markerEvent\"",
            "$markerEventHandler",
            $map->getId()
        ))
    ;
});
