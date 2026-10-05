<?php

use BeastBytes\Leaflet\Control\Layers;
use BeastBytes\Leaflet\Control\Position;
use BeastBytes\Leaflet\Layer\Raster\TileLayer;
use BeastBytes\Leaflet\Layer\Vector\Circle;

beforeEach(function () {
    $this->tileLayer = new TileLayer('https://{s}.tile.example.com/{z}/{x}/{y}.png');
    $this->circleLayer1 = new Circle([51.501903441006, -0.14060782882038], 100);
    $this->circleLayer2 = new Circle([51.501903441006, -0.14060782882038], 200);
});

test('Layers Control', function () {
    $control = new Layers();

    expect((string) $control)
        ->toBe(sprintf(
            'const %s=new Control.Layers({},{})',
            $control->getId()
        ))
    ;
});

test('Layer Control with layers', function () {
    $tileLayer = $this->tileLayer->name('Tile Layer');
    $circleLayer1 = $this->circleLayer1->name('Circle Layer 1');
    $circleLayer2 = $this->circleLayer2->name('Circle Layer 2');

    $control = (new Layers())
        ->baseLayers($tileLayer)
        ->overlays($circleLayer1,  $circleLayer2)
    ;

    expect((string) $control)
        ->toBe(sprintf('const %s=new Control.Layers({'
            . '"Tile Layer":%s'
        . '},{'
            . '"Circle Layer 1":%s,'
            . '"Circle Layer 2":%s'
        . '})',
            $control->getId(),
            $tileLayer->getId(),
            $circleLayer1->getId(),
            $circleLayer2->getId()
        ))
    ;
});

test('Layers Control with options', function () {
    $tileLayer = $this->tileLayer->name('Tile Layer');
    $circleLayer1 = $this->circleLayer1->name('Circle Layer 1');
    $circleLayer2 = $this->circleLayer2->name('Circle Layer 2');
    $position = Position::cases()[array_rand(Position::cases())];

    $control = (new Layers())
        ->baseLayers($tileLayer)
        ->overlays($circleLayer1, $circleLayer2)
        ->autoZIndex(Layers::AUTO_Z_INDEX)
        ->collapsed(Layers::COLLAPSED)
        ->collapseDelay(250)
        ->hideSingleBase(Layers::HIDE_SINGLE_BASE)
        ->position($position)
        ->sortFunction('return n1 > n2 ? -1 : n1 < n2 ? 1 : 0')
        ->sortLayers(Layers::SORT_LAYERS)
    ;

    expect((string) $control)
        ->toBe(sprintf(
            'const %s=new Control.Layers({'
                . '"Tile Layer":%s'
            . '},{'
                . '"Circle Layer 1":%s,'
                . '"Circle Layer 2":%s'
            . '},{'
                . '"autoZIndex":%s,'
                . '"collapsed":%s,'
                . '"collapseDelay":%s,'
                . '"hideSingleBase":%s,'
                . '"position":%s,'
                . '"sortFunction":%s,'
                . '"sortLayers":%s'
            . '})',
            $control->getId(),
            $tileLayer->getId(),
            $circleLayer1->getId(),
            $circleLayer2->getId(),
            'true',
            'true',
            250,
            'true',
            '"' . strtolower($position->name) . '"',
            '(l1,l2,n1,n2)=>{return n1 > n2 ? -1 : n1 < n2 ? 1 : 0}',
            'true'
        ))
    ;
});