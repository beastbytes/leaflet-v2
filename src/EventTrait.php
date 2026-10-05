<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet;

use BeastBytes\Leaflet\Layer\Layer;

/** Allows attachment of events to the object using the trait. */
trait EventTrait
{
    /**
     * @var Event[] Events
     */
    private array $events = [];

    /**
     * Attach event(s) to an object.
     *
     * If there are multiple events of the same type, the last event takes precedence.
     *
     * @param Event ...$event Event(s) to be attached the object.
     * @return self
     */
    public function events(Event ...$event): self
    {
        $new = clone $this;
        $new->events = array_merge($new->events, $event);
        return $new;
    }

    private function getEvents(): string
    {
        $events = [];

        foreach ($this->events as $event) {
            $events[] = (string) $event;
        }

        return implode('', $events);
    }
}