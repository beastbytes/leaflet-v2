<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet;

use BeastBytes\Leaflet\Layer\Layer;
use BeastBytes\Leaflet\Layer\Raster\CRS;
use BeastBytes\Leaflet\Layer\Vector\Renderer\Renderer;
use BeastBytes\Leaflet\Type\LatLng;
use BeastBytes\Leaflet\Type\LatLngBounds;
use InvalidArgumentException;
use JsonException;
use Stringable;

/**
 * Represents a Leaflet map.
 * Leaflet objects and plugins are added to the map which is then rendered.
 *
 * @link https://leafletjs.com/reference-2.0.0.html#map
 *
 * @psalm-import-type LatLngLike from LatLng
 * @psalm-import-type LatLngBoundsLike from LatLngBounds
 */
final class Map implements Leaflet, Stringable
{
    use EventTrait;
    use LeafletTrait;
    use OptionsTrait;
    use ZoomTrait;

    public const ATTRIBUTION_CONTROL = true;
    public const BOUNCE_AT_ZOOM_LIMITS = true;
    public const BOX_ZOOM = true;
    public const CENTER = 'center';
    public const CLOSE_POPUP_ON_CLICK = true;
    public const DOUBLE_CLICK_ZOOM = true;
    public const DRAGGING = true;
    public const FADE_ANIMATION = true;
    public const INERTIA = true;
    public const KEYBOARD = true;
    public const MARKER_ZOOM_ANIMATION = true;
    public const PINCH_ZOOM = true;
    public const PREFER_CANVAS = true;
    public const SCROLL_WHEEL_ZOOM = true;
    public const TAP_HOLD = true;
    public const TRACK_RESIZE = true;
    public const WORLD_COPY_JUMP = true;
    public const ZOOM_ANIMATION = true;
    public const ZOOM_CONTROL = true;

    private const CLASSES = ['Map', 'LeafletMap'];

    /**
     * @var Addable[] $objects Objects added to the map
     */
    private array $objects = [];

    /**
     * @var MapClass $class JavaScript map class.
     */
    private static MapClass $class = MapClass::Map;
    /**
     * @var array<string, list<string>> $imports
     */
    private static array $imports = [];

    /**
     * Create a map.
     * @param string $element The ID of the map's DOM element
     * @psalm-param LatLngLike $center Initial geographic centre of the map
     * @param int $zoom The initial map zoom level
     */
    public function __construct(private readonly string $element, array|LatLng $center, int $zoom)
    {
        $this->options['center'] = new JsExpression(is_array($center) ? new LatLng($center) : $center);
        $this->options['zoom'] = $zoom;
        self::import($this);
    }

    /**
     * Add an object to the map.
     * Adding an object automatically imports the required object in JavaScript.
     * @param Addable $object The object to add
     * @param string $importFrom The JavaScript package to import from
     * @return self
     */
    public function add(Addable $object, string $importFrom): self
    {
        self::import($object, $importFrom);
        $this->objects[] = $object;
        return $this;
    }

    /**
     * Whether an attribution control is added to the map by default.
     * @param bool $attributionControl `true` to display an attribution control, or `false`
     * @return self
     * @default true
     * @see Map::ATTRIBUTION_CONTROL
     */
    public function attributionControl(bool $attributionControl): self
    {
        $new = clone $this;
        $new->options['attributionControl'] = $attributionControl;
        return $new;
    }

    /**
     * Whether to zoom beyond min/max zoom then bounce back when pinch-zooming.
     * @param bool $bounceAtZoomLimits `true` to enable, `false` to disable.
     * @return self
     * @default true
     * @see Map::BOUNCE_AT_ZOOM_LIMITS
     */
    public function bounceAtZoomLimits(bool $bounceAtZoomLimits): self
    {
        $new = clone $this;
        $new->options['bounceAtZoomLimits'] = $bounceAtZoomLimits;
        return $new;
    }

    /**
     * Whether the map can be zoomed to a rectangular area specified
     * by dragging the pointer while pressing the shift key.
     * @param bool $boxZoom `true` to enable, `false` to disable.
     * @return self
     * @default true
     * @see Map::BOX_ZOOM
     */
    public function boxZoom(bool $boxZoom): self
    {
        $new = clone $this;
        $new->options['boxZoom'] = $boxZoom;
        return $new;
    }

