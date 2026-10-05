<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet;

/**
 * An interface for classes amd enums providing objects to be imported in JavaScript.
 *
 * @see ImportTrait
 */
interface Importable
{
    /**
     * The object's JavaScript import name; this is included in the JavaScript `import` statement.
     *
     * For most objects this is the same as the PHP class name.
     * Objects where that is not the case should override this function.
     *
     * @return string The object's JavaScript import name
     */
    public function importName(): string;
}