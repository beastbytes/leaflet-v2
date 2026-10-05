<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\Raster;

use BeastBytes\Leaflet\Layer\InteractiveLayer;
use BeastBytes\Leaflet\Type\LatLngBounds;

/**
 * Represents a video overlay over specific bounds of the map.
 *
 * @link https://leafletjs.com/reference-2.0.0.html#videooverlay
 *
 * @psalm-import-type LatLngBoundsLike from LatLngBounds
 */
final class VideoOverlay extends InteractiveLayer
{
    use ImageOptionsTrait;

    public const AUTOPLAY = true;
    public const LOOP = true;
    public const KEEP_ASPECT_RATIO = true;
    public const MUTED = true;
    public const PLAYS_INLINE = true;

    /**
     * Create a video overlay.
     * @param array|string $video Video Url(s)
     * @param array|LatLngBounds $bounds The bounds of the overlay.
     * @psalm-param LatLngBoundsLike $bounds The bounds of the overlay.
     */
    public function __construct(private readonly array|string $video, private array|LatLngBounds $bounds)
    {
        if (is_array($bounds)) {
            $this->bounds = new LatLngBounds(...$bounds);
        }

        parent::__construct();
    }

    /**
     * Whether the video starts playing automatically when loaded.
     * On some browsers autoplay will only work with muted: true
     * @param bool $autoplay `true` to play the video on load, `false` to manually start.
     * @return self
     * @default true
     * @see VideoOverlay::AUTOPLAY
     */
    public function autoplay(bool $autoplay): self
    {
        $new = clone $this;
        $new->options['autoplay'] = $autoplay;
        return $new;
    }

    /**
     * Whether the video will save aspect ratio after the projection.
     * @param bool $keepAspectRatio `true` to keep the aspect ration, `false` to allow resizing.
     * @return self
     * @default true
     * @see VideoOverlay::KEEP_ASPECT_RATIO
     */
    public function keepAspectRatio(bool $keepAspectRatio): self
    {
        $new = clone $this;
        $new->options['keepAspectRatio'] = $keepAspectRatio;
        return $new;
    }

    /**
     * Whether the video will loop back to the beginning when played.
     * @param bool $loop `true` to loop the video, `false` to play once.
     * @return self
     * @default false
     * @see VideoOverlay::LOOP
     */
    public function loop(bool $loop): self
    {
        $new = clone $this;
        $new->options['loop'] = $loop;
        return $new;
    }

    /**
     * Whether the video starts on mute when loaded.
     * @param bool $muted `true` to mute the video when loaed, `false` not to.
     * @return self
     * @default false
     * @see VideoOverlay::MUTED
     */
    public function muted(bool $muted): self
    {
        $new = clone $this;
        $new->options['muted'] = $muted;
        return $new;
    }

    /**
     * Mobile browsers will play the video right where it is instead of open it up in fullscreen mode.
     * @param bool $playsInline `true` to play inline, `false` to open in fullscreen.
     * @return self
     * @default true
     * @see VideoOverlay::PLAYS_INLINE
     */
    public function playsInline(bool $playsInline): self
    {
        $new = clone $this;
        $new->options['playsInline'] = $playsInline;
        return $new;
    }

    /** @internal */
    public function __toString(): string
    {
        return sprintf(
            'const %s=new VideoOverlay(%s,%s%s)%s',
            $this->getId(),
            is_array($this->video) ? json_encode($this->video) : "'{$this->video}'",
            $this->noConst((string) $this->bounds),
            $this->hasOptions() ? ',' . $this->getOptions() : '',
            $this->_toString(),
        );
    }
}