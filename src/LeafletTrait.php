<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet;

use ReflectionClass;

/**
 * Implementation of `Leaflet`.
 * Used internally and by plugins.
 * @see Leaflet
 */
trait LeafletTrait
{
    use ImportTrait;

    private const CONST_REGEX = '/const %s\w+=/';
    private const PREFIX = 'leaflet';

    private ?string $id = null;

    /**
     * Returns the object's PHP base class name.
     * @return string Object PHP base class name.
     */
    public function getClassName(): string
    {
        return (new ReflectionClass($this))->getShortName();
    }

    /**
     * Returns the object id.
     * The primary use is to provide a JavaScript variable. Auto generated on read if not set.
     * @return string Object id.
     */
    public function getId(): string
    {
        if (!isset($this->id)) {
            $className = $this->getClassName();

            if (!isset(self::$counters[$className])) {
                self::$counters[$className] = 0;
            }

            $this->id = self::PREFIX . $className . self::$counters[$className]++;
        }

        return $this->id;
    }

    /**
     * @var array<string, int> $counters Counters indexed by class name to ensure all object ids are unique.
     */
    private static array $counters = [];

    /**
     * Removes the JavaScript const declaration from the string representation on an object.
     *
     * Example: 'const leafltPoint0=new Point(0,0)' ==> 'new Point(0,0)'
     *
     * @param string $string The string representation of an object
     * @return string
     */
    protected function noConst(string $string): string
    {
        return preg_replace(sprintf(self::CONST_REGEX, self::PREFIX), '', $string);
    }
}