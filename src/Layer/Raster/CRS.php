<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\Raster;

use BeastBytes\Leaflet\Importable;
use BeastBytes\Leaflet\ImportTrait;

/**
 * Coordinate Reference System.
 *
 * @link https://leafletjs.com/reference-2.0.0.html#crs
 */
enum CRS: string implements Importable
{
    use ImportTrait;

    case Earth = 'CRS.Earth'; // Serves as the base for CRS that are global such that they cover the earth. Can only be used as the base for other CRS and cannot be used directly, since it does not have a code, projection or transformation. distance() returns meters.
    case EPSG3395 = 'CRS.EPSG3395'; // Rarely used by some commercial tile providers. Uses Elliptical Mercator projection.
    case EPSG3857 = 'CRS.EPSG3857'; // The most common CRS for online maps, used by almost all free and commercial tile providers. Uses Spherical Mercator projection. Set in by default in Map's crs option.
    case EPSG4326 = 'CRS.EPSG4326'; // A common CRS among GIS enthusiasts. Uses simple Equirectangular projection. Leaflet complies with the TMS coordinate scheme for EPSG:4326. If you are using a TileLayer with this CRS, ensure that there are two 256x256 pixel tiles covering the whole earth at zoom level zero, and that the tile coordinate origin is (-180,+90), or (-180,-90) for TileLayers with the tms option set.
    case Base = 'CRS.Base'; // Object that defines coordinate reference systems for projecting geographical points into pixel (screen) coordinates and back (and to coordinates in other units for WMS services). See spatial reference system. Leaflet defines the most usual CRSs by default. If you want to use a CRS not defined by default, take a look at the Proj4Leaflet plugin. Note that the CRS instances do not inherit from Leaflet's Class object, and can't be instantiated. Also, new classes can't inherit from them, and methods can't be added to them with the include function.
    case Simple = 'CRS.Simple'; // A simple CRS that maps longitude and latitude into x and y directly. May be used for maps of flat surfaces (e.g. game maps). Note that the y axis should still be inverted (going from bottom to top). distance() returns simple euclidean distance.
}