    /**
     * Whether popups can be closed by clicking on the map.
     * @param bool $closePopupOnClick `true` to enable, `false` to disable.
     * @return self
     * @default true
     * @see Map::CLOSE_POPUP_ON_CLICK
     */
    public function closePopupOnClick(bool $closePopupOnClick): self
    {
        $new = clone $this;
        $new->options['closePopupOnClick'] = $closePopupOnClick;
        return $new;
    }

    /**
     * Set the Coordinate Reference System to use.
     * **Do not use unless certain what it means.**
     * @param CRS $crs The Coordinate Reference System to use.
     * @return self
     * @default CRS.EPSG3857
     * @see CRS
     */
    public function crs(CRS $crs): self
    {
        $new = clone $this;
        Map::import($crs);
        $new->options['crs'] = new JsExpression($crs->value);
        return $new;
    }

    /**
     * Whether the map can be zoomed in by double-clicking on it and zoomed out by double-clicking while holding shift.
     * If passed 'center', double-click zoom will zoom to the centre of the view regardless of where the pointer was.
     * @param bool|string $doubleClickZoom `true` do enable double-click zoom, `false` to disable.
     * @return self
     * @default true
     * @see Map::CENTER
     * @see Map::DOUBLE_CLICK_ZOOM
     */
    public function doubleClickZoom(bool|string $doubleClickZoom): self
    {
        if (is_string($doubleClickZoom) && $doubleClickZoom !== self::CENTER) {
            throw new InvalidArgumentException(sprintf(
                'Invalid value; must be boolean or "%s"',
                self::CENTER,
            ));
        }

        $new = clone $this;
        $new->options['doubleClickZoom'] = $doubleClickZoom;
        return $new;
    }

    /**
     * Whether the map is draggable with pointer or not.
     * @param bool $dragging `true` to enable dragging, `false` to disable.
     * @return self
     * @default true
     * @see Map::DRAGGING
     */
    public function dragging(bool $dragging): self
    {
        $new = clone $this;
        $new->options['dragging'] = $dragging;
        return $new;
    }

    /**
     * Set the `$easeLinearity`
     * @param float $easeLinearity easeLinearity
     * @return self
     * @default 0.2
     */
    public function easeLinearity(float $easeLinearity): self
    {
        $new = clone $this;
        $new->options['easeLinearity'] = $easeLinearity;
        return $new;
    }

    /**
     * Whether the tile fade animation is enabled.
     * @param bool $fadeAnimation `true` to enable, `false` to disable.
     * @return self
     * @default enabled in all browsers that support CSS Transitions except Android.
     * @see Map::FADE_ANIMATION
     */
    public function fadeAnimation(bool $fadeAnimation): self
    {
        $new = clone $this;
        $new->options['fadeAnimation'] = $fadeAnimation;
        return $new;
    }

    /**
     * Whether panning of the map will have an inertia effect where the map builds momentum
     * while dragging and continues moving in the same direction for some time.
     * Feels especially nice on touch devices.
     * @param bool $inertia `true` to enable, `false` to disable.
     * @return self
     * @default true
     * @see Map::INERTIA
     */
    public function inertia(bool $inertia): self
    {
        $new = clone $this;
        $new->options['inertia'] = $inertia;
        return $new;
    }

    /**
     * The rate with which the inertial movement slows down, in pixels/second.
     * @param int $inertiaDeceleration Inertial deceleration.
     * @return self
     * @default 3000
     */
    public function inertiaDeceleration(int $inertiaDeceleration): self
    {
        $new = clone $this;
        $new->options['inertiaDeceleration'] = $inertiaDeceleration;
        return $new;
    }

    /**
     * Max speed of the inertial movement, in pixels/second.
     * @param int $inertiaMaxSpeed Inertia max speed.
     * @return self
     * @default Infinity
     */
    public function inertiaMaxSpeed(int $inertiaMaxSpeed): self
    {
        $new = clone $this;
        $new->options['inertiaMaxSpeed'] = $inertiaMaxSpeed;
        return $new;
    }

