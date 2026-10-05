<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet;

use Stringable;

/** Defines a Leaflet event. */
final class Event implements Stringable
{
    public const ONCE = true;
    private const METHOD_ON = 'on';
    private const METHOD_ONCE = 'once';

    /**
     * Create an event.
     * @param string $type A case-sensitive string representing the event type to listen for, e.g. 'click'.
     * @param string $handler The event handler. It receives one parameter - `e`; the event.
     * @param bool $once Whether or the event is handled once or many times; default is many.
     */
    public function __construct(
        private readonly string $type,
        private readonly string $handler,
        private readonly bool $once = false,
    )
    {}

    public function __toString(): string
    {
        return sprintf(
            '.%s("%s",(e)=>{%s})',
            $this->once ? self::METHOD_ONCE : self::METHOD_ON,
            $this->type,
            $this->handler
        );
    }
}