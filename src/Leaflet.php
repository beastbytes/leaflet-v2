<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet;

/**
 * A type interface implemented by Leaflet objects to be imported.
 * @see LeafletTrait
 */
interface Leaflet extends Importable
{
    public const PACKAGE = 'leaflet';

    /** @return string The Object's PHP base class name */
    public function getClassName(): string;

    /** @return string The Object's JavaScript id */
    public function getId(): string;
}