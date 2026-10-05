<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet;

use JsonSerializable;

/**
 * Defines options for the `crossorigin` HTML attribute.
 *
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Attributes/crossorigin `crossorigin`
 */
enum CrossOrigin: string implements JsonSerializable
{
    case Anonymous = 'anonymous';
    case UseCredentials = 'use-credentials';

    /** @internal */
    public function jsonSerialize(): string
    {
        return $this->value;
    }
}