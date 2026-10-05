<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\UI;

use BeastBytes\Leaflet\ClassNameTrait;
use BeastBytes\Leaflet\Layer\InteractiveLayer;

/** Base class for div based UI elements, i.e. Popups and Tooltips */
abstract class DivOverlay extends InteractiveLayer
{
    use ClassNameTrait;

    /**
     * Set the popup/tooltip content.
     * @param string $content Popup/Tooltip content
     * @return self
     */
    public function content(string $content): self
    {
        $new = clone $this;
        $new->options['content'] = $content;
        return $new;
    }
}