    /**
     * Whether the map can be navigated with keyboard arrows and +/- keys.
     * @param bool $keyboard `true` to enable, `false` to disable.
     * @return self
     * @default true
     * @see Map::KEYBOARD
     */
    public function keyboard(bool $keyboard): self
    {
        $new = clone $this;
        $new->options['keyboard'] = $keyboard;
        return $new;
    }

    /**
     * Number of pixels to pan when pressing an arrow key.
     * @param int $keyboardPanDelta Amount of pixels.
     * @return self
     * @default 80
     */
    public function keyboardPanDelta(int $keyboardPanDelta): self
    {
        $new = clone $this;
        $new->options['keyboardPanDelta'] = $keyboardPanDelta;
        return $new;
    }

    /**
     * Layer(s) and/or layer ids that will be added to the map initially.
     * @param Layer|string ...$layers Map initial layers.
     * @return self
     * @default layers
     */
    public function layers(Layer|string ...$layers): self
    {
        $new = clone $this;

        foreach ($layers as $layer) {
            $new->options['layers'][] = new JsExpression($layer);
        }

        return $new;
    }

    /**
     * Whether markers animate their zoom with the zoom animation, or disappear for the length of the animation.
     * @param bool $markerZoomAnimation `true` to animate, `false` to hide during zoom animation.
     * @return self
     * @default Enabled in all browsers that support CSS Transitions except Android.
     * @see Map::MARKER_ZOOM_ANIMATION
     */
    public function markerZoomAnimation(bool $markerZoomAnimation): self
    {
        $new = clone $this;
        $new->options['markerZoomAnimation'] = $markerZoomAnimation;
        return $new;
    }

    /**
     * Restrict the view to the given geographical bounds,
     * bouncing the user back if the user tries to pan outside the view.
     * To set the restriction dynamically, use the setMaxBounds() method in JavaScript.
     * @param array|LatLngBounds $maxBounds Geographical bounds
     * @return self
     * @default null
     */
    public function maxBounds(array|LatLngBounds $maxBounds): self
    {
        $new = clone $this;
        $new->options['maxBounds'] = new JsExpression(
            is_array($maxBounds)
            ? new LatLngBounds(...$maxBounds)
            : $maxBounds,
        );
        return $new;
    }

    /**
     * If maxBounds is set, this option will control how solid the bounds are when dragging the map around.
     * The default value of 0.0 allows the user to drag outside the bounds at normal speed,
     * higher values will slow down map dragging outside bounds,
     * and 1.0 makes the bounds fully solid, preventing the user from dragging outside the bounds.
     * @param float $maxBoundsViscosity Max bounds viscosity.
     * @return self
     * @default 0.0
     */
    public function maxBoundsViscosity(float $maxBoundsViscosity): self
    {
        $new = clone $this;
        $new->options['maxBoundsViscosity'] = $maxBoundsViscosity;
        return $new;
    }

    /**
     * Whether the map can be zoomed by touch-dragging with two fingers.
     * If passed 'center', it will zoom to the centre of the view regardless of where the touch events (fingers) were.
     * @param bool|string $pinchZoom `true` to enable, `false` to discable, or 'center'.
     * @return self
     * @default Enabled for touch-capable web browsers
     * @see Map::CENTER
     * @see Map::PINCH_ZOOM
     */
    public function pinchZoom(bool|string $pinchZoom): self
    {
        if (is_string($pinchZoom) && $pinchZoom !== self::CENTER) {
            throw new InvalidArgumentException(sprintf(
                'Invalid value; must be boolean or "%s"',
                self::CENTER,
            ));
        }

        $new = clone $this;
        $new->options['pinchZoom'] = $pinchZoom;
        return $new;
    }

    /**
     * Whether Paths should be rendered on a Canvas renderer.
     * @param bool $preferCanvas `true` to use a Canvas renderer, `false` to use an SVG renderer.
     * @return self
     * @default SVG renderer
     * @see Map::PREFER_CANVAS
     */
    public function preferCanvas(bool $preferCanvas): self
    {
        $new = clone $this;
        $new->options['preferCanvas'] = $preferCanvas;
        return $new;
    }

