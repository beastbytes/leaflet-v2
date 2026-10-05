<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet;

use ReflectionClass;

/**
 * Implementation of `Importable`.
 * @see Importable
 */
trait ImportTrait
{
    /**
     * The object's JavaScript import name; this is included in the JavaScript `import` statement.
     * @return string The object's JavaScript import name
     */
    public function importName(): string
    {
        return (new ReflectionClass($this))->getShortName();
    }
}