<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet;

/** Provides the ability to set a custom CSS class name on the object. */
trait ClassNameTrait
{
    /**
     * Set a custom CSS class name.
     * For `Icon` it applies to both icon and shadow images.
     * For vector layers it is only applicable when using the SVG renderer.
     * @param string $className Class name.
     * @return self
     * @default null
     */
    public function className(string $className): self
    {
        $new = clone $this;
        $new->options['className'] = $className;
        return $new;
    }
}