    /**
     * The default renderer for drawing vector layers on the map.
     * @param Renderer $renderer Default renderer.
     * @return self
     * @default SVG or Canvas depending on browser support.
     */
    public function renderer(Renderer $renderer): self
    {
        self::import($renderer);

        $new = clone $this;
        $new->options['renderer'] = new JsExpression($renderer);
        return $new;
    }

    /**
     * Whether the map can be zoomed by using the mouse wheel.
     * If passed 'center', it will zoom to the centre of the view regardless of where the pointer was.
     * @param bool|string $scrollWheelZoom `true` to enable, `false` to disable`, or `center`.
     * @return self
     * @default true
     * @see Map::CENTER
     * @see Map::SCROLL_WHEEL_ZOOM
     */
    public function scrollWheelZoom(bool|string $scrollWheelZoom): self
    {
        if (is_string($scrollWheelZoom) && $scrollWheelZoom !== self::CENTER) {
            throw new InvalidArgumentException(sprintf(
                'Invalid value; must be boolean or "%s"',
                self::CENTER,
            ));
        }

        $new = clone $this;
        $new->options['scrollWheelZoom'] = $scrollWheelZoom;
        return $new;
    }

    /**
     * Simulation of contextmenu event.
     * @param bool $tapHold `true` to enable, `false` to disable.
     * @return self
     * @default `true` for mobile Safari
     * @see Map::TAP_HOLD
     */
    public function tapHold(bool $tapHold): self
    {
        $new = clone $this;
        $new->options['tapHold'] = $tapHold;
        return $new;
    }

    /**
     * The maximum number of pixels a user can shift their finger during touch for it to be considered a valid tap.
     * @param int $tapTolerance Number of pixels.
     * @return self
     * @default 15
     */
    public function tapTolerance(int $tapTolerance): self
    {
        $new = clone $this;
        $new->options['tapTolerance'] = $tapTolerance;
        return $new;
    }

    /**
     * Whether the map automatically handles browser window resize to update itself.
     * @param bool $trackResize `true` to enable, `false` to disable.
     * @return self
     * @default true
     * @see Map::TRACK_RESIZE
     */
    public function trackResize(bool $trackResize): self
    {
        $new = clone $this;
        $new->options['trackResize'] = $trackResize;
        return $new;
    }

    /**
     * Defines the maximum size of a CSS translation transform.
     * The default value should not be changed unless a web browser positions layers
     * in the wrong place after doing a large panBy.
     * @param int $transform3DLimit Maximum size of a CSS translation transform.
     * @return self
     * @default 2^23
     */
    public function transform3DLimit(int $transform3DLimit): self
    {
        $new = clone $this;
        $new->options['transform3DLimit'] = $transform3DLimit;
        return $new;
    }

    /**
     * How often, in milliseconds, a wheel can fire an event.
     * @param int $wheelDebounceTime Number of milliseconds.
     *
     * @return self
     * @default 40
     */
    public function wheelDebounceTime(int $wheelDebounceTime): self
    {
        $new = clone $this;
        $new->options['wheelDebounceTime'] = $wheelDebounceTime;
        return $new;
    }

    /**
     * How many scroll pixels (as reported by DomEvent.getWheelDelta) mean a change of one full zoom level.
     * Smaller values will make wheel-zooming faster, and vice versa.
     * @param int $wheelPxPerZoomLevel Number of pixels.
     * @return self
     * @default 60
     */
    public function wheelPxPerZoomLevel(int $wheelPxPerZoomLevel): self
    {
        $new = clone $this;
        $new->options['wheelPxPerZoomLevel'] = $wheelPxPerZoomLevel;
        return $new;
    }

    /**
     * Whether to jump tp the original copy of the world when panned to another copy.
     * If enabled all overlays, e.g. markers, vector layers, etc., remain visible.
     * @param bool $worldCopyJump `true` to enable, `false` to disable.
     *
     * @return self
     * @default false
     * @see Map::WORLD_COPY_JUMP
     */
    public function worldCopyJump(bool $worldCopyJump): self
    {
        $new = clone $this;
        $new->options['worldCopyJump'] = $worldCopyJump;
        return $new;
    }

