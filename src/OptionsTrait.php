<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet;

use BackedEnum;
use DateTimeInterface;
use JsonException;
use JsonSerializable;
use stdClass;
use UnitEnum;

/**
 * Provides options for objects.
 * @imternal
 */
trait OptionsTrait
{
    use JsonTrait;

    protected array $options = [];

    /**
     * @throws JsonException
     */
    protected function getOptions(): string
    {
        return $this->jsonEncode($this->options);
    }

    protected function hasOptions(): bool
    {
        return !empty($this->options);
    }
}