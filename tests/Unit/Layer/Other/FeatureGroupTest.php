<?php

use BeastBytes\Leaflet\Layer\Other\FeatureGroup;
use BeastBytes\Leaflet\Layer\UI\Marker;
use BeastBytes\Leaflet\Layer\Vector\Circle;

beforeEach(function () {
    $this->circle = new Circle([51.501903441006, -0.14060782882038], 100);
    $this->marker = new Marker([51.501903441006, -0.14060782882038]);
    $this->group = new FeatureGroup($this->circle, $this->marker);
});

test('FeatureGroup', function () {
    expect($this->group)
        ->toBeInstanceOf(FeatureGroup::class)
        ->and((string) $this->group)
        ->toBe(sprintf(
            'const %s=new FeatureGroup([%s,%s])',
            $this->group->getId(),
            preg_replace('/const leaflet\w+=/', '', $this->circle),
            preg_replace('/const leaflet\w+=/', '', $this->marker)
        ))
    ;
});

test('FeatureGroup with options', function () {
    $group = $this->group
        ->attribution('Group attribution')
        ->bubblingPointerEvents(FeatureGroup::BUBBLING_POINTER_EVENTS)
        ->interactive(FeatureGroup::INTERACTIVE)
    ;

    expect((string) $group)
        ->toBe(sprintf(
            'const %s=new FeatureGroup([%s,%s],{'
                . '"attribution":%s,'
                . '"bubblingPointerEvents":%s,'
                . '"interactive":%s'
            . '})',
            $group->getId(),
            preg_replace('/const leaflet\w+=/', '', $this->circle),
            preg_replace('/const leaflet\w+=/', '', $this->marker),
            '"Group attribution"',
            'true',
            'true'
        ))
    ;
});