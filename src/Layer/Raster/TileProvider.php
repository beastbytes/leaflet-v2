<?php

declare(strict_types=1);

namespace BeastBytes\Leaflet\Layer\Raster;

/**
 * Defines tile providers that can be used to load and display map tiles.
 *
 * Port of @link(https://github.com/leaflet-extras/leaflet-providers Leaflet Providers)
 *
 * @psalm-type tileProvider = array<string, array{url: string, options: array<string, mixed>, variants?: array<string, array{url: string, options: array<string, mixed>}|string>}>
 */
final class TileProvider
{
    public const FORCE_HTTP = true;

    private const ATTRIBUTION_PATTERN = '/\{attribution.(\w*)}/';
    private const TILE_PROVIDERS = 'tileProviders.php';

    private static array $tileProviders = [];

    /**
     * Use and format a Tile Provider.
     * @param string $name Name of the tile provider. Variants are specified using 'dot' format, e.g. OpenStreetMap.HOT
     * @param array $options Options for the tile provider.
     * Use to specify options that don't have a default value, e.g. API keys
     * @param bool $forceHttp Whether to force HTTP only if URL is protocol-relative. By default, HTTPS is tried first.
     * @param tileProvider|string|null $tileProviders An array of tile providers indexed by name,
     * a string that is the path to a file that returns such an array, or null to use the default tile providers.
     * @return TileLayer
     */
    public static function use(
        string $name,
        array $options = [],
        bool $forceHttp = false,
        array|string|null $tileProviders = null,
    ): TileLayer
    {
        self::getProviders($tileProviders);

        $name = explode('.', $name);

        /** @var string $url */
        $url = self::$tileProviders[$name[0]]['url'];
        $tileProviderOptions = self::$tileProviders[$name[0]]['options'];

        if (isset($name[1])) {
            /** @var array{url: string, variant: array}|string $variant */
            $variant = self::$tileProviders[$name[0]]['variants'][$name[1]];

            if (is_string($variant)) {
                $tileProviderOptions['variant'] = $variant;
            } else {
                if (isset($variant['url'])) {
                    /** @var string $url */
                    $url = $variant['url'];
                }

                if (isset($variant['options'])) {
                    $tileProviderOptions = array_merge($tileProviderOptions, $variant['options']);
                }
            }
        }

        $options = array_merge($tileProviderOptions, $options);

        // Force http if required
        if ($forceHttp && str_starts_with($url, '//')) {
            $url = 'http:' . $url;
        }

        // Replace attribution placeholders
        $options['attribution'] = str_replace(
            '"',
            '\\"',
            self::replaceAttribution($options['attribution']),
        );

        foreach ($options as $key => $value) {
            if (str_contains($url, '{' . $key . '}')) {
                $url = str_replace('{' . $key . '}', $value, $url);
                unset($options[$key]);
            }
        }

        $tile = new TileLayer($url);

        foreach ($options as $key => $value) {
            if (method_exists($tile, $key)) {
                $tile = $tile->$key($value);
            }
        }

        return $tile;
    }

    /**
     * Recursively replaces placeholders in the attribution with values from the top level provider attribution.
     * @param string $attribution The attribution containing placeholders to replace
     * @return string The attribution with placeholders replaced
     */
    private static function replaceAttribution(string $attribution): string
    {
        if (str_contains($attribution, '{attribution.')) {
            $matches = [];
            preg_match(self::ATTRIBUTION_PATTERN, $attribution, $matches);

            $attribution = preg_replace(
                self::ATTRIBUTION_PATTERN,
                self::replaceAttribution(self::$tileProviders[$matches[1]]['options']['attribution']),
                $attribution,
            );
        }

        return $attribution;
    }

    /**
     * @param tileProvider|string|null $tileProviders An array of tile providers indexed by name,
     * a string that is the path to a file that returns such an array, or null to use the default tile providers.
     * or a path to a file that contains an array of tile providers. Default is the local tile providers file.
     */
    private static function getProviders(array|string|null $tileProviders = null): void
    {
        /** @psalm-ignore UnresolvableInclude */
        self::$tileProviders = match (get_debug_type($tileProviders)) {
            'array' => $tileProviders,
            'string' => require $tileProviders,
            'null' => require __DIR__ . DIRECTORY_SEPARATOR . self::TILE_PROVIDERS,
        };
    }
}