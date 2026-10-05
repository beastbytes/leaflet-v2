<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Control;

use BeastBytes\Leaflet\Addable;
use BeastBytes\Leaflet\AddableTrait;
use BeastBytes\Leaflet\LeafletTrait;
use BeastBytes\Leaflet\OptionsTrait;
use JsonException;
use Stringable;

/**
 * Base class for controls
 */
abstract class Control implements Addable, Stringable
{
    use AddableTrait;
    use LeafletTrait;
    use OptionsTrait;

    private const IMPORT_NAME = 'Control';

    /**
     * Returns the JavaScript import name.
     * @return string JavaScript import name.
     */
    public function importName(): string
    {
        return self::IMPORT_NAME;
    }

    /**
     * Set the position of the control on the map.
     * @param Position $position Position of the control.
     * @return self
     */
    public function position(Position $position): self
    {
        $new = clone $this;
        $new->options['position'] = $position;
        return $new;
    }

    /**
     * Returns the JavaScript for a control.
     * @return string Leaflet Javascript for the control.
     * @throws JsonException
     * @internal
     */
    public function __toString(): string
    {
        return sprintf(
            'const %s=new Control.%s(%s)%s',
            $this->getId(),
            $this->getClassName(),
            $this->hasOptions() ? $this->getOptions() : '',
            $this->getAddTo()
        );
    }
}