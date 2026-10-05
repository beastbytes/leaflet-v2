<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\Raster;

use BeastBytes\Leaflet\ClassNameTrait;
use BeastBytes\Leaflet\CrossOrigin;
use BeastBytes\Leaflet\RangeTrait;
use BeastBytes\Leaflet\ZIndexTrait;

trait ImageOptionsTrait
{
    use ClassNameTrait;
    use RangeTrait;
    use ZIndexTrait;

    /**
     * Text for the alt attribute of the image.
     * Useful for accessibility.
     * @param string $alt Alt text.
     * @return self
     * @default ''
     */
    public function alt(string $alt): self
    {
        $new = clone $this;
        $new->options['alt'] = $alt;
        return $new;
    }

    /**
     * Whether the crossOrigin attribute will be added to the image.
     * @param CrossOrigin|false $crossOrigin `true` to add the crossOrigin attribute, `false` not to.
     * @return self
     * @default false
     */
    public function crossOrigin(CrossOrigin|false $crossOrigin): self
    {
        $new = clone $this;
        $new->options['crossOrigin'] = $crossOrigin instanceof CrossOrigin ? $crossOrigin->value : $crossOrigin;
        return $new;
    }

    /**
     * Define how the browser should decode the image.
     * If the image overlay is flickering when being added/removed, set this option to Decoding::sync.
     * @param Decoding $decoding Image decoding.
     * @return self
     * @default Decoding::auto
     */
    public function decoding(Decoding $decoding): self
    {
        $new = clone $this;
        $new->options['decoding'] = $decoding;
        return $new;
    }

    /**
     * Set a URL to an overlay image to show in place of an overlay that failed to load.
     * @param string $errorOverlayUrl URL.
     * @return self
     * @default: ''
     */
    public function errorOverlayUrl(string $errorOverlayUrl): self
    {
        $new = clone $this;
        $new->options['errorOverlayUrl'] = $errorOverlayUrl;
        return $new;
    }

    /**
     * Set the opacity of the image overlay.
     * @param float $opacity Opacity.
     * @return self
     * @default 1.0
     */
    public function opacity(float $opacity): self
    {
        $this->inRange($opacity, 0.0, 1.0, 'opacity');

        $new = clone $this;
        $new->options['opacity'] = $opacity;
        return $new;
    }
}