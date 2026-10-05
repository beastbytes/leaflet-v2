<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Type;

use InvalidArgumentException;

/**
 * Represents a given latitude and longitude coordinate, measured in degrees, and optionally an altitude in metres.
 * The coordinates are based on the {@link https://en.wikipedia.org/wiki/World_Geodetic_System#WGS84 WGS84 (EPSG:4326) standard}.
 *
 * @link https://leafletjs.com/reference-2.0.0.html#latlng
 *
 * @psalm-type LatLngArray = array{lat: float, lng: float, alt?: float}|array{lat: float, lon:float, alt?: float}|list{0: float, 1: float, 2?: float}
 * @psalm-type LatLngLike = LatLngArray|LatLng
 */
final class LatLng extends Type
{
    public const EXCEPTION_MESSAGE = 'Expected (LatLngArray, null, null) or (float, float, ?float)';

    /**
     * Create a LatLng.
     * @param LatLngArray|float $lat Latitude or an array of latitude and longitude, and optionally altitude.
     * @param float|null $lng Longitude. Ignored if `$lat` is array.
     * @param float|null $alt Altitude. Ignored if `$lat` is array.
     */
    public function __construct(private array|float $lat, private ?float $lng = null, private ?float $alt = null)
    {
        if (is_array($lat)) {
            if (array_is_list($lat)) {
                if (count($lat) === 2 && is_float($lat[0]) && is_float($lat[1])) {
                    $this->lat = $lat[0];
                    $this->lng = $lat[1];
                } elseif (
                    count($lat) === 3
                    && is_float($lat[0])
                    && is_float($lat[1])
                    && is_float($lat[2])
                ) {
                    $this->lat = $lat[0];
                    $this->lng = $lat[1];
                    $this->alt = $lat[2];
                }
            } elseif (
                (count($lat) === 2 || count($lat) === 3)
                && key_exists('lat', $lat) && is_float($lat['lat'])
            ) {
                if (key_exists('lng', $lat) && is_float($lat['lng'])) {
                    $this->lng = $lat['lng'];
                } elseif (key_exists('lon', $lat) && is_float($lat['lon'])) {
                    $this->lng = $lat['lon'];
                } else {
                    throw new InvalidArgumentException(self::EXCEPTION_MESSAGE);
                }

                if (count($lat) === 3) {
                    if (key_exists('alt', $lat) && is_float($lat['alt'])) {
                        $this->alt = $lat['alt'];
                    } else {
                        throw new InvalidArgumentException(self::EXCEPTION_MESSAGE);
                    }
                }

                $this->lat = $lat['lat'];
            } else {
                throw new InvalidArgumentException(self::EXCEPTION_MESSAGE);
            }
        } elseif (is_null($lng)) {
            throw new InvalidArgumentException(self::EXCEPTION_MESSAGE);
        }

        parent::__construct();
    }

    /** @internal */
    public function __toString(): string
    {
        return sprintf(
            'const %s=new LatLng(%s,%s%s)',
            $this->getId(),
            $this->lat,
            $this->lng,
            (is_numeric($this->alt) ? ",{$this->alt}" : ''),
        );
    }
}