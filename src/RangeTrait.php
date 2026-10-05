<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet;

use InvalidArgumentException;

/**
 * Provides a method to check a value is in the valid range.
 * @internal
 */
trait RangeTrait
{
    /**
     * Checks a value is in the valid range.
     * Can check for `min` <= `value` <= `max`, `value` >= `min`, and `value` <= `max`.
     *
     * @param float|int $value Value to check.
     * @param float|int|null $min Minimum valid value. If `null`, `value` must be <= `max`.
     * @param float|int|null $max Mamimum valid value. If `null`, `value` must be >= `min`.
     * @param string $name Name of parameter being checked.
     * @return void
     */
    protected function inRange(float|int $value, float|int|null $min, float|int|null $max, string $name): void
    {
        if ($min === null && $value > $max) {
            throw new InvalidArgumentException("`$name` can not be greater than $max; $value given.");
        }

        if ($max === null && $value < $min) {
            throw new InvalidArgumentException("`$name` can not be less than $min; $value given.");
        }

        if ($min !== null && $max !==null && ($value < $min || $value > $max)) {
            throw new InvalidArgumentException("`$name` must be between $min and $max; $value given.");
        }
    }
}