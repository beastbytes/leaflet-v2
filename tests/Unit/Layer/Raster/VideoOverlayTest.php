<?php

use BeastBytes\Leaflet\CrossOrigin;
use BeastBytes\Leaflet\Layer\Raster\Decoding;
use BeastBytes\Leaflet\Layer\Raster\VideoOverlay;
use BeastBytes\Leaflet\Type\LatLngBounds;

test('VideoOverlay', function (
    array|string $videoUrl,
    array|LatLngBounds $bounds,
    array $corner1,
    array $corner2
): void {

    $videoOverlay = new VideoOverlay($videoUrl, $bounds);

    expect((string) $videoOverlay)
        ->toBe(sprintf(
            'const %s=new VideoOverlay(%s,new LatLngBounds(new LatLng(%s,%s),new LatLng(%s,%s)))',
            $videoOverlay->getId(),
            is_array($videoUrl) ? json_encode($videoUrl) : "'$videoUrl'",
            $corner1[0],
            $corner1[1],
            $corner2[0],
            $corner2[1]
        ));
    ;
})
    ->with('VideoOverlay Dataset')
;

test('VideoOverlay with options', function (
    array|string $videoUrl,
    array|LatLngBounds $bounds,
    array $corner1,
    array $corner2
): void
{
    $videoOverlay = (new VideoOverlay($videoUrl, $bounds))
        ->alt('a video')
        ->attribution('Video attribution')
        ->autoplay(VideoOverlay::AUTOPLAY)
        ->bubblingPointerEvents(VideoOverlay::BUBBLING_POINTER_EVENTS)
        ->className('video')
        ->crossOrigin(CrossOrigin::Anonymous)
        ->decoding(Decoding::Auto)
        ->errorOverlayUrl('https://example.com/error-overlay.png')
        ->interactive(VideoOverlay::INTERACTIVE)
        ->keepAspectRatio(VideoOverlay::KEEP_ASPECT_RATIO)
        ->loop(VideoOverlay::LOOP)
        ->muted(VideoOverlay::MUTED)
        ->opacity(0.9)
        ->zIndex(5)
    ;

    expect((string) $videoOverlay)
        ->toBe(sprintf(
            'const %s=new VideoOverlay(%s,new LatLngBounds(new LatLng(%s,%s),new LatLng(%s,%s)),{'
                . '"alt":%s,'
                . '"attribution":%s,'
                . '"autoplay":%s,'
                . '"bubblingPointerEvents":%s,'
                . '"className":%s,'
                . '"crossOrigin":%s,'
                . '"decoding":%s,'
                . '"errorOverlayUrl":%s,'
                . '"interactive":%s,'
                . '"keepAspectRatio":%s,'
                . '"loop":%s,'
                . '"muted":%s,'
                . '"opacity":%s,'
                . '"zIndex":%s'
            . '})',
            $videoOverlay->getId(),
            is_array($videoUrl) ? json_encode($videoUrl) : "'$videoUrl'",
            $corner1[0],
            $corner1[1],
            $corner2[0],
            $corner2[1],
            '"a video"',
            '"Video attribution"',
            'true',
            'true',
            '"video"',
            '"anonymous"',
            '"auto"',
            '"https://example.com/error-overlay.png"',
            'true',
            'true',
            'true',
            'true',
            0.9,
            5
        ));
    ;
})
    ->with('VideoOverlay Dataset')
;

dataset('VideoOverlay Dataset', function () {
    $lat1 = random_int(-9000000, 9000000) / 100000;
    $lng1 = random_int(-18000000, 18000000) / 100000;
    $lat2 = random_int(-9000000, 9000000) / 100000;
    $lng2 = random_int(-18000000, 18000000) / 100000;

    $corner1 = [$lat1, $lng1];
    $corner2 = [$lat2, $lng2];

    $videoUrls = [
        'http://example.com/video-overlay.mp4',
        'http://example.com/video-overlay.webm',
    ];

    foreach ([
        'array corners' => [['lat' => $lat1, 'lng' => $lng1], ['lat' => $lat2, 'lng' => $lng2]],
        'list corners' => [[$lat1, $lng1], [$lat2, $lng2]],
        'LatLngBounds' => new LatLngBounds([$lat1, $lng1], [$lat2, $lng2]),
    ] as $name => $bounds) {
        $videoUrl = (bool) (random_int(1, 10) % 2) ? $videoUrls[random_int(0, 1)] : $videoUrls;

        yield $name => compact('videoUrl', 'bounds', 'corner1', 'corner2');
    }
});