    /**
     * Whether the map zoom animation is enabled.
     * @param bool $zoomAnimation `true` to enable, `false` to disable.
     *
     * @return self
     * @default Enabled in all browsers that support CSS Transitions except Android.
     * @see Map::ZOOM_ANIMATION
     */
    public function zoomAnimation(bool $zoomAnimation): self
    {
        $new = clone $this;
        $new->options['zoomAnimation'] = $zoomAnimation;
        return $new;
    }

    /**
     * The maximum zoom level difference to animate the zoom.
     * @param int $zoomAnimationThreshold Zoom difference.
     * @return self
     * @default 4
     */
    public function zoomAnimationThreshold(int $zoomAnimationThreshold): self
    {
        $new = clone $this;
        $new->options['zoomAnimationThreshold'] = $zoomAnimationThreshold;
        return $new;
    }

    /**
     * Whether a zoom control is added to the map by default.
     * @param bool $zoomControl `true` to add a zoom control, `false` not to.
     * @return self
     * @default true
     * @see Map::ZOOM_CONTROL
     */
    public function zoomControl(bool $zoomControl): self
    {
        $new = clone $this;
        $new->options['zoomControl'] = $zoomControl;
        return $new;
    }

    /**
     * How much the map's zoom level will change after a zoomIn(), zoomOut(), pressing + or - on the keyboard,
     * or using the zoom controls.
     * Values smaller than 1 (e.g. 0.5) allow for greater granularity.
     * @param float $zoomDelta Controls
     * @return self
     * @default 1.0
     */
    public function zoomDelta(float $zoomDelta): self
    {
        $new = clone $this;
        $new->options['zoomDelta'] = $zoomDelta;
        return $new;
    }

    /**
     * Forces the map's zoom level to always be a multiple of this,
     * particularly right after a fitBounds() or a pinch-zoom.
     * By default, the zoom level snaps to the nearest integer;
     * lower values (e.g. 0.5 or 0.1) allow for greater granularity.
     * A value of 0 means the zoom level will not be snapped after fitBounds or a pinch-zoom.
     * @param float $zoomSnap Zoom snap.
     * @return self
     * @default 1.0
     */
    public function zoomSnap(float $zoomSnap): self
    {
        $new = clone $this;
        $new->options['zoomSnap'] = $zoomSnap;
        return $new;
    }

    /**
     * @param MapClass $class Set the JavaScript class name to use for maps.
     * @return void
     */
    public static function class(MapClass $class): void
    {
        self::$class = $class;
    }

    /**
     * Add an object to be imported in JavaScript
     * @param Importable $object Object to import.
     * @param string $from Package to import from.
     * @return void
     */
    public static function import(Importable $object, string $from = Leaflet::PACKAGE): void
    {
        if (!array_key_exists($from, self::$imports) || !in_array($object->importName(), self::$imports[$from])) {
            self::$imports[$from][] = $object->importName();
        }
    }

    private function getImports(): string
    {
        $_imports = [];

        foreach (self::$imports as $from => $imports) {
            if ($from === Leaflet::PACKAGE
                && !in_array('Control', $imports)
                && ($this->options['attributionControl'] === true || $this->options['zoomControl'] === true)
            ) {
                $_imports[] = 'Control';
            }

            sort($imports);

            $_imports[] = sprintf('import {%s} from "%s"', implode(',', $imports), $from);
        }

        return implode("\n", $_imports);
    }

    /**
     * @throws JsonException
     * @internal
     */
    public function __toString(): string
    {
        return sprintf(
            '%s'
            . "\n\n"
            . 'const %s=new %s("%s",%s)%s'
            . "\n\n"
            . '%s',
            $this->getImports(),
            $this->getId(),
            self::$class->name,
            $this->element,
            $this->getOptions(),
            $this->getEvents(),
            $this->getObjects(),
        );
    }

    private function getObjects(): string
    {
        $objects = [];

        foreach ($this->objects as $object) {
            $objects[] = (string) $object;
        }

        return implode("\n", $objects);
    }
}