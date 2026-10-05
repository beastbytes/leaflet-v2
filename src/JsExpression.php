<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet;

use JsonSerializable;

/**
 * Denotes an expression as a JavaScript expression.
 * @internal
 */
final class JsExpression implements JsonSerializable
{
    public const JSE ='!JSE!';

    /**
     * @param object|string $expression the JavaScript expression represented by this object
     */
    public function __construct(private object|string $expression)
    {
        if (is_object($expression)) {
            $this->expression = (string) $expression;
        }
    }

    public function jsonSerialize(): string
    {
        return str_replace(
            ['"' . JsExpression::JSE, JsExpression::JSE . '"'],
            ['', ''],
            self::JSE  . $this->expression . self::JSE
        );
    }
}