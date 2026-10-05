<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\UI;

use JsonSerializable;

enum Direction implements JsonSerializable
{
    case Auto;
    case Bottom;
    case Center;
    case Left;
    case Right;
    case Top;

    /** @internal */
    public function jsonSerialize(): string
    {
        return strtolower($this->name);
    }
}